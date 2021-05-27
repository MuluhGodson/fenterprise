<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Locations') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="p-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">

                {{--<livewire:datatable 
                    model="App\Models\SubDivision"
                    with="division, division.region"
                    include="id, name|SubDivision, division.name|Division, division.region.name|Region"
                    sort="id|asc"
                    exclude="created_at, updated_at" 
                    searchable="name, division.name, division.region.name"
                />--}}
                <div class="h-screen">
                    {!! Mapper::render() !!}
                </div>
                
            </div>
        </div>
    </div>

</x-app-layout>