<?php

namespace App\Livewire;

class FormT extends _BaseForm
{
    public $account;
    public $accountUuid = "13042a9f-c46b-4f1d-b8df-bef824a78e3d";
    public $contractingParty;
    public $contractingPartyUuid = "f096484c-1b95-457a-9d22-2f340526f610";
    public $swissLaw;
    public $swissLawUuid = "6151f447-2163-45cc-aaaf-0c3f87dc33a1";
    // public $finakey;
    // public $finakeyUuid = "460e3614-3a3b-436e-820c-10e207112a2b";
    public $trustTypeOption;
    public $trustTypeOptionUuid = "12a123ea-a935-4ec0-90e0-5c3b2f63f3b4";
    public $revocabilityOption;
    public $revocabilityOptionUuid = "d7bf4541-2b29-4d68-ab27-ba55ebf5583d";

    public $name1;
    public $name1Uuid = "7c334c36-0fc5-4254-aebf-81ba7676c648";
    public $actualAddress1;
    public $actualAddress1Uuid = "a92cfd95-2038-46ef-8999-ec59448b8b6e";
    public $dateAndPlaceOfBirth1;
    public $dateAndPlaceOfBirth1Uuid = "751467f3-3766-4739-9aa5-262af381c5ea";
    public $nationality1;
    public $nationality1Uuid = "d0c63374-219a-4eea-adc1-58318210223d";
    public $dateOfDeath1;
    public $dateOfDeath1Uuid = "58dd4504-8dbf-4762-afe0-42a746b20b94";
    public $option1;
    public $option1Uuid = "c61ab902-27ef-48ef-a458-0c019e3d55e2";


    public $name2;
    public $name2Uuid = "8d86e261-f69c-451f-bb36-279ce0d16756";
    public $actualAddress2;
    public $actualAddress2Uuid = "e723944a-956b-4e19-b2d2-70ded4562b8a";
    public $dateAndPlaceOfBirth2;
    public $dateAndPlaceOfBirth2Uuid = "f99cfd49-5a31-4ee2-bd7f-4fbac2e1655a";
    public $nationality2;
    public $nationality2Uuid = "53745110-58ce-417e-bce2-cc33100c14c4";
    public $dateOfDeath2;
    public $dateOfDeath2Uuid = "babe4be9-f1d2-41c1-88ad-68c73b12835d";


    public $name3;
    public $name3Uuid = "188e6436-25da-4cbe-ad5e-6280345c2034";
    public $actualAddress3;
    public $actualAddress3Uuid = "4b9a3b7c-0c04-4c0d-a5e2-6d486319fa83";
    public $dateAndPlaceOfBirth3;
    public $dateAndPlaceOfBirth3Uuid = "ec37e4e6-e8bb-4a1f-ba43-f302dfbb6781";
    public $nationality3;
    public $nationality3Uuid = "9e5636e3-b538-4e3d-9ec9-4cf3c1a68566";
    public $option3;
    public $option3Uuid = "b1b062ad-71d9-4501-9b9c-299ad87d2616";
    public $other3;
    public $other3Uuid = "318ff9c2-cd10-4e9e-bee5-a4c1e3a3b433";


    public $name4;
    public $name4Uuid = "37f97147-20f1-4faf-8ca4-82754c11f2dc";
    public $actualAddress4;
    public $actualAddress4Uuid = "fdf102a9-672e-4f3c-91cb-34088c06d469";
    public $dateAndPlaceOfBirth4;
    public $dateAndPlaceOfBirth4Uuid = "37c1f128-b26b-4000-9a33-863b30779e88";
    public $nationality4;
    public $nationality4Uuid = "26f05d70-f4e6-4c1e-8dec-5dbd41842ff7";
    public $option4;
    public $option4Uuid = "b8147a6f-0113-45fa-a057-7a87812036a2";


    public $name5;
    public $name5Uuid = "20a255e7-439a-4482-b89e-b16caff8e0b8";
    public $actualAddress5;
    public $actualAddress5Uuid = "b2b937c9-65ad-4e9f-9b7b-7fed62b48759";
    public $dateAndPlaceOfBirth5;
    public $dateAndPlaceOfBirth5Uuid = "0a162d75-47f7-49fb-a07a-df0fd7395eaf";
    public $nationality5;
    public $nationality5Uuid = "4e1678ed-5349-46a1-9beb-8a8c36b0f1a1";
    public $option5;
    public $option5Uuid = "d818a5d5-9d84-465a-b8e0-e96d7cd994f7";

    public $date;
    public $dateUuid = "81126de7-9da3-49a6-b0bf-956032b2d0e8";
    public $signature;
    public $signatureUuid = "822cc463-d32e-4789-9cfc-0ef9dc290570";


    public function mount($customerUuid = null, $formId = null)
    {
        $this->formid = $formId ? $formId : "3076d3ad-2716-48df-a731-3159414909f3";

        parent::initialize("Form T", $customerUuid);
    }

    public function submit() {
        $rules = [
            'account' => 'required',
            'contractingParty' => 'required',
            'swissLaw' => 'required',
            // 'finakey' => 'required',
            'trustTypeOption' => 'required',
            'revocabilityOption' => 'required',
            'date' => 'required',
        ];

        $this->validate($rules);

        parent::updateFormData();
    }

    public function render()
    {
        return view('livewire.form-t');
    }
}
