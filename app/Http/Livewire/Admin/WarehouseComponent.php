<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;
use App\Models\Warehouse;
use App\Models\User;
use App\Models\Category;

class WarehouseComponent extends Component
{
    use WithFileUploads;
    public $warehouses, $categories, $name, $division, $manager,$image;
    public $createOpen = false;
    public function render()
    {
        return view('livewire.admin.warehouse-component');
    }

    public function create()
    {
        $this->createOpen = true;
    }

    public function store()
    {
        $data = $this->validate([
            'name' => 'required',
            'image' => 'required',
            'manager' => 'required',
            'division' => 'required'
        ]);
        
        $warehouse = new Warehouse();
        $warehouse->name = $data['name'];
        $warehouse->manager_id = $data['manager'];
        $warehouse->division_id = $data['division'];
        $warehouse->user_id = Auth()->User()->id;
        $warehouse->save();
        $this->createOpen = false;
    }
}
