<div class="p-6">
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Let´s talk') }}
    </h2>

    <br>

    <!-- Tabs -->
    <ul class="flex border-b">
        <li class="-mb-px mr-1">
            <button type="button" wire:click="switchTab('individual')" class="{{ $activeTab == 'individual' ? 'bg-blue-500 text-white' : 'bg-gray-500 text-blue-100 hover:text-white hover:bg-blue-600' }} inline-block py-2 px-4 font-semibold">Individual</button>
        </li>
        <li class="mr-1">
            <button type="button" wire:click="switchTab('legalEntity')" class="{{ $activeTab == 'legalEntity' ? 'bg-blue-500 text-white' : 'bg-gray-500 text-blue-100 hover:text-white hover:bg-blue-600' }} inline-block py-2 px-4 font-semibold">Legal Entity</button>
        </li>
    </ul>

    <!-- Formulario para "Individual" -->
    @if($activeTab == 'individual')
        <form wire:submit.prevent="submit" class="pt-6">
            @include('livewire.partials.individual-contactform')
            @if(!auth()->user() || in_array(auth()->user()->type, [0]))
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            @elseif(in_array(auth()->user()->type, [1]))
                <button type="button" wire:click="accept" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Accept</button>
                <button type="button" wire:click="reject" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Reject</button>
            @elseif(in_array(auth()->user()->type, [3]))
                <label>Assign RM:</label>
                <select wire:model="selectedRM">
                    @foreach($rmUsers as $rmUser)
                        <option value="{{ $rmUser->id }}" {{ $selectedRM == $rmUser->id ? 'selected' : '' }}>{{ $rmUser->name }}</option>
                    @endforeach
                </select>
                <button type="button" wire:click="assign" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Assign</button>
            @endif
        </form>
    @endif

    <!-- Formulario para "Legal Entity" -->
    @if($activeTab == 'legalEntity')
        <form wire:submit.prevent="submit" class="pt-6">
            @include('livewire.partials.legal-entity-contactform')
            @if(!auth()->user() || in_array(auth()->user()->type, [0]))
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                @elseif(in_array(auth()->user()->type, [1]))
                <button type="button" wire:click="accept" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Accept</button>
                <button type="button" wire:click="reject" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Reject</button>
            @elseif(in_array(auth()->user()->type, [3]))
                <label>Assign RM:</label>
                <select wire:model="selectedRM">
                    @foreach($rmUsers as $rmUser)
                        <option value="{{ $rmUser->id }}" {{ $selectedRM == $rmUser->id ? 'selected' : '' }}>{{ $rmUser->name }}</option>
                    @endforeach
                </select>
                <button type="button" wire:click="assign" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Assign</button>
            @endif
        </form>
    @endif

    @if(session()->has('message'))
        <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session('message') }}
        </div>
    @endif

    @if($errors->any())
        <div class="text-red-500">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
