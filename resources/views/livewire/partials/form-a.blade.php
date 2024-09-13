<div>
    <h1>Declaration of identity of the beneficial owner</h1>

    {{-- I.  PERSONAL DETAILS --}}
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
                <label for="name" class="block text-gray-700 text-sm"><b>First name/ last name / entity:</b></label>
                @if($isPDF)
                    <span>{{ $name }}</span>
                @else
                    <input type="text" id="name" wire:model="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('name') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="dateAndPlaceOfBirth" class="block text-gray-700 text-sm"><b>Date and place of birth:</b></label>
                @if($isPDF)
                    <span>{{ $dateAndPlaceOfBirth }}</span>
                @else
                    <input type="text" id="dateAndPlaceOfBirth" wire:model="dateAndPlaceOfBirth" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('dateAndPlaceOfBirth') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="nationality" class="block text-gray-700 text-sm"><b>Nationality(ies):</b></label>
                @if($isPDF)
                    <span>{{ $nationality }}</span>
                @else
                    <input type="text" id="nationality" wire:model="nationality" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('nationality') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; padding: 10px; " colspan="2">
                <label for="actualAddress" class="block text-gray-700 text-sm"><b>Actual address of domicile/Registered office (incl. country):</b></label>
                @if($isPDF)
                    <p>{{ $actualAddress }}</p>
                @else
                    <textarea id="actualAddress" wire:model="actualAddress" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    @error('actualAddress') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; padding: 10px; " colspan="2">
                <label class="block text-gray-700 text-sm"><b>The contracting party hereby undertakes to automatically inform Finakey S.A. without delay of any changes to the information contained herein.</b></label>
                <div class="mt-2">
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" wire:model="checkboxOption1" class="form-checkbox" @if($isPDF && ($checkboxOption1 ?? false)) checked @endif>
                            <span class="ml-2">First submission of form</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" wire:model="checkboxOption2" class="form-checkbox" @if($isPDF && ($checkboxOption2 ?? false)) checked @endif>
                            <span class="ml-2">Addendum to one or more existing "Form A"</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" wire:model="checkboxOption3" class="form-checkbox" @if($isPDF && ($checkboxOption3 ?? false)) checked @endif>
                            <span class="ml-2">Replacement of all previous "Form A"</span>
                        </label>
                    </div>
                </div>
                @error('checkboxOption1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @error('checkboxOption2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @error('checkboxOption3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="date" class="block text-gray-700 text-sm"><b>Date:</b></label>
                @if($isPDF)
                    <span>{{ $date }}</span>
                @else
                    <input type="text" id="date" wire:model="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('date') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="signatures" class="block text-gray-700 text-sm"><b>Signature(s):</b></label>
                @if($isPDF)
                    <span>{{ $signatures ?? '' }}</span>
                @else
                    <textarea id="signatures" wire:model="signatures" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly></textarea>
                    @error('signatures') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
        <tr>
            <td style="word-wrap: break-word; padding: 10px; " colspan="2">
                <label class="block text-gray-700 text-sm"><b>It is a criminal offence to deliberately provide false information on this form (Article 251 of the Swiss Criminal Code, document forgery).</b></label>
            </td>
        </tr>
    </table>
</div>
