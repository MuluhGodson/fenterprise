<?php

namespace App\Http\Livewire\Admin;


use App\Models\Product;
use App\Models\Category;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ProductList extends LivewireDatatable
{
    public $model = Product::class;
    public function builder()
    {
        //
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')->filterable(),

            Column::name('name')->filterable()->searchable(),

            Column::name('email')->truncate()->filterable()->searchable(),

            DateColumn::name('created_at')->filterable(),

            Column::callback(['id', 'name'], function ($id, $name) {
                return view('table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }
}