<div>
    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session("message") }}
        </div>
    @endif

    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th></th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Documents and Forms
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Link
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Action
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Completed by Client
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Reviewed by RM
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Reviewed by Swisscomply
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            {{-- POI --}}
            <tr class="text-gray-700">
                <th rowspan="5" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    To complete by client
                </th>
                <td class="border px-4 py-2">Proof of Identity: National ID, Passport, Driver's Licence, Foreign ID card.</td>
                <td class="border px-4 py-2">
                    @if(!empty($urlPoiFile))
                        <a href="{{ $urlPoiFile }}" target="_blank" class="text-blue-500 underline hover:text-blue-700">Download File</a>
                    @endif
                </td>
                <td class="border px-4 py-2 flex justify-center items-center">
                    @if (auth()->user()->type == 0)
                        <form wire:submit="uploadPoiFile">
                            <input type="file" wire:model="poiFile">
                            <div wire:loading wire:target="poiFile">Uploading...</div>

                            @error('poiFile')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror

                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Save</button>
                        </form>
                    @elseif(!empty($urlPoiFile))
                        <button wire:click="acceptPoi" class="px-2 py-1 bg-green-500 text-white rounded hover:bg-green-700 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </button>
                        <!-- <button wire:click="rejectPoi" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button> -->
                        <!-- Button trigger modal -->
                        <button wire:click="switchIsPOIModalVisible" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                        @if ($isPOIModalVisible)
                            <!-- Modal -->
                            <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                                    <!-- Modal content -->
                                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                            <div class="sm:flex sm:items-start">
                                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                                        Reject POI
                                                    </h3>
                                                    <div class="w-full mt-2">
                                                        <textarea wire:model="poiRejectReason" class="w-full h-20 border rounded px-2 py-1" placeholder="Enter reject reason"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                            <button type="button" wire:click="rejectPoi" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                Submit
                                            </button>
                                            <button wire:click="switchIsPOIModalVisible" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                </td>
                <td class="border px-4 py-2 justify-center">
                    @if(!empty($urlPoiFile))
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    @endif
                </td>
                <td class="border px-4 py-2 justify-center">
                    @if(!empty($urlPoiFile) && $poiFormState >= 2)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    @elseif(!empty($urlPoiFile) && $poiFormState == -1)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    @endif
                    {{ $poiRejectReason }}
                </td>
                <td class="border px-4 py-2"></td>
            </tr>
            {{-- POA --}}
            <tr class="text-gray-700">
                <td class="border px-4 py-2">Proof of address: Utility Bill, Bank Statement, Rental Agreement</td>
                <td class="border px-4 py-2">
                    @if(!empty($urlPoaFile))
                        <a href="{{ $urlPoaFile }}" target="_blank" class="text-blue-500 underline hover:text-blue-700">Download File</a>
                    @endif
                </td>
                <td class="border px-4 py-2 flex justify-center items-center">
                    @if (auth()->user()->type == 0)
                        <form wire:submit="uploadPoaFile">
                            <input type="file" wire:model="poaFile">
                            <div wire:loading wire:target="poaFile">Uploading...</div>

                            @error('poaFile')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror

                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Save</button>
                        </form>
                    @elseif(!empty($urlPoaFile))
                        <button wire:click="acceptPoa" class="px-2 py-1 bg-green-500 text-white rounded hover:bg-green-700 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </button>
                        <!-- <button wire:click="rejectPoa" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button> -->
                        <button wire:click="switchIsPOAModalVisible" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                        @if ($isPOAModalVisible)
                            <!-- Modal -->
                            <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                                    <!-- Modal content -->
                                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                            <div class="sm:flex sm:items-start">
                                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                                        Reject POA
                                                    </h3>
                                                    <div class="w-full mt-2">
                                                        <textarea wire:model="poaRejectReason" class="w-full h-20 border rounded px-2 py-1" placeholder="Enter reject reason"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                            <button type="button" wire:click="rejectPoa" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                Submit
                                            </button>
                                            <button wire:click="switchIsPOAModalVisible" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                </td>
                <td class="border px-4 py-2 justify-center">
                    @if(!empty($urlPoaFile))
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    @endif
                </td>
                <td class="border px-4 py-2 justify-center">
                    @if(!empty($urlPoaFile) && $poaFormState >= 2)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    @elseif(!empty($urlPoaFile) && $poaFormState == -1)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    @endif
                    {{ $poaRejectReason }}
                </td>
                <td class="border px-4 py-2"></td>
            </tr>

            {{-- 3. KYC form - individuals --}}
            <tr class="text-gray-700">
                <td class="border px-4 py-2">
                    3. KYC form - individuals
                    @if($kycFormState >= 1)
                        <i class="fas fa-file-pdf" wire:click="exportPDF('{{$kycFormUuid}}', 'livewire.partials.partial-k-y-c-form-individual', '3. KYC form - individuals')" style="cursor: pointer; float: right;"></i>
                    @endif
                </td>
                <td class="border px-4 py-2">
                    @if($kycFormState >= 2 && in_array(auth()->user()->type, [0]))
                        Accepted
                    @else
                        <a href="{{ route('kyc-form-individual', ['customerUuid' => $customerUuid]) }}">Go to form</a>
                    @endif
                </td>
                <td class="border px-4 py-2"></td>
                <td class="border px-4 py-2 justify-center">
                    @if($kycFormState >= 1)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    @endif
                </td>
                <td class="border px-4 py-2 justify-center">
                    @if($kycFormState >= 2)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    @elseif($kycFormState == -1)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    @endif
                    {{ $kycRejectReason }}
                </td>
                <td class="border px-4 py-2"></td>
            </tr>


            {{-- 5. Form A --}}
            <tr class="text-gray-700">
                <td class="border px-4 py-2">
                    5. Form A
                    @if($formAState >= 1)
                        <i class="fas fa-file-pdf" wire:click="exportPDF('{{$formAUuid}}', 'livewire.partials.form-a', '5. A	Declaration of identity of the beneficial owner')" style="cursor: pointer; float: right;"></i>
                    @endif
                </td>
                <td class="border px-4 py-2">
                    @if($formAState >= 2 && in_array(auth()->user()->type, [0]))
                        Accepted
                    @else
                        <a href="{{ route('form-a', ['customerUuid' => $customerUuid]) }}">Go to form</a>
                    @endif
                </td>
                <td class="border px-4 py-2"></td>
                <td class="border px-4 py-2 justify-center">
                    @if($formAState >= 1)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    @endif
                </td>
                <td class="border px-4 py-2 justify-center">
                    @if($formAState >= 2)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    @elseif($formAState == -1)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    @endif
                    {{ $formARejectReason }}
                </td>
                <td class="border px-4 py-2"></td>
            </tr>

            {{-- 15. Confirmation of Tax Status --}}
            <tr class="text-gray-700">
                <td class="border px-4 py-2">
                    15. Confirmation of Tax Status
                    @if($formTaxConfirmState >= 1)
                        <i class="fas fa-file-pdf" wire:click="exportPDF('{{$formTaxConfirmUuid}}', 'livewire.partials.form-tax-confirm', '15. Confirmation of Tax Status')" style="cursor: pointer; float: right;"></i>
                    @endif
                </td>
                <td class="border px-4 py-2">
                    @if($formTaxConfirmState >= 2 && in_array(auth()->user()->type, [0]))
                        Accepted
                    @else
                        <a href="{{ route('form-tax-confirm', ['customerUuid' => $customerUuid]) }}">Go to form</a>
                    @endif
                </td>
                <td class="border px-4 py-2"></td>
                <td class="border px-4 py-2 justify-center">
                    @if($formTaxConfirmState >= 1)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    @endif
                </td>
                <td class="border px-4 py-2 justify-center">
                    @if($formTaxConfirmState >= 2)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    @elseif($formTaxConfirmState == -1)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    @endif
                    {{ $formTaxConfirmRejectReason }}
                </td>
                <td class="border px-4 py-2"></td>
            </tr>

            @if (auth()->user()->type == 1)
                <tr class="text-gray-700">
                    <th rowspan="3" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        To complete by RM
                    </th>
                    <td class="border px-4 py-2">
                        1. RM - KYC form
                        <i class="fas fa-file-pdf" wire:click="exportPDF('{{$formKYCRMUuid}}', 'livewire.partials.k-y-c-form-r-m', '1. RM - KYC Client Profile')" style="cursor: pointer; float: right;"></i>
                    </td>
                    <td class="border px-4 py-2"><a href="{{ route('kyc-form-r-m', ['customerUuid' => $customerUuid]) }}">Go to form</a></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                </tr>
                <tr class="text-gray-700">
                    <td class="border px-4 py-2">
                        4. AML Risk Profile
                        <i class="fas fa-file-pdf" wire:click="exportPDF('{{$formAMLUuid}}', 'livewire.partials.a-m-l-risk-profile', '4. AML Risk Profile')" style="cursor: pointer; float: right;"></i>
                    </td>
                    <td class="border px-4 py-2"><a href="{{ route('aml-risk-profile', ['customerUuid' => $customerUuid]) }}">Go to form</a></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                </tr>
                <tr class="text-gray-700">
                    <td class="border px-4 py-2">
                        14. Mandate Agreement
                        <i class="fas fa-file-pdf" wire:click="exportPDF('{{$formMandateUuid}}', 'livewire.partials.mandate-agreement', '14. MANDATE AGREEMENT TRUST')" style="cursor: pointer; float: right;"></i>
                    </td>
                    <td class="border px-4 py-2"><a href="{{ route('mandate-agreement', ['customerUuid' => $customerUuid]) }}">Go to form</a></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                    <td class="border px-4 py-2"></td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
