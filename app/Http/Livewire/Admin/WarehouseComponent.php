<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;
use App\Models\Warehouse;
use App\Models\User;
use App\Models\Category;
use App\Models\Country;
use App\Models\Region;
use App\Models\Division;
use App\Models\SubDivision;

class WarehouseComponent extends Component
{
    use WithFileUploads;
    public $warehouses, $warehouse, $categories, $latitude, $longitude, $name, $country, $region, $division, $subdivision, $code, $manager, $image, $users;
    public $Open = false;
    public $editMode = false;
    protected $listeners = ['countrySelected', 'regionSelected', 'divisionSelected', 'subdivisionSelected'];

    public function render()
    {
        return view('livewire.admin.warehouse-component');
    }

    public function countrySelected($id)
    {
        $this->country = Country::find($id);
    }

    public function regionSelected($id)
    {
        $this->region = Region::find($id);
    }

    public function divisionSelected($id)
    {
        $this->division = Division::find($id);
    }

    public function subdivisionSelected($id)
    {
        $this->subdivision = SubDivision::find($id);
    }

    public function create()
    {
        $this->users = User::role('manager')->get();
        $this->resetErrorBag();
        $this->resetValidation();
        $this->editMode = false;
        $this->Open = true;
    }

    Public function UpdatedName()
    {
        $cd = 'FK-'.strtoupper($this->name).'X12'.rand(2, 100);
        $this->code = str_replace(' ', '', $cd);
    }

    public function store()
    {
        $data = $this->validate([
            'name' => 'required',
            'image' => 'required',
            'manager' => 'sometimes',
            'subdivision' => 'required',
            'code' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $imageExtension = $data['image']->getClientOriginalExtension();
        $imageName = 'warehouse_image_'.$data['name'].'_'.time().'.'.$imageExtension;
        $imageLocation = $data['image']->storePubliclyAs('Warehouses/Images', $imageName, ['disk' => 'public']);
        
        $warehouse = new Warehouse();
        $warehouse->name = $data['name'];
        $warehouse->branch_code = $this->code;
        $warehouse->image = $imageLocation;
        $warehouse->manager_id = $data['manager'];
        $warehouse->subdivision_id = $this->subdivision->id;
        $warehouse->user_id = Auth()->User()->id;
        $warehouse->latitude = $data['latitude'];
        $warehouse->longitude = $data['longitude'];
        $warehouse->save();
        $this->editMode = true;
        $this->Open = false;
        
    }

    public function edit($id)
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->warehouse = Warehouse::find($id);
        $this->name = $this->warehouse->name;
        $this->code = $this->warehouse->branch_code;
        $this->image = $this->warehouse->image;
        //$this->manager = $this->warehouse->manager->name;
        $this->latitude = $this->warehouse->latitude;
        $this->longitude =$this->warehouse->longitude;
        $this->Open = true;
    }

    public function delete($id)
    {
        $warehouse = Warehouse::find($id)->delete();
    }
}
