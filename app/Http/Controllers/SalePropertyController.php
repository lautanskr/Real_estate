<?php

namespace App\Http\Controllers;

use App\Models\SaleProperty;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class SalePropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = SaleProperty::all();
        return view('saleProperty.index', compact('sales'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propertyType=PropertyType::all(['name', 'id']);
        return view('saleProperty.create', compact('propertyType'));
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
            'property_type' => 'required',
            'property_category' => 'required',
            'price' => 'required',
            'description' => 'required',
            'addmore.*.image' => 'required',
               
        ]);
    
        SaleProperty::create($request->all());
     
        return redirect()->route('saleProperty.index')
                        ->with('success','Sale Property category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SaleProperty  $saleProperty
     * @return \Illuminate\Http\Response
     */
    public function show(SaleProperty $saleProperty)
    {
        return view('saleProperty.show', compact('saleProperty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SaleProperty  $saleProperty
     * @return \Illuminate\Http\Response
     */
    public function edit(SaleProperty $saleProperty)
    {
        return view('saleProperty.edit', compact('saleProperty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SaleProperty  $saleProperty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaleProperty $saleProperty)
    {
        $request->validate([
            'property_type' => 'required',
            'property_category' => 'required',
            'price' => 'required',
            'description' => 'required',
            'addmore.*.image' => 'required',  
        ]);
    
        $saleProperty->update($request->all());
    
        return redirect()->route('saleProperty.index')
                        ->with('success','Sale Property updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SaleProperty  $saleProperty
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaleProperty $saleProperty)
    {
        $saleProperty->delete();

        return redirect()->route('saleProperty.index')
            ->with('success','Sale Property deleted successfully');
    }
}
