<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use App\Models\User;
use App\Models\FormField;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class _BaseOnboarding extends Component
{
    use WithFileUploads;

    public $formid = "";
    public $customerUuid;
    public $customer;

    public $kycFormUuid = "4fe15c5a-0c0e-4236-811d-58ddb6014ada";
    public $kycFormState = 0;
    public $kycRejectReason = "";

    public $formAUuid = "3fb03234-a8d9-4e5c-b301-403ea1519551";
    public $formAState = 0;
    public $formARejectReason = "";

    public $formTaxConfirmUuid = "12a24bf6-de9d-4e32-ae5e-dd41b29db70a";
    public $formTaxConfirmState = 0;
    public $formTaxConfirmRejectReason = "";

    // -------------------- FORM TO COMPLETE BY OTHER GROUP -------------------
    public $formKUuid = "7d60be7e-eef0-4819-a5ec-4483c0b0b81c";
    public $formKState = 0;
    public $formKRejectReason = "";

    public $formTUuid = "3076d3ad-2716-48df-a731-3159414909f3";
    public $formTState = 0;
    public $formTRejectReason = "";

    public $formSUuid = "f689071c-823a-41a2-aa53-09c3cc06b811";
    public $formSState = 0;
    public $formSRejectReason = "";

    public $kycFormCorporateUuid = "c1d1911e-1f6c-4179-8bfe-3482e63d42fe";
    public $kycFormCorporateState = 0;
    public $kycFormCorporateRejectReason = "";

    // -------------------- FORM TO COMPLETE BY RM -------------------
    public $formKYCRMUuid = "6924bcdd-5d1b-4a57-a539-5341ac58df22";
    public $formAMLUuid = "39efc6bc-4400-4aa3-a789-bab9592b6a86";
    public $formMandateUuid = "09f645e4-8be1-4d42-ae9d-79854c6160b8";

    public function initialize($formId, $customerUuid = null)
    {
        if ($customerUuid !== null)
            $this->customerUuid = $customerUuid;
        else
            $this->customerUuid = Auth::user()->uuid;

        $this->formid = $formId;

        $this->customer = User::where('uuid', $this->customerUuid)->first();

        $kycForm = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->kycFormUuid)
            ->first();
        if ($kycForm) {
            $this->kycFormState = $kycForm->state;
            $this->kycRejectReason = $kycForm->reject_reason;
        }

        $formA = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->formAUuid)
            ->first();
        if ($formA) {
            $this->formAState = $formA->state;
            $this->formARejectReason = $formA->reject_reason;
        }

        $formTaxConfirm = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->formTaxConfirmUuid)
            ->first();
        if ($formTaxConfirm) {
            $this->formTaxConfirmState = $formTaxConfirm->state;
            $this->formTaxConfirmRejectReason = $formTaxConfirm->reject_reason;
        }

        $formK = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->formKUuid)
            ->first();
        if ($formK) {
            $this->formKState = $formK->state;
            $this->formKRejectReason = $formK->reject_reason;
        }

        $formT = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->formTUuid)
            ->first();
        if ($formT) {
            $this->formTState = $formT->state;
            $this->formTRejectReason = $formT->reject_reason;
        }

        $formS = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->formSUuid)
            ->first();
        if ($formS) {
            $this->formSState = $formS->state;
            $this->formSRejectReason = $formS->reject_reason;
        }

        $kycFormCorporate = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->kycFormCorporateUuid)
            ->first();
        if ($kycFormCorporate) {
            $this->kycFormCorporateState = $kycFormCorporate->state;
            $this->kycFormCorporateRejectReason = $kycFormCorporate->reject_reason;
        }

    }

    public function uploadDocumentFile($file, $fileUuid, $fieldName)
    {
       $existingFile = FormField::where('user_id', auth()->id())
            ->where('form_id', $this->formid)
            ->where('field_id', $fileUuid)
            ->first();
        $existingFileName = $existingFile ? $existingFile->value : null;

        // Handle the case where a file was uploaded...
        $fileNameUuid = \Illuminate\Support\Str::uuid();
        $fileName = $fileNameUuid . '.' . $file->getClientOriginalExtension();
        $file->storeAs('documents', $fileName);

        FormField::updateOrCreate(
            [
                // Atributos para buscar
                'user_id' => auth()->id(), // O `auth()->id()`, asumiendo que el usuario está autenticado
                'form_id' => $this->formid,
                'field_id' => $fileUuid,
            ],
            [
                // Atributos para actualizar o crear
                'field_name' => $fieldName,
                'value' => $fileName,
                'state' => 1,
            ]
        );

        if ($existingFileName) {
            Storage::disk('local')->delete('documents/' . $existingFileName);
        }

        return $fileName;
    }

    protected function acceptDocument($documentUuid) {
        $FormField = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->formid)
            ->where('field_id', $documentUuid)
            ->first();

        if ($FormField) {
            $FormField->state = 2;
            $FormField->reject_reason = '';
            $FormField->save();
        }
    }

    public function rejectDocument($documentUuid, $reason) {
        $FormField = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->formid)
            ->where('field_id', $documentUuid)
            ->first();

        if ($FormField) {
            $FormField->state = -1;
            $FormField->reject_reason = $reason;
            $FormField->save();
        }
    }

    function exportPDF($formId, $viewName, $formName)
    {
        $data = array();
        FormField::where('user_id', $this->customer->id)
                ->where('form_id', $formId)
                ->get()
                ->each(function ($field) use (&$data) {
                    if (str_starts_with($field->field_name, "checkbox")) {
                        $data[$field->field_name] = boolval($field->value);
                    }
                    else if(str_starts_with($field->field_name, "array")) {
                        $data[$field->field_name] = json_decode($field->value, true);
                    } else {
                        $data[$field->field_name] = $field->value;
                    }
                });

        $data['isPDF'] = true;
        $data['isRejectModalVisible'] = false;
        $data['customerUuid'] = $this->customerUuid;
        $data['viewName'] = $viewName;

        $pdf = PDF::loadView('pdf.generic', $data)->setPaper('a4')->setBasePath(public_path());

        return response()->streamDownload(function () use($pdf) {
            echo  $pdf->stream();
        }, "$formName.pdf");
    }
}
