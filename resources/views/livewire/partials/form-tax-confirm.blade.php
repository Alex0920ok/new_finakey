<div>
    <h1>TAX COMPLIANCE CONFIRMATION</h1>

    <p style="margin-top: 40px; padding: 10px; padding-bottom: 20px; border-bottom: 1px solid #888">
        RE: TAX COMPLIANCE CONFIRMATION FOR
        &nbsp;
        @if($isPDF)
            {{ $vehicleName ?? "" }}
        @else
            <input type="text" id="vehicleName" wire:model="vehicleName" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('vehicleName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
        &nbsp;
        (THE "VEHICLE").
    </p>

    <p style="margin-top: 40px; padding: 10px;">
        I, the undersigned,
        &nbsp;
        @if($isPDF)
            {{ $fullName ?? "" }}
        @else
            <input type="text" id="fullName" wire:model="fullName" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('fullName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
        , residing at
        &nbsp;
        @if($isPDF)
            {{ $fullAddress ?? "" }}
        @else
            <input type="text" id="fullAddress" wire:model="fullAddress" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('fullAddress') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
        , hereby confirm the following in my capacity as
        &nbsp;
        @if($isPDF)
            {{ $selectCapacity ?? "" }}
        @else
            <select wire:model="selectCapacity" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Choose an item</option>
                <option>Settlor</option>
                <option>Founder</option>
                <option>Beneficial owner</option>
                <option>Authorized Representative</option>
                <option>Director</option>
            </select>
            @error('selectCapacity') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
        &nbsp;
        of
        &nbsp;
        @if($isPDF)
            {{ $trustName ?? "" }}
        @else
            <input type="text" id="trustName" wire:model="trustName" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('trustName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
        &nbsp;
        (the "Vehicle"),
    </p>

    <div style="margin-top: 40px; padding: 10px;">
        <p> <b>1. &nbsp; Ownership and Attribution:</b> </p>
        <div style="margin-left: 20px">
            <input id="checkbox1" type="checkbox" wire:model="checkbox1" @if($isPDF && ($checkbox1 ?? false)) checked @endif>
            <label for="checkbox1">
                I confirm that the assets held by the Vehicle are ultimately attributable to
                &nbsp;
                @if($isPDF)
                    {{ $beneficialName ?? "" }}
                @else
                    <input type="text" id="beneficialName" wire:model="beneficialName" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('beneficialName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
                , who is the ultimate beneficial owner (UBO) of the assets held by the Vehicle.
            </label>
        </div>
    </div>

    <div style="margin-top: 40px; padding: 10px;">
        <p> <b>2. &nbsp; Tax Residency:</b></p>
        <div style="margin-left: 20px">
            <input id="checkbox2" type="checkbox" wire:model="checkbox2" @if($isPDF && ($checkbox2 ?? false)) checked @endif>
            <label for="checkbox2">
                I confirm that
                &nbsp;
                @if($isPDF)
                    {{ $beneficialName2 ?? "" }}
                @else
                    <input type="text" id="beneficialName2" wire:model="beneficialName2" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('beneficialName2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
                &nbsp;
                is a tax resident of
                &nbsp;
                @if($isPDF)
                    {{ $taxCountry ?? "" }}
                @else
                    <input type="text" id="taxCountry" wire:model="taxCountry" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('taxCountry') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
                &nbsp;
                with tax identification number (TIN or similar
                &nbsp;
                @if($isPDF)
                    {{ $tin ?? "" }}
                @else
                    <input type="text" id="tin" wire:model="tin" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('tin') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
                ).
            </label>
        </div>
    </div>

    <div style="margin-top: 40px; padding: 10px;">
        <p> <b>3. &nbsp; Tax Compliance:</b></p>
        <div style="margin-left: 20px">
            <input id="checkbox3_1" type="checkbox" wire:model="checkbox3_1" @if($isPDF && ($checkbox3_1 ?? false)) checked @endif>
            <label for="checkbox3_1">
                I confirm that
                &nbsp;
                @if($isPDF)
                    {{ $beneficialOwner3_1 ?? "" }}
                @else
                    <input type="text" id="beneficialOwner3_1" wire:model="beneficialOwner3_1" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('beneficialOwner3_1') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
                &nbsp;
                is solely responsible for ensuring compliance with all tax obligations in their country of tax residency, including but not limited to the declaration and payment of taxes on income, capital gains, and patrimony.
            </label>
        </div>
        <div style="margin-left: 20px; margin-top: 20px">
            <input id="checkbox3_2" type="checkbox" wire:model="checkbox3_2" @if($isPDF && ($checkbox3_2 ?? false)) checked @endif>
            <label for="checkbox3_2">
                I confirm that
                &nbsp;
                @if($isPDF)
                    {{ $beneficialOwner3_2 ?? "" }}
                @else
                    <input type="text" id="beneficialOwner3_2" wire:model="beneficialOwner3_2" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('beneficialOwner3_2') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
                &nbsp;
                will declare any income, capital gains, or other taxable events arising from the assets held by the Vehicle in accordance with the laws of their country of tax residency.
            </label>
        </div>
        <div style="margin-left: 20px; margin-top: 20px">
            <input id="checkbox3_3" type="checkbox" wire:model="checkbox3_3" @if($isPDF && ($checkbox3_3 ?? false)) checked @endif>
            <label for="checkbox3_3">
                I confirm that
                &nbsp;
                @if($isPDF)
                    {{ $beneficialOwner3_3 ?? "" }}
                @else
                    <input type="text" id="beneficialOwner3_3" wire:model="beneficialOwner3_3" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('beneficialOwner3_3') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
                &nbsp;
                will comply with all applicable tax laws and regulations in their country of tax residency.
            </label>
        </div>
        <div style="margin-left: 20px; margin-top: 20px">
            <input id="checkbox3_4" type="checkbox" wire:model="checkbox3_4" @if($isPDF && ($checkbox3_4 ?? false)) checked @endif>
            <label for="checkbox3_4">
                If I am not the beneficial owner, I ensure that the person who has the tax obligation will declare in their country(ies) of residences any income, capital gains, or other taxable events arising from the assets held by the Vehicle, and I accept liability for any failure on their part to comply with these obligations. 
            </label>
        </div>
    </div>

    <div style="margin-top: 40px; padding: 10px;">
        <p> <b>4. &nbsp; Indemnity:</b></p>
        <div style="margin-left: 20px">
            <input id="checkbox4" type="checkbox" wire:model="checkbox4" @if($isPDF && ($checkbox4 ?? false)) checked @endif>
            <label for="checkbox4">
                I hereby indemnify and hold harmless FINAKEY SA, its directors, officers, employees, and agents from any and all liabilities, claims, penalties, and expenses arising out of or in connection with any failure on the part of
                &nbsp;
                @if($isPDF)
                    {{ $beneficialOwner4 ?? "" }}
                @else
                    <input type="text" id="beneficialOwner4" wire:model="beneficialOwner4" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('beneficialOwner4') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
                &nbsp;
                or myself to comply with the tax obligations described herein. 
            </label>
        </div>
    </div>

    <div style="margin-top: 40px; padding: 10px;">
        <p> <b>5. &nbsp; Updates and Changes:</b></p>
        <div style="margin-left: 20px">
            <input id="checkbox5" type="checkbox" wire:model="checkbox5" @if($isPDF && ($checkbox5 ?? false)) checked @endif>
            <label for="checkbox5">
                I undertake to inform FINAKEY SA promptly of any changes to the tax residency of
                &nbsp;
                @if($isPDF)
                    {{ $beneficialOwner5 ?? "" }}
                @else
                    <input type="text" id="beneficialOwner5" wire:model="beneficialOwner5" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('beneficialOwner5') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                @endif
                &nbsp;
                or any other information that may affect the tax compliance status of the assets held by the Vehicle. 
            </label>
        </div>
    </div>

    <div style="margin-top: 40px; padding: 10px;">
        <p> <b>6. &nbsp; Provision of Information:</b></p>
        <div style="margin-left: 20px">
            <input id="checkbox6" type="checkbox" wire:model="checkbox6" @if($isPDF && ($checkbox6 ?? false)) checked @endif>
            <label for="checkbox6">
                Upon request, I shall provide FINAKEY SA with additional information or evidence of compliance with the legal provisions in force, and where applicable, to the beneficial owner(s) if other than the undersigned. 
            </label>
        </div>
    </div>

    <p style="margin-top: 40px; padding: 10px;">
        By signing this Tax Compliance Confirmation, I acknowledge that I have read and understood the contents of this document and that the information provided herein is true and accurate to the best of my knowledge.
    </p>

    <div style="margin-top: 40px; padding: 10px;">
        Date: &nbsp;
        @if($isPDF)
            {{ $date ?? "" }}
        @else
            <input type="text" id="date" wire:model="date" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('date') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>

    <div style="margin-top: 40px; padding: 10px;">
        Signature: &nbsp;
        @if($isPDF)
            {{ $signature ?? "" }}
        @else
            <input type="text" id="signature" wire:model="signature" class="shadow appearance-none border rounded w-60 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('signature') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>

    <div style="margin-top: 40px; padding: 10px;">
        @if($isPDF)
            <p>{{ $myFullName ?? "" }}</p>
        @else
            <input placeholder="Enter Full Name" type="text" id="myFullName" wire:model="myFullName" class="shadow appearance-none border rounded w-1/2 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('myFullName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
        <br>
        <br>
        @if($isPDF)
            <p>{{ $idNumber ?? "" }}</p>
        @else
            <input placeholder="Enter Tax Identification Number (if applicable)" type="text" id="idNumber" wire:model="idNumber" class="shadow appearance-none border rounded w-1/2 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('idNumber') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
        <br>
        <br>
        @if($isPDF)
            <p>{{ $contact ?? "" }}</p>
        @else
            <input placeholder="Enter Contact information " type="text" id="contact" wire:model="contact" class="shadow appearance-none border rounded w-1/2 inline py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('contact') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        @endif
    </div>
</div>
