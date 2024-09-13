<div>
    <h1>T	Declaration of beneficial ownership for trusts</h1>

    <table style="width: 100%; border: none; margin-top: 60px">
        <tr>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="account" class="block text-gray-700 text-sm"><b>Account .:</b></label>
                @if($isPDF)
                    <span>{{ $account ?? "" }}</span>
                @else
                    <input type="text" id="account" wire:model="account" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('account') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="contractingParty" class="block text-gray-700 text-sm"><b>Contracting party:</b></label>
                @if($isPDF)
                    <span>{{ $contractingParty ?? "" }}</span>
                @else
                    <textarea id="contractingParty" wire:model="contractingParty" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    @error('contractingParty') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
    </table>

    <div style="padding: 10px; margin-top: 20px">
        <label for="swissLaw" class="block text-gray-700 text-sm">
            According to Swiss Law, the undersigned hereby declare(s) that he / she / they is a / are trustee(s) or member(s) of the highest supervisory body of an underlying company of a trust known as:
        </label>
        @if($isPDF)
            <p>{{ $swissLaw ?? "" }}</p>
        @else
            <textarea id="swissLaw" wire:model="swissLaw" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @error('swissLaw') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>

    <div style="padding: 10px; margin-top: 20px">
        <label for="finakey" class="block text-gray-700 text-sm">
            In such capacity, he / she / they provide(s) to the best of his / her / their knowledge the following information to FINAKEY S.A.:
        </label>
        {{-- @if($isPDF)
            <span>{{ $finakey ?? "" }}</span>
        @else
            <textarea id="finakey" wire:model="finakey" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @error('finakey') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif --}}
    </div>

    <p style="padding: 10px; margin-top: 20px">
        1. &nbsp; Information pertaining to the trust (for a) and b) please tick the applicable boxes):
    </p>

    <table style="width: 100%; border: none;">
        <tr>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <p>a) Type of trust:</p>
                <br>
                <input type="radio" id="trustTypeOption-Yes" name="trustTypeOption" value="Yes" wire:model.live="trustTypeOption" @if($isPDF && $trustTypeOption == "Yes") checked @endif>
                <label for="trustTypeOption-Yes">Discretionary trust or</label>
                <br>
                <input type="radio" id="trustTypeOption-No" name="trustTypeOption" value="No" wire:model.live="trustTypeOption" @if($isPDF && $trustTypeOption == "No") checked @endif>
                <label for="trustTypeOption-No">Non-discretionary trust</label>
                <br>
                @error('trustTypeOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <p>b) Revocability:</p>
                <br>
                <input type="radio" id="revocabilityOption-Yes" name="revocabilityOption" value="Yes" wire:model.live="revocabilityOption" @if($isPDF && $revocabilityOption == "Yes") checked @endif>
                <label for="revocabilityOption-Yes">Revocable trust or</label>
                <br>
                <input type="radio" id="revocabilityOption-No" name="revocabilityOption" value="No" wire:model.live="revocabilityOption" @if($isPDF && $revocabilityOption == "No") checked @endif>
                <label for="revocabilityOption-No">Irrevocable trust</label>
                <br>
                @error('revocabilityOption') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </td>
        </tr>
    </table>



    {{-- ------------------------ 1 ----------------------- --}}
    <p style="padding: 10px; margin-top: 20px">
        2. &nbsp;Information pertaining to the (ultimate economic, not fiduciary) settlor of the trust (individual[s] or entity / ies):
    </p>
    <div style="padding: 10px; margin-top: 10px">
        <label for="name1" class="block text-gray-700 text-sm">
            First name(s), last name(s) / entity:
        </label>
        @if($isPDF)
            <span>{{ $name1 ?? "" }}</span>
        @else
            <input type="text" id="name1" wire:model="name1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('name1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>
    <div style="padding: 10px; margin-top: 10px">
        <label for="actualAddress1" class="block text-gray-700 text-sm">
            Actual address of domicile / registered office (incl. country):
        </label>
        @if($isPDF)
            <span>{{ $actualAddress1 ?? "" }}</span>
        @else
            <input type="text" id="actualAddress1" wire:model="actualAddress1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('actualAddress1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>
    <table style="width: 100%; border: none;">
        <tr>
            <td style="width: 33.3%; word-wrap: break-word;padding: 10px; ">
                <label for="dateAndPlaceOfBirth1" class="block text-gray-700 text-sm">Date and place of birth:</label>
                @if($isPDF)
                    <span>{{ $dateAndPlaceOfBirth1 ?? "" }}</span>
                @else
                    <input type="text" id="dateAndPlaceOfBirth1" wire:model="dateAndPlaceOfBirth1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('dateAndPlaceOfBirth1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 33.3%; word-wrap: break-word;padding: 10px; ">
                <label for="nationality1" class="block text-gray-700 text-sm">Nationality(ies):</label>
                @if($isPDF)
                    <span>{{ $nationality1 ?? "" }}</span>
                @else
                    <input type="text" id="nationality1" wire:model="nationality1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('nationality1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 33.3%; word-wrap: break-word;padding: 10px; ">
                <label for="dateOfDeath1" class="block text-gray-700 text-sm">Date of death (if deceased):</label>
                @if($isPDF)
                    <span>{{ $dateOfDeath1 ?? "" }}</span>
                @else
                    <input type="text" id="dateOfDeath1" wire:model="dateOfDeath1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('dateOfDeath1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
    </table>
    <div style="padding: 10px; margin-top: 10px">
        <p>In case of a revocable trust: does the settlor have the right to revoke the trust?</p>
    </div>
    <table style="width: 100%; border: none;">
        <tr>
            <td style="width: 33.3%; word-wrap: break-word;padding: 10px; ">
                <input type="radio" id="option1-Yes" name="option1" value="Yes" wire:model.live="option1" @if($isPDF && ($option1 ?? "") == "Yes") checked @endif>
                <label for="option1-Yes">Yes</label>
            </td>
            <td style="width: 33.3%; word-wrap: break-word;padding: 10px; ">
                <input style="margin-left: 20px" type="radio" id="option1-No" name="option1" value="No" wire:model.live="option1" @if($isPDF && ($option1 ?? "") == "No") checked @endif>
                <label for="option1-No">No</label>
            </td>
        </tr>
    </table>



    {{-- ------------------------ 2 ----------------------- --}}
    <p style="padding: 10px; margin-top: 20px">
        3. &nbsp;If the trust results from a restructuring of a pre-existing trust (re-settlement) or a merger of pre-existing trusts, the following information pertaining to the (actual, not fiduciary) settlor of the pre-existing trust(s) has to be given:
    </p>
    <div style="padding: 10px; margin-top: 10px">
        <label for="name2" class="block text-gray-700 text-sm">
            First name(s), last name(s) / entity:
        </label>
        @if($isPDF)
            <span>{{ $name2 ?? "" }}</span>
        @else
            <input type="text" id="name2" wire:model="name2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('name2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>
    <div style="padding: 10px; margin-top: 10px">
        <label for="actualAddress2" class="block text-gray-700 text-sm">
            Actual address of domicile / registered office (incl. country):
        </label>
        @if($isPDF)
            <span>{{ $actualAddress2 ?? "" }}</span>
        @else
            <input type="text" id="actualAddress2" wire:model="actualAddress2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('actualAddress2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>
    <table style="width: 100%; border: none;">
        <tr>
            <td style="width: 33.3%; word-wrap: break-word;padding: 10px; ">
                <label for="dateAndPlaceOfBirth2" class="block text-gray-700 text-sm">Date and place of birth:</label>
                @if($isPDF)
                    <span>{{ $dateAndPlaceOfBirth2 ?? "" }}</span>
                @else
                    <input type="text" id="dateAndPlaceOfBirth2" wire:model="dateAndPlaceOfBirth2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('dateAndPlaceOfBirth2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 33.3%; word-wrap: break-word;padding: 10px; ">
                <label for="nationality2" class="block text-gray-700 text-sm">Nationality(ies):</label>
                @if($isPDF)
                    <span>{{ $nationality2 ?? "" }}</span>
                @else
                    <input type="text" id="nationality2" wire:model="nationality2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('nationality2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 33.3%; word-wrap: break-word;padding: 10px; ">
                <label for="dateOfDeath2" class="block text-gray-700 text-sm">Date and place of death (if deceased):</label>
                @if($isPDF)
                    <span>{{ $dateOfDeath2 ?? "" }}</span>
                @else
                    <input type="text" id="dateOfDeath2" wire:model="dateOfDeath2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('dateOfDeath2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
    </table>

    {{-- ------------------------ 3 ----------------------- --}}
    <p style="padding: 10px; margin-top: 20px">
        4. &nbsp;Information
    </p>
    <p style="padding: 10px; margin-top: 10px">
        a) &nbsp; pertaining to the beneficiary / ies at the time of the signing of this form:
    </p>

    <div style="padding: 10px; margin-top: 10px">
        <label for="name3" class="block text-gray-700 text-sm">
            First name(s), last name(s) / entity:
        </label>
        @if($isPDF)
            <span>{{ $name3 ?? "" }}</span>
        @else
            <input type="text" id="name3" wire:model="name3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('name3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>
    <div style="padding: 10px; margin-top: 10px">
        <label for="actualAddress3" class="block text-gray-700 text-sm">
            Actual address of domicile / registered office (incl. country):
        </label>
        @if($isPDF)
            <span>{{ $actualAddress3 ?? "" }}</span>
        @else
            <input type="text" id="actualAddress3" wire:model="actualAddress3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('actualAddress3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>
    <table style="width: 100%; border: none;">
        <tr>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="dateAndPlaceOfBirth3" class="block text-gray-700 text-sm">Date and place of birth:</label>
                @if($isPDF)
                    <span>{{ $dateAndPlaceOfBirth3 ?? "" }}</span>
                @else
                    <input type="text" id="dateAndPlaceOfBirth3" wire:model="dateAndPlaceOfBirth3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('dateAndPlaceOfBirth3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="nationality3" class="block text-gray-700 text-sm">Nationality(ies):</label>
                @if($isPDF)
                    <span>{{ $nationality3 ?? "" }}</span>
                @else
                    <input type="text" id="nationality3" wire:model="nationality3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('nationality3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
    </table>
    <div style="padding: 10px; margin-top: 10px">
        <p>Has / Have the beneficiary / -ies an actual right to claim a distribution?</p>
    </div>
    <table style="width: 100%; border: none;">
        <tr>
            <td style="width: 33.3%; word-wrap: break-word;padding: 10px; ">
                <input type="radio" id="option3-Yes" name="option3" value="Yes" wire:model.live="option3" @if($isPDF && ($option3 ?? "") == "Yes") checked @endif>
                <label for="option3-Yes">Yes</label>
            </td>
            <td style="width: 33.3%; word-wrap: break-word;padding: 10px; ">
                <input style="margin-left: 20px" type="radio" id="option3-No" name="option3" value="No" wire:model.live="option3" @if($isPDF && ($option3 ?? "") == "No") checked @endif>
                <label for="option3-No">No</label>
            </td>
        </tr>
    </table>
    <div style="padding: 10px; margin-top: 10px">
        <p>
            b) &nbsp; and in addition to certain beneficiaries or if no beneficiary / -ies has / have been determined, pertaining to (a) group(s) of beneficiaries (e.g. descendants of the settlor) known at the time of the signing of this form:
        </p>
        @if($isPDF)
            <p>{{ $other3 ?? "" }}</p>
        @else
            <textarea type="text" id="other3" wire:model="other3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @error('other3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>


    {{-- ------------------------ 4 ----------------------- --}}
    <p style="padding: 10px; margin-top: 20px">
        5. &nbsp; Information pertaining to the protector(s) as well as (a) further person(s) having a right to revoke the trust (in case of revocable trusts) or to appoint the trustee of a trust:
    </p>
    <p style="padding: 10px; margin-top: 10px">
        a) &nbsp; Information pertaining to the protector(s)
    </p>
    <div style="padding: 10px; margin-top: 10px">
        <label for="name4" class="block text-gray-700 text-sm">
            First name(s), last name(s) / entity:
        </label>
        @if($isPDF)
            <span>{{ $name4 ?? "" }}</span>
        @else
            <input type="text" id="name4" wire:model="name4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('name4') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>
    <div style="padding: 10px; margin-top: 10px">
        <label for="actualAddress4" class="block text-gray-700 text-sm">
            Actual address of domicile / registered office (incl. country):
        </label>
        @if($isPDF)
            <span>{{ $actualAddress4 ?? "" }}</span>
        @else
            <input type="text" id="actualAddress4" wire:model="actualAddress4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('actualAddress4') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>
    <table style="width: 100%; border: none;">
        <tr>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="dateAndPlaceOfBirth4" class="block text-gray-700 text-sm">Date and place of birth:</label>
                @if($isPDF)
                    <span>{{ $dateAndPlaceOfBirth4 ?? "" }}</span>
                @else
                    <input type="text" id="dateAndPlaceOfBirth4" wire:model="dateAndPlaceOfBirth4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('dateAndPlaceOfBirth4') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="nationality4" class="block text-gray-700 text-sm">Nationality(ies):</label>
                @if($isPDF)
                    <span>{{ $nationality4 ?? "" }}</span>
                @else
                    <input type="text" id="nationality4" wire:model="nationality4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('nationality4') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
    </table>
    <div style="padding: 10px; margin-top: 10px">
        <p>In case of a revocable trust: does the protector have the right to revoke the trust?</p>
    </div>
    <table style="width: 100%; border: none;">
        <tr>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <input type="radio" id="option4-Yes" name="option4" value="Yes" wire:model.live="option4" @if($isPDF && ($option4 ?? "") == "Yes") checked @endif>
                <label for="option4-Yes">Yes</label>
            </td>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <input style="margin-left: 20px" type="radio" id="option4-No" name="option4" value="No" wire:model.live="option4" @if($isPDF && ($option4 ?? "") == "No") checked @endif>
                <label for="option4-No">No</label>
            </td>
        </tr>
    </table>

    {{-- ------------------------ 5 ----------------------- --}}
    <p style="padding: 10px; margin-top: 20px">
        b) &nbsp; Information pertaining to (a) further person(s)
    </p>

    <div style="padding: 10px; margin-top: 10px">
        <label for="name5" class="block text-gray-700 text-sm">
            First name(s), last name(s) / entity:
        </label>
        @if($isPDF)
            <span>{{ $name5 ?? "" }}</span>
        @else
            <input type="text" id="name5" wire:model="name5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('name5') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>
    <div style="padding: 10px; margin-top: 10px">
        <label for="actualAddress5" class="block text-gray-700 text-sm">
            Actual address of domicile / registered office (incl. country):
        </label>
        @if($isPDF)
            <span>{{ $actualAddress5 ?? "" }}</span>
        @else
            <input type="text" id="actualAddress5" wire:model="actualAddress5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('actualAddress5') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>
    <table style="width: 100%; border: none;">
        <tr>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="dateAndPlaceOfBirth5" class="block text-gray-700 text-sm">Date and place of birth:</label>
                @if($isPDF)
                    <span>{{ $dateAndPlaceOfBirth5 ?? "" }}</span>
                @else
                    <input type="text" id="dateAndPlaceOfBirth5" wire:model="dateAndPlaceOfBirth5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('dateAndPlaceOfBirth5') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="nationality5" class="block text-gray-700 text-sm">Nationality(ies):</label>
                @if($isPDF)
                    <span>{{ $nationality5 ?? "" }}</span>
                @else
                    <input type="text" id="nationality5" wire:model="nationality5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('nationality5') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
    </table>
    <div style="padding: 10px; margin-top: 10px">
        <p>In case of a revocable trust: Has / have this / these further person(s) the right to revoke the trust?</p>
    </div>
    <table style="width: 100%; border: none;">
        <tr>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <input type="radio" id="option5-Yes" name="option5" value="Yes" wire:model.live="option5" @if($isPDF && ($option5 ?? "") == "Yes") checked @endif>
                <label for="option5-Yes">Yes</label>
            </td>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <input style="margin-left: 20px" type="radio" id="option5-No" name="option5" value="No" wire:model.live="option5" @if($isPDF && ($option5 ?? "") == "No") checked @endif>
                <label for="option5-No">No</label>
            </td>
        </tr>
    </table>


    <div style="padding: 10px; margin-top: 40px">
        <p>
            The undersigned hereby declare(s) to be entitled to act on behalf of the trust above or its underlying company.
        </p>
    </div>
    <div style="padding: 10px; margin-top: 40px">
        <p>
            The contracting party(ies) hereby undertake(s) to automatically inform the bank Finakey S.A. without delay of any changes.
        </p>
    </div>


    <table style="width: 100%; border: none; margin-top: 40px">
        <tr>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="date" class="block text-gray-700 text-sm"><b>Date .:</b></label>
                @if($isPDF)
                    <span>{{ $date ?? "" }}</span>
                @else
                    <input type="text" id="date" wire:model="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('date') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
            <td style="width: 50%; word-wrap: break-word;padding: 10px; ">
                <label for="signature" class="block text-gray-700 text-sm"><b>Signature(s):</b></label>
                @if($isPDF)
                    <span>{{ $signature ?? "" }}</span>
                @else
                    <input type="text" id="signature" wire:model="signature" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('signature') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
            </td>
        </tr>
    </table>

    <p style="padding: 10px; margin-top: 40px">
        It is a criminal offence to deliberately provide false information on this form (Article 251 of the Swiss Criminal Code, document forgery).
    </p>
</div>
