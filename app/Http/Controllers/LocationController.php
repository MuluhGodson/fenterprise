<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;
use Mapper;

class LocationController extends Controller
{
    public function index()
    {
        $map = Mapper::map(7.3697, 12.3547);

        $warehouses = Warehouse::all();
        foreach ($warehouses as $warehouse) {
            Mapper::marker($warehouse->latitude, $warehouse->longitude);
        } 
        
       /* Mapper::marker(4.034675060744094, 9.728267281273068);
        Mapper::marker(3.8716819581608317, 11.461381927640398);
        Mapper::marker(5.5153260881569395, 10.409632498242843);
        Mapper::marker(5.471582612187401, 10.049830256906366);
        Mapper::marker(5.010432129214115, 9.920835626949524);*/

        return view('admin.locations.index', compact('map'));
    }
}
