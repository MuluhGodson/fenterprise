<div>
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="px-10 overflow-hidden">

                <div>
                    <button wire:click="create" class="p-1 text-yellow-300 font-bold bg-red-900 rounded">Add Branch</button>
                </div>
                

                <div class="my-5 grid grid-cols-4 place-content-center gap-5">
                    @forelse ($warehouses as $warehouse)
                        <div class="col shadow-lg rounded bg-yellow-400">
                            <img src="{{Storage::url($warehouse->image)}}" class="w-full" alt="{{$category->name}}">
                            <div class="p-3">
                                <h1 class="text-center text-red-900 font-semibold">
                                    {{ $warehouse->name }}
                                </h1>
                            </div>
                            <div>
                                <div class="flex justify-between justify-items-center px-2 py-3">
                                    <div>Edit</div>
                                    <div>Delete</div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1 class="text-center font-semibold">No branches found. Add a New Branch to get started.</h1>
                    @endforelse
                </div>
            </div>
        </div>
    </div>


    <!-- Create Modal -->
        <x-jet-dialog-modal wire:model="createOpen">

            <x-slot name="title">
                Create Branch
            </x-slot>
            
            <x-slot name="content">

                <x-jet-validation-errors class="mb-4" />

                <div class="my-4">
                    <x-jet-label for="name" value="Branch Name" />
                    <x-jet-input name="name" wire:model="name" class="rounded w-full" type="text" />
                </div>

                <div class="my-4">
                    <x-jet-label for="manager" value="Select Branch Manager" />
                    <select name="manager" wire:model="manager" class="w-full rounded" name="" id="">
                        <option class="w-full" value="1">Teghen</option>
                        <option class="w-full" value="2">Joe Z</option>
                    </select>
                </div>

                <div class="my-4">
                    <x-jet-label for="divsion" value="Select Branch Location" />
                    <select name="division" wire:model="division" class="w-full rounded" name="" id="">
                        <option class="w-full" value="1"> Bamenda 1</option>
                        <option class="w-full" value="2">Bamenda 4</option>
                    </select>
                </div>

                <div class="my-4">
                    <x-jet-label for="image" value="Branch Cover Image" />
                    <div
                        x-data="{ isUploading: false, progress: 0}"
                        x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false"
                        x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                    >
                        <x-jet-input name="image" wire:model="image" class="rounded w-3/4" type="file" />
                        <div x-show="isUploading">
                            <progress max="100" class="w-full rounded bg-red-900" x-bind="progress"></progress>
                        </div>
                    </div>
                    @if($this->image)
                        <div class="my-1">
                            Photo Preview:
                            <img src="{{$this->image->temporaryUrl()}}" alt="">
                        </div>
                    @endif
                </div>
            </x-slot>

            <x-slot name="footer">
                <button wire:click="store()" class="p-2 cursor-pointer hover:bg-yellow-700 bg-red-900 text-white rounded">Create Branch</button>
            </x-slot>

        </x-jet-dialog-modal>
    <!-- End Create Modal -->

</div>