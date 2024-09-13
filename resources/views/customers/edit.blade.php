<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Customer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>
        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$customer->name" required autofocus />
                </div>

                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$customer->email" required />
                </div>

                <div class="mt-4">
                    <x-input-label for="client_type" :value="__('Client Type')" />
                    <select id="client_type" name="client_type" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">
                        <option value="0" {{ $customer->client_type == 0 ? 'selected' : '' }}>{{ __('Individual') }}</option>
                        <option value="1" {{ $customer->client_type == 1 ? 'selected' : '' }}>{{ __('Corporate') }}</option>
                        <option value="2" {{ $customer->client_type == 2 ? 'selected' : '' }}>{{ __('Trust') }}</option>
                        <option value="3" {{ $customer->client_type == 3 ? 'selected' : '' }}>{{ __('Foundation') }}</option>
                        <option value="4" {{ $customer->client_type == 4 ? 'selected' : '' }}>{{ __('Charity') }}</option>
                    </select>
                </div>

                <div class="mt-4">
                    <x-input-label for="rm_id" :value="__('Assign RM (optional)')" />
                    <select id="rm_id" name="rm_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">
                        <option value="">{{ __('None') }}</option>
                        @foreach ($rmUsers as $user)
                            <option value="{{ $user->id }}" {{ $user->id == $customer->rm_id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('customers.index') }}" class="mr-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                        {{ __('Back to Customers') }}
                    </a>
                    <x-primary-button class="ml-4">
                        {{ __('Save') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

        </div>
    </div>
</x-app-layout>
