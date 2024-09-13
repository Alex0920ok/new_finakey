<div>
    <h1>K	Establishing of the controlling person of operating legal entities and partnerships both not quoted on the stock exchange</h1>

    <p style="text-align: center; margin-top: 60px; padding: 20px">
        (for operating legal entities and partnerships that are contracting party as well as analogously for operating legal entities and partnerships that are beneficial owners)
    </p>
    <table style="width: 100%; border: none; margin-top: 60px">
        <tr>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="ref" class="block text-gray-700 text-sm"><b>Ref.:</b></label>
                @if($isPDF)
                    <span>{{ $ref }}</span>
                @else
                    <input type="text" id="ref" wire:model="ref" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('ref') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="contractingParty" class="block text-gray-700 text-sm"><b>Contracting party:</b></label>
                @if($isPDF)
                    <span>{{ $contractingParty }}</span>
                @else
                    <textarea id="contractingParty" wire:model="contractingParty" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    @error('contractingParty') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; padding: 10px; " colspan="2">
                <label for="entityType" class="block text-gray-700 text-sm"><b>Entity type :</b></label>
                @if($isPDF)
                    <span>{{ $entityType }}</span>
                @else
                    <input type="text" id="entityType" wire:model="entityType" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('entityType') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; padding: 10px; " colspan="2">
                <p>
                    In accordance with Swiss Law the contracting party(ies) hereby declare(s): (tick the appropriate box)
                </p>
                <br>
                <input type="radio" id="optionContractType-1" name="optionContractType" value="1" wire:model.live="optionContractType" @if($isPDF && $optionContractType == "1") checked @endif>
                <label for="optionContractType-1">
                    the person(s) listed below is / are <b>holding 25 % or more of the contracting party’s shares (capital shares or voting rights)</b>;
                </label>
                <br><br>
                <input type="radio" id="optionContractType-2" name="optionContractType" value="2" wire:model.live="optionContractType" @if($isPDF && $optionContractType == "2") checked @endif>
                <label for="optionContractType-2">
                    if there are no capital shares or voting rights of 25 % or more, that the following person(s) listed below <b>is / are controlling the contracting party in other ways</b>;
                </label>
                <br><br>
                <input type="radio" id="optionContractType-3" name="optionContractType" value="3" wire:model.live="optionContractType" @if($isPDF && $optionContractType == "3") checked @endif>
                <label for="optionContractType-3">
                    in case no person(s) exist(s) who exercise(s) control over the contracting party in a different capacity, the contracting party hereby declares that the person(s) listed below is / are the <b>managing director(s)</b>.
                </label>
                <br>
                @error('optionContractType') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        @foreach ($arrayName as $key => $item)
            <tr>
                <td style="word-wrap: break-word; padding: 10px; " colspan="2">
                    <label for="arrayName-{{$key}}" class="block text-gray-700 text-sm"><b>{{$loop->index + 1}}. First name/ last name / entity:</b></label>
                    @if($isPDF)
                        <span>{{ $arrayName[$key] }}</span>
                    @else
                        <input type="text" id="arrayName-{{$key}}" wire:model.live="arrayName.{{$key}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('arrayName.{{$key}}') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
            </tr>
            <tr>
                <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                    <label for="arrayDateAndPlaceOfBirth-{{$key}}" class="block text-gray-700 text-sm"><b>Date and place of birth:</b></label>
                    @if($isPDF)
                        <span>{{ $arrayDateAndPlaceOfBirth[$key] }}</span>
                    @else
                        <input type="text" id="arrayDateAndPlaceOfBirth-{{$key}}" wire:model.live="arrayDateAndPlaceOfBirth.{{$key}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('arrayDateAndPlaceOfBirth.{{$key}}') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
                <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                    <label for="arrayNationality-{{$key}}" class="block text-gray-700 text-sm"><b>Nationality(ies):</b></label>
                    @if($isPDF)
                        <span>{{ $arrayNationality[$key] }}</span>
                    @else
                        <input type="text" id="arrayNationality-{{$key}}" wire:model.live="arrayNationality.{{$key}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('arrayNationality.{{$key}}') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
            </tr>
            <tr>
                <td style="word-wrap: break-word; padding: 10px; " colspan="2">
                    <label for="arrayActualAddress-{{$key}}" class="block text-gray-700 text-sm"><b>Actual address of domicile/Registered office (incl. country):</b></label>
                    @if($isPDF)
                        <p>{{ $arrayActualAddress[$key] }}</p>
                    @else
                        <textarea id="arrayActualAddress-{{$key}}" wire:model.live="arrayActualAddress.{{$key}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        @error('arrayActualAddress.{{$key}}') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    @endif
                </td>
            </tr>
        @endforeach

        <tr>
            <td style="word-wrap: break-word; padding: 10px; " colspan="2">
                <p><b>Fiduciary holding of assets:</b></p>
                <br>
                <p>Is a third person the beneficial owner of the assets matter of the above relationship?</p>
                <br>
                <input type="radio" id="option1-Yes" name="option1" value="Yes" wire:model.live="option1" @if($isPDF && $option1 == "Yes") checked @endif>
                <label for="option1-Yes">Yes</label>
                <input style="margin-left: 20px" type="radio" id="option1-No" name="option1" value="No" wire:model.live="option1" @if($isPDF && $option1 == "No") checked @endif>
                <label for="option1-No">No</label>
                @error('option1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror

                <br>
                <label>
                    If yes, the relevant information regarding the beneficial owner has to be obtained by filling in a separate form A, S or T.
                </label>
                @if($option1 == "Yes")
                    @if($isPDF)
                        <p style="margin-top: 10px">{{ $option1Details }}</p>
                    @else
                        <br>
                        <div>
                            <input id="option1Details" style="width: 100%; margin-top: 10px" type="text" wire:model="option1Details">
                            @error('option1Details') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                        </div>
                    @endif
                @endif

                <br><br>
                <p>
                    The contracting party (ies) hereby undertake(s) to automatically inform FINAKEY S.A. of any changes without delay to the information contained herein.
                </p>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word; padding: 10px; ">
                <label for="date" class="block text-gray-700 text-sm"><b>Date:</b></label>
                @if($isPDF)
                    <span>{{ $date }}</span>
                @else
                    <textarea id="date" wire:model="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    @error('date') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 50%; word-wrap: break-word; padding: 10px; ">
                <label for="signature" class="block text-gray-700 text-sm"><b>Signature(s):</b></label>
                @if($isPDF)
                    <span>{{ $signature }}</span>
                @else
                    <textarea id="signature" wire:model="signature" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    @error('signature') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; padding: 10px; " colspan="2">
                <p>It is a criminal offence to deliberately provide false information on this form (Article 251 of the Swiss Criminal Code, document forgery).</p>
            </td>
        </tr>
    </table>
</div>
