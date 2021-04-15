<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Warehouses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
               <a href="{{ route('warehouse.create') }}" class="rounded p-6 bg-black text-white">Add warehouse</a>
            </div>
        </div>
    </div>

</x-app-layout>