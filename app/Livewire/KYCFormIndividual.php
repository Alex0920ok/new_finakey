<?php

namespace App\Livewire;

class KYCFormIndividual extends _BaseForm
{
    public $user;

    public $firstName;
    public $firstNameUuid = "088ed29a-4fca-441d-a276-4601d739c813";
    public $lastName;
    public $lastNameUuid = "40a86ed5-aad8-46b6-8e24-f04dffe66665";
    public $dateOfBirth;
    public $dateOfBirthUuid = "578d6139-55e2-4fb4-9da6-ad445dff9b3f";
    public $placeOfBirth;
    public $placeOfBirthUuid = "e1b12a03-9a02-40d5-a391-40f77f661e66";
    public $nationality;
    public $nationalityUuid = "44bd98c6-9450-43dc-a239-eff280b7804b";
    public $idPassport;
    public $idPassportUuid = "dab25716-159f-44e1-a3ec-7872c7747258";
    public $civilStatus;
    public $civilStatusUuid = "c70945a4-ac63-42bd-b113-6a8c44ecccb4";
    public $civilRegime;
    public $civilRegimeUuid = "386710ec-5efb-4cf6-b688-8cd58b55fccd";
    public $civilDate;
    public $civilDateUuid = "18358f22-de19-417b-9afc-780ef7da59b0";
    public $mainResidentialAddress;
    public $mainResidentialAddressUuid = "4d8da61e-589a-4079-b733-be79c7a09561";
    public $mailingAddress;
    public $mailingAddressUuid = "320ba6ab-dd32-4b6e-970e-89fb8e190df4";
    public $homeTelephone = "";
    public $homeTelephoneUuid = "e1421dd4-3b18-4192-ada1-2cb4a0043940";
    public $officeTelephone = "";
    public $officeTelephoneUuid = "a3a7c871-c7f4-4c81-b3ab-b190ef3a7cfc";
    public $mobileTelephone = "";
    public $mobileTelephoneUuid = "2341de97-be42-4fa8-9add-63db5c1d81b6";
    public $email = "";
    public $emailUuid = "12a7b197-2ba9-4aa5-b19c-a203da64b181";
    public $taxDomicile = "";
    public $taxDomicileUuid = "40cbde74-1365-4420-bab9-9fe1029273d9";
    public $itin = "";
    public $itinUuid = "b2a7ebf3-1de0-429b-b569-c6313431e74f";

    // PROFESSIONAL ACTIVITY
    public $professionOccupation; // Employed, Self-employed, Retired
    public $professionOccupationUuid = "e659b747-6e6d-4b43-ab5e-7f115c8a078b";
    public $professionOccupationOption; // Employed, Self-employed, Retired
    public $professionOccupationOptionUuid = "3aac9496-8c0d-4298-a995-d989deada052";
    public $lastPosition;
    public $lastPositionUuid = "f3f47b59-edf5-43a3-9ac0-6ae3b0d2efcb";
    public $businessName;
    public $businessNameUuid = "9afc1c2a-8f9e-4629-aa85-808c5b563d76";
    public $businessAddress;
    public $businessAddressUuid = "6a5f298d-0f51-4bba-b82c-03c266246b31";
    public $businessNature;
    public $businessNatureUuid = "81249290-0a06-42a9-b035-655e3050ad8a";
    public $webPage;
    public $webPageUuid = "dd4590fa-707b-4691-83a9-6ff187866852";

    // Family Details
    public $spouseFirstName;
    public $spouseFirstNameUuid = "cab3ce03-4f60-4e02-b4f6-c51b45ce39cf";
    public $spouseLastName;
    public $spouseLastNameUuid = "8150f948-d898-4cf5-a6ad-391f5a05cf5b";
    public $dateBirth;
    public $dateBirthUuid = "ea7f9454-b8c9-4f0c-9e87-82dae8e3388e";
    public $placeBirth;
    public $placeBirthUuid = "1cfb81ea-8731-48b4-97ff-8a921fcacb57";
    public $nationalityFamily;
    public $nationalityFamilyUuid = "abdba77f-747e-4ec9-be80-251827364440";
    public $idPassportFamily;
    public $idPassportFamilyUuid = "1be070a0-5378-4c54-a284-3beaf06cf5bd";
    public $civilStatusFamily;
    public $civilStatusFamilyUuid = "b8500431-4505-4c3e-86bc-9f400cc3638b";
    public $mainResidentialAddressFamily;
    public $mainResidentialAddressFamilyUuid = "203b3e65-059e-4e1a-852a-060e5e37bded";
    public $professionFamily;
    public $professionFamilyUuid = "c64592ab-a249-4a1f-9940-c054855e3d1f";
    public $childrenName;
    public $childrenNameUuid = "61a8d627-61e8-4927-9983-9982b76c4718";
    public $dateBirthChildren;
    public $dateBirthChildrenUuid = "10e5edbf-38ae-4033-ae62-dda05408b162";
    public $placeBirthChildren;
    public $placeBirthChildrenUuid = "9622dbfa-c353-434e-abef-b74841e64b1d";
    // Pep Status
    public $exposedOption;
    public $exposedOptionUuid = "63d4d3f8-f61a-41ca-a68b-ed03d0126f2f";
    public $relatedPepOption;
    public $relatedPepOptionUuid = "dbdf3d37-6263-4410-87a9-f46b958a2e16";
    public $relatedPepDetails;
    public $relatedPepDetailsUuid = "fef56f5d-e9a0-4a76-b9c9-f28fccf59f29";

    // Wealth / Patrimnoy / Revenues
    public $originalWealth;
    public $originalWealthUuid = "80c25fb9-9913-492f-b051-e4f74dbe51ca";
    public $originalWealthOption;
    public $originalWealthOptionUuid = "a966a6f2-0b8a-45b6-8a95-d110abff5a9b";
    public $otherWealthDetail;
    public $otherWealthDetailUuid = "332a6167-6f0e-408c-8ff9-e05f9d080390";
    public $totalWealth;
    public $totalWealthUuid = "96b1b7b6-8aee-4d4f-a5b6-13002a82f837";
    public $bankableWealth;
    public $bankableWealthUuid = "b81946e1-e9b4-41d1-978b-05af52276581";
    public $realEstateWealth;
    public $realEstateWealthUuid = "4c3f873a-a512-48bc-8d49-48b34f42545b";
    public $shareWealth;
    public $shareWealthUuid = "f943bb9f-f763-4c3f-855a-fffe1819335d";
    public $otherWealth;
    public $otherWealthUuid = "757b7a49-d6f3-4345-b065-a7536f4b2616";
    public $anualIncome;
    public $anualIncomeUuid = "9f9dacd3-c4d1-4051-82ff-51af849cdd10";
    public $checkboxIncomeEmploy;
    public $checkboxIncomeEmployUuid = "6a230767-c079-488b-9207-89ed741d4813";
    public $incomeEmployCurrency;
    public $incomeEmployCurrencyUuid = "acfb4277-dc9e-4168-bf01-653afc4caf34";
    public $incomeEmployPosition;
    public $incomeEmployPositionUuid = "c641a128-05cc-4cad-b519-287e6c140d34";
    public $incomeEmployBusiness;
    public $incomeEmployBusinessUuid = "d0884a81-e8dc-4bb1-9fd6-8730c5aad6dc";
    public $incomeEmployNatureBusiness;
    public $incomeEmployNatureBusinessUuid = "93c54c80-d78c-4be3-94af-860f29839ac8";
    public $incomeEmployWebsite;
    public $incomeEmployWebsiteUuid = "25ef7abd-73df-4a1a-a068-c1650096066a";
    public $checkboxDividend;
    public $checkboxDividendUuid = "3dceab73-3fe3-4fe1-896c-db203db788ff";
    public $dividendCurrency;
    public $dividendCurrencyUuid = "37547e67-3a30-4268-b5b1-df330f05497d";
    public $dividendCompanyname;
    public $dividendCompanynameUuid = "f4294703-cd34-4d56-9c76-0abf8b8725f8";
    public $dividendJurisdiction;
    public $dividendJurisdictionUuid = "e21bad85-aec6-4b33-9a3e-078425c50437";
    public $dividendNatureBusiness;
    public $dividendNatureBusinessUuid = "0fa4adf5-a559-4779-b27c-78672b7bd8de";
    public $checkboxRentalIncome;
    public $checkboxRentalIncomeUuid = "8a2eff1e-a702-4ba4-8ea9-04d72394b28a";
    public $rentalIncomeCurrency;
    public $rentalIncomeCurrencyUuid = "6f93dd75-6b7a-4573-88fb-ceeee4ff6850";
    public $rentalTypeProperty;
    public $rentalTypePropertyUuid = "7f61d48d-3e7c-4cce-a925-e24cd4e9f02d";
    public $checkboxInvestments;
    public $checkboxInvestmentsUuid = "93774e5a-9284-4ecc-8990-16df7ffd4a1d";
    public $investmentsCurrency;
    public $investmentsCurrencyUuid = "2cda0212-e2f0-48a8-8c3f-20ce45224796";
    public $investmentsDetails;
    public $investmentsDetailsUuid = "a714ea49-2ec0-4795-ba70-33265e43d77e";
    public $checkboxOtherCurrency;
    public $checkboxOtherCurrencyUuid = "6390aaf9-13fc-4722-91c3-3120ba2ba4d6";
    public $otherCurrency;
    public $otherCurrencyUuid = "7c814f82-8397-4d90-8e08-a9d0dbd098c6";
    public $otherDetails;
    public $otherDetailsUuid = "e154a42a-ebac-4b12-bcc7-b83a4f5ae58f";
    public $bankReferenceLetterOption;
    public $bankReferenceLetterOptionUuid = "5f381091-0629-4d00-bc1a-45c6a53af736";
    public $bankReferenceLetterDetails;
    public $bankReferenceLetterDetailsUuid = "e5617379-cddd-4455-a8d5-a2559ac6805b";
    public $expectNewFundOption;
    public $expectNewFundOptionUuid = "d5e99657-63c4-453f-9433-ecc5c2fe880f";
    public $expectNewFundDetails;
    public $expectNewFundDetailsUuid = "a79a3bf8-f516-47d9-b0fd-dd0a26efdda0";
    public $outflowFundOption;
    public $outflowFundOptionUuid = "9e9283b3-450d-4bcb-b54b-77bb51a8cde8";
    public $outflowFundDetails;
    public $outflowFundDetailsUuid = "6c40289b-90d7-4677-a627-db11f678e268";

    // Other Substantive information
    public $previousCountry;
    public $previousCountryUuid = "11b351c4-f3ca-4421-aece-8fa4e3e2a199";
    public $previousCountry2;
    public $previousCountry2Uuid = "c256b9a2-33b2-468e-947c-570175053458";
    public $dedaredBankruptcyOption;
    public $dedaredBankruptcyOptionUuid = "0738cebf-1d5b-4906-a195-b81535d45723";
    public $dedaredBankruptcyDetails;
    public $dedaredBankruptcyDetailsUuid = "f94271a7-460f-4878-86a9-28aae45f4b78";
    public $convictedCourtOption;
    public $convictedCourtOptionUuid = "954e9040-32e9-484e-b831-6777402454d4";
    public $convictedCourtDetails;
    public $convictedCourtDetailsUuid = "68f9148b-59c7-4997-a71b-c476992cb728";
    public $bannedEligibleOption;
    public $bannedEligibleOptionUuid = "e207537d-d412-4639-b0ec-aac9ff67c6bf";
    public $bannedEligibleDetails;
    public $bannedEligibleDetailsUuid = "6286202a-1854-43df-9ad1-caf978f24639";
    public $holdUSACitizenshipOption;
    public $holdUSACitizenshipOptionUuid = "c3fbb649-c2f5-45b2-ab64-65c901027f58";
    public $holdUSACitizenshipDetails;
    public $holdUSACitizenshipDetailsUuid = "f0f5f4b8-1db5-4ea2-92ae-81d80ad114a7";
    public $renounceUSACitizenshipOption;
    public $renounceUSACitizenshipOptionUuid = "2f2d7db1-2995-40c2-a804-a7d713a1ac91";
    public $renounceUSACitizenshipDetails;
    public $renounceUSACitizenshipDetailsUuid = "429fa7f1-1797-491c-b46b-108295ca9e34";
    public $holdUSAPassportOption;
    public $holdUSAPassportOptionUuid = "34ed608c-a26d-46d3-a449-a2088e4090ba";
    public $holdUSAPassportDetails;
    public $holdUSAPassportDetailsUuid = "9f6cc39a-7317-477d-a631-535ffb6f8db8";
    public $holdUSAGreenCardOption;
    public $holdUSAGreenCardOptionUuid = "cb688973-94c8-46dc-b188-c042b6bd2717";
    public $holdUSAGreenCardDetails;
    public $holdUSAGreenCardDetailsUuid = "ec8f4af4-59c5-4c87-a975-92ae12cc4bd3";
    public $havePermanentResidencyUSAOption;
    public $havePermanentResidencyUSAOptionUuid = "870ed510-ee73-448d-8142-8e7bef2023fa";
    public $havePermanentResidencyUSADetails;
    public $havePermanentResidencyUSADetailsUuid = "020ea278-7cbb-4cd4-b0ba-0c53b1284f59";
    public $haveCareOfAddressUSAOption;
    public $haveCareOfAddressUSAOptionUuid = "097fe219-b14c-44ca-9c29-c7477458277b";
    public $haveCareOfAddressUSADetails;
    public $haveCareOfAddressUSADetailsUuid = "9287a768-d8f2-424a-b6be-ac37a850e20e";
    public $haveUSAPhoneNumberOption;
    public $haveUSAPhoneNumberOptionUuid = "90a8532c-1d54-4240-bc59-751c0617ad98";
    public $haveUSAPhoneNumberDetails;
    public $haveUSAPhoneNumberDetailsUuid = "b21a551f-82a8-483c-93c6-f22b486e4905";
    public $holdPropertyUSAOption;
    public $holdPropertyUSAOptionUuid = "de144c75-4bce-4e51-8f63-cf00e4440142";
    public $holdPropertyUSADetails;
    public $holdPropertyUSADetailsUuid = "d722613a-d893-4e3c-80d7-76a00703ab60";
    public $grantedPowerAttomeyOption;
    public $grantedPowerAttomeyOptionUuid = "eb98766e-159c-4b44-91b9-6ba8f4e4aca8";
    public $grantedPowerAttomeyDetails;
    public $grantedPowerAttomeyDetailsUuid = "9b0b39ac-fa38-466d-b338-3e0754c351c2";
    public $substantialProfessionalActivitiesOption;
    public $substantialProfessionalActivitiesOptionUuid = "49f318fd-2af0-42b6-87b5-98d0ffe9bc01";
    public $substantialProfessionalActivitiesDetails;
    public $substantialProfessionalActivitiesDetailsUuid = "ebd8ba6e-a910-41f6-b228-8bfe09d64820";

    // Other substantive information
    public $reasonWorkUs;
    public $reasonWorkUsUuid = "ce82dd1a-4d76-404e-9ad7-5753d10567d1";
    public $yourObjective;
    public $yourObjectiveUuid = "9fef5c1d-4fd4-433c-84d0-e437223cd0f6";

    // Signature
    public $signaturePlace;
    public $signaturePlaceUuid = "6824ce43-8625-47e6-8c71-bf7db97182d3";
    public $signatureDate;
    public $signatureDateUuid = "db388385-9036-4682-9b37-70688a18af2e";
    public $signature;
    public $signatureUuid = "e37fec47-cc93-4289-ab45-d47525348add";

    public $checkboxConfirmTruth = false;
    public $checkboxConfirmTruthUuid = "1c6051ff-0359-4ed5-98da-798d96b78cc9";
    public $checkboxConfirmInform = false;
    public $checkboxConfirmInformUuid = "24a94194-c648-4099-922f-face3b3ef318";
    public $checkboxConfirmCheck = false;
    public $checkboxConfirmCheckUuid = "498bfcca-2e1e-4557-aba6-8023f04063de";

    public function mount($customerUuid = null, $formId = null)
    {
        $this->formid = $formId ? $formId : "4fe15c5a-0c0e-4236-811d-58ddb6014ada";

        parent::initialize("KYC Form Individual", $customerUuid);
    }

    public function submit()
    {
        $rules = [
            // 'email' => 'required|email|unique:users,email',
            'firstName' => 'required',
            'lastName' => 'required',
            'dateOfBirth' => 'required',
            'placeOfBirth' => 'required',
            'nationality' => 'required',
            'idPassport' => 'required',
            'civilStatus' => 'required',
            'mainResidentialAddress' => 'required',
            // 'mailingAddress' => 'required',
            'homeTelephone' => 'required',
            'officeTelephone' => 'required',
            'mobileTelephone' => 'required',
            'email' => 'required',
            'taxDomicile' => 'required',
            'itin' => 'required',
            'professionOccupation' => 'required',
            'professionOccupationOption' => 'required',
            'lastPosition' => 'required',
            'businessName' => 'required',
            'businessAddress' => 'required',
            'businessNature' => 'required',
            'webPage' => 'required',
            'spouseFirstName' => 'required',
            'spouseLastName' => 'required',
            'dateBirth' => 'required',
            'placeBirth' => 'required',
            'nationalityFamily' => 'required',
            'idPassportFamily' => 'required',
            'civilStatusFamily' => 'required',
            'mainResidentialAddressFamily' => 'required',
            'professionFamily' => 'required',
            'childrenName' => 'required',
            'dateBirthChildren' => 'required',
            'placeBirthChildren' => 'required',
            'exposedOption' => 'required',
            'relatedPepOption' => 'required',
            'originalWealth' => 'required',
            'originalWealthOption' => 'required',
            'totalWealth' => 'required',
            'bankableWealth' => 'required',
            'realEstateWealth' => 'required',
            'shareWealth' => 'required',
            'otherWealth' => 'required',
            'anualIncome' => 'required',
            'incomeEmployCurrency' => 'required',
            'incomeEmployPosition' => 'required',
            'incomeEmployBusiness' => 'required',
            'incomeEmployNatureBusiness' => 'required',
            'incomeEmployWebsite' => 'required',
            'dividendCurrency' => 'required',
            'dividendCompanyname' => 'required',
            'dividendJurisdiction' => 'required',
            'dividendNatureBusiness' => 'required',
            'rentalIncomeCurrency' => 'required',
            'rentalTypeProperty' => 'required',
            'investmentsCurrency' => 'required',
            'investmentsDetails' => 'required',
            'otherCurrency' => 'required',
            'otherDetails' => 'required',
            'bankReferenceLetterOption' => 'required',
            'expectNewFundOption' => 'required',
            'outflowFundOption' => 'required',
            'previousCountry' => 'required',
            'previousCountry2' => 'required',
            'dedaredBankruptcyOption' => 'required',
            'convictedCourtOption' => 'required',
            'bannedEligibleOption' => 'required',
            'holdUSACitizenshipOption' => 'required',
            'renounceUSACitizenshipOption' => 'required',
            'holdUSAPassportOption' => 'required',
            'holdUSAGreenCardOption' => 'required',
            'havePermanentResidencyUSAOption' => 'required',
            'haveCareOfAddressUSAOption' => 'required',
            'haveUSAPhoneNumberOption' => 'required',
            'holdPropertyUSAOption' => 'required',
            'grantedPowerAttomeyOption' => 'required',
            'substantialProfessionalActivitiesOption' => 'required',
            'reasonWorkUs' => 'required',
            'yourObjective' => 'required',
            'checkboxConfirmTruth' => 'accepted',
            'checkboxConfirmInform' => 'accepted',
            'checkboxConfirmCheck' => 'accepted',
            'signaturePlace' => 'required',
            'signatureDate' => 'required',
        ];

        if ($this->relatedPepOption == "Yes") {
            $rules['relatedPepDetails'] = 'required';
        }
        if ($this->bankReferenceLetterOption == "No") {
            $rules['bankReferenceLetterDetails'] = 'required';
        }
        if ($this->expectNewFundOption == "Yes") {
            $rules['expectNewFundDetails'] = 'required';
        }
        if ($this->outflowFundOption == "Yes") {
            $rules['outflowFundDetails'] = 'required';
        }
        // if ($this->dedaredBankruptcyOption == "Yes") {
        //     $rules['dedaredBankruptcyDetails'] = 'required';
        // }
        // if ($this->convictedCourtOption == "Yes") {
        //     $rules['convictedCourtDetails'] = 'required';
        // }
        // if ($this->bannedEligibleOption == "Yes") {
        //     $rules['bannedEligibleDetails'] = 'required';
        // }
        // if ($this->holdUSACitizenshipOption == "Yes") {
        //     $rules['holdUSACitizenshipDetails'] = 'required';
        // }
        // if ($this->renounceUSACitizenshipOption == "Yes") {
        //     $rules['renounceUSACitizenshipDetails'] = 'required';
        // }
        // if ($this->holdUSAPassportOption == "Yes") {
        //     $rules['holdUSAPassportDetails'] = 'required';
        // }
        // if ($this->holdUSAGreenCardOption == "Yes") {
        //     $rules['holdUSAGreenCardDetails'] = 'required';
        // }
        // if ($this->havePermanentResidencyUSAOption == "Yes") {
        //     $rules['havePermanentResidencyUSADetails'] = 'required';
        // }
        // if ($this->haveCareOfAddressUSAOption == "Yes") {
        //     $rules['haveCareOfAddressUSADetails'] = 'required';
        // }
        // if ($this->haveUSAPhoneNumberOption == "Yes") {
        //     $rules['haveUSAPhoneNumberDetails'] = 'required';
        // }
        // if ($this->holdPropertyUSAOption == "Yes") {
        //     $rules['holdPropertyUSADetails'] = 'required';
        // }
        // if ($this->grantedPowerAttomeyOption == "Yes") {
        //     $rules['grantedPowerAttomeyDetails'] = 'required';
        // }
        // if ($this->substantialProfessionalActivitiesOption == "Yes") {
        //     $rules['substantialProfessionalActivitiesDetails'] = 'required';
        // }
        $this->validate($rules);

        parent::updateFormData();
    }

    public function render()
    {
        return view('livewire.k-y-c-form-individual');
    }
}
