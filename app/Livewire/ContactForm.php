<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\FormField;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormSubmitted;
use App\Mail\ContactFormSubmittedToSuper;
use App\Mail\ClientAccepted;
use App\Mail\ClientAssignedToRM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;


class ContactForm extends Component
{
    protected $formid = "fb6bd8ef-55f4-4df8-97fb-6bc319bbdf8c";

    public $activeTab = 'individual';
    public $lastName;
    public $firstName;
    public $legalEntityName;
    public $website;
    public $email;
    public $phoneNumber;
    public $country;
    public $message = '';
    public $interests = [];
    public $selectedRM;
    public $user;
    public $rmUsers;

    protected $rules = [
        'email' => 'required|email',
        'phoneNumber' => 'required',
        'country' => 'required',
        // 'message' => 'required',
        //  'interests' => 'array',
        // Reglas específicas según la pestaña activa
        'lastName' => 'required_if:activeTab,individual|min:2',
        'firstName' => 'required_if:activeTab,individual|min:2',
        'legalEntityName' => 'required_if:activeTab,legalEntity|min:2',
        'website' => 'required_if:activeTab,legalEntity|url',
    ];
    
    public function mount($uuid = null)
    {
        $this->rmUsers = User::where('type', 1)->orderBy('name')->get();
        $this->selectedRM = $this->rmUsers->first()->id;

        if ($uuid) {
            $this->user = User::where('uuid', $uuid)->first();
            if ($this->user->rm_id) {
                $this->selectedRM = $this->user->rm_id;
            }

            $this->email = $this->user->email;

            $this->activeTab = $this->user->individual ? 'individual' : 'legalEntity';

            FormField::where('user_id', $this->user->id)
                ->where('form_id', $this->formid)
                ->get()
                ->each(function ($field) {
                    if ($field->field_name == 'interests') {
                        $this->{$field->field_name} = json_decode($field->value, true);
                    }
                    else {
                        $this->{$field->field_name} = $field->value;
                    }
                    // if (json_decode($field->value, true) && json_decode($field->value, true) === 'array') {
                    //     $this->{$field->field_name} = json_decode($field->value, true);
                    // } else {
                    //     $this->{$field->field_name} = $field->value;
                    // }
                    // $this->{$field->field_name} = $field->field_type === 'array' ? json_decode($field->value, true) : $field->value;
                });
        }

    }

    public function submit()
    {
        $rules = [
            'email' => 'required|email|unique:users,email',
            'phoneNumber' => 'required',
            'country' => 'required',
            // 'message' => 'required',
            'interests' => 'array',
        ];
    
        if ($this->activeTab === 'legalEntity') {
            $rules['legalEntityName'] = 'required|min:2';
            $rules['website'] = 'required|url';
        } else {
            $rules['firstName'] = 'required|min:2';
            $rules['lastName'] = 'required|min:2';
        }
    
        $this->validate($rules);

        if (!$this->user) {
            $this->user = User::create([
                'name' => ($this->activeTab === 'individual') ? $this->firstName . ' ' . $this->lastName : $this->legalEntityName,
                'email' => $this->email,
                'password' => Hash::make(Str::random(10)),
                'state' => 0,
                'type' => 0,
                'individual' => $this->activeTab === 'individual',
            ]);
        }

        Log::info('Usuario logueado:' . auth()->id());

        $fieldsToInsert = [
            // ['field_id', 'field_name', $this->propertyName, 'field_type'],
            ['0b919fa8-15ad-4b70-8f4d-4cc093ad9b3c', 'phoneNumber', $this->phoneNumber, 'int'],
            ['7435b6d3-770f-406f-bfdf-115f92864584', 'country', $this->country, 'string'],
            ['5de60d19-29ae-4b80-9c4f-fda7db655419', 'message', $this->message, 'string'],
            ['9eac8e35-1dc7-4053-b470-adf7501ea348', 'interests', $this->interests, 'array'],
        ];

        if ($this->activeTab === 'legalEntity') {
            $fieldsToInsert[] = ['7f2735b5-c902-4302-b1da-7fac3a971a1d', 'legalEntityName', $this->legalEntityName, 'string'];
            $fieldsToInsert[] = ['d3eafafb-345c-4f92-8e99-239277e9a142', 'website', $this->website, 'string'];
        } else {
            $fieldsToInsert[] = ['b978d99a-64a1-43f4-b18e-eaf29d0fa646', 'firstName', $this->firstName, 'string'];
            $fieldsToInsert[] = ['26c1cda4-5925-4914-b78a-9324ad12df00', 'lastName', $this->lastName, 'string'];
        }

        foreach ($fieldsToInsert as $field) {
            FormField::updateOrCreate(
                [
                    // Atributos para buscar
                    'user_id' => $this->user->id, // O `auth()->id()`, asumiendo que el usuario está autenticado
                    'form_id' => $this->formid,
                    'field_id' => $field[0],
                ],
                [
                    // Atributos para actualizar o crear
                    'field_name' => $field[1],
                    'value' => (is_array($field[2]) ? json_encode($field[2]) : $field[2]) ?? '',
                ]
            );
        }

        $this->user->state = 10;
        $this->user->save();

        Mail::to($this->user->email)->bcc('nesgo@protonmail.com')->send(new ContactFormSubmitted());

        foreach(User::where('type', User::SUPERUSER)->get() as $super) {
            Mail::to($super->email)->send(new ContactFormSubmittedToSuper($this->user));
        }

        return redirect()->route('contact-form-response');

        // session()->flash('message', 'Formulario enviado con éxito.');

        // Lógica para manejar los datos del formulario...

        // $this->reset(); // Opcional: resetear el formulario
    }

    public function accept()
    {
        $user = User::where('uuid', $this->user->uuid)->first();
        if ($user) {
            $user->state = 30;
            $user->save();
        }

        Mail::to($user->email)->send(new ClientAccepted($user));

        session()->flash('message', 'Client accepted successfully.');

        return redirect()->route('dashboard');
    }

    public function reject()
    {
        $user = User::where('uuid', $this->user->uuid)->first();
        if ($user) {
            $user->state = -1;
            $user->save();
        }

        session()->flash('message', 'Client rejected successfully.');

        return redirect()->route('dashboard');
    }

    public function assign() {
        $user = User::where('uuid', $this->user->uuid)->first();
        if ($user) {
            $user->rm_id = $this->selectedRM;
            $user->state = 20;
            $user->save();

            $rm = User::where('id', $this->selectedRM)->first();
            if ($rm) {
                Mail::to($rm->email)->send(new ClientAssignedToRM($user));
            }

            session()->flash('message', 'Client assigned successfully.');
        }

        return redirect()->route('dashboard');
    }

    public function switchTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

