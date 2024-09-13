<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Customer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>
            <form action="{{ route('customers.store') }}" method="POST">
                @csrf
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-4">
                    <x-input-label for="client_type" :value="__('Client Type')" />
                    <select id="client_type" name="client_type" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">
                        <option value="0">{{ __('Individual') }}</option>
                        <option value="1">{{ __('Corporate') }}</option>
                        <option value="2">{{ __('Trust') }}</option>
                        <option value="3">{{ __('Foundation') }}</option>
                        <option value="4">{{ __('Charity') }}</option>
                    </select>
                </div>

                <div class="mt-4">
                    <x-input-label for="rm_id" :value="__('Assign RM (optional)')" />
                    <select id="rm_id" name="rm_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">
                        <option value="">{{ __('None') }}</option>
                        @foreach ($rmUsers as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Create Customer') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

        </div>
    </div>
</x-app-layout>
