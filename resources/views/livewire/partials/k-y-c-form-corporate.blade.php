<div>
    <h1>KYC Form – Corporate</h1>

    {{-- I.  PERSONAL DETAILS --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="4" style="padding: 10px;"><b>I.  GENERAL INFORMATION</b></td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Entity’s name:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $generalEntityName ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="generalEntityName">
                    @error('generalEntityName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Legal form:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $generalLegalForm ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="generalLegalForm">
                    @error('generalLegalForm') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Registration number:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $generalRegistrationNumber ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="generalRegistrationNumber">
                    @error('generalRegistrationNumber') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Registered address / headquarters:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $generalRegisteredAddress ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="generalRegisteredAddress">
                    @error('generalRegisteredAddress') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Phone:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $generalPhone ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="generalPhone">
                    @error('generalPhone') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Mailing address if different:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $generalDifferentMail ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="generalDifferentMail">
                    @error('generalDifferentMail') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Email:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $generalEmail ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="generalEmail">
                    @error('generalEmail') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Web address:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $generalWeb ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="generalWeb">
                    @error('generalWeb') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Tax domicile:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $generalTaxDomicile ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="generalTaxDomicile">
                    @error('generalTaxDomicile') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Tax identification number:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $generalTaxID ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="generalTaxID">
                    @error('generalTaxID') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Type of business:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="3">
                @if($isPDF)
                    <p>{{ $generalBusinessType ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="generalBusinessType">
                    @error('generalBusinessType') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Entity's activities (description):
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="3">
                @if($isPDF)
                    <p>{{ $generalEntityActivity ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="generalEntityActivity">
                    @error('generalEntityActivity') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Entity's retail bank (incl. country):
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;" colspan="3">
                @if($isPDF)
                    <p>{{ $generalEntityRetailBank ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="generalEntityRetailBank">
                    @error('generalEntityRetailBank') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="3">
                <p>❖ Is the Entity listed in stock exchange markets?</p>
                <br>
                <span>If yes, where and what is the stock symbol:</span>
                @if($isPDF)
                    <span>{{ $generalStockSymbol ?? "" }}</span>
                @else
                    <input style="width: 100%;" type="text" wire:model="generalStockSymbol">
                    @error('generalStockSymbol') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="optionEntityStock-Yes" name="optionEntityStock" value="Yes" wire:model="optionEntityStock" @if($isPDF && ($optionEntityStock ?? "") == "Yes") checked @endif>
                <label for="optionEntityStock-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="optionEntityStock-No" name="optionEntityStock" value="No" wire:model="optionEntityStock" @if($isPDF && ($optionEntityStock ?? "") == "No") checked @endif>
                <label for="optionEntityStock-No">No</label>
                @error('optionEntityStock') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
    </table>

    {{-- II. BENEFICIAL OWNER’S INFORMATION --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="4" style="padding: 10px;"><b>II. BENEFICIAL OWNER’S INFORMATION</b></td>
        </tr>
        @for($i = 1; $i < 5; $i++)
            @if($i == 3)
                <tr style="background-color: #004580; border: 1px solid #004580">
                    <td colspan="4" style="padding: 10px; color: white">
                        ❖ If no one holds nor controls more than 25% of the shares, who owns the largest number of shares?
                    </td>
                </tr>
            @endif
            <tr>
                <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                    {{$i}}) Full name:
                </td>
                <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                    @if($isPDF)
                        <p>{{ ${"ownerFullName_$i"} ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="ownerFullName_{{$i}}">
                        @error("ownerFullName_{$i}") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
                <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                    Nationality(ies):
                </td>
                <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                    @if($isPDF)
                        <p>{{ ${"ownerNationality_$i"} ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="ownerNationality_{{$i}}">
                        @error("ownerNationality_{$i}") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                    D/Passport (s) No:
                </td>
                <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                    @if($isPDF)
                        <p>{{ ${"ownerPassport_$i"} ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="ownerPassport_{{$i}}">
                        @error("ownerPassport_{$i}") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
                <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                    Main residential address:
                </td>
                <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                    @if($isPDF)
                        <p>{{ ${"ownerMainAddress_$i"} ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="ownerMainAddress_{{$i}}">
                        @error("ownerMainAddress_{$i}") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                    Shareholding %:
                </td>
                <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                    @if($isPDF)
                        <p>{{ ${"ownerShareholding_$i"} ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="ownerShareholding_{{$i}}">
                        @error("ownerShareholding_{$i}") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
                <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                    Tax identification number:
                </td>
                <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                    @if($isPDF)
                        <p>{{ ${"ownerTaxID_$i"} ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="ownerTaxID_{{$i}}">
                        @error("ownerTaxID_{$i}") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
            </tr>
        @endfor
    </table>

    {{-- III. PEP STATUS: --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="2" style="padding: 10px;"><b>III. PEP STATUS:</b></td>
        </tr>
        <tr>
            <td style="width: 70%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p>
                    ❖ Are any of the beneficial owners of the Entity considered to be a politically exposed party? (e.g. person who has been entrusted with prominent public functions)
                </p>
                <br>
                <p>
                    If yes, please specify:
                </p>
                @if($isPDF)
                    <p>{{ $pepStatusDetails ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="pepStatusDetails">
                    @error('pepStatusDetails') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 30%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="optionPepStatus-Yes" name="optionPepStatus" value="Yes" wire:model="optionPepStatus" @if($isPDF && ($optionPepStatus ?? "") == "Yes") checked @endif>
                <label for="optionPepStatus-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="optionPepStatus-No" name="optionPepStatus" value="No" wire:model="optionPepStatus" @if($isPDF && ($optionPepStatus ?? "") == "No") checked @endif>
                <label for="optionPepStatus-No">No</label>
                @error('optionPepStatus') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
    </table>

    {{-- IV. MANAGERS INFORMATION (BOARD OF DIRECTORS, CEO'S AND MANAGING DIRECTORS) --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="4" style="padding: 10px;"><b>IV. MANAGERS INFORMATION (BOARD OF DIRECTORS, CEO'S AND MANAGING DIRECTORS)</b></td>
        </tr>
        @for($i = 1; $i < 4; $i++)
            <tr>
                <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                    {{$i}}) Full name:
                </td>
                <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                    @if($isPDF)
                        <p>{{ ${"managerFullName_$i"} ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="managerFullName_{{$i}}">
                        @error("managerFullName_{$i}") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
                <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                    D/Passport (s) No:
                </td>
                <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                    @if($isPDF)
                        <p>{{ ${"managerPassport_$i"} ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="managerPassport_{{$i}}">
                        @error("managerPassport_{$i}") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                    Address:
                </td>
                <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                    @if($isPDF)
                        <p>{{ ${"managerAddress_$i"} ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="managerAddress_{{$i}}">
                        @error("managerAddress_{$i}") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
                <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                    Acting as:
                </td>
                <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                    @if($isPDF)
                        <p>{{ ${"managerActingAs_$i"} ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="managerActingAs_{{$i}}">
                        @error("managerActingAs_{$i}") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
            </tr>
        @endfor
    </table>

    {{-- V. AUTHORISATION TO BIND THE ENTITY --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="4" style="padding: 10px;"><b>V. AUTHORISATION TO BIND THE ENTITY</b></td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="4">
                ❖ Who holds power of attorney for the Entity? If none of the above.
            </td>
        </tr>
        @for($i = 1; $i < 3; $i++)
            <tr>
                <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                    {{$i}}) Full name:
                </td>
                <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                    @if($isPDF)
                        <p>{{ ${"authFullName_$i"} ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="authFullName_{{$i}}">
                        @error("authFullName_{$i}") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
                <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                    D/Passport (s) No:
                </td>
                <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                    @if($isPDF)
                        <p>{{ ${"authPassport_$i"} ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="authPassport_{{$i}}">
                        @error("authPassport_{$i}") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                    Address:
                </td>
                <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                    @if($isPDF)
                        <p>{{ ${"authAddress_$i"} ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="authAddress_{{$i}}">
                        @error("authAddress_{$i}") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
                <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                    Acting as:
                </td>
                <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                    @if($isPDF)
                        <p>{{ ${"authActingAs_$i"} ?? "" }}</p>
                    @else
                        <input style="width: 100%;" type="text" wire:model="authActingAs_{{$i}}">
                        @error("authActingAs_{$i}") <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
            </tr>
        @endfor
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="3">
                <p>
                    ❖ Are there any limitations or restrictions on such power of attorney?
                </p>
                <br>
                <p>
                    If yes, please specify:
                </p>
                @if($isPDF)
                    <p>{{ $authDetail_1 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="authDetail_1">
                    @error('authDetail_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 30%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="optionAuth_1-Yes" name="optionAuth_1" value="Yes" wire:model="optionAuth_1" @if($isPDF && ($optionAuth_1 ?? "") == "Yes") checked @endif>
                <label for="optionAuth_1-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="optionAuth_1-No" name="optionAuth_1" value="No" wire:model="optionAuth_1" @if($isPDF && ($optionAuth_1 ?? "") == "No") checked @endif>
                <label for="optionAuth_1-No">No</label>
                @error('optionAuth_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="3">
                <p>
                    ❖ Are there any other persons that are authorised to obligate the Entity e.g. by virtue of a power of attorney or list of authorized signatures?
                </p>
                <br>
                <p>
                    If yes, please complete his/her/it details below:
                </p>
            </td>
            <td style="width: 30%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="optionAuth_2-Yes" name="optionAuth_2" value="Yes" wire:model="optionAuth_2" @if($isPDF && ($optionAuth_2 ?? "") == "Yes") checked @endif>
                <label for="optionAuth_2-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="optionAuth_2-No" name="optionAuth_2" value="No" wire:model="optionAuth_2" @if($isPDF && ($optionAuth_2 ?? "") == "No") checked @endif>
                <label for="optionAuth_2-No">No</label>
                @error('optionAuth_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Full name:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $authFullName_3 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="authFullName_3">
                    @error('authFullName_3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                D/Passport (s) No:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $authPassport_3 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="authPassport_3">
                    @error('authPassport_3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Address:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $authAddress_3 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="authAddress_3">
                    @error('authAddress_3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 20%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                Acting as:
            </td>
            <td style="border: 1px solid #888; vertical-align: center; padding: 10px;">
                @if($isPDF)
                    <p>{{ $authActingAs_3 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="authActingAs_3">
                    @error('authActingAs_3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
    </table>

    {{-- VI. ORIGIN OF THE ENTITY’S FINANCIAL RESOURCES --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="2" style="padding: 10px;"><b>VI. ORIGIN OF THE ENTITY’S FINANCIAL RESOURCES</b></td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="2">
                <p>
                    ❖ What is the origin of the initial capital of the entity?
                </p>
                <br>
                @if($isPDF)
                    <p>{{ $originInitialCapital ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="originInitialCapital">
                    @error('originInitialCapital') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 70%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p>
                    ❖ Where does the Entity’s wealth originate from?
                </p>
                <br>
                <p>
                    Please provide some details on the above:
                </p>
                @if($isPDF)
                    <p>{{ $originWealthDetail ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="originWealthDetail">
                    @error('originWealthDetail') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 30%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <div style="padding-left: 10px;">
                    <input id="checkboxOrigin_1" type="checkbox" wire:model="checkboxOrigin_1" @if($isPDF && ($checkboxOrigin_1 ?? false)) checked @endif>
                    <label for="checkboxOrigin_1">
                        Commercial activities
                    </label>
                </div>
                <div style="padding-left: 10px;">
                    <input id="checkboxOrigin_2" type="checkbox" wire:model="checkboxOrigin_2" @if($isPDF && ($checkboxOrigin_2 ?? false)) checked @endif>
                    <label for="checkboxOrigin_2">
                        Dividends
                    </label>
                </div>
                <div style="padding-left: 10px;">
                    <input id="checkboxOrigin_3" type="checkbox" wire:model="checkboxOrigin_3" @if($isPDF && ($checkboxOrigin_3 ?? false)) checked @endif>
                    <label for="checkboxOrigin_3">
                        Real Estate’s revenues
                    </label>
                </div>
                <div style="padding-left: 10px;">
                    <input id="checkboxOrigin_4" type="checkbox" wire:model="checkboxOrigin_4" @if($isPDF && ($checkboxOrigin_4 ?? false)) checked @endif>
                    <label for="checkboxOrigin_4">
                        Royalties
                    </label>
                </div>
                <div style="padding-left: 10px;">
                    <input id="checkboxOrigin_5" type="checkbox" wire:model="checkboxOrigin_5" @if($isPDF && ($checkboxOrigin_5 ?? false)) checked @endif>
                    <label for="checkboxOrigin_5">
                        Sale of assets
                    </label>
                </div>
                <div style="padding-left: 10px;">
                    <input id="checkboxOrigin_6" type="checkbox" wire:model="checkboxOrigin_6" @if($isPDF && ($checkboxOrigin_6 ?? false)) checked @endif>
                    <label for="checkboxOrigin_6">
                        Other
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 70%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p>
                    ❖ Can the entity provide a bank reference letter issued by the bank in its home country?
                </p>
                <br>
                <p>
                    If not, please indicate the reason(s):
                </p>
                @if($isPDF)
                    <p>{{ $originNoDetail ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="originNoDetail">
                    @error('originNoDetail') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 30%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="optionOriginCanBankReference-Yes" name="optionOriginCanBankReference" value="Yes" wire:model="optionOriginCanBankReference" @if($isPDF && ($optionOriginCanBankReference ?? "") == "Yes") checked @endif>
                <label for="optionOriginCanBankReference-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="optionOriginCanBankReference-No" name="optionOriginCanBankReference" value="No" wire:model="optionOriginCanBankReference" @if($isPDF && ($optionOriginCanBankReference ?? "") == "No") checked @endif>
                <label for="optionOriginCanBankReference-No">No</label>
                @error('optionOriginCanBankReference') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
    </table>

    {{-- VII. OTHER SUBSTANTIVE INFORMATION --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td colspan="2" style="padding: 10px;"><b>VII. OTHER SUBSTANTIVE INFORMATION</b></td>
        </tr>
        <tr>
            <td style="width: 70%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p>
                    ❖ Does the entity have employees?
                </p>
                <br>
                <p>
                    If yes, please specify where are they based. How many?
                </p>
                @if($isPDF)
                    <p>{{ $otherDetails_1 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="otherDetails_1">
                    @error('otherDetails_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 30%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="otherOption_1-Yes" name="otherOption_1" value="Yes" wire:model="otherOption_1" @if($isPDF && ($otherOption_1 ?? "") == "Yes") checked @endif>
                <label for="otherOption_1-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="otherOption_1-No" name="otherOption_1" value="No" wire:model="otherOption_1" @if($isPDF && ($otherOption_1 ?? "") == "No") checked @endif>
                <label for="otherOption_1-No">No</label>
                @error('otherOption_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="width: 70%; word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p>
                    ❖ Does the entity have its own premises?
                </p>
                <br>
                <p>
                    If yes, please specify where.
                </p>
                @if($isPDF)
                    <p>{{ $otherDetails_2 ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="otherDetails_2">
                    @error('otherDetails_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 30%; border: 1px solid #888; vertical-align: center; padding: 10px;">
                <input type="radio" id="otherOption_2-Yes" name="otherOption_2" value="Yes" wire:model="otherOption_2" @if($isPDF && ($otherOption_2 ?? "") == "Yes") checked @endif>
                <label for="otherOption_2-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="otherOption_2-No" name="otherOption_2" value="No" wire:model="otherOption_2" @if($isPDF && ($otherOption_2 ?? "") == "No") checked @endif>
                <label for="otherOption_2-No">No</label>
                @error('otherOption_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;" colspan="2">
                <p>
                    <b>If you have answered yes to the two questions above, you have completed this questionnaire.</b>
                </p>
                <br>
                <p>
                    If no – Please complete Finakey’s form “KYC form for individuals”
                </p>
            </td>
        </tr>
    </table>

    {{-- VIII. OTHER --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 60px">
        <tr style="background-color: #004580; color: white; font-size: 1.2em; border: 1px solid #004580">
            <td style="padding: 10px;"><b>VIII. OTHER</b></td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; border: 1px solid #888; padding: 10px; vertical-align: top;">
                <p>
                    ❖ Why do you want to work with us? What is the objective of this mandate?
                </p>
                <br>
                @if($isPDF)
                    <p>{{ $otherFinalDetail ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="otherFinalDetail">
                    @error('otherFinalDetail') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
    </table>

    {{-- Signature --}}
    <table style="width: 100%; margin-top: 60px">
        <tr>
            <td style="width: 10%; padding-top: 30px; padding-bottom: 30px; padding-left: 10px; padding-right: 10px">
                <b>Place:</b>
            </td>
            <td style="padding-top: 30px; padding-bottom: 30px; padding-left: 10px; padding-right: 10px">
                @if($isPDF)
                    <p>{{ $place ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="place">
                    @error('place') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 10%; padding-top: 30px; padding-bottom: 30px; padding-left: 10px; padding-right: 10px">
                <b>Date:</b>
            </td>
            <td style="padding-top: 30px; padding-bottom: 30px; padding-left: 10px; padding-right: 10px">
                @if($isPDF)
                    <p>{{ $date ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="date">
                    @error('date') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 10%; padding-top: 30px; padding-bottom: 30px; padding-left: 10px; padding-right: 10px">
                <b>Signature:</b>
            </td>
            <td style="padding-top: 30px; padding-bottom: 30px; padding-left: 10px; padding-right: 10px">
                @if($isPDF)
                    <p>{{ $signature ?? "" }}</p>
                @else
                    <input style="width: 100%;" type="text" wire:model="signature">
                    @error('signature') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
    </table>

    <p style="margin-top: 60px;">
        <b><u>
            PLEASE ENCLOSE THE FOLLOWING:
        </u></b>
    </p>
    {{-- @if(!$isPDF || !($checkboxEnclose_1 ?? false)) --}}
        <div style="padding-left: 10px; margin-top: 30px">
            <input id="checkboxEnclose_1" type="checkbox" wire:model="checkboxEnclose_1" @if($isPDF && ($checkboxEnclose_1 ?? false)) checked @endif>
            <label for="checkboxEnclose_1">
                Certificate of Incorporation
            </label>
        </div>
    {{-- @endif --}}

    {{-- @if(!$isPDF || !($checkboxEnclose_2 ?? false)) --}}
        <div style="padding-left: 10px; margin-top: 30px">
            <input id="checkboxEnclose_2" type="checkbox" wire:model="checkboxEnclose_2" @if($isPDF && ($checkboxEnclose_2 ?? false)) checked @endif>
            <label for="checkboxEnclose_2">
                Certificate of Good Standing (or equivalent)
            </label>
        </div>
    {{-- @endif --}}

    {{-- @if(!$isPDF || !($checkboxEnclose_3 ?? false)) --}}
        <div style="padding-left: 10px; margin-top: 30px">
            <input id="checkboxEnclose_3" type="checkbox" wire:model="checkboxEnclose_3" @if($isPDF && ($checkboxEnclose_3 ?? false)) checked @endif>
            <label for="checkboxEnclose_3">
                Certificate of Incumbency (or equivalent)
            </label>
        </div>
    {{-- @endif --}}

    {{-- @if(!$isPDF || !($checkboxEnclose_4 ?? false)) --}}
        <div style="padding-left: 10px; margin-top: 30px">
            <input id="checkboxEnclose_4" type="checkbox" wire:model="checkboxEnclose_4" @if($isPDF && ($checkboxEnclose_4 ?? false)) checked @endif>
            <label for="checkboxEnclose_4">
                Memorandum and Articles of Association, By-laws or equivalent
            </label>
        </div>
    {{-- @endif --}}

    {{-- @if(!$isPDF || !($checkboxEnclose_5 ?? false)) --}}
        <div style="padding-left: 10px; margin-top: 30px">
            <input id="checkboxEnclose_5" type="checkbox" wire:model="checkboxEnclose_5" @if($isPDF && ($checkboxEnclose_5 ?? false)) checked @endif>
            <label for="checkboxEnclose_5">
                Financial statements of the last 3 years
            </label>
        </div>
    {{-- @endif --}}

    {{-- @if(!$isPDF || !($checkboxEnclose_6 ?? false)) --}}
        <div style="padding-left: 10px; margin-top: 30px">
            <input id="checkboxEnclose_6" type="checkbox" wire:model="checkboxEnclose_6" @if($isPDF && ($checkboxEnclose_6 ?? false)) checked @endif>
            <label for="checkboxEnclose_6">
                Minutes/Resolutions authorizing to sign the Mandate agreement
            </label>
        </div>
    {{-- @endif --}}

    {{-- @if(!$isPDF || !($checkboxEnclose_7 ?? false)) --}}
        <div style="padding-left: 10px; margin-top: 30px">
            <input id="checkboxEnclose_7" type="checkbox" wire:model="checkboxEnclose_7" @if($isPDF && ($checkboxEnclose_7 ?? false)) checked @endif>
            <label for="checkboxEnclose_7">
                Register of members
            </label>
        </div>
    {{-- @endif --}}

    {{-- @if(!$isPDF || !($checkboxEnclose_8 ?? false)) --}}
        <div style="padding-left: 10px; margin-top: 30px">
            <input id="checkboxEnclose_8" type="checkbox" wire:model="checkboxEnclose_8" @if($isPDF && ($checkboxEnclose_8 ?? false)) checked @endif>
            <label for="checkboxEnclose_8">
                Partnership agreements, if applicable
            </label>
        </div>
    {{-- @endif --}}

    {{-- @if(!$isPDF || !($checkboxEnclose_9 ?? false)) --}}
        <div style="padding-left: 10px; margin-top: 30px">
            <input id="checkboxEnclose_9" type="checkbox" wire:model="checkboxEnclose_9" @if($isPDF && ($checkboxEnclose_9 ?? false)) checked @endif>
            <label for="checkboxEnclose_9">
                List of authorised signatories duly signed
            </label>
        </div>
    {{-- @endif --}}


    {{-- @if(!$isPDF || !($checkboxEnclose_10 ?? false)) --}}
        <div style="padding-left: 10px; margin-top: 30px">
            <input id="checkboxEnclose_10" type="checkbox" wire:model="checkboxEnclose_10" @if($isPDF && ($checkboxEnclose_10 ?? false)) checked @endif>
            <label for="checkboxEnclose_10">
                Copies of powers of attorney if any
            </label>
        </div>
    {{-- @endif --}}

    {{-- @if(!$isPDF || !($checkboxEnclose_11 ?? false)) --}}
        <div style="padding-left: 10px; margin-top: 30px">
            <input id="checkboxEnclose_11" type="checkbox" wire:model="checkboxEnclose_11" @if($isPDF && ($checkboxEnclose_11 ?? false)) checked @endif>
            <label for="checkboxEnclose_11">
                Certified copies of valid passports of every individual mentioned in this form
            </label>
        </div>
    {{-- @endif --}}

    {{-- @if(!$isPDF || !($checkboxEnclose_12 ?? false)) --}}
        <div style="padding-left: 10px; margin-top: 30px">
            <input id="checkboxEnclose_12" type="checkbox" wire:model="checkboxEnclose_12" @if($isPDF && ($checkboxEnclose_12 ?? false)) checked @endif>
            <label for="checkboxEnclose_12">
                Originals of utility bill not older than 3 (three) months from the date of signing this form
            </label>
        </div>
    {{-- @endif --}}

    {{-- @if(!$isPDF || !($checkboxEnclose_13 ?? false)) --}}
        <div style="padding-left: 10px; margin-top: 30px">
            <input id="checkboxEnclose_13" type="checkbox" wire:model="checkboxEnclose_13" @if($isPDF && ($checkboxEnclose_13 ?? false)) checked @endif>
            <label for="checkboxEnclose_13">
                If the entity is part of a group, please provide with the shareholding’s structure (graphic chart), up to the ultimate individual beneficial owner(s)
            </label>
        </div>
    {{-- @endif --}}
</div>
