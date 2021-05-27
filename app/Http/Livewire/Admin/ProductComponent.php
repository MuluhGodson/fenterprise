<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;
use App\Models\Warehouse;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;

class ProductComponent extends Component
{
    public $createModal = false;
    public $name, $description, $image, $category_id, $categories, $price;


    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.admin.product-component');
    }

    public function create()
    {
        $this->createModal = true;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'sometimes',
            'category_id' => 'required',
            'price' => 'required'
        ]);

        if($this->image){
            $this->validate(['image' => 'sometimes|image']);
            $productExt = $this->image->getClientOriginalExtension();
            $productName = $this->name.'_'.Carbon::now().'.'.$productExt;
            $productPath = $this->image->storePubliclyAs('Products/Images', $productName, ['disk' => 'public']);
        } else {
            $productPath = 'noimg.jpg';
        }

        $p = new Product();
        $p->name = $this->name;
        $p->description = $this->description;
        $p->price = $this->price;
        $p->image = $productPath;
        $p->category_id = $this->category_id;
        $p->save();
        $this->createModal = false;
    }
}
