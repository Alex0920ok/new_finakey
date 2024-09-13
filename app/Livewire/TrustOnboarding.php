<?php

namespace App\Livewire;

use App\Models\FormField;

class TrustOnboarding extends _BaseOnboarding
{
    public $documents = [
        "settlement", "settlerid", "settlerpoa", "beneficiarid", "beneficiariespoa"
    ];
    public $groupLabels = ["Settlor", "Beneficiaries"];

    public $kycIds = [
        "a5289bd1-c49f-416e-8434-bd9a968f8706",
        "5b8e83a7-ec98-4cc2-a1b2-9a8bf7ee3eeb",
    ];

    public $aIds = [
        "48f3e989-20d9-4fea-ba3d-37e35d06eaaa",
        "386647a1-f0a7-463e-8f7b-fb025ebc3d76",
    ];

    public $settlement_File;
    public $settlement_uuidFile = "02b29df1-8114-4254-a9e9-8e198d1ca036";
    public $settlement_urlFile;
    public $settlement_formState = 0;
    public $settlement_rejectReason = "";
    public $settlement_isModalVisible = false;
    public $settlement_label = 'Settlement';

    public $settlerid_File;
    public $settlerid_uuidFile = "fde74706-83cc-4697-b6c7-0d5823354a34";
    public $settlerid_urlFile;
    public $settlerid_formState = 0;
    public $settlerid_rejectReason = "";
    public $settlerid_isModalVisible = false;
    public $settlerid_label = 'Settlor ID copy';

    public $settlerpoa_File;
    public $settlerpoa_uuidFile = "52f5b51f-e9da-4a62-b6e9-d308b5a9052e";
    public $settlerpoa_urlFile;
    public $settlerpoa_formState = 0;
    public $settlerpoa_rejectReason = "";
    public $settlerpoa_isModalVisible = false;
    public $settlerpoa_label = 'Settlor proof of address';

    public $beneficiarid_File;
    public $beneficiarid_uuidFile = "c96e6382-d6b2-43bc-909d-701f97030b1e";
    public $beneficiarid_urlFile;
    public $beneficiarid_formState = 0;
    public $beneficiarid_rejectReason = "";
    public $beneficiarid_isModalVisible = false;
    public $beneficiarid_label = 'Beneficiaries ID';

    public $beneficiariespoa_File;
    public $beneficiariespoa_uuidFile = "fc372953-a859-4a17-a8b4-885c6d50a71e";
    public $beneficiariespoa_urlFile;
    public $beneficiariespoa_formState = 0;
    public $beneficiariespoa_rejectReason = "";
    public $beneficiariespoa_isModalVisible = false;
    public $beneficiariespoa_label = 'Beneficiaries Proof of address';

    public $kycFormState_0 = 0;
    public $kycRejectReason_0 = "";
    public $kycFormState_1 = 0;
    public $kycRejectReason_1 = "";

    public $formAState_0 = 0;
    public $formARejectReason_0 = "";
    public $formAState_1 = 0;
    public $formARejectReason_1 = "";

    public function mount($customerUuid = null)
    {
        $formId = "42b35c2c-8c43-461a-8f6d-19aac1bb61c6";
        parent::initialize($formId, $customerUuid);

        foreach ($this->documents as $document) {
            $formData = FormField::where('user_id', $this->customer->id)
                ->where('form_id', $this->formid)
                ->where('field_id', $this->{$document . "_uuidFile"})
                ->first();

            if ($formData) {
                $this->{$document . "_urlFile"} = route('documents.download', ['filename' => $formData->value]);
                $this->{$document . "_formState"} = $formData->state;
                $this->{$document . "_rejectReason"} = $formData->reject_reason;
            }
        }

        for ($i = 0 ; $i < 2; $i++) {
            $formData = FormField::where('user_id', $this->customer->id)
                ->where('form_id', $this->kycIds[$i])
                ->first();
            if ($formData) {
                $this->{"kycFormState_$i"} = $formData->state;
                $this->{"kycRejectReason_$i"} = $formData->reject_reason;
            }

            $formData = FormField::where('user_id', $this->customer->id)
                ->where('form_id', $this->aIds[$i])
                ->first();
            if ($formData) {
                $this->{"formAState_$i"} = $formData->state;
                $this->{"formARejectReason_$i"} = $formData->reject_reason;
            }
        }


    }

    // -------------------------------------------------
    // Settlement
    // -------------------------------------------------
    public function settlement_uploadFile()
    {
        $this->validate([
            'settlement_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->settlement_File) {

            $fileName = parent::uploadDocumentFile($this->settlement_File, $this->settlement_uuidFile, $this->settlement_label);

            $this->settlement_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->settlement_formState = 1;

            $this->reset('settlement_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function settlement_accept() {
        parent::acceptDocument($this->settlement_uuidFile);

        $this->settlement_formState = 2;
        $this->settlement_rejectReason = "";

        session()->flash('message', $this->settlement_label . " accepted.");
    }

    public function settlement_reject() {
        parent::rejectDocument($this->settlement_uuidFile, $this->settlement_rejectReason);
        $this->settlement_formState = -1;
        $this->settlement_isModalVisible = false;

        session()->flash('message', $this->settlement_label . " rejected.");
    }

    public function settlement_switchIsModalVisible()
    {
        $this->settlement_isModalVisible = !$this->settlement_isModalVisible;
    }



    // -------------------------------------------------
    // Settlor ID copy
    // -------------------------------------------------
    public function settlerid_uploadFile()
    {
        $this->validate([
            'settlerid_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->settlerid_File) {

            $fileName = parent::uploadDocumentFile($this->settlerid_File, $this->settlerid_uuidFile, $this->settlerid_label);

            $this->settlerid_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->settlerid_formState = 1;

            $this->reset('settlerid_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function settlerid_accept() {
        parent::acceptDocument($this->settlerid_uuidFile);

        $this->settlerid_formState = 2;
        $this->settlerid_rejectReason = "";

        session()->flash('message', $this->settlerid_label . " accepted.");
    }

    public function settlerid_reject() {
        parent::rejectDocument($this->settlerid_uuidFile, $this->settlerid_rejectReason);
        $this->settlerid_formState = -1;
        $this->settlerid_isModalVisible = false;

        session()->flash('message', $this->settlerid_label . " rejected.");
    }

    public function settlerid_switchIsModalVisible()
    {
        $this->settlerid_isModalVisible = !$this->settlerid_isModalVisible;
    }



    // -------------------------------------------------
    // Settlor proof of address
    // -------------------------------------------------
    public function settlerpoa_uploadFile()
    {
        $this->validate([
            'settlerpoa_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->settlerpoa_File) {

            $fileName = parent::uploadDocumentFile($this->settlerpoa_File, $this->settlerpoa_uuidFile, $this->settlerpoa_label);

            $this->settlerpoa_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->settlerpoa_formState = 1;

            $this->reset('settlerpoa_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function settlerpoa_accept() {
        parent::acceptDocument($this->settlerpoa_uuidFile);

        $this->settlerpoa_formState = 2;
        $this->settlerpoa_rejectReason = "";

        session()->flash('message', $this->settlerpoa_label . " accepted.");
    }

    public function settlerpoa_reject() {
        parent::rejectDocument($this->settlerpoa_uuidFile, $this->settlerpoa_rejectReason);
        $this->settlerpoa_formState = -1;
        $this->settlerpoa_isModalVisible = false;

        session()->flash('message', $this->settlerpoa_label . " rejected.");
    }

    public function settlerpoa_switchIsModalVisible()
    {
        $this->settlerpoa_isModalVisible = !$this->settlerpoa_isModalVisible;
    }



    // -------------------------------------------------
    // Beneficiaries ID
    // -------------------------------------------------
    public function beneficiarid_uploadFile()
    {
        $this->validate([
            'beneficiarid_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->beneficiarid_File) {

            $fileName = parent::uploadDocumentFile($this->beneficiarid_File, $this->beneficiarid_uuidFile, $this->beneficiarid_label);

            $this->beneficiarid_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->beneficiarid_formState = 1;

            $this->reset('beneficiarid_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function beneficiarid_accept() {
        parent::acceptDocument($this->beneficiarid_uuidFile);

        $this->beneficiarid_formState = 2;
        $this->beneficiarid_rejectReason = "";

        session()->flash('message', $this->beneficiarid_label . " accepted.");
    }

    public function beneficiarid_reject() {
        parent::rejectDocument($this->beneficiarid_uuidFile, $this->beneficiarid_rejectReason);
        $this->beneficiarid_formState = -1;
        $this->beneficiarid_isModalVisible = false;

        session()->flash('message', $this->beneficiarid_label . " rejected.");
    }

    public function beneficiarid_switchIsModalVisible()
    {
        $this->beneficiarid_isModalVisible = !$this->beneficiarid_isModalVisible;
    }


    // -------------------------------------------------
    // Beneficiaries Proof of address
    // -------------------------------------------------
    public function beneficiariespoa_uploadFile()
    {
        $this->validate([
            'beneficiariespoa_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->beneficiariespoa_File) {

            $fileName = parent::uploadDocumentFile($this->beneficiariespoa_File, $this->beneficiariespoa_uuidFile, $this->beneficiariespoa_label);

            $this->beneficiariespoa_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->beneficiariespoa_formState = 1;

            $this->reset('beneficiariespoa_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function beneficiariespoa_accept() {
        parent::acceptDocument($this->beneficiariespoa_uuidFile);

        $this->beneficiariespoa_formState = 2;
        $this->beneficiariespoa_rejectReason = "";

        session()->flash('message', $this->beneficiariespoa_label . " accepted.");
    }

    public function beneficiariespoa_reject() {
        parent::rejectDocument($this->beneficiariespoa_uuidFile, $this->beneficiariespoa_rejectReason);
        $this->beneficiariespoa_formState = -1;
        $this->beneficiariespoa_isModalVisible = false;

        session()->flash('message', $this->beneficiariespoa_label . " rejected.");
    }

    public function beneficiariespoa_switchIsModalVisible()
    {
        $this->beneficiariespoa_isModalVisible = !$this->beneficiariespoa_isModalVisible;
    }

    public function render()
    {
        return view('livewire.trust-onboarding');
    }
}
