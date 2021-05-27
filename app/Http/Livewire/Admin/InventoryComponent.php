<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class InventoryComponent extends Component
{
    public $products, $product, $warehouses, $warehouse;

    public function mount()
    {

    }
    
    public function render()
    {
        return view('livewire.admin.inventory-component');
    }
}
