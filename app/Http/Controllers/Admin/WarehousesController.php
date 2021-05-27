<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warehouse;
use Illuminate\Support\Facades\Auth;

class WarehousesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouses = Warehouse::all();
        return view('admin.warehouses.index', compact('warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.warehouses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'sometimes',
            'division' => 'required',
            'manager' => 'required'
        ]);

        // Handle file upload
        if($request->hasFile('image')){
            //Get just extenstion
            $extension = $request->file('image')->getClientOriginalExtension();
            //File Name to store
            $warehouse_image = $request->name.'_image.'.$extension;
             //Upload Image
            $path = $request->file('image')->storeAs('public/warehouse_images', $warehouse_image);
        } else {
                $warehouse_image = 'noimage.jpg';
        }

        $warehouse = new Warehouse;
        $warehouse->name = $request->name;
        $warehouse->division_id = $request->division;
        $warehouse->manager_id = $request->manager;
        $warehouse->image = $warehouse_image;
        $warehouse->user_id = Auth()->User()->id;
        $warehouse->save();
        return redirect(route('warehouse.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
