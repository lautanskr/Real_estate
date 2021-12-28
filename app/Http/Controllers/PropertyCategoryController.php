<?php

namespace App\Http\Controllers;

use App\Models\PropertyCategory;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propertyCategories = PropertyCategory::all();
        return view('propertyCategories.index', compact('propertyCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pro_type=PropertyType::all();
        return view('propertyCategories.create', compact('pro_type'));
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
               
        ]);
    
        PropertyCategory::create($request->all());
     
        return redirect()->route('propertyCategories.index')
                        ->with('success','Property category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyCategory $propertyCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyCategory $propertyCategory)
    {
        $pro_type=PropertyType::all(['name', 'id']);
        return view('propertyCategories.edit', compact('propertyCategory', 'pro_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyCategory $propertyCategory)
    {
        $request->validate([
            'name' => 'required',   
        ]);
    
        $propertyCategory->update($request->all());
    
        return redirect()->route('propertyCategories.index')
                        ->with('success','Property category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyCategory $propertyCategory)
    {
        $propertyCategory->delete();

        return redirect()->route('propertyCategories.index')
            ->with('success','Property category deleted successfully');
    }
}
