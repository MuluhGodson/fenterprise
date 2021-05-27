<div>
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="px-10 overflow-hidden">

                <div>
                    <button wire:click="create" class="p-1 text-yellow-300 font-bold bg-red-900 rounded">Add Product</button>
                </div>
                

    @if(count(\App\Models\Product::all()) > 0)
            <div class="my-5">
                <livewire:datatable
                    model="App\Models\Product"
                    with="category"
                    sort="updated_at|dsc"
                    include="id, name, price|Price(XAF), description, category.name|Category"
                    searchable="name"
                    dates="updated_at"
                    exportable
                />
            </div>
    @endif

    <!-- Create Modal -->
        <x-jet-dialog-modal wire:model="createModal">

            <x-slot name="title">
                Add Product
            </x-slot>
            
            <x-slot name="content">

                <x-jet-validation-errors class="mb-4" />

                <div class="my-4">
                    <x-jet-label for="name" value="Product Name" />
                    <x-jet-input name="name" wire:model="name" class="rounded w-full" type="text" />
                </div>

                <div class="my-4">
                    <x-jet-label for="price" value="Product Price" />
                    <x-jet-input name="price" wire:model="price" class="rounded w-full" type="text" />
                </div>

                <div class="my-4">
                <x-jet-label for="description" value="Product Description" />
                    <textarea name="description" wire:model="description" id="" cols="30" rows="10" class="rounded w-full"></textarea>
                </div>


                @if($categories)
                <div class="my-4">
                        <x-jet-label for="category" value="Select Category" />
                        <select name="category" wire:model="category_id" class="w-full rounded" name="" id="">
                            <option class="w-full" value="">Select the product Category</option>
                            @forelse ($categories as $category)
                                <option class="w-full" value="{{$category->id}}">{{$category->name}}</option>
                            @empty
                                <p>No Category found.</p>
                            @endforelse  
                        </select>
                    </div>
                @endif

                <div class="my-4">
                    <x-jet-label for="image" value="Product Image" />
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
                            Image Preview:                       
                            <img src="{{ $this->image->temporaryUrl() }}" alt="">
                        </div>
                    @endif
                </div>

            </x-slot>

            <x-slot name="footer">
                <button wire:click="store()" class="p-2 cursor-pointer hover:bg-yellow-700 bg-red-900 text-white rounded">Add Product</button>
            </x-slot>

        </x-jet-dialog-modal>
    <!-- End Create Modal -->

</div>
