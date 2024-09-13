<?php

namespace App\Livewire;

class FormTaxConfirm extends _BaseForm
{
    public $vehicleName;
    public $vehicleNameUuid = "da77cc28-d981-4908-a009-be305650bb38";
    // public $detail;
    // public $detailUuid = "4cc3ae16-9aa2-4cdd-988c-df545d3a31ff";
    public $fullName;
    public $fullNameUuid = "23170baa-74ac-4570-b18c-29aa1cb2a4ed";
    public $fullAddress;
    public $fullAddressUuid = "8374b2f5-ebbd-44d6-a1b6-3304a2e76b18";
    public $selectCapacity;
    public $selectCapacityUuid = "0a92c309-af66-48ad-b0a0-b5de280acc67";
    public $trustName;
    public $trustNameUuid = "37f99b6f-6005-4bec-b3f5-5a034135c892";

    public $checkbox1;
    public $checkbox1Uuid = "ae71a001-4993-4ffb-94ea-98fd01c70604";
    public $beneficialName;
    public $beneficialNameUuid = "7e9d3a63-6a69-47b1-8819-ff6afd494026";

    public $checkbox2;
    public $checkbox2Uuid = "7fed79b1-0dc0-4b67-9322-0e56ddc5b847";
    public $beneficialName2;
    public $beneficialName2Uuid = "c7502d77-fe8f-490d-8071-4ecd0d1a4d8e";
    public $taxCountry;
    public $taxCountryUuid = "43a5da5f-dc83-48b4-85e0-f41bb8ebd2fb";
    public $tin;
    public $tinUuid = "ae020749-8932-4f54-ad81-9d7c8166e335";


    public $checkbox3_1;
    public $checkbox3_1Uuid = "7394c6b6-5fbe-4d77-b9fe-bb7e84e5402f";
    public $checkbox3_2;
    public $checkbox3_2Uuid = "91f883ff-131f-4942-89db-b60dfcdf94cb";
    public $checkbox3_3;
    public $checkbox3_3Uuid = "e31920b7-3a77-4a35-8a4b-691563eeaa3a";
    public $checkbox3_4;
    public $checkbox3_4Uuid = "540b950f-e761-4347-a931-aa69b867901b";
    public $beneficialOwner3_1;
    public $beneficialOwner3_1Uuid = "87b9f86f-f649-476b-8621-12d313a3e2b3";
    public $beneficialOwner3_2;
    public $beneficialOwner3_2Uuid = "181aa832-9afb-4ba4-80cf-8db0fe893d41";
    public $beneficialOwner3_3;
    public $beneficialOwner3_3Uuid = "fb872172-6574-4dbe-886b-0ec98c045342";

    public $checkbox4;
    public $checkbox4Uuid = "c0cbf755-ae9d-403b-ba18-6087fe74c114";
    public $beneficialOwner4;
    public $beneficialOwner4Uuid = "f2bdc38c-ce0e-455e-a3aa-52944e666caa";

    public $checkbox5;
    public $checkbox5Uuid = "776fc957-18db-4015-8438-2fa9f3d94079";
    public $beneficialOwner5;
    public $beneficialOwner5Uuid = "427cbdf5-07a8-407e-9aff-b7a4eb835b72";

    public $checkbox6;
    public $checkbox6Uuid = "34226b01-486b-4076-97a5-16d1ab7c13d9";

    public $date;
    public $dateUuid = "d9562d17-ece0-4601-b64e-691082049462";
    public $signature;      // Optional
    public $signatureUuid = "5ade070c-93b2-4ba9-af2b-38b8d4c4863b";
    public $myFullName;
    public $myFullNameUuid = "eb52e256-2c55-4302-8590-6fddef343f42";
    public $idNumber;       //Optional
    public $idNumberUuid = "f3adab17-f231-44d7-9613-b430dd3f1969";
    public $contact;
    public $contactUuid = "0719b988-64ed-4309-8f84-8c8cd339ccb0";

    public function mount($customerUuid = null, $formId = null)
    {
        $this->formid = $formId ? $formId : "12a24bf6-de9d-4e32-ae5e-dd41b29db70a";

        parent::initialize("Form Confirmation of Tax Status", $customerUuid);
    }

    public function submit() {
        $rules = [
            'vehicleName' => 'required',
            // 'detail' => 'required',
            'fullName' => 'required',
            'fullAddress' => 'required',
            'selectCapacity' => 'required',
            'trustName' => 'required',
            'date' => 'required',
            'myFullName' => 'required',
            'contact' => 'required',
        ];

        $this->validate($rules);

        parent::updateFormData();
    }

    public function render()
    {
        return view('livewire.form-tax-confirm');
    }
}
