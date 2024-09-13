<div>
    <h1>
        AML Risk Profile -
        @if($isPDF)
            {{ $profileType }}
        @else
            <select wire:model="profileType" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Choose an item</option>
                <option>Onboarding Assessment Form</option>
                <option>Annual Review Form</option>
            </select>
            @error('profileType') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </h1>

    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                DOSSIER NAM
            </td>
            <td style="width: 30%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                @if($isPDF)
                    {{ $dossierName }}
                @else
                    <input wire:model="dossierName" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('dossierName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                ENTITY NUMBER
            </td>
            <td style="width: 30%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                @if($isPDF)
                    {{ $entityNumber }}
                @else
                    <input wire:model="entityNumber" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('entityNumber') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="4" style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <b>Note:</b> For the purposes of this form, the term <b>'Client'</b> refers to the contracting party, the beneficial owner, the controlling person, or the authorized representative of the
            </td>
        </tr>
    </table>

    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="2" style="padding: 10px;"><b>I. CLIENT RISK</b></td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is the Client a personal <b>acquaintance</b> for over several years (at least 2) prior to entering the
                business relationship? If no, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_1_yes" name="option1_1" value="Yes" wire:model="option1_1" @if($isPDF && $option1_1 == "Yes") checked @endif>
                <label for="option1_1_yes">Yes</label>
                <input type="radio" id="option1_1_no" name="option1_1" value="No" style="margin-left: 20px" wire:model="option1_1" @if($isPDF && $option1_1 == "No") checked @endif>
                <label for="option1_1_no">No</label>
                @error('option1_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is the business entered by <b>correspondence</b> and the contracting party was not
                introduced/brokered by a trusted third party? If yes, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_2_yes" name="option1_2" value="Yes" wire:model="option1_2" @if($isPDF && $option1_2 == "Yes") checked @endif>
                <label for="option1_2_yes">Yes</label>
                <input type="radio" id="option1_2_no" name="option1_2" value="No" style="margin-left: 20px" wire:model="option1_2" @if($isPDF && $option1_2 == "No") checked @endif>
                <label for="option1_2_no">No</label>
                @error('option1_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Has the client been <b>identified</b> in a face-to-face meeting or online video? If not, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_3_yes" name="option1_3" value="Yes" wire:model="option1_3" @if($isPDF && $option1_3 == "Yes") checked @endif>
                <label for="option1_3_yes">Yes</label>
                <input type="radio" id="option1_3_no" name="option1_3" value="No" style="margin-left: 20px" wire:model="option1_3" @if($isPDF && $option1_3 == "No") checked @endif>
                <label for="option1_3_no">No</label>
                @error('option1_3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Are you able to <b>contact</b> and reach the client? If no, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_4_yes" name="option1_4" value="Yes" wire:model="option1_4" @if($isPDF && $option1_4 == "Yes") checked @endif>
                <label for="option1_4_yes">Yes</label>
                <input type="radio" id="option1_4_no" name="option1_4" value="No" style="margin-left: 20px" wire:model="option1_4" @if($isPDF && $option1_4 == "No") checked @endif>
                <label for="option1_4_no">No</label>
                @error('option1_4') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is the Client a <b>PEP</b> or closely related to such a person? Please identify the type of PEP:
                @if($isPDF)
                    {{ $pepType }}
                @else
                    <select wire:model="pepType" class="shadow appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Choose an item</option>
                        <option> Foreign PEP </option>
                        <option> Domestic PEP </option>
                        <option> International Organization </option>
                        <option> Relative to a PEP </option>
                    </select>
                    @error('pepType') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
                If yes, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_5_yes" name="option1_5" value="Yes" wire:model="option1_5" @if($isPDF && $option1_5 == "Yes") checked @endif>
                <label for="option1_5_yes">Yes</label>
                <input type="radio" id="option1_5_no" name="option1_5" value="No" style="margin-left: 20px" wire:model="option1_5" @if($isPDF && $option1_5 == "No") checked @endif>
                <label for="option1_5_no">No</label>
                @error('option1_5') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Do you have full visibility and knowledge of the <b>ultimate beneficial owners?</b> If no, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_6_yes" name="option1_6" value="Yes" wire:model="option1_6" @if($isPDF && $option1_6 == "Yes") checked @endif>
                <label for="option1_6_yes">Yes</label>
                <input type="radio" id="option1_6_no" name="option1_6" value="No" style="margin-left: 20px" wire:model="option1_6" @if($isPDF && $option1_6 == "No") checked @endif>
                <label for="option1_6_no">No</label>
                @error('option1_6') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is there more than <b>CHF 50</b> million in the structure under our administration object of this review?
                If yes, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_7_yes" name="option1_7" value="Yes" wire:model="option1_7" @if($isPDF && $option1_7 == "Yes") checked @endif>
                <label for="option1_7_yes">Yes</label>
                <input type="radio" id="option1_7_no" name="option1_7" value="No" style="margin-left: 20px" wire:model="option1_7" @if($isPDF && $option1_7 == "No") checked @endif>
                <label for="option1_7_no">No</label>
                @error('option1_7') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is the amount of incoming and outgoing <b>assets</b> amount to <b>CHF 10</b> million or more per calendar year? If yes, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_8_yes" name="option1_8" value="Yes" wire:model="option1_8" @if($isPDF && $option1_8 == "Yes") checked @endif>
                <label for="option1_8_yes">Yes</label>
                <input type="radio" id="option1_8_no" name="option1_8" value="No" style="margin-left: 20px" wire:model="option1_8" @if($isPDF && $option1_8 == "No") checked @endif>
                <label for="option1_8_no">No</label>
                @error('option1_8') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is the Client involved in frequent <b>high-risk transactions</b>? (Please refer to the AML Directive for the definition of high-risk transactions).
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_9_yes" name="option1_9" value="Yes" wire:model="option1_9" @if($isPDF && $option1_9 == "Yes") checked @endif>
                <label for="option1_9_yes">Yes</label>
                <input type="radio" id="option1_9_no" name="option1_9" value="No" style="margin-left: 20px" wire:model="option1_9" @if($isPDF && $option1_9 == "No") checked @endif>
                <label for="option1_9_no">No</label>
                @error('option1_9') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Has cash, bearer instruments or precious metal with a value of CHF 100,000 or more brought
                in or withdrawn, and <b>transfers</b> with a value of more CHF <b>100,000</b> made? If yes, classifies
                as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_10_yes" name="option1_10" value="Yes" wire:model="option1_10" @if($isPDF && $option1_10 == "Yes") checked @endif>
                <label for="option1_10_yes">Yes</label>
                <input type="radio" id="option1_10_no" name="option1_10" value="No" style="margin-left: 20px" wire:model="option1_10" @if($isPDF && $option1_10 == "No") checked @endif>
                <label for="option1_10_no">No</label>
                @error('option1_10') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Have you identified significant <b>deviation</b> from the types, volumes, and frequencies of
                transactions customary in the business relationship or in comparable business relationships?
                If yes, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_11_yes" name="option1_11" value="Yes" wire:model="option1_11" @if($isPDF && $option1_11 == "Yes") checked @endif>
                <label for="option1_11_yes">Yes</label>
                <input type="radio" id="option1_11_no" name="option1_11" value="No" style="margin-left: 20px" wire:model="option1_11" @if($isPDF && $option1_11 == "No") checked @endif>
                <label for="option1_11_no">No</label>
                @error('option1_11') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                If the Client is a Charity,
                <br>
                &nbsp;&nbsp;i. Have you identified cash transactions for more than <b>CHF 15,000</b> during the calendar year? If yes, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_12_yes" name="option1_12" value="Yes" wire:model="option1_12" @if($isPDF && $option1_12 == "Yes") checked @endif>
                <label for="option1_12_yes">Yes</label>
                <input type="radio" id="option1_12_no" name="option1_12" value="No" style="margin-left: 20px" wire:model="option1_12" @if($isPDF && $option1_12 == "No") checked @endif>
                <label for="option1_12_no">No</label>
                @error('option1_12') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                &nbsp;&nbsp;ii.Have you identified unusual payments to private individuals, non-charitable entities, foreign nonregulated charities, or other 3rd parties?
                If yes, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_13_yes" name="option1_13" value="Yes" wire:model="option1_13" @if($isPDF && $option1_13 == "Yes") checked @endif>
                <label for="option1_13_yes">Yes</label>
                <input type="radio" id="option1_13_no" name="option1_13" value="No" style="margin-left: 20px" wire:model="option1_13" @if($isPDF && $option1_13 == "No") checked @endif>
                <label for="option1_13_no">No</label>
                @error('option1_13') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is there a <b>criminal prosecution</b> against the client? If yes, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_14_yes" name="option1_14" value="Yes" wire:model="option1_14" @if($isPDF && $option1_14 == "Yes") checked @endif>
                <label for="option1_14_yes">Yes</label>
                <input type="radio" id="option1_14_no" name="option1_14" value="No" style="margin-left: 20px" wire:model="option1_14" @if($isPDF && $option1_14 == "No") checked @endif>
                <label for="option1_14_no">No</label>
                @error('option1_14') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is there a risk of <b>criminal offense</b> under Article 305 bis of the Swiss Criminal Code? If yes, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option1_15_yes" name="option1_15" value="Yes" wire:model="option1_15" @if($isPDF && $option1_15 == "Yes") checked @endif>
                <label for="option1_15_yes">Yes</label>
                <input type="radio" id="option1_15_no" name="option1_15" value="No" style="margin-left: 20px" wire:model="option1_15" @if($isPDF && $option1_15 == "No") checked @endif>
                <label for="option1_15_no">No</label>
                @error('option1_15') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>

    </table>

    {{-- II. COUNTRY RISK --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="2" style="padding: 10px;"><b>II. COUNTRY RISK</b></td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is the Client <b>domiciled</b> in a jurisdiction considered «high risk» or «non-cooperative» by the FATF (see FATF list / Country List applicable) and for which the FATF requires increased diligence? If yes, classifies as a High Risk. Please specify which country:
                @if($isPDF)
                    {{ $detail2_1 }}
                @else
                    <input wire:model="detail2_1" class="shadow appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('detail2_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option2_1_yes" name="option2_1" value="Yes" wire:model="option2_1" @if($isPDF && $option2_1 == "Yes") checked @endif>
                <label for="option2_1_yes">Yes</label>
                <input type="radio" id="option2_1_no" name="option2_1" value="No" style="margin-left: 20px" wire:model="option2_1" @if($isPDF && $option2_1 == "No") checked @endif>
                <label for="option2_1_no">No</label>
                @error('option2_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Does the Client hold the <b>nationality</b> of a country considered «high risk» or «non-cooperative» by the FATF (see FATF list / Country List applicable) and for which the FATF requires increased diligence? If yes, classifies as a High Risk. Please specify which country:
                @if($isPDF)
                    {{ $detail2_2 }}
                @else
                    <input wire:model="detail2_2" class="shadow appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('detail2_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option2_2_yes" name="option2_2" value="Yes" wire:model="option2_2" @if($isPDF && $option2_2 == "Yes") checked @endif>
                <label for="option2_2_yes">Yes</label>
                <input type="radio" id="option2_2_no" name="option2_2" value="No" style="margin-left: 20px" wire:model="option2_2" @if($isPDF && $option2_2 == "No") checked @endif>
                <label for="option2_2_no">No</label>
                @error('option2_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Are the countries of origin and destination for frequent <b>payments</b> considered high risk or non-cooperative by the Financial Action Task Force (FATF)? If yes, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option2_3_yes" name="option2_3" value="Yes" wire:model="option2_3" @if($isPDF && $option2_3 == "Yes") checked @endif>
                <label for="option2_3_yes">Yes</label>
                <input type="radio" id="option2_3_no" name="option2_3" value="No" style="margin-left: 20px" wire:model="option2_3" @if($isPDF && $option2_3 == "No") checked @endif>
                <label for="option2_3_no">No</label>
                @error('option2_3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is the Client involved in <b>complex structures</b>, in particular by using a domiciliary company with fiduciary shareholders in a non-transparent jurisdiction, without comprehensive reason or for the purpose of short-term asset allocation? If yes, classifies as a High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option2_4_yes" name="option2_4" value="Yes" wire:model="option2_4" @if($isPDF && $option2_4 == "Yes") checked @endif>
                <label for="option2_4_yes">Yes</label>
                <input type="radio" id="option2_4_no" name="option2_4" value="No" style="margin-left: 20px" wire:model="option2_4" @if($isPDF && $option2_4 == "No") checked @endif>
                <label for="option2_4_no">No</label>
                @error('option2_4') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is the Client’s place of <b>business activity</b> in a jurisdiction considered «high risk» or «non-cooperative» by the FATF (see FATF list / Country List applicable) and for which the FATF requires increased diligence? If yes, classifies as a High Risk. Please specify which country:
                @if($isPDF)
                    {{ $detail2_5 }}
                @else
                    <input wire:model="detail2_5" class="shadow appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('detail2_5') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option2_5_yes" name="option2_5" value="Yes" wire:model="option2_5" @if($isPDF && $option2_5 == "Yes") checked @endif>
                <label for="option2_5_yes">Yes</label>
                <input type="radio" id="option2_5_no" name="option2_5" value="No" style="margin-left: 20px" wire:model="option2_5" @if($isPDF && $option2_5 == "No") checked @endif>
                <label for="option2_5_no">No</label>
                @error('option2_5') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
    </table>

    {{-- III.  INDUSTRY/SECTOR RISK --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="2" style="padding: 10px;"><b>III.  INDUSTRY/SECTOR RISK</b></td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is the industry/sector of activity of the Client clearly defined, transparent, easily comprehensible <b>business activity</b> well known to the member? If no, classifies as High Risk.
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option3_1_yes" name="option3_1" value="Yes" wire:model="option3_1" @if($isPDF && $option3_1 == "Yes") checked @endif>
                <label for="option3_1_yes">Yes</label>
                <input type="radio" id="option3_1_no" name="option3_1" value="No" style="margin-left: 20px" wire:model="option3_1" @if($isPDF && $option3_1 == "No") checked @endif>
                <label for="option3_1_no">No</label>
                @error('option3_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is the Client involved in the trade of munitions/arms, gemstones/diamonds, jewelry, international trade in exotic animals, casino and lottery <b>business</b>, trade in erotic wares? If yes, classifies as a High Risk. Please specify the industry/activity:
                @if($isPDF)
                    {{ $detail3_2 }}.
                @else
                    <input wire:model="detail3_2" class="shadow appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('detail3_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option3_2_yes" name="option3_2" value="Yes" wire:model="option3_2" @if($isPDF && $option3_2 == "Yes") checked @endif>
                <label for="option3_2_yes">Yes</label>
                <input type="radio" id="option3_2_no" name="option3_2" value="No" style="margin-left: 20px" wire:model="option3_2" @if($isPDF && $option3_2 == "No") checked @endif>
                <label for="option3_2_no">No</label>
                @error('option3_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
    </table>

     {{-- IV.  PRODUCT RISK --}}
     <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="2" style="padding: 10px;"><b>IV.  PRODUCT RISK</b></td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is the nature of services and products requested by the client easy to understand, <b>transparent</b> and whose financial background is easy to comprehend and verify? If no, classifies as High Risk
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option4_yes" name="option4" value="Yes" wire:model="option4" @if($isPDF && $option4 == "Yes") checked @endif>
                <label for="option4_yes">Yes</label>
                <input type="radio" id="option4_no" name="option4" value="No" style="margin-left: 20px" wire:model="option4" @if($isPDF && $option4 == "No") checked @endif>
                <label for="option4_no">No</label>
                @error('option4') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
    </table>

    {{-- V.    ADDITIONAL CLARIFICATIONS IN THE CASE OF INCREASED RISKS (AMLO-FINMA Art. 15) --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="3" style="padding: 10px;"><b>V.    ADDITIONAL CLARIFICATIONS IN THE CASE OF INCREASED RISKS (AMLO-FINMA Art. 15)</b></td>
        </tr>
        <tr>
            <td style="width: 45%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Which additional <b>clarifications</b> were made for the business relationship with increased risk?
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                Please describe briefly:
                @if($isPDF)
                    <p>{{ $details5_1 }}</p>
                @else
                    <textarea wire:model="details5_1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    @error('details5_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif

            </td>
        </tr>
        <tr>
            <td style="width: 45%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                If the contracting party is a legal entity without <b>operational activity</b> (e.g. a domiciliary company), a foundation or a trust, please explain the reason for using that legal form.
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                Please describe the background and purpose of the chosen legal form:
                @if($isPDF)
                    <p>{{ $details5_2 }}</p>
                @else
                    <textarea wire:model="details5_2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    @error('details5_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="2">
                Have clarifications been made to obtain reasonable assurance that the assets contributed do not stem from any qualified tax offence? If no, classifies as High Risk
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Please refer to procedure (e.g. obtaining tax returns, considering the application of the maximum tax rate of the client's tax domicile country, checking AIA membership, etc.
                    </li>
                </ul>
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option5_yes" name="option5" value="Yes" wire:model="option5" @if($isPDF && $option5 == "Yes") checked @endif>
                <label for="option5_yes">Yes</label>
                <input type="radio" id="option5_no" name="option5" value="No" style="margin-left: 20px" wire:model="option5" @if($isPDF && $option5 == "No") checked @endif>
                <label for="option5_no">No</label>
                @error('option5') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
    </table>


    {{-- VI.   OVERALL ASSESSMENT OF THE BUSINESS RELATIONSHIP --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="4" style="padding: 10px;"><b>VI.   OVERALL ASSESSMENT OF THE BUSINESS RELATIONSHIP</b></td>
        </tr>
        <tr>
            <td style="width: 40%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <input id="checkbox6_1" type="checkbox" wire:model="checkbox6_1" @if($isPDF && ($checkbox6_1 ?? false)) checked @endif>
                <label for="checkbox6_1">
                    Business relationship <u>without</u> increased risk.
                </label>
            </td>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="3">
                <input id="checkbox6_2" type="checkbox" wire:model="checkbox6_2" @if($isPDF && ($checkbox6_2 ?? false)) checked @endif>
                <label for="checkbox6_2">
                    Business relationship <u>with</u> increased risk. Select the reason
                </label>
            </td>
        </tr>
        <tr>
            <td style="width: 40%;  border: 1px solid #888;"></td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                CLIENT RISK
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                @if($isPDF)
                    {{ $select6_1_1 }}
                @else
                    <select wire:model="select6_1_1" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Choose an item</option>
                        <option>N/A</option>
                        <option>Absence of contact</option>
                        <option>Criminal prosecution</option>
                        <option>Deposito of +CHF50 mio</option>
                        <option>Domestic PEP</option>
                        <option>Forien PEP</option>
                        <option>Criminal offense Art 305</option>
                        <option>New Client</option>
                    </select>
                    @error('select6_1_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                @if($isPDF)
                    {{ $select6_1_2 }}
                @else
                    <select wire:model="select6_1_2" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Choose an item</option>
                        <option>N/A</option>
                        <option>Absence of contact</option>
                        <option>Criminal prosecution</option>
                        <option>Deposito of +CHF50 mio</option>
                        <option>Domestic PEP</option>
                        <option>Forien PEP</option>
                        <option>Criminal offense Art 305</option>
                        <option>New Client</option>
                    </select>
                    @error('select6_1_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 40%;  border: 1px solid #888;"></td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                COUNTRY RISK
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                @if($isPDF)
                    {{ $select6_2_1 }}
                @else
                    <select wire:model="select6_2_1" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Choose an item</option>
                        <option>N/A</option>
                        <option>Nationality</option>
                        <option>Residence</option>
                        <option>Foriegn bank</option>
                        <option>Payments</option>
                        <option>Complex structure</option>
                    </select>
                    @error('select6_2_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                @if($isPDF)
                    {{ $select6_2_2 }}
                @else
                    <select wire:model="select6_2_2" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Choose an item</option>
                        <option>N/A</option>
                        <option>Nationality</option>
                        <option>Residence</option>
                        <option>Foriegn bank</option>
                        <option>Payments</option>
                        <option>Complex structure</option>
                    </select>
                    @error('select6_2_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 40%;  border: 1px solid #888;"></td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                SECTOR RISK
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                @if($isPDF)
                    {{ $select6_3_1 }}
                @else
                    <select wire:model="select6_3_1" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Choose an item</option>
                        <option>N/A</option>
                        <option>Business sector</option>
                        <option>Non-transparent activity</option>
                    </select>
                    @error('select6_3_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                @if($isPDF)
                    {{ $select6_3_2 }}
                @else
                    <select wire:model="select6_3_2" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Choose an item</option>
                        <option>N/A</option>
                        <option>Business sector</option>
                        <option>Non-transparent activity</option>
                    </select>
                    @error('select6_3_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 40%;  border: 1px solid #888;"></td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                PRODUCT RISK
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                @if($isPDF)
                    {{ $select6_4_1 }}
                @else
                    <select wire:model="select6_4_1" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Choose an item</option>
                        <option>N/A</option>
                        <option>Transfers +CHF10 mio</option>
                        <option>Transactions type</option>
                        <option>None-transparent structures</option>
                    </select>
                    @error('select6_4_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                @if($isPDF)
                    {{ $select6_4_2 }}
                @else
                    <select wire:model="select6_4_2" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Choose an item</option>
                        <option>N/A</option>
                        <option>Transfers +CHF10 mio</option>
                        <option>Transactions type</option>
                        <option>None-transparent structures</option>
                    </select>
                    @error('select6_4_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="3">
                <p style="color: #004580"><b>Decision to proceed with the business:</b></p>
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option6_1_yes" name="option6_1" value="Yes" wire:model.live="option6_1" @if($isPDF && $option6_1 == "Yes") checked @endif>
                <label for="option6_1_yes">Yes</label>
                <input type="radio" id="option6_1_no" name="option6_1" value="No" style="margin-left: 20px" wire:model.live="option6_1" @if($isPDF && $option6_1 == "No") checked @endif>
                <label for="option6_1_no">No</label>
                @error('option6_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid #888; padding: 10px; " colspan="4">
                <label>If yes, and the business relationship has been identified with increased risk, please provide a justification for deviating from the risk assessment.</label>
                @if($option6_1 == "Yes")
                    @if($isPDF)
                        <p>{{ $details6 }}</p>
                    @else
                        <textarea id="message" wire:model="details6" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    @endif
                @endif
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="3">
                Has management approval been obtained for the acceptance or continuation of the business relationship with increased risk, and is the supporting documentation attached?
            </td>
            <td style="width: 20%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option6_2_yes" name="option6_2" value="Yes" wire:model="option6_2" @if($isPDF && $option6_2 == "Yes") checked @endif>
                <label for="option6_2_yes">Yes</label>
                <input type="radio" id="option6_2_no" name="option6_2" value="No" style="margin-left: 20px" wire:model="option6_2" @if($isPDF && $option6_2 == "No") checked @endif>
                <label for="option6_2_no">No</label>
                @error('option6_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
    </table>


    {{-- Signature --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr>
            <td style="width: 10%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Date:
            </td>
            <td style="width: 40%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $signatureDate }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="signatureDate">
                    @error('signatureDate') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 10%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Name:
            </td>
            <td style="width: 40%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $signatureName }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="signatureName">
                    @error('signatureName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 10%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Signature:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="3">
                @if($isPDF)
                    <p>{{ $signature }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="signature">
                    @error('signature') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
     </table>
</div>




