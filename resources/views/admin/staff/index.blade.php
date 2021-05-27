<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="px-10 py-5 bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <livewire:admin.staff-component />
                                
            </div>
        </div>
    </div>

</x-app-layout>