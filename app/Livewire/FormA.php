<?php

namespace App\Livewire;

class FormA extends _BaseForm
{
    // Form A Fields
    public $ref;
    public $refUuid = "6e15efd8-c1d9-4718-b07a-f0162536bee8";
    public $contractingParty;
    public $contractingPartyUuid = "36c79ea1-f50e-461f-b6bc-9cee98e53c75";
    public $name;
    public $nameUuid = "e521746c-df4b-4a79-bf1f-b02e40102b14";
    public $dateAndPlaceOfBirth;
    public $dateAndPlaceOfBirthUuid = "7b95cc9c-f543-4fa1-a192-db9d4521480c";
    public $nationality;
    public $nationalityUuid = "18c8a010-25fe-4609-82ee-9850d043d3d5";
    public $actualAddress;
    public $actualAddressUuid = "7e95f369-1baa-4d12-b20d-267a9d527600";
    public $checkboxOption1;
    public $checkboxOption1Uuid = "6de6513d-36aa-4c01-a4eb-a0451427d039";
    public $checkboxOption2;
    public $checkboxOption2Uuid = "9a6fbfc3-c537-4a1e-905a-ca244ee40407";
    public $checkboxOption3;
    public $checkboxOption3Uuid = "e8814672-264c-49da-8853-fb614bf867d4";
    public $date;
    public $dateUuid = "d948aa8a-f0e6-4c14-865b-38139e42b1b7";

    public function mount($customerUuid = null, $formId = null)
    {
        $this->formid = $formId ? $formId : "3fb03234-a8d9-4e5c-b301-403ea1519551";

        parent::initialize("Form A", $customerUuid);
    }

    public function submit() {
        $rules = [
            'ref' => 'required',
            'contractingParty' => 'required',
            'name' => 'required',
            'dateAndPlaceOfBirth' => 'required',
            'nationality' => 'required',
            'actualAddress' => 'required',
            'date' => 'required',
        ];

        $this->validate($rules);

        parent::updateFormData();
    }

    public function render()
    {
        return view('livewire.form-a');
    }
}
