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
                            <img src="{{Storage::url($warehouse->image)}}" class="object-cover h-48 w-full" alt="{{$warehouse->name}}">
                            <div class="p-3">
                                <h1 class="text-center text-red-900 font-semibold">
                                    {{ $warehouse->name }}
                                </h1>
                            </div>
                            <div>
                                <div class="flex justify-between justify-items-center px-2 py-3">
                                    <div><button class="bg-transparent rounded border border-red-900 text-red-900 p-1" wire:click="edit('{{$warehouse->id}}')">Edit</button></div>
                                    <div><button class="bg-red-900 rounded p-1 text-gray-200" wire:click="delete('{{$warehouse->id}}')">Delete</button></div>
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
        <x-jet-dialog-modal wire:model="Open">

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
                    <x-jet-label for="code" value="Branch Code" />
                    <x-jet-input name="name" wire:model="code" disabled class="rounded w-full bg-gray-200" type="text" />
                </div>
                
                <div class="my-4">
                    <x-jet-label for="phone" value="Branch Phone Number" />
                    <x-jet-input name="phone" wire:model="phone" class="rounded w-full" type="text" />
                </div>

               {{-- @if($users)
                <div class="my-4">
                        <x-jet-label for="manager" value="Select Branch Manager" />
                        <small>You can skip for later</small>
                        <select name="manager" wire:model="manager" class="w-full rounded" name="" id="">
                            <option class="w-full" value="">Select the branch Manager</option>
                            @forelse ($users as $user)
                                <option class="w-full" value="{{$user->id}}">{{$user->name}}</option>
                            @empty
                                <p>No Managers found.</p>
                            @endforelse  
                        </select>
                    </div>
                @endif--}}

                <div class="my-4"> 
                        @livewire('admin.utils.location-component', ['lt' => !($editMode) ? null : $subdivision])
                </div>

                <div class="my-4">
                    <x-jet-label for="latitude" value="Branch Latitude" />
                    <x-jet-input name="latitide" wire:model="latitude" class="rounded w-full" type="text" />
                </div>

                <div class="my-4">
                    <x-jet-label for="longitude" value="Branch Longitude" />
                    <x-jet-input name="longitude" wire:model="longitude" class="rounded w-full" type="text" />
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
                            <img src="{{ !($editMode) ? $this->image->temporaryUrl() : Storage::url($warehouse->image) }}" alt="">
                        </div>
                    @endif
                </div>
                @if($editMode)
                    <input value="{{ $warehouse->id }}" wire:model="warehouse_id">
                @endif
            </x-slot>

            <x-slot name="footer">
                <button wire:click="update()" class="p-2 cursor-pointer hover:bg-yellow-700 bg-red-900 text-white rounded">Create Branch</button>
            </x-slot>

        </x-jet-dialog-modal>
    <!-- End Create Modal -->

    <!-- Edit Modal -->
    <x-jet-dialog-modal wire:model="editMode">

        <x-slot name="title">
             Update Branch
        </x-slot>
        
        <x-slot name="content">

            <x-jet-validation-errors class="mb-4" />

            <div class="my-4">
                <x-jet-label for="name" value="Branch Name" />
                <x-jet-input name="name" wire:model="name" class="rounded w-full" type="text" />
            </div>

            <div class="my-4">
                <x-jet-label for="code" value="Branch Code" />
                <x-jet-input name="name" wire:model="code" disabled class="rounded w-full bg-gray-200" type="text" />
            </div>
            
            <div class="my-4">
                <x-jet-label for="phone" value="Branch Phone Number" />
                <x-jet-input name="phone" wire:model="phone" class="rounded w-full" type="text" />
            </div>

           {{-- @if($users)
            <div class="my-4">
                    <x-jet-label for="manager" value="Select Branch Manager" />
                    <small>You can skip for later</small>
                    <select name="manager" wire:model="manager" class="w-full rounded" name="" id="">
                        <option class="w-full" value="">Select the branch Manager</option>
                        @forelse ($users as $user)
                            <option class="w-full" value="{{$user->id}}">{{$user->name}}</option>
                        @empty
                            <p>No Managers found.</p>
                        @endforelse  
                    </select>
                </div>
            @endif--}}

            <div class="my-4">
                    <livewire:admin.utils.location-component :lt="$subdivision" />
            </div>

            <div class="my-4">
                <x-jet-label for="latitude" value="Branch Latitude" />
                <x-jet-input name="latitide" wire:model="latitude" class="rounded w-full" type="text" />
            </div>

            <div class="my-4">
                <x-jet-label for="longitude" value="Branch Longitude" />
                <x-jet-input name="longitude" wire:model="longitude" class="rounded w-full" type="text" />
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
                        <img src="{{ !($editMode) ? $this->image->temporaryUrl() : Storage::url($warehouse->image) }}" alt="">
                    </div>
                @endif
            </div>
            @if($editMode)
                <input value="{{ $warehouse->id }}" wire:model="warehouse_id">
            @endif
        </x-slot>

        <x-slot name="footer">
            <button wire:click="update('{{$warehouse->id}}')" class="p-2 cursor-pointer hover:bg-yellow-700 bg-red-900 text-white rounded">Update Branch</button>
        </x-slot>

    </x-jet-dialog-modal>
<!-- End Edit Modal -->

</div>
