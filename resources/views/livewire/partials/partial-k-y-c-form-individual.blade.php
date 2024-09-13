<div>
    <h1>KYC Form – Individual</h1>

    {{-- I.  PERSONAL DETAILS --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="5" style="padding: 10px;"><b>I.  PERSONAL DETAILS</b></td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                First name:
                <br>
                (Given name)
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $firstName }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="firstName">
                    @error('firstName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Last name:
                <br>
                (Family name)
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $lastName }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="lastName">
                    @error('lastName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Date and Place of birth:
            </td>
            <td style="width: 15%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $dateOfBirth }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="dateOfBirth" placeholder="Date">
                    @error('dateOfBirth') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 15%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $placeOfBirth }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="placeOfBirth" placeholder="Place">
                    @error('placeOfBirth') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Nationality(ies):
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $nationality }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="nationality">
                    @error('nationality') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border-top: 1px solid #888; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                Civil status:
            </td>
            <td style="border-top: 1px solid #888; border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $civilStatus }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="civilStatus">
                    @error('civilStatus') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" rowspan="3">
                Passport:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" rowspan="3">
                @if($isPDF)
                    <p>{{ $idPassport }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="idPassport">
                    @error('idPassport') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                If married, under which regime?
            </td>
            <td style="border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $civilRegime ?? '' }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="civilRegime">
                    @error('civilRegime') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border-bottom: 1px solid #888; border-left: 1px solid #888; border-right: 1px solid #888; padding: 10px; vertical-align: top;">
                If divorced, date?
            </td>
            <td style="border-bottom: 1px solid #888; border-left: 1px solid #888; border-right: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $civilDate ?? '' }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="civilDate">
                    @error('civilDate') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Main residential address:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $mainResidentialAddress }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="mainResidentialAddress">
                    @error('mainResidentialAddress') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Mailing address
                <br>
                (if different):
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $mailingAddress }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="mailingAddress">
                    @error('mailingAddress') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Telephone (Home):
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $homeTelephone }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="homeTelephone">
                    @error('homeTelephone') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Telephone mobile:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $mobileTelephone }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="mobileTelephone">
                    @error('mobileTelephone') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Telephone (Office):
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $officeTelephone }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="officeTelephone">
                    @error('officeTelephone') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Email address:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $email }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="email">
                    @error('email') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Tax domicile (country):
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $taxDomicile }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="taxDomicile">
                    @error('taxDomicile') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Tax Identification Number (TIN):
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $itin }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="itin">
                    @error('itin') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>

    </table>

     {{-- II. PROFESSIONAL ACTIVITY --}}
     <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="4" style="padding: 10px;"><b>II. PROFESSIONAL ACTIVITY</b></td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Profession(s) and occupation(s):
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $professionOccupation }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="professionOccupation">
                    @error('professionOccupation') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                <input type="radio" id="professionOccupationOption-Employed" name="professionOccupationOption" value="Employed" wire:model="professionOccupationOption" @if($isPDF && $professionOccupationOption == "Employed") checked @endif>
                <label for="professionOccupationOption-Employed">Employed</label>
                <br>
                <input type="radio" id="professionOccupationOption-Self-employed" name="professionOccupationOption" value="Self-employed" wire:model="professionOccupationOption" @if($isPDF && $professionOccupationOption == "Self-employed") checked @endif>
                <label for="professionOccupationOption-Self-employed">Self-employed</label>
                <br>
                <input type="radio" id="professionOccupationOption-Retired" name="professionOccupationOption" value="Retired" wire:model="professionOccupationOption" @if($isPDF && $professionOccupationOption == "Retired") checked @endif>
                <label for="professionOccupationOption-Retired">Retired</label>
                <br>
                @error('professionOccupationOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Last/current position:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $lastPosition }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="lastPosition">
                    @error('lastPosition') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Business name:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $businessName }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="businessName">
                    @error('businessName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Business address:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $businessAddress }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="businessAddress">
                    @error('businessAddress') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Nature of business:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $businessNature }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="businessNature">
                    @error('businessNature') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Web page:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="3">
                @if($isPDF)
                    <p>{{ $webPage }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="webPage">
                    @error('webPage') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
     </table>

     {{-- III.  FAMILY DETAILS --}}
     <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="5" style="padding: 10px;"><b>III.  FAMILY DETAILS</b></td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Spouse’s first (given) name:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $spouseFirstName }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="spouseFirstName">
                    @error('spouseFirstName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Spouse’s last (maiden) name:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $spouseLastName }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="spouseLastName">
                    @error('spouseLastName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Date and Place of birth:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $dateBirth }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="dateBirth" placeholder="Date">
                    @error('dateBirth') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $placeBirth }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="placeBirth" placeholder="Place">
                    @error('placeBirth') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Nationality(ies):
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $nationalityFamily }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="nationalityFamily">
                    @error('nationalityFamily') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                ID/Passport:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $idPassportFamily }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="idPassportFamily">
                    @error('idPassportFamily') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Civil status:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $civilStatusFamily }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="civilStatusFamily">
                    @error('civilStatusFamily') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Main residential address:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $mainResidentialAddressFamily }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="mainResidentialAddressFamily">
                    @error('mainResidentialAddressFamily') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Profession:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $professionFamily }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="professionFamily">
                    @error('professionFamily') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Date and Place of birth:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $dateBirthChildren }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="dateBirthChildren" placeholder="Date">
                    @error('dateBirthChildren') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $placeBirthChildren }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="placeBirthChildren" placeholder="Place">
                    @error('placeBirthChildren') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Children’s name(s):
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $childrenName }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="childrenName">
                    @error('childrenName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
     </table>

     {{-- IV.  PEP STATUS --}}
     <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="2" style="padding: 10px;"><b>IV.  PEP STATUS</b></td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Are you or any of your family members a politically exposed person (PEP)? (e.g. person who has been entrusted with prominent public functions)
                    </li>
                </ul>
            </td>
            <td style="width: 50%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="exposedOption-Yes" name="exposedOption" value="Yes" wire:model="exposedOption" @if($isPDF && $exposedOption == "Yes") checked @endif>
                <label for="exposedOption-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="exposedOption-No" name="exposedOption" value="No" wire:model="exposedOption" @if($isPDF && $exposedOption == "No") checked @endif>
                <label for="exposedOption-No">No</label>
                @error('exposedOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Are you in any manner related to a PEP? If yes, please specify.
                    </li>
                </ul>
            </td>
            <td style="width: 50%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="relatedPepOption-Yes" name="relatedPepOption" value="Yes" wire:model.live="relatedPepOption" @if($isPDF && $relatedPepOption == "Yes") checked @endif>
                <label for="relatedPepOption-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="relatedPepOption-No" name="relatedPepOption" value="No" wire:model.live="relatedPepOption" @if($isPDF && $relatedPepOption == "No") checked @endif>
                <label for="relatedPepOption-No">No</label>
                @error('relatedPepOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($relatedPepOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $relatedPepDetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="relatedPepDetails">
                        @error('relatedPepDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif

                @endif
            </td>
        </tr>
     </table>


     {{-- V. WEALTH / PATRIMONY /REVENUES --}}
     <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="3" style="padding: 10px;"><b>V. WEALTH / PATRIMONY /REVENUES</b></td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="2">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        What is the origin of your wealth?
                        <br>
                        <i>Please describe, when, how, what: </i>
                    </li>
                </ul>

                <div style="margin-top: 10px;">
                    @if($isPDF)
                        <p>{{ $originalWealth }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="originalWealth">
                        @error('originalWealth') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </div>
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="originalWealthOption-Employment" name="originalWealthOption" value="Employment" wire:model="originalWealthOption" @if($isPDF && $originalWealthOption == "Employment") checked @endif>
                <label for="originalWealthOption-Employment">Employment</label>
                <br>
                <input type="radio" id="originalWealthOption-Business-activities" name="originalWealthOption" value="Business activities" wire:model="originalWealthOption" @if($isPDF && $originalWealthOption == "Business activities") checked @endif>
                <label for="originalWealthOption-Business-activities">Business activities</label>
                <br>
                <input type="radio" id="originalWealthOption-Gift-Inheritance" name="originalWealthOption" value="Gift / Inheritance" wire:model="originalWealthOption" @if($isPDF && $originalWealthOption == "Gift / Inheritance") checked @endif>
                <label for="originalWealthOption-Gift-Inheritance">Gift / Inheritance</label>
                <br>
                <input type="radio" id="originalWealthOption-Real-Estate-revenue" name="originalWealthOption" value="Real Estate’s revenue" wire:model="originalWealthOption" @if($isPDF && $originalWealthOption == "Real Estate’s revenue") checked @endif>
                <label for="originalWealthOption-Real-Estate-revenue">Real Estate’s revenue</label>
                <br>
                <input type="radio" id="originalWealthOption-Royalties" name="originalWealthOption" value="Royalties" wire:model="originalWealthOption" @if($isPDF && $originalWealthOption == "Royalties") checked @endif>
                <label for="originalWealthOption-Royalties">Royalties</label>
                <br>
                <input type="radio" id="originalWealthOption-Other" name="originalWealthOption" value="Other" wire:model="originalWealthOption" @if($isPDF && $originalWealthOption == "Other") checked @endif>
                <label for="originalWealthOption-Other">Other</label>
                @error('originalWealthOption') <br><span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                <div style="margin-left: 20px;">
                    @if($isPDF)
                        <p>{{ $otherWealthDetail }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="otherWealthDetail">
                        @error('otherWealthDetail') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        What is your total wealth?
                    </li>
                </ul>
            </td>
            <td style="width: 15%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Total amount
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $totalWealth }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="totalWealth">
                    @error('totalWealth') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" rowspan="4">
                <p style="padding-left: 30px;">
                    Breakdown of wealth holdings (%):
                </p>
            </td>
            <td style="width: 15%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Bankable
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $bankableWealth }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="bankableWealth">
                    @error('bankableWealth') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 15%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Real estate
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $realEstateWealth }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="realEstateWealth">
                    @error('realEstateWealth') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 15%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Shares
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $shareWealth }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="shareWealth">
                    @error('shareWealth') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 15%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Other
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $otherWealth }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="otherWealth">
                    @error('otherWealth') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>

        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="2">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Please indicate your annual income (estimated amount)? Where does it come from?
                    </li>
                </ul>
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $anualIncome }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="anualIncome">
                    @error('anualIncome') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>

        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <div style="padding-left: 30px;">
                    <input id="Employment-checkbox" type="checkbox" wire:model="checkboxIncomeEmploy" @if($isPDF && $checkboxIncomeEmploy) checked @endif>
                    <label for="Employment-checkbox">
                        Employment / self-employment
                    </label>
                </div>
            </td>
            <td style="width: 15%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                USD/EUR/CHF/GBP
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $incomeEmployCurrency }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="incomeEmployCurrency">
                    @error('incomeEmployCurrency') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p style="padding-left: 50px;">
                    Position
                </p>
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $incomeEmployPosition }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="incomeEmployPosition">
                    @error('incomeEmployPosition') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p style="padding-left: 50px;">
                    Business name and address
                </p>
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $incomeEmployBusiness }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="incomeEmployBusiness">
                    @error('incomeEmployBusiness') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p style="padding-left: 50px;">
                    Nature of business
                </p>
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $incomeEmployNatureBusiness }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="incomeEmployNatureBusiness">
                    @error('incomeEmployNatureBusiness') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p style="padding-left: 50px;">
                    Website
                </p>
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $incomeEmployWebsite }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="incomeEmployWebsite">
                    @error('incomeEmployWebsite') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>

        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <div style="padding-left: 30px;">
                    <input id="Dividends-checkbox" type="checkbox" wire:model="checkboxDividend" @if($isPDF && $checkboxDividend) checked @endif>
                    <label for="Dividends-checkbox">
                        Dividends
                    </label>
                </div>
            </td>
            <td style="width: 15%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                USD/EUR/CHF/GBP
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $dividendCurrency }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="dividendCurrency">
                    @error('dividendCurrency') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p style="padding-left: 50px;">
                    Name of company(ies)
                </p>
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $dividendCompanyname }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="dividendCompanyname">
                    @error('dividendCompanyname') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p style="padding-left: 50px;">
                    Jurisdiction(s)
                </p>
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $dividendJurisdiction }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="dividendJurisdiction">
                    @error('dividendJurisdiction') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p style="padding-left: 50px;">
                    Nature of business
                </p>
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $dividendNatureBusiness }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="dividendNatureBusiness">
                    @error('dividendNatureBusiness') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>


        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <div style="padding-left: 30px;">
                    <input id="Rental-checkbox" type="checkbox" wire:model="checkboxRentalIncome" @if($isPDF && $checkboxRentalIncome) checked @endif>
                    <label for="Rental-checkbox">
                        Rental income
                    </label>
                </div>
            </td>
            <td style="width: 15%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                USD/EUR/CHF/GBP
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $rentalIncomeCurrency }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="rentalIncomeCurrency">
                    @error('rentalIncomeCurrency') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p style="padding-left: 50px;">
                    Type of property, location
                </p>
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $rentalTypeProperty }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="rentalTypeProperty">
                    @error('rentalTypeProperty') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>


        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <div style="padding-left: 30px;">
                    <input id="Investments-checkbox" type="checkbox" wire:model="checkboxInvestments" @if($isPDF && $checkboxInvestments) checked @endif>
                    <label for="Investments-checkbox">
                        Investments
                    </label>
                </div>
            </td>
            <td style="width: 15%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                USD/EUR/CHF/GBP
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $investmentsCurrency }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="investmentsCurrency">
                    @error('investmentsCurrency') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p style="padding-left: 50px;">
                    Details
                </p>
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $investmentsDetails }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="investmentsDetails">
                    @error('investmentsDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>


        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <div style="padding-left: 30px;">
                    <input id="Other-checkbox" type="checkbox" wire:model="checkboxOtherCurrency" @if($isPDF && $checkboxOtherCurrency) checked @endif>
                    <label for="Other-checkbox">
                        Other
                    </label>
                </div>
            </td>
            <td style="width: 15%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                USD/EUR/CHF/GBP
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $otherCurrency }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="otherCurrency">
                    @error('otherCurrency') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 35%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p style="padding-left: 50px;">
                    Details
                </p>
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="2">
                @if($isPDF)
                    <p>{{ $otherDetails }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="otherDetails">
                    @error('otherDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>


        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="2">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Can you please provide with a bank reference letter issued by the bank of your home country?
                        <br>
                        If no, please indicate the reason(s) and provide with a bank or commercial reference letter:
                    </li>
                </ul>
            </td>
            <td style="width: 50%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="bankReferenceLetterOption-Yes" name="bankReferenceLetterOption" value="Yes" wire:model.live="bankReferenceLetterOption" @if($isPDF && $bankReferenceLetterOption == "Yes") checked @endif>
                <label for="bankReferenceLetterOption-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="bankReferenceLetterOption-No" name="bankReferenceLetterOption" value="No" wire:model.live="bankReferenceLetterOption" @if($isPDF && $bankReferenceLetterOption == "No") checked @endif>
                <label for="bankReferenceLetterOption-No">No</label>
                @error('bankReferenceLetterOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($bankReferenceLetterOption == "No")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $bankReferenceLetterDetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="bankReferenceLetterDetails">
                        @error('bankReferenceLetterDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif

                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="2">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Are you expecting new funds within the next 12 months?
                        <br>
                        If yes, please give details (amount, bank, country of origin):
                    </li>
                </ul>
            </td>
            <td style="width: 50%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="expectNewFundOption-Yes" name="expectNewFundOption" value="Yes" wire:model.live="expectNewFundOption" @if($isPDF && $expectNewFundOption == "Yes") checked @endif>
                <label for="expectNewFundOption-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="expectNewFundOption-No" name="expectNewFundOption" value="No" wire:model.live="expectNewFundOption" @if($isPDF && $expectNewFundOption == "No") checked @endif>
                <label for="expectNewFundOption-No">No</label>
                @error('expectNewFundOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($expectNewFundOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $expectNewFundDetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="expectNewFundDetails">
                        @error('expectNewFundDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif

                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="2">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Are you planning an outflow of funds within the next 12 months?
                        <br>
                        If yes, please give details (amount, bank, country of destination).
                    </li>
                </ul>
            </td>
            <td style="width: 50%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="outflowFundOption-Yes" name="outflowFundOption" value="Yes" wire:model.live="outflowFundOption" @if($isPDF && $outflowFundOption == "Yes") checked @endif>
                <label for="outflowFundOption-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="outflowFundOption-No" name="outflowFundOption" value="No" wire:model.live="outflowFundOption" @if($isPDF && $outflowFundOption == "No") checked @endif>
                <label for="outflowFundOption-No">No</label>
                @error('outflowFundOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($outflowFundOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $outflowFundDetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="outflowFundDetails">
                        @error('outflowFundDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif

                @endif
            </td>
        </tr>
     </table>

     {{-- VI.  OTHER SUBSTANTIVE INFORMATION --}}
     <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="3" style="padding: 10px;"><b>VI.  OTHER SUBSTANTIVE INFORMATION</b></td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Please indicate your previous country(ies) of residence (when? )
                    </li>
                </ul>
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $previousCountry }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="previousCountry">
                    @error('previousCountry') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $previousCountry2 }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="previousCountry2">
                    @error('previousCountry2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Have you ever declared bankruptcy in a country?
                        <br>
                        If yes, please specify.
                    </li>
                </ul>
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="dedaredBankruptcyOption-Yes" name="dedaredBankruptcyOption" value="Yes" wire:model.live="dedaredBankruptcyOption" @if($isPDF && $dedaredBankruptcyOption == "Yes") checked @endif>
                <label for="dedaredBankruptcyOption-Yes">Yes</label>
                @error('dedaredBankruptcyOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($dedaredBankruptcyOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $dedaredBankruptcyDetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="dedaredBankruptcyDetails">
                        @error('dedaredBankruptcyDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif

                @endif
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="dedaredBankruptcyOption-No" name="dedaredBankruptcyOption" value="No" wire:model.live="dedaredBankruptcyOption" @if($isPDF && $dedaredBankruptcyOption == "No") checked @endif>
                <label for="dedaredBankruptcyOption-No">No</label>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Have you ever been convicted by any Court in any country for any offense?
                        <br>
                        If yes, please specify.
                    </li>
                </ul>
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="convictedCourtOption-Yes" name="convictedCourtOption" value="Yes" wire:model.live="convictedCourtOption" @if($isPDF && $convictedCourtOption == "Yes") checked @endif>
                <label for="convictedCourtOption-Yes">Yes</label>
                @error('convictedCourtOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($convictedCourtOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $convictedCourtDetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="convictedCourtDetails">
                        @error('convictedCourtDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif

                @endif
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="convictedCourtOption-No" name="convictedCourtOption" value="No" wire:model.live="convictedCourtOption" @if($isPDF && $convictedCourtOption == "No") checked @endif>
                <label for="convictedCourtOption-No">No</label>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Have you ever been banned from being eligible to be director or company officer by any regulatory body in any jurisdiction?
                        <br>
                        If yes, please specify.
                    </li>
                </ul>
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="bannedEligibleOption-Yes" name="bannedEligibleOption" value="Yes" wire:model.live="bannedEligibleOption" @if($isPDF && $bannedEligibleOption == "Yes") checked @endif>
                <label for="bannedEligibleOption-Yes">Yes</label>
                @error('bannedEligibleOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($bannedEligibleOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $bannedEligibleDetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="bannedEligibleDetails">
                        @error('bannedEligibleDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif

                @endif
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="bannedEligibleOption-No" name="bannedEligibleOption" value="No" wire:model.live="bannedEligibleOption" @if($isPDF && $bannedEligibleOption == "No") checked @endif>
                <label for="bannedEligibleOption-No">No</label>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Do you hold U.S.A. citizenship?
                        <br>
                        If yes, please indicate your tax identification number:
                    </li>
                </ul>
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="holdUSACitizenshipOption-Yes" name="holdUSACitizenshipOption" value="Yes" wire:model.live="holdUSACitizenshipOption" @if($isPDF && $holdUSACitizenshipOption == "Yes") checked @endif>
                <label for="holdUSACitizenshipOption-Yes">Yes</label>
                @error('holdUSACitizenshipOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($holdUSACitizenshipOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $holdUSACitizenshipDetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="holdUSACitizenshipDetails">
                        @error('holdUSACitizenshipDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                @endif
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="holdUSACitizenshipOption-No" name="holdUSACitizenshipOption" value="No" wire:model.live="holdUSACitizenshipOption" @if($isPDF && $holdUSACitizenshipOption == "No") checked @endif>
                <label for="holdUSACitizenshipOption-No">No</label>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Have you renounced your U.S.A. citizenship?
                        <br>
                        If yes, please indicate when and provide a copy of your Certificate of Loss of Nationality.
                    </li>
                </ul>
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="renounceUSACitizenshipOption-Yes" name="renounceUSACitizenshipOption" value="Yes" wire:model.live="renounceUSACitizenshipOption" @if($isPDF && $renounceUSACitizenshipOption == "Yes") checked @endif>
                <label for="renounceUSACitizenshipOption-Yes">Yes</label>
                @error('renounceUSACitizenshipOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($renounceUSACitizenshipOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $renounceUSACitizenshipDetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="renounceUSACitizenshipDetails">
                        @error('renounceUSACitizenshipDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                @endif
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="renounceUSACitizenshipOption-No" name="renounceUSACitizenshipOption" value="No" wire:model.live="renounceUSACitizenshipOption" @if($isPDF && $renounceUSACitizenshipOption == "No") checked @endif>
                <label for="renounceUSACitizenshipOption-No">No</label>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Do you hold or have ever held a U.S.A. passport?
                        <br>
                        If yes, please indicate number and date of issuance:
                    </li>
                </ul>
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="holdUSAPassportOption-Yes" name="holdUSAPassportOption" value="Yes" wire:model.live="holdUSAPassportOption" @if($isPDF && $holdUSAPassportOption == "Yes") checked @endif>
                <label for="holdUSAPassportOption-Yes">Yes</label>
                @error('holdUSAPassportOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($holdUSAPassportOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $holdUSAPassportDetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="holdUSAPassportDetails">
                        @error('holdUSAPassportDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                @endif
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="holdUSAPassportOption-No" name="holdUSAPassportOption" value="No" wire:model.live="holdUSAPassportOption" @if($isPDF && $holdUSAPassportOption == "No") checked @endif>
                <label for="holdUSAPassportOption-No">No</label>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Do you hold or have ever held a U.S.A. green card?
                        <br>
                        If yes, please indicate number and date of issuance:
                    </li>
                </ul>
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="holdUSAGreenCardOption-Yes" name="holdUSAGreenCardOption" value="Yes" wire:model.live="holdUSAGreenCardOption" @if($isPDF && $holdUSAGreenCardOption == "Yes") checked @endif>
                <label for="holdUSAGreenCardOption-Yes">Yes</label>
                @error('holdUSAGreenCardOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($holdUSAGreenCardOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $holdUSAGreenCardDetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="holdUSAGreenCardDetails">
                        @error('holdUSAGreenCardDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                @endif
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="holdUSAGreenCardOption-No" name="holdUSAGreenCardOption" value="No" wire:model.live="holdUSAGreenCardOption" @if($isPDF && $holdUSAGreenCardOption == "No") checked @endif>
                <label for="holdUSAGreenCardOption-No">No</label>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Do you have a permanent/temporary residency in the U.S.A.?
                        <br>
                        If yes, please indicate address:
                    </li>
                </ul>
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="havePermanentResidencyUSAOption-Yes" name="havePermanentResidencyUSAOption" value="Yes" wire:model.live="havePermanentResidencyUSAOption" @if($isPDF && $havePermanentResidencyUSAOption == "Yes") checked @endif>
                <label for="havePermanentResidencyUSAOption-Yes">Yes</label>
                @error('havePermanentResidencyUSAOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($havePermanentResidencyUSAOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $havePermanentResidencyUSADetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="havePermanentResidencyUSADetails">
                        @error('havePermanentResidencyUSADetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                @endif
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="havePermanentResidencyUSAOption-No" name="havePermanentResidencyUSAOption" value="No" wire:model.live="havePermanentResidencyUSAOption" @if($isPDF && $havePermanentResidencyUSAOption == "No") checked @endif>
                <label for="havePermanentResidencyUSAOption-No">No</label>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Do you have a “care of” address in the U.S.A.?
                        <br>
                        If yes, please indicate address:
                    </li>
                </ul>
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="haveCareOfAddressUSAOption-Yes" name="haveCareOfAddressUSAOption" value="Yes" wire:model.live="haveCareOfAddressUSAOption" @if($isPDF && $haveCareOfAddressUSAOption == "Yes") checked @endif>
                <label for="haveCareOfAddressUSAOption-Yes">Yes</label>
                @error('haveCareOfAddressUSAOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($haveCareOfAddressUSAOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $haveCareOfAddressUSADetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="haveCareOfAddressUSADetails">
                        @error('haveCareOfAddressUSADetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                @endif
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="haveCareOfAddressUSAOption-No" name="haveCareOfAddressUSAOption" value="No" wire:model.live="haveCareOfAddressUSAOption" @if($isPDF && $haveCareOfAddressUSAOption == "No") checked @endif>
                <label for="haveCareOfAddressUSAOption-No">No</label>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Do you have a U.S.A. phone number?
                        <br>
                        If yes, please indicate number:
                    </li>
                </ul>
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="haveUSAPhoneNumberOption-Yes" name="haveUSAPhoneNumberOption" value="Yes" wire:model.live="haveUSAPhoneNumberOption" @if($isPDF && $haveUSAPhoneNumberOption == "Yes") checked @endif>
                <label for="haveUSAPhoneNumberOption-Yes">Yes</label>
                @error('haveUSAPhoneNumberOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($haveUSAPhoneNumberOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $haveUSAPhoneNumberDetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="haveUSAPhoneNumberDetails">
                        @error('haveUSAPhoneNumberDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                @endif
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="haveUSAPhoneNumberOption-No" name="haveUSAPhoneNumberOption" value="No" wire:model.live="haveUSAPhoneNumberOption" @if($isPDF && $haveUSAPhoneNumberOption == "No") checked @endif>
                <label for="haveUSAPhoneNumberOption-No">No</label>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Do you directly or indirectly hold a property/residence in the U.S.A.?
                        <br>
                        If yes, please specify.  Tap here to enter text.
                    </li>
                </ul>
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="holdPropertyUSAOption-Yes" name="holdPropertyUSAOption" value="Yes" wire:model.live="holdPropertyUSAOption" @if($isPDF && $holdPropertyUSAOption == "Yes") checked @endif>
                <label for="holdPropertyUSAOption-Yes">Yes</label>
                @error('holdPropertyUSAOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($holdPropertyUSAOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $holdPropertyUSADetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="holdPropertyUSADetails">
                        @error('holdPropertyUSADetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                @endif
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="holdPropertyUSAOption-No" name="holdPropertyUSAOption" value="No" wire:model.live="holdPropertyUSAOption" @if($isPDF && $holdPropertyUSAOption == "No") checked @endif>
                <label for="holdPropertyUSAOption-No">No</label>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Have you granted a power of attorney on your bank or investment account(s) to a U.S.A. person?
                        <br>
                        If yes, please indicate whom:
                    </li>
                </ul>
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="grantedPowerAttomeyOption-Yes" name="grantedPowerAttomeyOption" value="Yes" wire:model.live="grantedPowerAttomeyOption" @if($isPDF && $grantedPowerAttomeyOption == "Yes") checked @endif>
                <label for="grantedPowerAttomeyOption-Yes">Yes</label>
                @error('grantedPowerAttomeyOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($grantedPowerAttomeyOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $grantedPowerAttomeyDetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="grantedPowerAttomeyDetails">
                        @error('grantedPowerAttomeyDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                @endif
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="grantedPowerAttomeyOption-No" name="grantedPowerAttomeyOption" value="No" wire:model.live="grantedPowerAttomeyOption" @if($isPDF && $grantedPowerAttomeyOption == "No") checked @endif>
                <label for="grantedPowerAttomeyOption-No">No</label>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Do you have substantial professional activities or interests in the U.S.A?
                        <br>
                        If yes, please indicate activities and location:
                    </li>
                </ul>
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="substantialProfessionalActivitiesOption-Yes" name="substantialProfessionalActivitiesOption" value="Yes" wire:model.live="substantialProfessionalActivitiesOption" @if($isPDF && $substantialProfessionalActivitiesOption == "Yes") checked @endif>
                <label for="substantialProfessionalActivitiesOption-Yes">Yes</label>
                @error('substantialProfessionalActivitiesOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                @if($substantialProfessionalActivitiesOption == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $substantialProfessionalActivitiesDetails }}</p>
                    @else
                        <input style="width: 100%; margin-top: 10px" type="text" wire:model="substantialProfessionalActivitiesDetails">
                        @error('substantialProfessionalActivitiesDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                @endif
            </td>
            <td style="width: 25%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="substantialProfessionalActivitiesOption-No" name="substantialProfessionalActivitiesOption" value="No" wire:model.live="substantialProfessionalActivitiesOption" @if($isPDF && $substantialProfessionalActivitiesOption == "No") checked @endif>
                <label for="substantialProfessionalActivitiesOption-No">No</label>
            </td>
        </tr>
     </table>

     {{-- VII.  OTHER SUBSTANTIVE INFORMATION --}}
     <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="2" style="padding: 10px;"><b>VII.  OTHER SUBSTANTIVE INFORMATION</b></td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        Why do you want to work with us? Describe the nature and purpose of the business relationship.
                    </li>
                </ul>
            </td>
            <td style="width: 50%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $reasonWorkUs }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="reasonWorkUs">
                    @error('reasonWorkUs') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <ul style="padding-left: 20px;list-style: disc;">
                    <li>
                        What is the objective of this mandate?
                    </li>
                </ul>
            </td>
            <td style="width: 50%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $yourObjective }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="yourObjective">
                    @error('yourObjective') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
     </table>

     {{-- Confirm --}}
     <div style="margin-top: 20px">
        <input id="truth-checkbox" type="checkbox" wire:model.live="checkboxConfirmTruth" @if($isPDF && $checkboxConfirmTruth) checked @endif>
        <label for="truth-checkbox">
            <u><i>
            The undersigned declare that the information provided herein is true and accurate to the best of my knowledge.
            </i></u>
        </label>
        @error('checkboxConfirmTruth')
            <br>
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
    <div style="margin-top: 20px">
        <input id="inform-checkbox" type="checkbox" wire:model.live="checkboxConfirmInform" @if($isPDF && $checkboxConfirmInform) checked @endif>
        <label for="inform-checkbox">
            <u><i>
            I will inform FINAKEY SA of any changes immediately as they come to my knowledge.
            </i></u>
        </label>
        @error('checkboxConfirmInform')
            <br>
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
    <div style="margin-top: 20px">
        <input id="check-checkbox" type="checkbox" wire:model.live="checkboxConfirmCheck" @if($isPDF && $checkboxConfirmCheck) checked @endif>
        <label for="check-checkbox">
            <u><i>
            I recognize that FINAKEY SA has the right, from time to time or at any given time, to evaluate, examine or check the information provided herein.
            </i></u>
        </label>
        @error('checkboxConfirmCheck')
            <br>
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>


    {{-- Signature --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr>
            <td style="width: 10%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Place:
            </td>
            <td style="width: 40%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $signaturePlace }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="signaturePlace">
                    @error('signaturePlace') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
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

     {{-- P.S --}}
     <h3 style="margin-top: 100px">
        <b><u>
        PLEASE ENCLOSE THE FOLLOWING:
        </u></b>
     </h3>
     <div style="padding-left: 50px; margin-top: 30px">
        <p>Certified copies of valid passport(s);</p>
        <p>Original of utility bill not older than 3 (three) months from the date of signing this form;</p>
        <p>Original bank reference letter;</p>
        <p>CV (Curriculum vitae) dated and signed;</p>
        <p>Other:</p>
     </div>
     <div style="border-top: 1px solid #888; margin-top: 30px; height: 1px"></div>
</div>
