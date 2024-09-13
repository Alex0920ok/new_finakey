<div>
    <h1>MANDATE AGREEMENT (TRUST)</h1>

    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr>
            <td style="width: 10%; word-wrap: break-word; padding: 10px; vertical-align: top">
                <b>BETWEEN</b>
            </td>
            <td style="word-wrap: break-word;padding: 10px; ">
                @if($isPDF)
                    <p>{{ $clientName ?? "" }}</p>
                @else
                    <input type="text" placeholder="Client Name" id="clientName" wire:model="clientName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('clientName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif

                @if($isPDF)
                    <p>{{ $clientAddress ?? "" }}</p>
                @else
                    <input type="text" placeholder="Client Address" id="clientAddress" wire:model="clientAddress" class="mt-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('clientAddress') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif

                <p>(hereinafter “the Client”) </p>
            </td>
        </tr>
        <tr>
            <td style="width: 10%; word-wrap: break-word; padding: 10px; ">
                <b>AND</b>
            </td>
            <td style="word-wrap: break-word;padding: 10px; ">
                <p><b>FINAKEY S.A.</b></p>
                <p>Place de Saint Gervais 1</p>
                <p>CH - 1201 Geneva</p>
                <p>(hereinafter “the Mandatary”)</p>
            </td>
        </tr>
    </table>

    <div style="padding: 10px; padding-bottom: 20px; margin-top: 30px; border-bottom: 2px solid #888">
        <p><b>IT IS AGREED AS FOLLOWS:</b></p>
        <p>	With Schedules I and our General Terms and Conditions (“GTC”)</p>
    </div>

    <div style="padding: 10px; margin-top: 30px">
        <h2>1. PURPOSE</h2>
        <div style="border: 1px solid #888; padding: 10px; margin-left: 20px">
            <span>The Client wishes to</span>
            @if($isPDF)
                &nbsp;<span>{{ $purpose_1 ?? "" }}</span>
            @else
                <select wire:model="purpose_1" class="shadow appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Choose an item</option>
                    <option>settle</option>
                    <option>transfer the management of</option>
                </select>
                @error('purpose_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            @endif
            &nbsp;<span>a trust and requires the services of the MANDATARY for the preparation of the necessary documentation for the</span>
            @if($isPDF)
                &nbsp;<span>{{ $purpose_2 ?? "" }}</span>
            @else
                <select wire:model="purpose_2" class="shadow appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Choose an item</option>
                    <option>settlement</option>
                    <option>take over</option>
                </select>
                @error('purpose_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            @endif
            &nbsp;<span>process.</span>
        </div>
    </div>

    <div style="padding: 10px; margin-top: 30px">
        <h2>2. SCOPE OF SERVICES</h2>
        <table style="width: 100%; border-collapse: collapse; margin-left: 20px">
            <tr>
                <td style="border: 1px solid #888; word-wrap: break-word;padding: 10px; ">
                    The Mandatary agrees to provide the following services to the Client:
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #888; word-wrap: break-word;padding: 10px; ">
                    <ul style="padding-left: 20px;list-style: disc;">
                        <li>
                            <span>Preparation of documents required for the </span>
                            @if($isPDF)
                                &nbsp;<span>{{ $scopeService_1 ?? "" }}</span>
                            @else
                                <select wire:model="scopeService_1" class="shadow appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">Choose an item</option>
                                    <option>settlement</option>
                                    <option>take over</option>
                                </select>
                                @error('scopeService_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                            @endif
                            &nbsp;<span>of the trust.</span>
                        </li>
                        <li>
                            <span>Legal advice and guidance throughout the </span>
                            @if($isPDF)
                                &nbsp;<span>{{ $scopeService_2 ?? "" }}</span>
                            @else
                                <select wire:model="scopeService_2" class="shadow appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">Choose an item</option>
                                    <option>settlement</option>
                                    <option>take over</option>
                                </select>
                                @error('scopeService_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                            @endif
                            &nbsp;<span>process.</span>
                        </li>
                        <li>
                            <span>Any other service required in relation to the </span>
                            @if($isPDF)
                                &nbsp;<span>{{ $scopeService_3 ?? "" }}</span>
                            @else
                                <select wire:model="scopeService_3" class="shadow appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">Choose an item</option>
                                    <option>settlement</option>
                                    <option>take over</option>
                                </select>
                                @error('scopeService_3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                            @endif
                            &nbsp;<span>, including but not limited to the preparation of required KYC, contact with banks and advisers, etc.</span>
                        </li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>

    <div style="padding: 10px; margin-top: 30px">
        <h2>3. OTHER SERVICES</h2>
        <table style="width: 100%; border-collapse: collapse; margin-left: 20px">
            <tr>
                <td style="border: 1px solid #888; word-wrap: break-word;padding: 10px; " colspan="3">
                    The Mandatary agrees to provide the following additional services to the Client:
                </td>
            </tr>
            <tr>
                <td style="width: 60%; border: 1px solid #888; word-wrap: break-word;padding: 10px; ">
                    <ul style="padding-left: 20px;list-style: disc;">
                        <li>
                            Accounting
                        </li>
                    </ul>
                </td>
                <td style="width: 20%; border: 1px solid #888; word-wrap: break-word;padding: 10px; ">
                    <input type="radio" id="optionAccounting-Yes" name="optionAccounting" value="Yes" wire:model="optionAccounting" @if($isPDF && $optionAccounting == "Yes") checked @endif>
                    <label for="optionAccounting-Yes">Yes</label>
                    @error('optionAccounting') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                </td>
                <td style="width: 20%; border: 1px solid #888; word-wrap: break-word;padding: 10px; ">
                    <input style="margin-left: 20px" type="radio" id="optionAccounting-No" name="optionAccounting" value="No" wire:model="optionAccounting" @if($isPDF && $optionAccounting == "No") checked @endif>
                    <label for="optionAccounting-No">No</label>
                </td>
            </tr>
            <tr>
                <td style="width: 60%; border: 1px solid #888; word-wrap: break-word;padding: 10px; ">
                    <ul style="padding-left: 20px;list-style: disc;">
                        <li>
                            <p>Bank account (s)</p>
                            <p>(Opening, handling payments, monitoring, other) </p>
                            <p> If yes, please provide the names of the preferred bank (s): </p>
                            @if($isPDF)
                                <p>{{ $bankName ?? "" }}</p>
                            @else
                                <input type="text" placeholder="Bank Name" id="bankName" wire:model="bankName" class="mt-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                @error('bankName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                            @endif
                            @if($isPDF)
                                <p>{{ $bankAddress ?? "" }}</p>
                            @else
                                <input type="text" placeholder="Bank Address" id="bankAddress" wire:model="bankAddress" class="mt-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                @error('bankAddress') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                            @endif
                            @if($isPDF)
                                <p>{{ $bankContact ?? "" }}</p>
                            @else
                                <input type="text" placeholder="Bank Contact" id="bankContact" wire:model="bankContact" class="mt-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                @error('bankContact') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                            @endif
                        </li>
                    </ul>
                </td>
                <td style="width: 20%; border: 1px solid #888; word-wrap: break-word;padding: 10px; ">
                    <input type="radio" id="optionBank-Yes" name="optionBank" value="Yes" wire:model="optionBank" @if($isPDF && $optionBank == "Yes") checked @endif>
                    <label for="optionBank-Yes">Yes</label>
                    @error('optionBank') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                </td>
                <td style="width: 20%; border: 1px solid #888; word-wrap: break-word;padding: 10px; ">
                    <input style="margin-left: 20px" type="radio" id="optionBank-No" name="optionBank" value="No" wire:model="optionBank" @if($isPDF && $optionBank == "No") checked @endif>
                    <label for="optionBank-No">No</label>
                </td>
            </tr>
            <tr>
                <td style="width: 60%; border: 1px solid #888; word-wrap: break-word;padding: 10px; ">
                    <ul style="padding-left: 20px;list-style: disc;">
                        <li>
                            Correspondence to be kept by the Mandatary:
                        </li>
                    </ul>
                </td>
                <td style="width: 20%; border: 1px solid #888; word-wrap: break-word;padding: 10px; ">
                    <input type="radio" id="optionCorrespondence-Yes" name="optionCorrespondence" value="Yes" wire:model="optionCorrespondence" @if($isPDF && $optionCorrespondence == "Yes") checked @endif>
                    <label for="optionCorrespondence-Yes">Yes</label>
                    @error('optionCorrespondence') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                </td>
                <td style="width: 20%; border: 1px solid #888; word-wrap: break-word;padding: 10px; ">
                    <input style="margin-left: 20px" type="radio" id="optionCorrespondence-No" name="optionCorrespondence" value="No" wire:model="optionCorrespondence" @if($isPDF && $optionCorrespondence == "No") checked @endif>
                    <label for="optionCorrespondence-No">No</label>
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #888; word-wrap: break-word;padding: 10px; padding-left: 20px" colspan="3">
                    <span>If answer is no, to be sent to:</span>
                    @if($isPDF)
                        &nbsp;<span>{{ $detailCorrespondence ?? "" }}</span>
                    @else
                        <input type="text" id="detailCorrespondence" wire:model="detailCorrespondence" class="inline shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('detailCorrespondence') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #888; word-wrap: break-word;padding: 10px; padding-left: 20px" colspan="3">
                    Written communications received by the Mandatary according to this clause, are deemed to have been received by the Client, including those issued by the Mandatary.
                </td>
            </tr>
            <tr>
                <td style="width: 60%; border: 1px solid #888; word-wrap: break-word;padding: 10px; ">
                    <ul style="padding-left: 20px;list-style: disc;">
                        <li>
                            Other agreed services according to Schedule A
                        </li>
                    </ul>
                </td>
                <td style="width: 20%; border: 1px solid #888; word-wrap: break-word;padding: 10px; ">
                    <input type="radio" id="optionOtherService-Yes" name="optionOtherService" value="Yes" wire:model="optionOtherService" @if($isPDF && $optionOtherService == "Yes") checked @endif>
                    <label for="optionOtherService-Yes">Yes</label>
                    @error('optionOtherService') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                </td>
                <td style="width: 20%; border: 1px solid #888; word-wrap: break-word;padding: 10px; ">
                    <input style="margin-left: 20px" type="radio" id="optionOtherService-No" name="optionOtherService" value="No" wire:model="optionOtherService" @if($isPDF && $optionOtherService == "No") checked @endif>
                    <label for="optionOtherService-No">No</label>
                </td>
            </tr>
        </table>
    </div>

    <div style="padding: 10px; margin-top: 30px">
        <h2>4. APPOINTMENT OF THE MANDATARY AS TRUSTEE </h2>
        <div style="border: 1px solid #888; padding: 10px; margin-left: 20px">
            <p>
                If the Mandatary is appointed as the Trustee of the trust for either the establishment or transfer of administration of the trust, this mandate shall terminate upon the signing of the trust documents. Following the termination of this mandate, the terms and conditions of the trust deed shall become the sole governing document for the Trustee.
            </p>
        </div>
    </div>


    <div style="padding: 10px; margin-top: 30px">
        <h2>5. POWER OF ATTORNEY  </h2>
        <table style="width: 100%; border-collapse: collapse; margin-left: 20px">
            <tr>
                <td style="border: 1px solid #888; word-wrap: break-word;padding: 10px;">
                    <p>
                        <span>The Client wishes to grant power of attorney:</span>
                        <input style="margin-left: 20px" type="radio" id="optionPowerArtonney-Yes" name="optionPowerArtonney" value="Yes" wire:model="optionPowerArtonney" @if($isPDF && $optionPowerArtonney == "Yes") checked @endif>
                        <label for="optionPowerArtonney-Yes">Yes</label>
                        <input style="margin-left: 20px" type="radio" id="optionPowerArtonney-No" name="optionPowerArtonney" value="No" wire:model="optionPowerArtonney" @if($isPDF && $optionPowerArtonney == "No") checked @endif>
                        <label for="optionPowerArtonney-No">No</label>
                        @error('optionPowerArtonney') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    </p>

                    <p>If yes, provide name(s) and signature (s): </p>
                    <p>
                        <b>Name:</b>
                        @if($isPDF)
                            &nbsp;<span>{{ $artonneyName ?? "" }}</span>
                        @else
                            <input type="text" id="artonneyName" wire:model="artonneyName" class="inline shadow appearance-none border rounded w-30 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('artonneyName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                        @endif

                        &nbsp;<b>Signature:</b>
                        @if($isPDF)
                            &nbsp;<span>{{ $artonneySignature ?? "" }}</span>
                        @else
                            <input type="text" id="artonneySignature" wire:model="artonneySignature" class="inline shadow appearance-none border rounded w-30 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('artonneySignature') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                        @endif
                    </p>
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #888; word-wrap: break-word;padding: 10px;">
                    <p>
                        All the instructions, with no exclusions or reservations whatsoever, shall be deemed to have been validly given and authorised by the Client.
                    </p>
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #888; word-wrap: break-word;padding: 10px;">
                    <p>
                        Power of Attorney shall not be terminated by the death of the Principal or by any of the cause mentioned in Arts 35 and 405 of the Code des Obligations.
                    </p>
                </td>
            </tr>
        </table>
    </div>

    <div style="padding: 10px; margin-top: 30px">
        <h2>6. CLIENT'S RESPONSIBILITIES  </h2>
        <div style="border: 1px solid #888; padding: 10px; margin-left: 20px">
            <p>
                The Client agrees to:
            </p>
            <ul style="padding-left: 20px;list-style: disc;">
                <li>
                    The Client commits to completing any required forms and supplying all necessary documentation for either the establishment or transfer of administration of the trust, enabling the Mandatary to execute this mandate agreement effectively.
                </li>
                <li>
                    Provide all essential information and documentation relevant to both the establishment and execution, or transfer of administration, of the designated trust.
                </li>
                <li>
                    Collaborate promptly with the Mandatary to expedite the settlement process, whether in the establishment or transfer of administration, ensuring its seamless completion.
                </li>
            </ul>
        </div>
    </div>

    <div style="padding: 10px; margin-top: 30px">
        <h2>7. CONFIDENTIALITY  </h2>
        <div style="border: 1px solid #888; padding: 10px; margin-left: 20px">
            <p>
                Both parties agree to maintain the confidentiality of all information exchanged during the course of this mandate agreement.
            </p>
        </div>
    </div>

    <div style="padding: 10px; margin-top: 30px">
        <h2>8.	DURATION  </h2>
        <div style="border: 1px solid #888; padding: 10px; margin-left: 20px">
            <p>
                This Agreement shall commence on the effective date and shall remain in effect until the completion of the services outlined herein, unless terminated earlier by mutual agreement of both parties.
            </p>
        </div>
    </div>

    <div style="padding: 10px; margin-top: 30px">
        <h2>9. TERMINATION </h2>
        <div style="border: 1px solid #888; padding: 10px; margin-left: 20px">
            <p>
                Either party may terminate this Agreement upon written notice to the other party in the event of a material breach of any provision of this Agreement by the other party.
            </p>
        </div>
    </div>

    <div style="padding: 10px; margin-top: 30px">
        <h2>10. GOVERNING LAW </h2>
        <div style="border: 1px solid #888; padding: 10px; margin-left: 20px">
            <p>
                This mandate agreement shall be governed and construed in accordance with and governed by the laws of Switzerland. Any controversy or claim arising out of or relating to this mandate agreement, or breach thereof, shall be exclusively settled by the competent courts of the Republic and Canton of Geneva, Switzerland, the recourse to the Swiss Federal Tribunal being reserved
            </p>
        </div>
    </div>

    <div style="padding: 10px; margin-top: 30px">
        <h2>5. POWER OF ATTORNEY  </h2>
        <table style="width: 100%; border-collapse: collapse; margin-left: 20px">
            <tr>
                <td style="border: 1px solid #888; word-wrap: break-word;padding: 10px;" colspan="3">
                    <p>Signed in one/two original copy(ies) </p>
                    <br>
                    <p>This Agreement may be executed by facsimile or pdf signatures and such signatures shall be deemed to bind bath the Client and the Mandatary as if they were original signatures. </p>
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #888; word-wrap: break-word;padding: 10px;" colspan="3">
                    <span> <b>Place and date: </b></span>
                    @if($isPDF)
                        &nbsp;<span>{{ $place ?? "" }}</span>
                    @else
                        <input type="text" id="place" wire:model="place" class="inline shadow appearance-none border rounded w-30 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('place') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                    <span>,</span>&nbsp;
                    @if($isPDF)
                        <span>{{ $date ?? "" }}</span>
                    @else
                        <input type="text" id="date" wire:model="date" class="inline shadow appearance-none border rounded w-30 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('date') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 45%; border: 1px solid #888; word-wrap: break-word;padding: 10px;">
                    @if($isPDF)
                        <span>{{ $client ?? "" }}</span>
                    @else
                        <input type="text" id="client" wire:model="client" class="inline shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('client') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
                <td style="border: 1px solid #888"></td>
                <td style="width: 45%; border: 1px solid #888; word-wrap: break-word;padding: 10px;">
                    @if($isPDF)
                        <span>{{ $mandatary ?? "" }}</span>
                    @else
                        <input type="text" id="mandatary" wire:model="mandatary" class="inline shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('mandatary') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 45%; border: 1px solid #888; word-wrap: break-word;padding: 10px;">
                    <b>The Client</b>
                </td>
                <td style="border: 1px solid #888"></td>
                <td style="width: 45%; border: 1px solid #888; word-wrap: break-word;padding: 10px;">
                    The Mandatary
                </td>
            </tr>

        </table>
    </div>
</div>
