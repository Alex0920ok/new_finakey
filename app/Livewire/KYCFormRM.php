<?php

namespace App\Livewire;
class KYCFormRM extends _BaseForm
{
    public $user;

    // Information on the Contracting Party
    public $fullName;
    public $fullNameUuid = "6735d5b4-6b4c-4a66-bdae-ae8310cb6890";
    public $customerNumber;
    public $customerNumberUuid = "ade3924d-5c1f-4b8d-b8ce-d132a1871a2d";
    public $residentialAddress;
    public $residentialAddressUuid = "9308815a-63ca-4553-85ae-c4b3f46ceb85";
    public $taxDomcile;
    public $taxDomcileUuid = "ee099207-4ec8-4fa3-b699-01223cfb3be4";
    public $tinNummer;
    public $tinNummerUuid = "3374ce34-4557-4dde-a949-72d938fa3b2b";
    public $birthDate;
    public $birthDateUuid = "93d9d6d6-6c00-45bb-bb5c-49cc72444e86";
    public $birthPlace;
    public $birthPlaceUuid = "1c1a6fb3-064e-480c-a435-1b3e293cd2a9";
    public $nationality;
    public $nationalityUuid = "764dfc0a-3533-4283-be49-692cb6b2939d";
    public $familySituation;
    public $familySituationUuid = "8b78fb2c-5d3b-48f8-8e64-a46d728626cb";
    public $familySituationFurther;
    public $familySituationFurtherUuid = "ad40feab-d5ed-4c7c-8657-28fc5b121eb0";
    public $phone;
    public $phoneUuid = "0811b068-3561-460b-ab6e-6f1e74b4426e";
    public $email;
    public $emailUuid = "a6f791be-053e-497b-a70e-f950e023b638";

    // Establishment of the business relationship
    public $optionInitatedBy;
    public $optionInitatedByUuid = "9e410bee-1ff6-4251-9c38-5fa3709deccf";
    // public $initiatedBy;
    // public $initiatedByUuid = "41470c63-e7ff-418b-87e0-0be1da1c05db";
    public $details2_1;
    public $details2_1Uuid = "e0f030a3-3b60-4d38-b6a1-718c9ce4996d";
    public $details2_2_1;
    public $details2_2_1Uuid = "31bc5366-eda0-4599-87fe-12066d0241bd";
    public $details2_2_2;
    public $details2_2_2Uuid = "15425412-93bc-4f83-8245-75c55c57d060";
    public $option2_3;
    public $option2_3Uuid = "8f12476a-8c9f-4edc-acb1-b37b43048c87";
    public $details2_3;
    public $details2_3Uuid = "7e30ea00-c4f9-4111-a1d2-d6a424fa54b9";
    public $option2_4;
    public $option2_4Uuid = "c9650d3f-2679-411b-bf10-9f88e1ae4711";
    public $details2_4;
    public $details2_4Uuid = "eecacb72-8aaa-4f66-932e-ff09b5a166e4";
    public $option2_5;
    public $option2_5Uuid = "41c95ca2-f509-4056-9399-3d830d323dfb";

    // Information on the origin of the assets
    public $professionalBackground;
    public $professionalBackgroundUuid = "b173827c-f820-4993-a7a4-a7de150f2678";
    public $details3_1;
    public $details3_1Uuid = "edccdc74-779a-486a-889f-294ceb8cbe78";
    public $lastPosition;
    public $lastPositionUuid = "87c2d95e-5561-4499-b07f-6377244f4f7f";
    public $details3_2_1;
    public $details3_2_1Uuid = "5186a2d6-3cd5-407a-a4ab-08459d027bc5";
    public $details3_2_2;
    public $details3_2_2Uuid = "3298ce9e-391e-4956-8941-d87b1fbd1242";
    public $details3_3;
    public $details3_3Uuid = "c0527a57-5487-4b40-b782-9d759b7f7b6a";
    public $details3_4;
    public $details3_4Uuid = "0e22e28f-d9d6-43b1-a872-e17a46c324ed";
    public $details3_5;
    public $details3_5Uuid = "991c38dd-3823-4347-90c8-1a821b8a9113";
    public $details3_6;
    public $details3_6Uuid = "1d94bb36-02e6-4686-a99d-409f66af2ad1";
    public $checkboxDetails3_7_1;
    public $checkboxDetails3_7_1Uuid = "3d13380c-4638-4e92-b01a-c39f91bdba34";
    public $checkboxDetails3_7_2;
    public $checkboxDetails3_7_2Uuid = "257f65b1-6bc5-477a-b9e6-d41bc97da2ba";
    public $checkboxDetails3_7_3;
    public $checkboxDetails3_7_3Uuid = "aae67ae7-6d69-4c13-b247-e48a52591797";
    public $checkboxDetails3_7_4;
    public $checkboxDetails3_7_4Uuid = "e288de68-b590-4127-95b2-0c2b115c2728";
    public $checkboxDetails3_7_5;
    public $checkboxDetails3_7_5Uuid = "b90242a3-8199-44bd-9d44-c37c65cda427";
    public $checkboxDetails3_7_6;
    public $checkboxDetails3_7_6Uuid = "2da05b4b-0cea-4425-b2df-aa75937e1d69";
    public $checkboxDetails3_7_7;
    public $checkboxDetails3_7_7Uuid = "dc90335e-1a00-4f4d-98e2-ec029d8bdde9";
    public $detailsOther3_7;
    public $detailsOther3_7Uuid = "00395665-77de-48d3-9a69-517e2e7add43";
    public $details3_8;
    public $details3_8Uuid = "b6a83c2c-deac-4bac-84c9-95ed2b6c3640";
    public $details3_8_1;
    public $details3_8_1Uuid = "50f84c6d-28bc-42a9-a799-b0672a33cd75";
    public $details3_8_2;
    public $details3_8_2Uuid = "6db9ecac-e3d8-4baa-8af9-c938fd145288";
    public $details3_8_3;
    public $details3_8_3Uuid = "bae15236-4a2e-4311-860d-91f3bf07a8d4";
    public $details3_9;
    public $details3_9Uuid = "e9d93f78-9fa8-44c2-88e3-f67e2db508a3";
    public $details3_9_1;
    public $details3_9_1Uuid = "39a58f32-3e2d-441e-82b5-23a8508e3318";
    public $details3_9_2;
    public $details3_9_2Uuid = "d3e352b9-ef41-4a1a-8e38-72a70d9a6666";
    public $details3_9_3;
    public $details3_9_3Uuid = "810ea08b-7996-4623-a7a6-1e81ebec0a31";
    public $details3_10;
    public $details3_10Uuid = "299c168b-221a-4d2b-a4cc-94325b80cecd";
    public $details3_10_1;
    public $details3_10_1Uuid = "ad45ab00-f4b5-4592-a1ee-6989a4c1432d";
    public $details3_10_2;
    public $details3_10_2Uuid = "84e23562-6e12-4549-89d2-46e0cdb3f81c";
    public $details3_10_3;
    public $details3_10_3Uuid = "c4d61349-961f-4668-9eed-fca2dcf5c3a6";
    public $details3_10_4;
    public $details3_10_4Uuid = "b9eb94dd-048a-45cf-9bd7-0c06dd624ebf";
    public $details3_10_5;
    public $details3_10_5Uuid = "0dc04276-76d1-4fb7-9c4b-4e39f7b35485";
    public $details3_10_6;
    public $details3_10_6Uuid = "95a0105b-53dc-4cd8-b9cf-c494dbd3e8b9";
    public $details3_11_1;
    public $details3_11_1Uuid = "ad4b6c5b-eae2-4e38-8852-03f3d0f479ed";
    public $details3_11_2;
    public $details3_11_2Uuid = "ca4ffb4a-eed6-41a0-80a0-de7f9b0f408f";
    public $details3_12;
    public $details3_12Uuid = "9f94502d-cec5-4a91-b1f2-96b23b8edb1b";

    // Signature
    public $signatureName;
    public $signatureNameUuid = "9601c066-0310-40ab-ba12-30cea3dad159";
    public $signatureDate;
    public $signatureDateUuid = "d3406879-c069-419c-bc6d-de909e24a1d9";

    public function mount($customerUuid = null, $formId = null)
    {
        $this->formid = $formId ? $formId : "6924bcdd-5d1b-4a57-a539-5341ac58df22";

        parent::initialize("KYC Form RM", $customerUuid);
    }

    public function submit()
    {
        $rules = [
            'fullName' => 'required',
            'customerNumber' => 'required',
            'residentialAddress' => 'required',
            'taxDomcile' => 'required',
            'birthDate' => 'required',
            'birthPlace' => 'required',
            'nationality' => 'required',
            'familySituation' => 'required',
            'familySituationFurther' => 'required',
            'phone' => 'required',
            'email' => 'required',
            // 'initiatedBy' => 'required',
            'optionInitatedBy' => 'required',
            'option2_3' => 'required',
            'option2_4' => 'required',
            'option2_5' => 'required',
            'professionalBackground' => 'required',
            'details3_1' => 'required',
            'lastPosition' => 'required',
            'details3_2_1' => 'required',
            'details3_2_2' => 'required',
            'details3_3' => 'required',
            'details3_4' => 'required',
            'details3_5' => 'required',
            'details3_6' => 'required',
            'signatureName' => 'required',
            'signatureDate' => 'required',
        ];

        if ($this->option2_3 == "Yes") {
            $rules['details2_3'] = 'required';
        }
        if ($this->option2_4 == "Yes") {
            $rules['details2_4'] = 'required';
        }


        $this->validate($rules);

        parent::updateFormData();
    }

    public function render()
    {
        return view('livewire.k-y-c-form-r-m');
    }
}
