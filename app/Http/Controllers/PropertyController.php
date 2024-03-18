<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\property;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = property::all();
        return view('property.home', ['properties' => $properties]);
    }
    public function create()
    {
        return view('property.create');
    }
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'title' => 'required',
            'contact' => 'required | numeric',
            'rate' => 'required',
            'city' => 'required',
            'detail_address' => 'nullable'
        ]);

        $newProduct = Property::create($data);
        return redirect(route('property.index'));
    }
    public function edit(property $property)
    {
        // dd($property);
        return view('property.edit', ['property' => $property]);
    }
    public function update(property $property, Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'contact' => 'required | numeric',
            'rate' => 'required',
            'city' => 'required',
            'detail_address' => 'nullable'
        ]);

        $property->update($data);
        return redirect(route('property.index'))->with('success', 'Property Updated Successfully');
    }
    public function destroy(property $property)
    {
        $property->delete();
        return redirect(route('property.index'))->with('success', 'Property Updated Successfully');
    }
}
