<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\Warehouse;
use Livewire\Component;
use Auth;

class InventoryComponent extends Component
{
    public $products, $product, $warehouse, $quantity, $unitP, $totalP;
    public $addItem = false;

    public function mount()
    {
        $this->products = Product::all();
        $this->warehouse = Warehouse::find(Auth::User()->warehouse_id)->name;
    }

    
    public function render()
    {
        return view('livewire.admin.inventory-component');
    }

    public function updatedProduct()
    {
        $this->unitP = Product::find($this->product)->price;
    }

    public function updatedQuantity()
    {
        $this->totalP = $this->quantity * $this->unitP;
    }

    public function create()
    {
        $this->addItem = true;
    }

    public function store()
    {
        $this->validate([
            'product' => 'required',
            'quantity' => 'required',
            'warehouse' => 'required'
        ]);

        $p = Warehouse::find(Auth::User()->warehouse_id)->products()->attach($this->product, ['quantity' => $this->quantity]);
        $this->addItem = false;


    }
}
