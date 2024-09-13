<?php

namespace App\Livewire;

use App\Models\FormField;

class CorporateOnboarding extends _BaseOnboarding
{
    public $documents = [
        "poc", "shareholders", "did", "dpoa", "boid", "bopoa", "cpid", "cppoa", "controlpid", "controlppoa"
    ];

    public $groupLabels = ["Beneficial", "Contracting", "Controlling"];

    public $kycIds = [
        "86c0b383-697a-439c-bc98-125de2158759",
        "2d50692c-0800-4691-8304-540ff1a49817",
        "6d8bc304-55b8-4803-8db5-a3c1bf05fec7"
    ];

    public $aIds = [
        "b508ed7f-c506-4856-8880-82a97e663bf4",
        "fa0d9383-3fbc-401e-a8b9-1341e8c027a4",
        "d604a0a6-e195-41ce-ac9f-f3975601f8e4"
    ];

    public $poc_File;
    public $poc_uuidFile = "c8805f3f-7698-400f-b96e-8fe4955044d4";
    public $poc_urlFile;
    public $poc_formState = 0;
    public $poc_rejectReason = "";
    public $poc_isModalVisible = false;
    public $poc_label = 'Proof of Company. Existence: *Certificate of Incorporation, *Articles of Association';

    public $shareholders_File;
    public $shareholders_uuidFile = "61214142-c91d-46aa-9210-d2bb96a47398";
    public $shareholders_urlFile;
    public $shareholders_formState = 0;
    public $shareholders_rejectReason = "";
    public $shareholders_isModalVisible = false;
    public $shareholders_label = 'Shareholders registry';

    public $did_File;
    public $did_uuidFile = "d253fc13-3fc9-43cb-a70d-dd1cfeadef8f";
    public $did_urlFile;
    public $did_formState = 0;
    public $did_rejectReason = "";
    public $did_isModalVisible = false;
    public $did_label = "Directors' ID copies";

    public $dpoa_File;
    public $dpoa_uuidFile = "a6dc2b6b-005c-44ab-951d-6cd06bab4455";
    public $dpoa_urlFile;
    public $dpoa_formState = 0;
    public $dpoa_rejectReason = "";
    public $dpoa_isModalVisible = false;
    public $dpoa_label = "Directors' proof of address";

    public $boid_File;
    public $boid_uuidFile = "6995c5b4-5e24-4385-9c8e-9c8451477906";
    public $boid_urlFile;
    public $boid_formState = 0;
    public $boid_rejectReason = "";
    public $boid_isModalVisible = false;
    public $boid_label = 'Beneficial Owners IDs';

    public $bopoa_File;
    public $bopoa_uuidFile = "75a7e95f-2d55-4587-9950-b96a0cb33b88";
    public $bopoa_urlFile;
    public $bopoa_formState = 0;
    public $bopoa_rejectReason = "";
    public $bopoa_isModalVisible = false;
    public $bopoa_label = 'BOs Proof of Address';

    public $cpid_File;
    public $cpid_uuidFile = "8608382d-a496-46be-bcaf-462763839c71";
    public $cpid_urlFile;
    public $cpid_formState = 0;
    public $cpid_rejectReason = "";
    public $cpid_isModalVisible = false;
    public $cpid_label = 'Contracting Party ID';

    public $cppoa_File;
    public $cppoa_uuidFile = "6b60ad3a-0044-46be-a1a3-001b4b9bc82f";
    public $cppoa_urlFile;
    public $cppoa_formState = 0;
    public $cppoa_rejectReason = "";
    public $cppoa_isModalVisible = false;
    public $cppoa_label = 'Contracting Party proof of address';

    public $controlpid_File;
    public $controlpid_uuidFile = "2a74b532-82b7-4c46-a25b-899e6d56f985";
    public $controlpid_urlFile;
    public $controlpid_formState = 0;
    public $controlpid_rejectReason = "";
    public $controlpid_isModalVisible = false;
    public $controlpid_label = 'Controlling Person ID';

    public $controlppoa_File;
    public $controlppoa_uuidFile = "5e225459-503c-4b5b-9343-6219fa1d77eb";
    public $controlppoa_urlFile;
    public $controlppoa_formState = 0;
    public $controlppoa_rejectReason = "";
    public $controlppoa_isModalVisible = false;
    public $controlppoa_label = 'Controlling Person proof of address';

    public $kycFormState_0 = 0;
    public $kycRejectReason_0 = "";
    public $kycFormState_1 = 0;
    public $kycRejectReason_1 = "";
    public $kycFormState_2 = 0;
    public $kycRejectReason_2 = "";

    public $formAState_0 = 0;
    public $formARejectReason_0 = "";
    public $formAState_1 = 0;
    public $formARejectReason_1 = "";
    public $formAState_2 = 0;
    public $formARejectReason_2 = "";

    public function mount($customerUuid = null)
    {
        $formId = "01ce8f4f-784b-4630-8b58-e11ad9d8b695";
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

        for ($i = 0 ; $i < 3; $i++) {
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
    // Proof of Company
    // -------------------------------------------------
    public function poc_uploadFile()
    {
        $this->validate([
            'poc_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->poc_File) {

            $fileName = parent::uploadDocumentFile($this->poc_File, $this->poc_uuidFile, $this->poc_label);

            $this->poc_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->poc_formState = 1;

            $this->reset('poc_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function poc_accept() {
        parent::acceptDocument($this->poc_uuidFile);

        $this->poc_formState = 2;
        $this->poc_rejectReason = "";

        session()->flash('message', $this->poc_label . " accepted.");
    }

    public function poc_reject() {
        parent::rejectDocument($this->poc_uuidFile, $this->poc_rejectReason);
        $this->poc_formState = -1;
        $this->poc_isModalVisible = false;

        session()->flash('message', $this->poc_label . " rejected.");
    }

    public function poc_switchIsModalVisible()
    {
        $this->poc_isModalVisible = !$this->poc_isModalVisible;
    }

    // -------------------------------------------------
    // Shareholders registry
    // -------------------------------------------------
    public function shareholders_uploadFile()
    {
        $this->validate([
            'shareholders_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->shareholders_File) {

            $fileName = parent::uploadDocumentFile($this->shareholders_File, $this->shareholders_uuidFile, $this->shareholders_label);

            $this->shareholders_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->shareholders_formState = 1;

            $this->reset('shareholders_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function shareholders_accept() {
        parent::acceptDocument($this->shareholders_uuidFile);

        $this->shareholders_formState = 2;
        $this->shareholders_rejectReason = "";

        session()->flash('message', $this->shareholders_label . " accepted.");
    }

    public function shareholders_reject() {
        parent::rejectDocument($this->shareholders_uuidFile, $this->shareholders_rejectReason);
        $this->shareholders_formState = -1;
        $this->shareholders_isModalVisible = false;

        session()->flash('message', $this->shareholders_label . " rejected.");
    }

    public function shareholders_switchIsModalVisible()
    {
        $this->shareholders_isModalVisible = !$this->shareholders_isModalVisible;
    }


        // -------------------------------------------------
    // Directors' ID copies
    // -------------------------------------------------
    public function did_uploadFile()
    {
        $this->validate([
            'did_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->did_File) {

            $fileName = parent::uploadDocumentFile($this->did_File, $this->did_uuidFile, $this->did_label);

            $this->did_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->did_formState = 1;

            $this->reset('did_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function did_accept() {
        parent::acceptDocument($this->did_uuidFile);

        $this->did_formState = 2;
        $this->did_rejectReason = "";

        session()->flash('message', $this->did_label . " accepted.");
    }

    public function did_reject() {
        parent::rejectDocument($this->did_uuidFile, $this->did_rejectReason);
        $this->did_formState = -1;
        $this->did_isModalVisible = false;

        session()->flash('message', $this->did_label . " rejected.");
    }

    public function did_switchIsModalVisible()
    {
        $this->did_isModalVisible = !$this->did_isModalVisible;
    }



        // -------------------------------------------------
    // Directors' proof of address
    // -------------------------------------------------
    public function dpoa_uploadFile()
    {
        $this->validate([
            'dpoa_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->dpoa_File) {

            $fileName = parent::uploadDocumentFile($this->dpoa_File, $this->dpoa_uuidFile, $this->dpoa_label);

            $this->dpoa_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->dpoa_formState = 1;

            $this->reset('dpoa_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function dpoa_accept() {
        parent::acceptDocument($this->dpoa_uuidFile);

        $this->dpoa_formState = 2;
        $this->dpoa_rejectReason = "";

        session()->flash('message', $this->dpoa_label . " accepted.");
    }

    public function dpoa_reject() {
        parent::rejectDocument($this->dpoa_uuidFile, $this->dpoa_rejectReason);
        $this->dpoa_formState = -1;
        $this->dpoa_isModalVisible = false;

        session()->flash('message', $this->dpoa_label . " rejected.");
    }

    public function dpoa_switchIsModalVisible()
    {
        $this->dpoa_isModalVisible = !$this->dpoa_isModalVisible;
    }


    // -------------------------------------------------
    // Beneficial Owners IDs
    // -------------------------------------------------
    public function boid_uploadFile()
    {
        $this->validate([
            'boid_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->boid_File) {

            $fileName = parent::uploadDocumentFile($this->boid_File, $this->boid_uuidFile, $this->boid_label);

            $this->boid_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->boid_formState = 1;

            $this->reset('boid_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function boid_accept() {
        parent::acceptDocument($this->boid_uuidFile);

        $this->boid_formState = 2;
        $this->boid_rejectReason = "";

        session()->flash('message', $this->boid_label . " accepted.");
    }

    public function boid_reject() {
        parent::rejectDocument($this->boid_uuidFile, $this->boid_rejectReason);
        $this->boid_formState = -1;
        $this->boid_isModalVisible = false;

        session()->flash('message', $this->boid_label . " rejected.");
    }

    public function boid_switchIsModalVisible()
    {
        $this->boid_isModalVisible = !$this->boid_isModalVisible;
    }

        // -------------------------------------------------
    // BOs Proof of Address
    // -------------------------------------------------
    public function bopoa_uploadFile()
    {
        $this->validate([
            'bopoa_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->bopoa_File) {

            $fileName = parent::uploadDocumentFile($this->bopoa_File, $this->bopoa_uuidFile, $this->bopoa_label);

            $this->bopoa_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->bopoa_formState = 1;

            $this->reset('bopoa_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function bopoa_accept() {
        parent::acceptDocument($this->bopoa_uuidFile);

        $this->bopoa_formState = 2;
        $this->bopoa_rejectReason = "";

        session()->flash('message', $this->bopoa_label . " accepted.");
    }

    public function bopoa_reject() {
        parent::rejectDocument($this->bopoa_uuidFile, $this->bopoa_rejectReason);
        $this->bopoa_formState = -1;
        $this->bopoa_isModalVisible = false;

        session()->flash('message', $this->bopoa_label . " rejected.");
    }

    public function bopoa_switchIsModalVisible()
    {
        $this->bopoa_isModalVisible = !$this->bopoa_isModalVisible;
    }


        // -------------------------------------------------
    // Contracting Party ID
    // -------------------------------------------------
    public function cpid_uploadFile()
    {
        $this->validate([
            'cpid_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->cpid_File) {

            $fileName = parent::uploadDocumentFile($this->cpid_File, $this->cpid_uuidFile, $this->cpid_label);

            $this->cpid_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->cpid_formState = 1;

            $this->reset('cpid_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function cpid_accept() {
        parent::acceptDocument($this->cpid_uuidFile);

        $this->cpid_formState = 2;
        $this->cpid_rejectReason = "";

        session()->flash('message', $this->cpid_label . " accepted.");
    }

    public function cpid_reject() {
        parent::rejectDocument($this->cpid_uuidFile, $this->cpid_rejectReason);
        $this->cpid_formState = -1;
        $this->cpid_isModalVisible = false;

        session()->flash('message', $this->cpid_label . " rejected.");
    }

    public function cpid_switchIsModalVisible()
    {
        $this->cpid_isModalVisible = !$this->cpid_isModalVisible;
    }

        // -------------------------------------------------
    // Contracting Party proof of address
    // -------------------------------------------------
    public function cppoa_uploadFile()
    {
        $this->validate([
            'cppoa_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->cppoa_File) {

            $fileName = parent::uploadDocumentFile($this->cppoa_File, $this->cppoa_uuidFile, $this->cppoa_label);

            $this->cppoa_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->cppoa_formState = 1;

            $this->reset('cppoa_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function cppoa_accept() {
        parent::acceptDocument($this->cppoa_uuidFile);

        $this->cppoa_formState = 2;
        $this->cppoa_rejectReason = "";

        session()->flash('message', $this->cppoa_label . " accepted.");
    }

    public function cppoa_reject() {
        parent::rejectDocument($this->cppoa_uuidFile, $this->cppoa_rejectReason);
        $this->cppoa_formState = -1;
        $this->cppoa_isModalVisible = false;

        session()->flash('message', $this->cppoa_label . " rejected.");
    }

    public function cppoa_switchIsModalVisible()
    {
        $this->cppoa_isModalVisible = !$this->cppoa_isModalVisible;
    }


    // -------------------------------------------------
    // Controlling Person ID
    // -------------------------------------------------
    public function controlpid_uploadFile()
    {
        $this->validate([
            'controlpid_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->controlpid_File) {

            $fileName = parent::uploadDocumentFile($this->controlpid_File, $this->controlpid_uuidFile, $this->controlpid_label);

            $this->controlpid_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->controlpid_formState = 1;

            $this->reset('controlpid_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function controlpid_accept() {
        parent::acceptDocument($this->controlpid_uuidFile);

        $this->controlpid_formState = 2;
        $this->controlpid_rejectReason = "";

        session()->flash('message', $this->controlpid_label . " accepted.");
    }

    public function controlpid_reject() {
        parent::rejectDocument($this->controlpid_uuidFile, $this->controlpid_rejectReason);
        $this->controlpid_formState = -1;
        $this->controlpid_isModalVisible = false;

        session()->flash('message', $this->controlpid_label . " rejected.");
    }

    public function controlpid_switchIsModalVisible()
    {
        $this->controlpid_isModalVisible = !$this->controlpid_isModalVisible;
    }


        // -------------------------------------------------
    // Controlling Person proof of address
    // -------------------------------------------------
    public function controlppoa_uploadFile()
    {
        $this->validate([
            'controlppoa_File' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->controlppoa_File) {

            $fileName = parent::uploadDocumentFile($this->controlppoa_File, $this->controlppoa_uuidFile, $this->controlppoa_label);

            $this->controlppoa_urlFile = route('documents.download', ['filename' => $fileName]);
            $this->controlppoa_formState = 1;

            $this->reset('controlppoa_File');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function controlppoa_accept() {
        parent::acceptDocument($this->controlppoa_uuidFile);

        $this->controlppoa_formState = 2;
        $this->controlppoa_rejectReason = "";

        session()->flash('message', $this->controlppoa_label . " accepted.");
    }

    public function controlppoa_reject() {
        parent::rejectDocument($this->controlppoa_uuidFile, $this->controlppoa_rejectReason);
        $this->controlppoa_formState = -1;
        $this->controlppoa_isModalVisible = false;

        session()->flash('message', $this->controlppoa_label . " rejected.");
    }

    public function controlppoa_switchIsModalVisible()
    {
        $this->controlppoa_isModalVisible = !$this->controlppoa_isModalVisible;
    }
    public function render()
    {
        return view('livewire.corporate-onboarding');
    }
}
