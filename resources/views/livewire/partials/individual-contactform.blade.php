<!-- Email -->
<div class="mb-4">
    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
    <input type="email" id="email" wire:model="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    @error('email') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
</div>

<!-- Rest of the form fields -->

<div class="mb-4">
    <label for="lastName" class="block text-gray-700 text-sm font-bold mb-2">Last Name</label>
    <input type="text" id="lastName" wire:model="lastName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    @error('lastName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
</div>

<!-- First Name Number -->
<div class="mb-4">
    <label for="firstName" class="block text-gray-700 text-sm font-bold mb-2">First Name</label>
    <input type="text" id="firstName" wire:model="firstName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    @error('firstName') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
</div>

<!-- Phone Number -->
<div class="mb-4">
    <label for="phoneNumber" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
    <input type="text" id="phoneNumber" wire:model="phoneNumber" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    @error('phoneNumber') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
</div>

<!-- Country -->
<div class="mb-4">
    <label for="country" class="block text-gray-700 text-sm font-bold mb-2">Country</label>
    <input type="text" id="country" wire:model="country" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    @error('country') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
</div>

<!-- Interest Checkboxes -->
<div class="mb-4">
    <span class="block text-gray-700 text-sm font-bold mb-2">You are interested in:</span>
    <div class="mt-2">
        @foreach(['Family office', 'Trust', 'Private foundation', 'Charity', 'Company', 'Other'] as $interest)
            <div>
                <label class="inline-flex items-center">
                    <input type="checkbox" wire:model="interests" value="{{ $interest }}" class="form-checkbox text-blue-600">
                    <span class="ml-2">{{ $interest }}</span>
                </label>
            </div>
        @endforeach
    </div>
</div>

<!-- Message -->
<div class="mb-4">
    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
    <textarea id="message" wire:model="message" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
</div>
