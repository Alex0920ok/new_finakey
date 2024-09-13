<?php

namespace App\Livewire;

class FormS extends _BaseForm
{
    public $ref;
    public $refUuid = "a205cace-1620-430e-bc4f-cf4e04aaa82b";
    public $contractingParty;
    public $contractingPartyUuid = "c38263c1-7573-443e-a664-0c5255e926b4";
    public $swissLaw;
    public $swissLawUuid = "9de50138-15ab-4b1f-8888-a282dde2ffe4";
    // public $finakey;
    // public $finakeyUuid = "77ba7702-04d6-4b93-9c8a-6a7ee39863b5";
    public $trustTypeOption;
    public $trustTypeOptionUuid = "de3c5827-ec81-4b70-a7ab-34ce3c714043";
    public $revocabilityOption;
    public $revocabilityOptionUuid = "e2fd5b14-7cd3-43a2-9b99-bd5d8b99a66f";

    public $name1;
    public $name1Uuid = "4dc557e7-46a1-401d-b107-52c3d34f9af3";
    public $actualAddress1;
    public $actualAddress1Uuid = "2595a419-90c0-40d9-8a4d-d5d6411c22ae";
    public $dateAndPlaceOfBirth1;
    public $dateAndPlaceOfBirth1Uuid = "a9360166-f681-4137-8fc3-760e61fd2e45";
    public $nationality1;
    public $nationality1Uuid = "2e296290-783c-4027-8294-6868ff494e37";
    public $dateOfDeath1;
    public $dateOfDeath1Uuid = "f31ddbf4-9375-4935-9ebe-4f6f571c595a";
    public $option1;
    public $option1Uuid = "78a4b5f6-9ee1-4a0f-a5e0-b7341d1f970f";


    public $name2;
    public $name2Uuid = "511cc5f8-af9d-4060-95e4-af6fee589e96";
    public $actualAddress2;
    public $actualAddress2Uuid = "d2d6c084-a3cd-4741-871f-550e79bbab0a";
    public $dateAndPlaceOfBirth2;
    public $dateAndPlaceOfBirth2Uuid = "78fafe47-5fcf-4b12-be20-20024a85630e";
    public $nationality2;
    public $nationality2Uuid = "7c6e4b8b-747b-4471-bec5-00edd94e5eb2";
    public $dateOfDeath2;
    public $dateOfDeath2Uuid = "f7c06d0f-81d4-4e91-b4d9-2773d4569f31";


    public $name3;
    public $name3Uuid = "8f6a8893-8832-46a6-8a17-3c40f3c1a67d";
    public $actualAddress3;
    public $actualAddress3Uuid = "1e139bf4-edaf-4eaa-bd46-9efd8a4827a6";
    public $dateAndPlaceOfBirth3;
    public $dateAndPlaceOfBirth3Uuid = "9cd5010a-6c5d-44bf-8f9e-43f3873315bc";
    public $nationality3;
    public $nationality3Uuid = "ef116ee8-529d-433c-93b1-0cb7f04652ad";
    public $option3;
    public $option3Uuid = "8d0ce99c-644a-426a-8672-87c0f6dd10f3";
    public $other3;
    public $other3Uuid = "b509a88c-e419-4ef0-8e33-48bdb1202def";


    public $name4;
    public $name4Uuid = "0f6f7233-891d-4a91-a6b6-d463b4819ffe";
    public $actualAddress4;
    public $actualAddress4Uuid = "3bd4d15e-66d4-4ee9-a7a2-0fd861f39cfe";
    public $dateAndPlaceOfBirth4;
    public $dateAndPlaceOfBirth4Uuid = "3ce7b3d9-0628-4a78-bea3-bdfe50e689ac";
    public $nationality4;
    public $nationality4Uuid = "000ff6ef-d6b7-4acc-bb6a-cfc1ab288476";
    public $option4;
    public $option4Uuid = "81b530c1-925b-4d3e-b8cd-fdd75373cfec";


    public $name5;
    public $name5Uuid = "958b9fd3-361d-4710-877d-9c3f69e034e4";
    public $actualAddress5;
    public $actualAddress5Uuid = "8eaa222b-a8b8-48df-a50e-2b8f7d754e62";
    public $dateAndPlaceOfBirth5;
    public $dateAndPlaceOfBirth5Uuid = "c3a29068-30dd-4cea-8be7-368e7404a999";
    public $nationality5;
    public $nationality5Uuid = "39534e26-66d4-4e20-af71-ba3631d0db10";
    public $option5;
    public $option5Uuid = "63114fec-b24a-4f25-af1b-171c50bac86d";

    public $date;
    public $dateUuid = "dc4ec3d0-7291-4441-99b0-3b15fefc440b";
    public $signature;
    public $signatureUuid = "999cac51-d8ac-4714-8508-634fd53c570c";


    public function mount($customerUuid = null, $formId = null)
    {
        $this->formid = $formId ? $formId : "f689071c-823a-41a2-aa53-09c3cc06b811";

        parent::initialize("Form S", $customerUuid);
    }

    public function submit() {
        $rules = [
            'ref' => 'required',
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
        return view('livewire.form-s');
    }
}
