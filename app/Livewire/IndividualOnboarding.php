<?php

namespace App\Livewire;

use App\Models\FormField;

class IndividualOnboarding extends _BaseOnboarding
{
    // -------------------- FORM TO COMPLETE BY OTHER GROUP -------------------
    public $poiFile;
    public $uuidPoiFile = "abcd90ef-8db6-44d3-92a4-18ffba790155";
    public $urlPoiFile;
    public $poiFormState = 0;
    public $poiRejectReason = "";
    public $isPOIModalVisible = false;

    public $poaFile;
    public $uuidPoaFile = "40466397-893e-4fca-a5ce-de185037ed64";
    public $urlPoaFile;
    public $poaFormState = 0;
    public $poaRejectReason = "";
    public $isPOAModalVisible = false;


    public function mount($customerUuid = null)
    {
        $formId = "c22463ca-5fc7-4447-84fa-685783157969";
        parent::initialize($formId, $customerUuid);

        $poiFileName = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->formid)
            ->where('field_id', $this->uuidPoiFile)
            ->first();

        if ($poiFileName) {
            $this->urlPoiFile = route('documents.download', ['filename' => $poiFileName->value]);
        }

        $poaFileName = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->formid)
            ->where('field_id', $this->uuidPoaFile)
            ->first();

        if ($poaFileName) {
            $this->urlPoaFile = route('documents.download', ['filename' => $poaFileName->value]);
        }

        $poiForm = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->formid)
            ->where('field_id', $this->uuidPoiFile)
            ->first();
        if ($poiForm) {
            $this->poiFormState = $poiForm->state;
            $this->poiRejectReason = $poiForm->reject_reason;
        }

        $poaForm = FormField::where('user_id', $this->customer->id)
            ->where('form_id', $this->formid)
            ->where('field_id', $this->uuidPoaFile)
            ->first();
        if ($poaForm) {
            $this->poaFormState = $poaForm->state;
            $this->poaRejectReason = $poaForm->reject_reason;
        }

    }

    public function uploadPoiFile()
    {
        $this->validate([
            'poiFile' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);
        if ($this->poiFile) {

            $fileName = parent::uploadDocumentFile($this->poiFile, $this->uuidPoiFile, 'Proof of Identity');

            $this->urlPoiFile = route('documents.download', ['filename' => $fileName]);
            $this->poiFormState = 1;

            $this->reset('poiFile');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function uploadPoaFile()
    {
        $this->validate([
            'poaFile' => 'file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480', // 20MB Max
        ]);

        if ($this->poaFile) {

            $fileName = parent::uploadDocumentFile($this->poaFile, $this->uuidPoaFile, 'Proof of Address');

            $this->urlPoaFile = route('documents.download', ['filename' => $fileName]);
            $this->poaFormState = 1;

            $this->reset('poaFile');

            session()->flash('message', 'File uploaded successfully.');
        } else {
            // Handle the case where no file was uploaded...
            session()->flash('error', 'Error.');
        }
    }

    public function acceptPoi() {
        parent::acceptDocument($this->uuidPoiFile);

        $this->poiFormState = 2;
        $this->poiRejectReason = "";

        session()->flash('message', 'Proof of Identity accepted.');
    }

    public function rejectPoi() {
        parent::rejectDocument($this->uuidPoiFile, $this->poiRejectReason);
        $this->poiFormState = -1;
        $this->isPOIModalVisible = false;

        session()->flash('message', 'Proof of Identity rejected.');
    }

    public function acceptPoa() {
        parent::acceptDocument($this->uuidPoaFile);
        $this->poaFormState = 2;
        $this->poaRejectReason = "";

        session()->flash('message', 'Proof of Address accepted.');
    }

    public function rejectPoa() {
        parent::rejectDocument($this->uuidPoaFile, $this->poaRejectReason);
        $this->poaFormState = -1;
        $this->isPOAModalVisible = false;

        session()->flash('message', 'Proof of Address rejected.');
    }

    public function switchIsPOIModalVisible()
    {
        $this->isPOIModalVisible = !$this->isPOIModalVisible;
    }

    public function switchIsPOAModalVisible()
    {
        $this->isPOAModalVisible = !$this->isPOAModalVisible;
    }

    public function render()
    {
        return view('livewire.individual-onboarding');
    }
}
