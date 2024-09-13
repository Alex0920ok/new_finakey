<?php

namespace App\Livewire;

class KYCFormCorporate extends _BaseForm
{
    // I. GENERAL INFORMATION
    public $generalEntityName;
    public $generalEntityNameUuid = "70a0a9d3-6e72-4e95-8fe3-47b17dce8604";
    public $generalLegalForm;
    public $generalLegalFormUuid = "be6ecbe2-73a1-4944-8bd8-ecb6a63a41dc";
    public $generalRegistrationNumber;
    public $generalRegistrationNumberUuid = "7c4a0b56-095a-41c8-a6bb-b0932ddd8493";
    public $generalRegisteredAddress;
    public $generalRegisteredAddressUuid = "3c43a358-5852-4e95-b7cf-a04d466ea7a9";
    public $generalPhone;
    public $generalPhoneUuid = "31ca9ca0-e9e7-4704-8dce-a3765fbba1ed";
    public $generalDifferentMail;       // Optional
    public $generalDifferentMailUuid = "e5e9f280-e4ab-4cee-bef3-205d5a1f195c";
    public $generalEmail;
    public $generalEmailUuid = "8638d40e-2eac-4aef-b787-896d19c64e5f";
    public $generalWeb;
    public $generalWebUuid = "43c176b6-23d3-4393-9c1b-d99481b4ab16";
    public $generalTaxDomicile;
    public $generalTaxDomicileUuid = "c4086cf1-ca6f-40bb-895a-c8bd8c321ded";
    public $generalTaxID;
    public $generalTaxIDUuid = "9ee38b95-9bc9-4ba4-a307-b1a5c3e7eb76";
    public $generalBusinessType;
    public $generalBusinessTypeUuid = "d0637f98-66e6-47bf-8126-400ae83a1cb4";
    public $generalEntityActivity;
    public $generalEntityActivityUuid = "7148d153-fee1-45f9-a727-662a96e504d0";
    public $generalEntityRetailBank;
    public $generalEntityRetailBankUuid = "f451b7b1-0b34-465f-81f7-ae4afe4404d6";
    public $optionEntityStock;
    public $optionEntityStockUuid = "b139f071-1989-4dd2-98dc-eff726c3daaa";
    public $generalStockSymbol;            // if yes, insert
    public $generalStockSymbolUuid = "08bb76af-01e0-4c02-8ac8-58dcfd306674";


    // II. BENEFICIAL OWNER’S INFORMATION
    public $ownerFullName_1;
    public $ownerFullName_1Uuid = "9565e3cb-a2c5-4f2e-b751-1d482fefff3f";
    public $ownerNationality_1;
    public $ownerNationality_1Uuid = "af8f5524-65fa-4a7e-ac86-673a41e1605b";
    public $ownerPassport_1;
    public $ownerPassport_1Uuid = "ed925072-d01c-47dd-adf6-b7074757ab3f";
    public $ownerMainAddress_1;
    public $ownerMainAddress_1Uuid = "3c14f99e-9f55-4c83-92c1-666996c2483e";
    public $ownerShareholding_1;
    public $ownerShareholding_1Uuid = "bf9a07d9-1e4a-4fa7-a021-ba1c361ec6a1";
    public $ownerTaxID_1;
    public $ownerTaxID_1Uuid = "fc66d224-6bbd-40a2-9cd0-af8f82edccfb";

    public $ownerFullName_2;
    public $ownerFullName_2Uuid = "805d6d50-2d18-46e9-a2e8-abb990852169";
    public $ownerNationality_2;
    public $ownerNationality_2Uuid = "7ddd4814-04ec-4c3f-8ad7-50d4ee49d976";
    public $ownerPassport_2;
    public $ownerPassport_2Uuid = "8ae49fe9-bfb2-4270-9bac-67c077e52765";
    public $ownerMainAddress_2;
    public $ownerMainAddress_2Uuid = "c82ce9ab-12de-43f8-a3f1-c747e7592a65";
    public $ownerShareholding_2;
    public $ownerShareholding_2Uuid = "8eb10afb-19c8-4116-aeed-a77c9473622d";
    public $ownerTaxID_2;
    public $ownerTaxID_2Uuid = "6dc182ca-5793-452e-a1ba-a3bcc6a671cc";

    // Optionals
    public $ownerFullName_3;
    public $ownerFullName_3Uuid = "c8aa4936-105d-4366-8aac-22ad207de319";
    public $ownerNationality_3;
    public $ownerNationality_3Uuid = "bea91b24-8555-41a9-88ee-f42f7a8655e6";
    public $ownerPassport_3;
    public $ownerPassport_3Uuid = "03b1d76d-a77e-48e0-b2ee-71122791ffd2";
    public $ownerMainAddress_3;
    public $ownerMainAddress_3Uuid = "affc6de1-6989-4c30-a3a4-931d7fb41fed";
    public $ownerShareholding_3;
    public $ownerShareholding_3Uuid = "0c3cff6c-543c-4918-b932-7b40123c5c89";
    public $ownerTaxID_3;
    public $ownerTaxID_3Uuid = "dc0678ce-8d78-4b04-b714-e2e6114f2dcf";

    public $ownerFullName_4;
    public $ownerFullName_4Uuid = "d892eb0f-c251-4509-85c6-2da52346196a";
    public $ownerNationality_4;
    public $ownerNationality_4Uuid = "aa90f119-0de7-4336-8d8c-ed96672fef1d";
    public $ownerPassport_4;
    public $ownerPassport_4Uuid = "b3ded00f-9826-4511-91b7-a423a0818400";
    public $ownerMainAddress_4;
    public $ownerMainAddress_4Uuid = "736b00a0-a685-40d1-80ff-40b6243d01e2";
    public $ownerShareholding_4;
    public $ownerShareholding_4Uuid = "f24f1a16-ef72-41f8-bcf3-0b9308fd7da2";
    public $ownerTaxID_4;
    public $ownerTaxID_4Uuid = "d8e3438c-5c24-45aa-ad03-dd792b3c4914";

    // III. PEP STATUS:
    public $optionPepStatus;
    public $optionPepStatusUuid = "62d34b4d-a5ae-4caf-9faf-eb2b1882f7e5";
    public $pepStatusDetails;       // optional
    public $pepStatusDetailsUuid = "475a6265-3110-478a-8603-e6d587ba7b01";

    // IV. MANAGERS INFORMATION
    public $managerFullName_1;
    public $managerFullName_1Uuid = "74fcb678-d0d6-4714-aec7-0bfbb3821c54";
    public $managerPassport_1;
    public $managerPassport_1Uuid = "1766f321-b87c-432b-a077-20c98475a89a";
    public $managerAddress_1;
    public $managerAddress_1Uuid = "34b12fd1-dd3d-4040-9265-05d3eea56911";
    public $managerActingAs_1;
    public $managerActingAs_1Uuid = "dd5d3c96-dc83-43f3-a9b4-04ab5ce063dd";

    public $managerFullName_2;
    public $managerFullName_2Uuid = "541120d6-67a9-4785-a37a-bfefd8836ebb";
    public $managerPassport_2;
    public $managerPassport_2Uuid = "4bb453fa-b1ea-4e3d-a752-01a602023aa6";
    public $managerAddress_2;
    public $managerAddress_2Uuid = "bb7dd187-ae0b-48a2-b22c-89c6d82029cc";
    public $managerActingAs_2;
    public $managerActingAs_2Uuid = "02596481-adb4-402c-84a9-cf76b2916d5c";

    public $managerFullName_3;
    public $managerFullName_3Uuid = "4d2e800f-5b33-46d0-91a1-5a6e0ca4137a";
    public $managerPassport_3;
    public $managerPassport_3Uuid = "1db74eb3-4b17-4f27-89ab-62bd4e82639b";
    public $managerAddress_3;
    public $managerAddress_3Uuid = "f524de92-f6b7-4103-bed9-fa875e4f2a5c";
    public $managerActingAs_3;
    public $managerActingAs_3Uuid = "8ca40117-4546-4274-bf75-ca330f3faa63";

    // V. AUTHORISATION TO BIND THE ENTITY
    // Optional
    public $authFullName_1;
    public $authFullName_1Uuid = "786837d1-732d-4df2-bfba-f888262d3294";
    public $authPassport_1;
    public $authPassport_1Uuid = "6304b3c5-cc6d-4d2b-a99d-64c69c4ccd02";
    public $authAddress_1;
    public $authAddress_1Uuid = "e6c9e86e-05e8-4d7e-88dc-b1ee66e263c8";
    public $authActingAs_1;
    public $authActingAs_1Uuid = "46e74087-e677-44dc-920b-da389bac3b8b";

    public $authFullName_2;
    public $authFullName_2Uuid = "e934de29-703f-4349-bbbd-8c4e7605157a";
    public $authPassport_2;
    public $authPassport_2Uuid = "31f0c94a-7859-4c0a-81c3-5914e4862165";
    public $authAddress_2;
    public $authAddress_2Uuid = "fd0283e0-4743-45bd-8f64-bb3241ff66cd";
    public $authActingAs_2;
    public $authActingAs_2Uuid = "99093127-7bb1-4064-9bd8-4ff3f8014eec";

    public $optionAuth_1;
    public $optionAuth_1Uuid = "a4cf5e75-fe3a-40ed-a5c9-e9df460abb91";
    public $authDetail_1;
    public $authDetail_1Uuid = "1582af93-35a2-46d8-8b80-e77217683fbb";
    public $optionAuth_2;
    public $optionAuth_2Uuid = "feb961c7-a125-487d-8e16-1c6b31064e77";

    public $authFullName_3;
    public $authFullName_3Uuid = "61021f31-21c9-4973-ae3b-d6ceeb87b20c";
    public $authPassport_3;
    public $authPassport_3Uuid = "b8770036-f72b-4cc5-aa32-8e71bfd9264d";
    public $authAddress_3;
    public $authAddress_3Uuid = "ea9dee99-103e-46c4-8032-da8659836142";
    public $authActingAs_3;
    public $authActingAs_3Uuid = "9484e427-3aae-4b73-b85c-eac1287cf1f9";

    // VI. ORIGIN OF THE ENTITY’S FINANCIAL RESOURCES
    public $originInitialCapital;
    public $originInitialCapitalUuid = "175e5198-1234-49c7-b777-98cba3a5dfd1";
    public $originWealthDetail;
    public $originWealthDetailUuid = "bb9ff2e8-0d69-4d86-bb9f-b38425a69b71";
    public $checkboxOrigin_1;       // optional
    public $checkboxOrigin_1Uuid = "8dd61e94-0e2c-4e5a-9390-788a533a3c31";
    public $checkboxOrigin_2;       // optional
    public $checkboxOrigin_2Uuid = "55e7e885-b794-4019-9eb1-6e09d26e9846";
    public $checkboxOrigin_3;       // optional
    public $checkboxOrigin_3Uuid = "0a936264-abab-455e-9ab2-1ffcc20f5210";
    public $checkboxOrigin_4;       // optional
    public $checkboxOrigin_4Uuid = "e155b1c4-9313-4ba1-bc68-dc99086ee65f";
    public $checkboxOrigin_5;       // optional
    public $checkboxOrigin_5Uuid = "6adf97d0-e248-489f-a545-b3c646f048b4";
    public $checkboxOrigin_6;       // optional
    public $checkboxOrigin_6Uuid = "ab125941-12a4-48ce-8478-e9e6e6e4a4f1";
    public $optionOriginCanBankReference;
    public $optionOriginCanBankReferenceUuid = "2fb6e979-9d7b-40e2-9130-dbe31ed27d43";
    public $originNoDetail;                     // Optional
    public $originNoDetailUuid = "2ed26776-8cab-4b7e-8335-69fe2a852bf4";

    // VII. OTHER SUBSTANTIVE INFORMATION
    public $otherOption_1;
    public $otherOption_1Uuid = "e49dd68f-a320-4906-99f0-6fd6a65c9a4d";
    public $otherDetails_1;                     // Optional
    public $otherDetails_1Uuid = "12fa172f-1b9f-49f9-b7aa-09e6b1a57b6a";
    public $otherOption_2;
    public $otherOption_2Uuid = "32ac0bcf-6bf0-4d46-9c2b-3e60744295dc";
    public $otherDetails_2;                     // Optional
    public $otherDetails_2Uuid = "1ee9a52a-8aba-4d45-86d7-145044f9eae4";

    // VIII. OTHER
    public $otherFinalDetail;                   // Optional
    public $otherFinalDetailUuid = "0623f39c-4eb4-476f-ae4a-07fb19ea2040";

    // Signature
    public $place;
    public $placeUuid = "8b2bab52-dc08-418f-955b-d3c6a0beeb9a";
    public $date;
    public $dateUuid = "647ab829-6f54-4c96-8c13-35e742955efa";
    public $signature;
    public $signatureUuid = "e2e50e81-aa2b-4e69-9ec5-e85fd7633282";

    // Enclose
    public $checkboxEnclose_1;
    public $checkboxEnclose_1Uuid = "65f4349a-a139-4e2c-9c26-442712f11a51";
    public $checkboxEnclose_2;
    public $checkboxEnclose_2Uuid = "19a5afb1-6cb0-4699-94a3-e92907b46467";
    public $checkboxEnclose_3;
    public $checkboxEnclose_3Uuid = "d97a8469-b3d0-470f-8854-cf481a4e05f7";
    public $checkboxEnclose_4;
    public $checkboxEnclose_4Uuid = "1acf1529-cc44-4387-833a-cdf32ea4a077";
    public $checkboxEnclose_5;
    public $checkboxEnclose_5Uuid = "25483801-d872-4ed4-b8fe-659be57a9f0d";
    public $checkboxEnclose_6;
    public $checkboxEnclose_6Uuid = "253afa19-d4fc-4541-b002-f3ce7eba3090";
    public $checkboxEnclose_7;
    public $checkboxEnclose_7Uuid = "7eb72b74-1347-47af-b9e5-658c6eb61eb4";
    public $checkboxEnclose_8;
    public $checkboxEnclose_8Uuid = "bcfaea61-4880-4603-9c8f-97cd026c9179";
    public $checkboxEnclose_9;
    public $checkboxEnclose_9Uuid = "6818de72-6da0-48f1-b24a-ef59a162c446";
    public $checkboxEnclose_10;
    public $checkboxEnclose_10Uuid = "f5dc2835-d4e9-4eab-b159-9bc0c2ba13f8";
    public $checkboxEnclose_11;
    public $checkboxEnclose_11Uuid = "6d9ec424-2041-4612-9408-ab43a3f3ed0b";
    public $checkboxEnclose_12;
    public $checkboxEnclose_12Uuid = "5c81b5ea-5b62-4ed8-8496-96536eed0731";
    public $checkboxEnclose_13;
    public $checkboxEnclose_13Uuid = "1ebc67b4-8dd4-4b72-8d0b-6769556f696b";

    public function mount($customerUuid = null, $formId = null)
    {
        $this->formid = $formId ? $formId : "c1d1911e-1f6c-4179-8bfe-3482e63d42fe";

        parent::initialize("KYC Corporate Form", $customerUuid);
    }

    public function submit() {
        $rules = [
            'generalEntityName' => 'required',
            'generalLegalForm' => 'required',
            'generalRegistrationNumber' => 'required',
            'generalRegisteredAddress' => 'required',
            'generalPhone' => 'required',
            'generalEmail' => 'required',
            'generalWeb' => 'required',
            'generalTaxDomicile' => 'required',
            'generalTaxID' => 'required',
            'generalBusinessType' => 'required',
            'generalEntityActivity' => 'required',
            'generalEntityRetailBank' => 'required',
            'optionEntityStock' => 'required',
            'ownerFullName_1' => 'required',
            'ownerNationality_1' => 'required',
            'ownerPassport_1' => 'required',
            'ownerMainAddress_1' => 'required',
            'ownerShareholding_1' => 'required',
            'ownerTaxID_1' => 'required',
            'ownerFullName_2' => 'required',
            'ownerNationality_2' => 'required',
            'ownerPassport_2' => 'required',
            'ownerMainAddress_2' => 'required',
            'ownerShareholding_2' => 'required',
            'ownerTaxID_2' => 'required',
            'optionPepStatus' => 'required',
            'managerFullName_1' => 'required',
            'managerPassport_1' => 'required',
            'managerAddress_1' => 'required',
            'managerActingAs_1' => 'required',
            'managerFullName_2' => 'required',
            'managerPassport_2' => 'required',
            'managerAddress_2' => 'required',
            'managerActingAs_2' => 'required',
            'managerFullName_3' => 'required',
            'managerPassport_3' => 'required',
            'managerAddress_3' => 'required',
            'managerActingAs_3' => 'required',
            'originInitialCapital' => 'required',
            'originWealthDetail' => 'required',
            'optionOriginCanBankReference' => 'required',
            'otherOption_1' => 'required',
            'otherOption_2' => 'required',
            'place' => 'required',
            'date' => 'required',
        ];

        $this->validate($rules);

        parent::updateFormData();
    }

    public function render()
    {
        return view('livewire.k-y-c-form-corporate');
    }
}
