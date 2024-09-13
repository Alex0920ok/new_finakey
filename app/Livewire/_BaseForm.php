<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\FormField;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class _BaseForm extends Component
{
    public $formid = "";
    public $customer;
    public $isRejectModalVisible = false;
    public $rejectReason = "";
    public $isPDF = false;

    public $submitMessage = "Success!";
    public $submitRedirect = "/";
    public $acceptMessage = "Accepted!";
    public $acceptRedirect = "/";
    public $rejectMessage = "Rejected";
    public $rejectRedirect = "/";

    protected function initialize($formName = "Form", $customerUuid = null)
    {
        if ($customerUuid) {
            $this->customer = User::where('uuid', $customerUuid)->first();
            $this->submitMessage = "$formName submitted.";
            $this->submitRedirect = $this->customer->onboardingRoute();
            $this->acceptMessage = "$formName Accepted.";
            $this->acceptRedirect = $this->customer->onboardingRoute();
            $this->rejectMessage = "$formName Rejected";
            $this->rejectRedirect = $this->customer->onboardingRoute();

            FormField::where('user_id', $this->customer->id)
                ->where('form_id', $this->formid)
                ->get()
                ->each(function ($field) {
                    if (str_starts_with($field->field_name, "checkbox")) {
                        $this->{$field->field_name} = boolval($field->value);
                    }
                    else if(str_starts_with($field->field_name, "array")) {
                        $this->{$field->field_name} = json_decode($field->value, true);
                    } else {
                        $this->{$field->field_name} = $field->value;
                    }
                });
        }
    }

    protected function updateFormData()
    {
        $properties = get_object_vars($this);
        $uuidProperties = array_filter(array_keys($properties), function($key) {
            return substr($key, -4) === 'Uuid';
        });
        foreach ($uuidProperties as $uuidPropertyName) {
            $propertyName = substr($uuidPropertyName, 0, -4);
            if (!property_exists($this, $propertyName))
                continue;
            $field_id = $this->$uuidPropertyName;
            $value = $this->$propertyName;

            FormField::updateOrCreate(
                [
                    // Atributos para buscar
                    'user_id' => $this->customer->id, // O `auth()->id()`, asumiendo que el usuario está autenticado
                    'form_id' => $this->formid,
                    'field_id' => $field_id,
                ],
                [
                    // Atributos para actualizar o crear
                    'field_name' => $propertyName,
                    'value' => (is_array($value) ? json_encode($value) : $value) ?? '',
                    'rm_id' => null,
                    'rm_modified_at' => null,
                    'state' => 1,
                ]
            );
        }

        // Mail::to($this->user->email)->bcc('nesgo@protonmail.com')->send(new ContactFormSubmitted());

        session()->flash('message', $this->submitMessage);

        return redirect()->to($this->submitRedirect);
    }

    public function accept()
    {
        if (!in_array(auth()->user()->type, [1, 2, 3])) {
            abort(403, 'Access denied');
        }

        $updates = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->formid)
            ->update([
                'rm_id' => auth()->id(),
                'rm_modified_at' => now(),
                'state' => 2,
                'reject_reason' => '',
            ]);

        Log::info('Accept updates: ' . $updates);

        // Mail::to($user->email)->send(new ClientAccepted($user));

        session()->flash('message', $this->acceptMessage);

        return redirect()->to($this->acceptRedirect);
    }

    public function reject()
    {
        if (!in_array(auth()->user()->type, [1, 2, 3])) {
            abort(403, 'Access denied');
        }

        $updates = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->formid)
            ->update([
                'rm_id' => auth()->id(),
                'rm_modified_at' => now(),
                'state' => -1,
                'reject_reason' => $this->rejectReason,
            ]);

        Log::info('Reject updates: ' . $updates);

        session()->flash('message', $this->rejectMessage);

        return redirect()->to($this->rejectRedirect);
    }

    public function switchIsRejectModalVisible()
    {
        $this->isRejectModalVisible = !$this->isRejectModalVisible;
    }

}
