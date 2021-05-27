<div>
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="px-10 overflow-hidden">

                <div>
                    <button wire:click="create" class="p-1 text-yellow-300 font-bold bg-red-900 rounded">Add Item</button>
                </div>
                
                
                
            </div>
        </div>
    </div>

    <!-- add inventory -->
    <x-jet-dialog-modal wire:model="addItem">

        <x-slot name="title">
            Add Item
        </x-slot>
        
        <x-slot name="content">

            <x-jet-validation-errors class="mb-4" />

            <div class="my-4">
                <x-jet-label for="product" value="Product Name" />
                <select wire:model="product" name="" id="" class="border-gray-300 focus:border-yellow-400 focus:ring focus:ring-indigo-200 w-full focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="" class="">Select a Product</option>
                    @foreach($products as $p)
                        <option value="{{$p->id}}" class="">{{$p->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="my-4">
                <x-jet-label for="productname" value="Unit Price" />
                <x-jet-input disabled name="price" wire:model="unitP" class="rounded w-full bg-gray-300" type="text" />
            </div>

            <div class="my-4">
                <x-jet-label for="qty" value="Quantity" />
                <x-jet-input name="quantity" wire:model="quantity" class="rounded w-full" type="number" />
                <p class="my-1 font-bold">{{number_format($totalP)}} XAF</p>
            </div>

            <div class="my-4">
                <x-jet-label for="warehouse" value="Warehouse" />
                <x-jet-input disabled name="warehouse" wire:model="warehouse" class="rounded w-full bg-gray-300" type="text" />
            </div>



            
           
        </x-slot>

        <x-slot name="footer">
            <button wire:click="store()" class="p-2 cursor-pointer hover:bg-yellow-700 bg-red-900 text-white rounded">Add Item</button>
        </x-slot>

    </x-jet-dialog-modal>
<!-- End Create Modal -->

</div>
