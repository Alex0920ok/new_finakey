<?php

namespace App\Livewire;

use App\Models\FormField;

class FoundationOnboarding extends _BaseOnboarding
{
    public $documents = [
        "foundationcharter", "founderid", "founderpoa", "beneficiarid", "beneficiarpoa"
    ];

    public $foundationcharter_File;
    public $foundationcharter_uuidFile = "ac62738f-2ccd-4fe9-8b38-4b5a7e7f7f1a";
    public $foundationcharter_urlFile;
    public $foundationcharter_formState = 0;
    public $foundationcharter_rejectReason = "";
    public $foundationcharter_isModalVisible = false;
    public $foundationcharter_label = 'Foundation Charter';

    public $founderid_File;
    public $founderid_uuidFile = "ae35b316-ba93-436d-8131-22771ae19d03";
    public $founderid_urlFile;
    public $founderid_formState = 0;
    public $founderid_rejectReason = "";
    public $founderid_isModalVisible = false;
    public $founderid_label = 'Founder ID copy';

    public $founderpoa_File;
    public $founderpoa_uuidFile = "2c5339e5-4f4f-4f6a-a26c-0a6f63fdc797";
    public $founderpoa_urlFile;
    public $founderpoa_formState = 0;
    public $founderpoa_rejectReason = "";
    public $founderpoa_isModalVisible = false;
    public $founderpoa_label = 'Founder proof of address';

    public $beneficiarid_File;
    public $beneficiarid_uuidFile = "7ff82c28-a87b-4cc5-9e9c-f848bccf6b29";
    public $beneficiarid_urlFile;
    public $beneficiarid_formState = 0;
    public $beneficiarid_rejectReason = "";
    public $beneficiarid_isModalVisible = false;
    public $beneficiarid_label = 'Beneficiaries ID';

    public $beneficiarpoa_File;
    public $beneficiarpoa_uuidFile = "6b59fe17-6ce8-40bc-a976-62ee9718fc7d";
    public $beneficiarpoa_urlFile;
    public $beneficiarpoa_formState = 0;
    public $beneficiarpoa_rejectReason = "";
    public $beneficiarpoa_isModalVisible = false;
    public $beneficiarpoa_label = 'Beneficiaries Proof of address';

    public function mount($customerUuid = null)
    {
        $formId = "747e8432-fefd-49ca-9911-c808cc50829e";
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
    }


    // -------------------------------------------------
    // Foundation Charter
    // -------------------------------------------------
    public function foundationcharter_uploadFile()
    {
        $this->validate([
            'foundationcharter_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->foundationcharter_File) {

            $fileName = parent::uploadDocumentFile($this->foundationcharter_File, $this->foundationcharter_uuidFile, $this->foundationcharter_label);

            $this->foundationcharter_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->foundationcharter_formState = 1;

            $this->reset('foundationcharter_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function foundationcharter_accept() {
        parent::acceptDocument($this->foundationcharter_uuidFile);

        $this->foundationcharter_formState = 2;
        $this->foundationcharter_rejectReason = "";

        session()->flash('message', $this->foundationcharter_label . " accepted.");
    }

    public function foundationcharter_reject() {
        parent::rejectDocument($this->foundationcharter_uuidFile, $this->foundationcharter_rejectReason);
        $this->foundationcharter_formState = -1;
        $this->foundationcharter_isModalVisible = false;

        session()->flash('message', $this->foundationcharter_label . " rejected.");
    }

    public function foundationcharter_switchIsModalVisible()
    {
        $this->foundationcharter_isModalVisible = !$this->foundationcharter_isModalVisible;
    }


    // -------------------------------------------------
    // Founder ID copy
    // -------------------------------------------------
    public function founderid_uploadFile()
    {
        $this->validate([
            'founderid_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->founderid_File) {

            $fileName = parent::uploadDocumentFile($this->founderid_File, $this->founderid_uuidFile, $this->founderid_label);

            $this->founderid_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->founderid_formState = 1;

            $this->reset('founderid_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function founderid_accept() {
        parent::acceptDocument($this->founderid_uuidFile);

        $this->founderid_formState = 2;
        $this->founderid_rejectReason = "";

        session()->flash('message', $this->founderid_label . " accepted.");
    }

    public function founderid_reject() {
        parent::rejectDocument($this->founderid_uuidFile, $this->founderid_rejectReason);
        $this->founderid_formState = -1;
        $this->founderid_isModalVisible = false;

        session()->flash('message', $this->founderid_label . " rejected.");
    }

    public function founderid_switchIsModalVisible()
    {
        $this->founderid_isModalVisible = !$this->founderid_isModalVisible;
    }




    // -------------------------------------------------
    // Founder proof of address
    // -------------------------------------------------
    public function founderpoa_uploadFile()
    {
        $this->validate([
            'founderpoa_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->founderpoa_File) {

            $fileName = parent::uploadDocumentFile($this->founderpoa_File, $this->founderpoa_uuidFile, $this->founderpoa_label);

            $this->founderpoa_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->founderpoa_formState = 1;

            $this->reset('founderpoa_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function founderpoa_accept() {
        parent::acceptDocument($this->founderpoa_uuidFile);

        $this->founderpoa_formState = 2;
        $this->founderpoa_rejectReason = "";

        session()->flash('message', $this->founderpoa_label . " accepted.");
    }

    public function founderpoa_reject() {
        parent::rejectDocument($this->founderpoa_uuidFile, $this->founderpoa_rejectReason);
        $this->founderpoa_formState = -1;
        $this->founderpoa_isModalVisible = false;

        session()->flash('message', $this->founderpoa_label . " rejected.");
    }

    public function founderpoa_switchIsModalVisible()
    {
        $this->founderpoa_isModalVisible = !$this->founderpoa_isModalVisible;
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
    public function beneficiarpoa_uploadFile()
    {
        $this->validate([
            'beneficiarpoa_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->beneficiarpoa_File) {

            $fileName = parent::uploadDocumentFile($this->beneficiarpoa_File, $this->beneficiarpoa_uuidFile, $this->beneficiarpoa_label);

            $this->beneficiarpoa_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->beneficiarpoa_formState = 1;

            $this->reset('beneficiarpoa_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function beneficiarpoa_accept() {
        parent::acceptDocument($this->beneficiarpoa_uuidFile);

        $this->beneficiarpoa_formState = 2;
        $this->beneficiarpoa_rejectReason = "";

        session()->flash('message', $this->beneficiarpoa_label . " accepted.");
    }

    public function beneficiarpoa_reject() {
        parent::rejectDocument($this->beneficiarpoa_uuidFile, $this->beneficiarpoa_rejectReason);
        $this->beneficiarpoa_formState = -1;
        $this->beneficiarpoa_isModalVisible = false;

        session()->flash('message', $this->beneficiarpoa_label . " rejected.");
    }

    public function beneficiarpoa_switchIsModalVisible()
    {
        $this->beneficiarpoa_isModalVisible = !$this->beneficiarpoa_isModalVisible;
    }

    public function render()
    {
        return view('livewire.foundation-onboarding');
    }
}
