<?php

namespace App\Livewire;

class MandateAgreement extends _BaseForm
{
    public $clientName;
    public $clientNameUuid = "f1209d1d-a1d1-4f66-8f05-8593f20ee981";
    public $clientAddress;
    public $clientAddressUuid = "b8c8a217-643a-4308-8d42-e50bd85f037e";

    public $purpose_1;
    public $purpose_1Uuid = "a09da372-0db0-4998-a7b1-1f0a79312652";
    public $purpose_2;
    public $purpose_2Uuid = "ecbb7fe2-240c-4bed-ae3a-35081f005a4f";

    public $scopeService_1;
    public $scopeService_1Uuid = "c7d08243-9727-4b50-8f5d-6d7608805811";
    public $scopeService_2;
    public $scopeService_2Uuid = "3f22614a-b172-49d5-8093-1f7e8f2a6020";
    public $scopeService_3;
    public $scopeService_3Uuid = "524be957-7303-4561-a4a2-dd7c4e63cefe";

    public $optionAccounting;
    public $optionAccountingUuid = "5ad0913e-0d2a-486a-a879-0e397f3fdd18";
    public $optionBank;
    public $optionBankUuid = "42e94bac-1d49-4883-8bba-0cf0b18d6e51";
    public $bankName;
    public $bankNameUuid = "690a318d-029c-450f-8cc8-c35cc3ce6f77";
    public $bankAddress;
    public $bankAddressUuid = "7d3afba0-30f1-47cd-81d7-e4f7922ec733";
    public $bankContact;
    public $bankContactUuid = "73789c37-1c0d-4e54-8c3e-0484206ce8b1";
    public $optionCorrespondence;
    public $optionCorrespondenceUuid = "fafe7bb6-77b7-4e4a-95dc-50acc4bbf105";
    public $detailCorrespondence;
    public $detailCorrespondenceUuid = "30eb5437-cce8-48e0-b9bb-836bab5b4b93";
    public $optionOtherService;
    public $optionOtherServiceUuid = "b87477b9-cfb5-4cc7-9d15-96e8405e9a31";

    public $optionPowerArtonney;
    public $optionPowerArtonneyUuid = "0948b7c5-bd31-44fe-93f5-f87c103303ad";
    public $artonneyName;           // Optional
    public $artonneyNameUuid = "0decbfc2-2505-4e37-9cac-99f014f2d393";
    public $artonneySignature;           // Optional
    public $artonneySignatureUuid = "ce658ece-4e2c-441e-9a84-b08b99811d8f";

    public $place;
    public $placeUuid = "359a2f2b-50ee-4b48-ba0a-3cb851062b21";
    public $date;
    public $dateUuid = "43530a7a-d83f-4270-affa-b233fb9b3714";
    public $client;
    public $clientUuid = "6b5ef185-6865-4f6c-a4db-c0e12963ce3d";
    public $mandatary;
    public $mandataryUuid = "dea717ae-afa4-4ff1-be4b-8cca12bb2410";

    public function mount($customerUuid = null, $formId = null)
    {
        $this->formid = $formId ? $formId : "09f645e4-8be1-4d42-ae9d-79854c6160b8";

        parent::initialize("Mandate Agreement Form", $customerUuid);
    }

    public function submit() {
        $rules = [
            'clientName' => 'required',
            'clientAddress' => 'required',
            'purpose_1' => 'required',
            'purpose_2' => 'required',
            'scopeService_1' => 'required',
            'scopeService_2' => 'required',
            'scopeService_3' => 'required',
            'optionAccounting' => 'required',
            'optionBank' => 'required',
            'optionCorrespondence' => 'required',
            'optionOtherService' => 'required',
            'optionPowerArtonney' => 'required',
            'place' => 'required',
            'date' => 'required',
            'client' => 'required',
            'mandatary' => 'required',
        ];

        $this->validate($rules);

        parent::updateFormData();
    }

    public function render()
    {
        return view('livewire.mandate-agreement');
    }
}
