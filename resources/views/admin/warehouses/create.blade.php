<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Branch/Create') }}
        </h2>
    </x-slot>

    <div>
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="sm:rounded-lg max-w-5xl p-5 mx-auto">
                <div class="px-10 bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <form action="{{ route('warehouse.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="my-4">
                            <h1 class="font-bold text-center text-uppercase">Enter Details for a New Branch</h1>
                        </div>

                        <x-jet-validation-errors class="mb-4" />

                        <div class="my-4">
                            <x-jet-label for="name" value="Branch Name" />
                            <x-jet-input name="name" class="rounded w-full" type="text" />
                        </div>

                        <div class="my-4">
                            <x-jet-label for="manager" value="Select Branch Manager" />
                            <select name="manager" class="w-full rounded" name="" id="">
                                <option class="w-full" value="1">Teghen</option>
                                <option class="w-full" value="2">Joe Z</option>
                            </select>
                        </div>

                        <div class="my-4">
                            <x-jet-label for="divsion" value="Select Branch Location" />
                            <select name="division" class="w-full rounded" name="" id="">
                                <option class="w-full" value="1"> Bamenda 1</option>
                                <option class="w-full" value="2">Bamenda 4</option>
                            </select>
                        </div>

                        <div class="my-4">
                            <x-jet-label for="image" value="Branch Cover Image" />
                            <x-jet-input name="image" class="rounded w-3/4" type="file" />
                        </div>

                        <div class="my-4">
                            <input type="submit" class="p-2 cursor-pointer hover:bg-yellow-700 bg-red-900 text-white rounded" value="Add Branch">
                        </div>

                        @csrf
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</x-app-layout>