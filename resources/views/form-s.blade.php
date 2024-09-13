<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('8.S	Declaration of beneficial ownership for Foundations (as well as similar structures)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @livewire('form-s', ['customerUuid' => $customerUuid, 'formId' => $formId])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
