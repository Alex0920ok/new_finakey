<div>
    <h1>RM - KYC Client Profile - Internal</h1>

    {{-- Information on the Contracting Party --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="2" style="padding: 10px;"><b>Information on the Contracting Party</b></td>
        </tr>
        <tr>
            <td style="width: 40%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Full Name*
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $fullName ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="fullName">
                    @error('fullName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 40%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Customer number (internal)*
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $customerNumber ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="customerNumber">
                    @error('customerNumber') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 40%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Residential address, incl. Country*
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $residentialAddress ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="residentialAddress">
                    @error('residentialAddress') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 40%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Tax domicile*
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $taxDomcile ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="taxDomcile">
                    @error('taxDomcile') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 40%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                TIN-Nummer (if available)
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $tinNummer ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="tinNummer">
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 40%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Date of birth*
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $birthDate ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="birthDate">
                    @error('birthDate') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 40%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Place of birth *
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $birthPlace ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="birthPlace">
                    @error('birthPlace') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 40%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Nationality(ies)*
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $nationality ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="nationality">
                    @error('nationality') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 40%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-top: 1px solid #888; padding: 10px; vertical-align: top;">
                Family situation*
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-top: 1px solid #888;">
            </td>
        </tr>
        <tr>
            <td style="width: 40%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        <i>information on marital status, names and dates of birth of the members of the family (spouse and children and dates of birth)</i>
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $familySituation ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="familySituation">
                    @error('familySituation') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 40%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        <i>further information if there is a connection between the assets and the family members</i>
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $familySituationFurther ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="familySituationFurther">
                    @error('familySituationFurther') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 40%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Phone, E-Mail address
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                <div>
                    @if($isPDF)
                        <p>{{ $phone ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="phone" placeholder="Phone">
                        @error('phone') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </div>
                <div style="margin-top: 10px">
                    @if($isPDF)
                        <p>{{ $email ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="email" placeholder="Email">
                        @error('email') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </div>
            </td>
        </tr>
    </table>

    {{-- Establishment of the business relationship --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="2" style="padding: 10px;">
                <b>Establishment of the business relationship</b>
                <div style="padding-left: 30px;">
                    <i>➡ The clarifications must relate to the person from whom the assets originate or which they have contributed (e.g. the beneficial owner of the assets, the founder/establisher of a trust/foundation).</i>
                </div>
                <div style="padding-left: 30px;">
                    <i>➡ For the classification of the client relationship as normal risk or high-risk, see current AML Directive.</i>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Initiated by*
                {{-- <div style="margin-top: 10px">
                    @if($isPDF)
                        <p>{{ $initiatedBy ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="initiatedBy">
                        @error('initiatedBy') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </div> --}}
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="optionInitatedBy-Yes" name="optionInitatedBy" value="Personal appointment of the contracting party" wire:model.live="optionInitatedBy" @if($isPDF && $optionInitatedBy == "Personal appointment of the contracting party") checked @endif>
                <label for="optionInitatedBy-Yes">Personal appointment of the contracting party</label>
                <br>
                <input type="radio" id="optionInitatedBy-No" name="optionInitatedBy" value="Correspondence" wire:model.live="optionInitatedBy" @if($isPDF && $optionInitatedBy == "Correspondence") checked @endif>
                <label for="optionInitatedBy-No">Correspondence</label>
                @error('optionInitatedBy') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                How did the relationship with the contracting party develop?
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details2_1 ?? '' }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details2_1">
                    @error('details2_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-top: 1px solid #888; padding: 10px; vertical-align: top;">
                Purpose of the business relationship
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-top: 1px solid #888;">
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        For what purpose will the business relationship be used?
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details2_2_1 ?? '' }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details2_2_1">
                    @error('details2_2_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        What transactions are expected?
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details2_2_2 ?? '' }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details2_2_2">
                    @error('details2_2_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Does the contracting party have US Person status?*
                <br>Green Card, Noun Presence Test
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option2_3-Yes" name="option2_3" value="Yes" wire:model.live="option2_3" @if($isPDF && $option2_3 == "Yes") checked @endif>
                <label for="option2_3-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="option2_3-No" name="option2_3" value="No" wire:model.live="option2_3" @if($isPDF && $option2_3 == "No") checked @endif>
                <label for="option2_3-No">No</label>
                @error('option2_3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($option2_3 == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $details2_3 ?? "" }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="details2_3">
                        @error('details2_3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif

                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is the contracting party a PEP or a person closely associated with it?*
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option2_4-Yes" name="option2_4" value="Yes" wire:model.live="option2_4" @if($isPDF && $option2_4 == "Yes") checked @endif>
                <label for="option2_4-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="option2_4-No" name="option2_4" value="No" wire:model.live="option2_4" @if($isPDF && $option2_4 == "No") checked @endif>
                <label for="option2_4-No">No</label>
                @error('option2_4') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($option2_4 == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $details2_4 ?? "" }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="details2_4">
                        @error('details2_4') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif

                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Is this a High-Risk Business relationship?
                <i>(Please refer to the AML Directive and fill out the AML Risk Profile*)</i>
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="option2_5-Yes" name="option2_5" value="Yes" wire:model.live="option2_5" @if($isPDF && $option2_5 == "Yes") checked @endif>
                <label for="option2_5-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="option2_5-No" name="option2_5" value="No" wire:model.live="option2_5" @if($isPDF && $option2_5 == "No") checked @endif>
                <label for="option2_5-No">No</label>
                @error('option2_5') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
    </table>

    {{-- Information on the origin of the assets --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="2" style="padding: 10px;">
                <b>Information on the origin of the assets</b>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p>Professional Background / Occupation*</p>
                @if($isPDF)
                    <p style="margin-top: 10px">{{ $professionalBackground ?? "" }}</p>
                @else
                    <input style="width: 100%; margin-top: 10px" type="text" wire:model="professionalBackground">
                    @error('professionalBackground') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="details3_1-Employed" name="details3_1" value="Employed" wire:model="details3_1" @if($isPDF && $details3_1 == "Employed") checked @endif>
                <label for="details3_1-Employed">Employed</label>
                <br>
                <input type="radio" id="details3_1-Self-employed" name="details3_1" value="Self-employed" wire:model="details3_1" @if($isPDF && $details3_1 == "Self-employed") checked @endif>
                <label for="details3_1-Self-employed">Self-employed</label>
                <br>
                <input type="radio" id="details3_1-Retired" name="details3_1" value="Retired" wire:model="details3_1" @if($isPDF && $details3_1 == "Retired") checked @endif>
                <label for="details3_1-Retired">Retired</label>
                <br>
                <input type="radio" id="details3_1-CV-enclosed" name="details3_1" value="CV enclosed" wire:model="details3_1" @if($isPDF && $details3_1 == "CV enclosed") checked @endif>
                <label for="details3_1-CV-enclosed">CV enclosed</label>
                <br>
                @error('details3_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                <br>
                <br>
                <p>➡ last or current position:</p>
                @if($isPDF)
                    <p style="margin-top: 10px">{{ $lastPosition ?? "" }}</p>
                @else
                    <input style="width: 100%; margin-top: 10px" type="text" wire:model="lastPosition">
                    @error('lastPosition') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-top: 1px solid #888; padding: 10px; vertical-align: top;">
                <b>Information on education and professional development</b>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-top: 1px solid #888;">
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        Employer, position held, how long employed in the functions, information about the company in case of self-employment*
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_2_1 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_2_1">
                    @error('details3_2_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Industry, Sector *
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_2_2 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_2_2">
                    @error('details3_2_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; padding: 10px; vertical-align: top;">
                <b>Estimation of the total assets*</b>
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Total assets of the Client (please break down: liquid funds, real estate, bankable securities etc.)
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_3 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_3">
                    @error('details3_3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; padding: 10px; vertical-align: top;">
                Estimation of the annual net income*
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_4 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_4">
                    @error('details3_4') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; padding: 10px; vertical-align: top;">
                Amount of expected incoming assets*
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_5 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_5">
                    @error('details3_5') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; padding: 10px; vertical-align: top;">
                Expected inflows and outflows*
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_6 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_6">
                    @error('details3_6') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Origin of assets*<br>
                Economic background of the assets:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                <div style="padding-left: 10px;">
                    <input id="checkboxDetails3_7_1" type="checkbox" wire:model="checkboxDetails3_7_1" @if($isPDF && ($checkboxDetails3_7_1 ?? false)) checked @endif>
                    <label for="checkboxDetails3_7_1">
                        Employment or business activities
                    </label>
                </div>
                <div style="padding-left: 10px;">
                    <input id="checkboxDetails3_7_2" type="checkbox" wire:model="checkboxDetails3_7_2" @if($isPDF && ($checkboxDetails3_7_2 ?? false)) checked @endif>
                    <label for="checkboxDetails3_7_2">
                        Gift / Inheritance
                    </label>
                </div>
                <div style="padding-left: 10px;">
                    <input id="checkboxDetails3_7_3" type="checkbox" wire:model="checkboxDetails3_7_3" @if($isPDF && ($checkboxDetails3_7_3 ?? false)) checked @endif>
                    <label for="checkboxDetails3_7_3">
                        Real Estate sale
                    </label>
                </div>
                <div style="padding-left: 10px;">
                    <input id="checkboxDetails3_7_4" type="checkbox" wire:model="checkboxDetails3_7_4" @if($isPDF && ($checkboxDetails3_7_4 ?? false)) checked @endif>
                    <label for="checkboxDetails3_7_4">
                        Real Estate returns
                    </label>
                </div>
                <div style="padding-left: 10px;">
                    <input id="checkboxDetails3_7_5" type="checkbox" wire:model="checkboxDetails3_7_5" @if($isPDF && ($checkboxDetails3_7_5 ?? false)) checked @endif>
                    <label for="checkboxDetails3_7_5">
                        Accumulation of savings
                    </label>
                </div>
                <div style="padding-left: 10px;">
                    <input id="checkboxDetails3_7_6" type="checkbox" wire:model="checkboxDetails3_7_6" @if($isPDF && ($checkboxDetails3_7_6 ?? false)) checked @endif>
                    <label for="checkboxDetails3_7_6">
                        Trading in:
                    </label>
                </div>
                <div style="padding-left: 10px;">
                    <input id="checkboxDetails3_7_7" type="checkbox" wire:model="checkboxDetails3_7_7" @if($isPDF && ($checkboxDetails3_7_7 ?? false)) checked @endif>
                    <label for="checkboxDetails3_7_7">
                        Other, please specify:
                    </label>
                </div>
                <div style="margin-left: 20px">
                    @if($isPDF)
                        <p>{{ $detailsOther3_7 ?? '' }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="detailsOther3_7">
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-top: 1px solid #888; padding: 10px; vertical-align: top;">
                <b>Specification of the origin of the assets according to the above information</b>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-top: 1px solid #888; padding: 10px">
                @if($isPDF)
                    <p>{{ $details3_8 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_8">
                    @error('details3_8') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <b>Inheritance / Endowments</b><br>
                In the case of inheritance / endowments, if the amount is significant, it is necessary to obtain evidence. In particular, the following information is required:
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        Amount received from the inheritance / endowment
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_8_1 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_8_1">
                    @error('details3_8_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        Relationship to this person
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_8_2 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_8_2">
                    @error('details3_8_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        Explanation of how the funds were originally generated
                        <br>
                        If the documents can no longer be found / obtained, the facts must be recorded. Alternatively, an extract from the tax return can be obtained.
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_8_3 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_8_3">
                    @error('details3_8_3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>

        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-top: 1px solid #888; padding: 10px; vertical-align: top;">
                <b>Specification of the origin of the assets according to the above information</b>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-top: 1px solid #888; padding: 10px">
                @if($isPDF)
                    <p>{{ $details3_9 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_9">
                    @error('details3_9') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <b>Real estate sale</b><br>
                In case of real estate sale, if the amount is significant, it needs evidence. In particular, the following information is required:
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        Details of the property (location, address, size, etc.)
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_9_1 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_9_1">
                    @error('details3_9_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        Date of purchase / sale
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_9_2 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_9_2">
                    @error('details3_9_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        Price of purchase / sale
                        <br>
                        If the documents can no longer be found / obtained, the facts must be recorded. Alternatively, an extract from the tax return can be obtained.
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_9_3 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_9_3">
                    @error('details3_9_3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>

        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-top: 1px solid #888; padding: 10px; vertical-align: top;">
                <b>Specification of the origin of the assets according to the above information</b>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-top: 1px solid #888; padding: 10px">
                @if($isPDF)
                    <p>{{ $details3_10 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_10">
                    @error('details3_10') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <b>Company sale</b><br>
                For company sale, if the amount is material, evidence is required. In particular, the following information is needed:
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        Date of the sale
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_10_1 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_10_1">
                    @error('details3_10_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        Amount received from the sale of the company
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_10_2 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_10_2">
                    @error('details3_10_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        Customer's share in the company and how the customer acquired the shares
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_10_3 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_10_3">
                    @error('details3_10_3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        Information about the total amount of the sale
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_10_4 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_10_4">
                    @error('details3_10_4') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        Name and registered office of the company
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_10_5 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_10_5">
                    @error('details3_10_5') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        Size and activity of the company
                        <br>
                        If the documents can no longer be found / obtained, the facts must be recorded. Alternatively, an extract from the tax return can be obtained.
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_10_6 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_10_6">
                    @error('details3_10_6') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>


        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-top: 1px solid #888; padding: 10px; vertical-align: top;">
                <b>Purpose of the business relationship</b>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-top: 1px solid #888;">
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px; list-style: disc;">
                    <li>
                        For what purpose will the business relationship be used?
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_11_1 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_11_1">
                    @error('details3_11_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        What transactions are expected?
                    </li>
                </ul>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_11_2 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_11_2">
                    @error('details3_11_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; padding: 10px; vertical-align: top;">
                <b>For high-risk customers:</b> Which supporting documentation was obtained?
                <br>
                <i>e.g. sales contracts, certificate of inheritance, deed of gift, annual report, etc.</i>
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; border-bottom: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $details3_12 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="details3_12">
                    @error('details3_12') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
    </table>

    {{-- Signature --}}
    <p style="margin-top: 60px">This form was completed by:</p>
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                First and last name
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $signatureName ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="signatureName">
                    @error('signatureName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Date
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $signatureDate ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="signatureDate">
                    @error('signatureDate') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
    </table>
</div>
