<?php

namespace App\Livewire;

class FormK extends _BaseForm
{
    // Form A Fields
    public $ref;
    public $refUuid = "7c627591-3672-4967-aa20-a4bf8aedf2f9";
    public $contractingParty;
    public $contractingPartyUuid = "154c09a5-f7b1-4022-b6eb-6396913122dc";
    public $entityType;
    public $entityTypeUuid = "8558f406-b539-4a52-bf01-9a4c640e21e0";
    public $optionContractType;
    public $optionContractTypeUuid = "78147180-ff69-4e68-a55b-91692762c7eb";
    public $arrayName = [];
    public $arrayNameUuid = "aaaf5ef2-2b47-40ee-b611-92d5f4d6e5b3";
    public $arrayDateAndPlaceOfBirth = [];
    public $arrayDateAndPlaceOfBirthUuid = "2552209f-5dc5-4b5b-8426-bbb6021a44da";
    public $arrayNationality = [];
    public $arrayNationalityUuid = "7b2cd3a2-ad6b-4323-ae4e-2825c5fd548d";
    public $arrayActualAddress = [];
    public $arrayActualAddressUuid = "a18b100e-638d-4916-bf3d-95cc7b2c4301";
    public $option1;
    public $option1Uuid = "426dcf49-10f6-4de3-9ee3-3703bae6e04c";
    public $option1Details;
    public $option1DetailsUuid = "f79eb745-a4fd-40ae-9cce-e9ca765a2ad9";
    public $date;
    public $dateUuid = "1d824e32-fcce-4400-b723-68e546ef78ac";
    public $signature;
    public $signatureUuid = "c847b05f-f417-441a-a6c5-1ac9a7c0856a";

    public function mount($customerUuid = null, $formId = null)
    {
        $this->formid = $formId ? $formId : "7d60be7e-eef0-4819-a5ec-4483c0b0b81c";

        parent::initialize("Form A", $customerUuid);

        if (count($this->arrayName) < 1) {
            $this->arrayName = ["", ""];
            $this->arrayDateAndPlaceOfBirth = ["", ""];
            $this->arrayNationality = ["", ""];
            $this->arrayActualAddress = ["", ""];
        }
    }

    public function addContractFields() {
        $this->arrayName[] = "";
        $this->arrayDateAndPlaceOfBirth[] = "";
        $this->arrayNationality[] = "";
        $this->arrayActualAddress[] = "";
    }

    public function deleteContractFields($key) {
        unset($this->arrayName[$key]);
        unset($this->arrayDateAndPlaceOfBirth[$key]);
        unset($this->arrayNationality[$key]);
        unset($this->arrayActualAddress[$key]);
    }

    public function submit() {
        $rules = [
            'ref' => 'required',
            'contractingParty' => 'required',
            'entityType' => 'required',
            'optionContractType' => 'required',
            'arrayName' => 'required',
            'arrayDateAndPlaceOfBirth' => 'required',
            'arrayNationality' => 'required',
            'arrayActualAddress' => 'required',
            'option1' => 'required',
        ];

        if ($this->option1 == "Yes") {
            $rule['option1Details'] = 'required';
        }

        $this->validate($rules);

        parent::updateFormData();
    }

    public function render()
    {
        return view('livewire.form-k');
    }
}
