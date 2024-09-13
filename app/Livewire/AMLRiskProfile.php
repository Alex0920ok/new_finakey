<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\FormField;
use Barryvdh\DomPDF\Facade\Pdf;

class AMLRiskProfile extends _BaseForm
{
    public $profileType;
    public $profileTypeUuid = "1701089b-57cb-416a-adfc-649ed1c6660d";
    public $dossierName;
    public $dossierNameUuid = "fe2e5837-667a-4169-9f28-7bdee8c7ba2b";
    public $entityNumber;
    public $entityNumberUuid = "cb992f76-8a7f-4f03-ae0b-c487d4cb08a4";

    // AML Risk Profile Fields
    public $option1_1;
    public $option1_1Uuid = "862f0a19-d331-46c2-b26f-dd67fda7f915";
    public $option1_2;
    public $option1_2Uuid = "3f984a53-59cf-4251-82d2-7aa9124bad3b";
    public $option1_3;
    public $option1_3Uuid = "eefcd4c6-30a2-4e8d-85a8-556ba0071df7";
    public $option1_4;
    public $option1_4Uuid = "935f6720-3503-4ee7-b97e-42ac0c8290da";
    public $option1_5;
    public $option1_5Uuid = "2d9e4af0-c44a-483e-8fb4-9e71cb8fee3d";
    public $pepType;
    public $pepTypeUuid = "fcd2540d-3a0e-405e-8345-0ecdd1a6a43c";
    public $option1_6;
    public $option1_6Uuid = "956c3264-0e08-42ad-8478-81841b9f3bb5";
    public $option1_7;
    public $option1_7Uuid = "41199054-ad34-407e-aec5-d551da09fbbd";
    public $option1_8;
    public $option1_8Uuid = "eccd16e7-4476-4b9e-96ac-8a9773377252";
    public $option1_9;
    public $option1_9Uuid = "e290c18a-fbed-43a5-bdf7-872ccb34e5a5";
    public $option1_10;
    public $option1_10Uuid = "ff1e0847-f01a-4364-874e-892429141a08";
    public $option1_11;
    public $option1_11Uuid = "c4c61932-e5d3-4a74-8951-dd3a16af7e79";
    public $option1_12;
    public $option1_12Uuid = "abcafcdf-94c9-4054-88df-843b2607a4b5";
    public $option1_13;
    public $option1_13Uuid = "15c33f14-6d60-4aa5-8531-5999a61da74d";
    public $option1_14;
    public $option1_14Uuid = "f1275563-969d-46eb-ba5b-220618249539";
    public $option1_15;
    public $option1_15Uuid = "d73bbe2c-749b-4b29-a1ef-a2ec5a0d0c94";


    // COUNTRY RISK
    public $option2_1;
    public $option2_1Uuid = "ccd13d94-80fb-4946-bf03-3530004697d3";
    public $detail2_1;
    public $detail2_1Uuid = "666b17b7-c146-46d8-bb30-3b49599664a4";
    public $option2_2;
    public $option2_2Uuid = "5041d22b-b716-47d6-9892-e7cade1a9a4e";
    public $detail2_2;
    public $detail2_2Uuid = "2eb39067-df7e-4f03-873d-25a7ea003096";
    public $option2_3;
    public $option2_3Uuid = "dbdf3b31-883b-4c19-8b29-b66f6abf7486";
    public $option2_4;
    public $option2_4Uuid = "43502182-175a-490d-81ed-469bc0dbb52d";
    public $option2_5;
    public $option2_5Uuid = "02e3994b-3b5f-4ce9-961d-17e341b7db96";
    public $detail2_5;
    public $detail2_5Uuid = "dcda657b-1d42-403d-91d5-14ac1a138b89";

    // III.  INDUSTRY/SECTOR RISK
    public $option3_1;
    public $option3_1Uuid = "14d50838-1476-439d-8b51-6281b98ad826";
    public $option3_2;
    public $option3_2Uuid = "82474da3-6981-4460-8deb-961f223c68aa";
    public $detail3_2;
    public $detail3_2Uuid = "328b7772-512c-4949-b9dc-5bea7716a582";

    // IV.  PRODUCT RISK
    public $option4;
    public $option4Uuid = "a45ef3f4-04d2-445c-803d-e208189655a0";

    // V.    ADDITIONAL CLARIFICATIONS IN THE CASE OF INCREASED RISKS (AMLO-FINMA Art. 15)
    public $details5_1;
    public $details5_1Uuid = "d1292429-bbe6-4100-9bc3-d13a3ffc903a";
    public $details5_2;
    public $details5_2Uuid = "a2e950b6-ce42-4ba3-8da0-889b9efb442b";
    public $option5;
    public $option5Uuid = "3c92de75-204d-4c6e-b34e-d68df44c67d2";

    // VI.   OVERALL ASSESSMENT OF THE BUSINESS RELATIONSHIP
    public $checkbox6_1;
    public $checkbox6_1Uuid = "d43d1f40-f260-40d6-a5e0-074d8735f1ba";
    public $checkbox6_2;
    public $checkbox6_2Uuid = "f1f8cf97-9d6e-48c6-a8b8-85661baa2250";
    public $select6_1_1;
    public $select6_1_1Uuid = "9913d75d-86d9-4749-b07b-3df62e59688d";
    public $select6_1_2;
    public $select6_1_2Uuid = "7ceda5e2-7aa1-4da9-8a0f-b29015640c4a";
    public $select6_2_1;
    public $select6_2_1Uuid = "1430978c-d11d-4956-9486-e06305618cb1";
    public $select6_2_2;
    public $select6_2_2Uuid = "ef0aa146-d9b4-4054-bb3f-85abf56aef9a";
    public $select6_3_1;
    public $select6_3_1Uuid = "df4bc060-5f3a-47f2-a085-d082016d4673";
    public $select6_3_2;
    public $select6_3_2Uuid = "37f109d4-7dac-4e2c-862a-6fa8c65202d9";
    public $select6_4_1;
    public $select6_4_1Uuid = "e1cd14dc-da6e-41f9-841d-662459cb690a";
    public $select6_4_2;
    public $select6_4_2Uuid = "3b88661f-f6d6-4c24-b0b5-aa3d1bd8e8c9";

    public $option6_1;
    public $option6_1Uuid = "fbf99ac7-d97d-4c69-9972-3ef1125f876f";
    public $option6_2;
    public $option6_2Uuid = "a56f8d7c-09dd-4f57-b569-cec54ab3cdcd";
    public $details6;
    public $details6Uuid = "fc850b24-a23e-4492-8cce-667c6f0b6ee7";

    // Signature
    public $signatureDate;
    public $signatureDateUuid = "98feeb15-5f41-4e3a-851d-c837a4d7b102";
    public $signatureName;
    public $signatureNameUuid = "c3308bee-2411-4e5b-bd1e-c83e7a097cd2";
    public $signature;
    public $signatureUuid = "a4c0e440-b657-44f9-a304-9807188cb13c";

    public function mount($customerUuid = null, $formId = null)
    {
        $this->formid = $formId ? $formId : "39efc6bc-4400-4aa3-a789-bab9592b6a86";

        parent::initialize("AML Risk Form", $customerUuid);
    }

    public function submit()
    {
        $rules = [
            'profileType' => 'required',
            'dossierName' => 'required',
            'entityNumber' => 'required',
            'option1_1' => 'required',
            'option1_2' => 'required',
            'option1_3' => 'required',
            'option1_4' => 'required',
            'option1_5' => 'required',
            'pepType' => 'required',
            'option1_6' => 'required',
            'option1_7' => 'required',
            'option1_8' => 'required',
            'option1_9' => 'required',
            'option1_10' => 'required',
            'option1_11' => 'required',
            'option1_12' => 'required',
            'option1_13' => 'required',
            'option1_14' => 'required',
            'option1_15' => 'required',

            'option2_1' => 'required',
            'detail2_1' => 'required',
            'option2_2' => 'required',
            'detail2_2' => 'required',
            'option2_3' => 'required',
            'option2_4' => 'required',
            'option2_5' => 'required',
            'detail2_5' => 'required',

            'option3_1' => 'required',
            'option3_2' => 'required',
            'detail3_2' => 'required',

            'option4' => 'required',

            'details5_1' => 'required',
            'details5_2' => 'required',
            'option5' => 'required',

            'option6_1' => 'required',
            'option6_2' => 'required',

            'signatureName' => 'required',
            'signatureDate' => 'required',
        ];

        if ($this->option6_1 == "Yes") {
            $rules['details6'] = 'required';
        }

        $this->validate($rules);

        parent::updateFormData();
    }

    public function render()
    {
        return view('livewire.a-m-l-risk-profile');
    }
}
