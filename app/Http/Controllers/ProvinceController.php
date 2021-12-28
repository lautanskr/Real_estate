<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Country;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = Province::all();
        return view('provinces.index', compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country= Country::all(['name', 'id']);
        return view('provinces.create', compact('country'));
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
    
        Province::create($request->all());
     
        return redirect()->route('provinces.index')
                        ->with('success','Province created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function show(Province $province)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function edit(Province $province, Country $country)
    {  $country= Country::all(['name', 'id']);
        return view('provinces.edit',compact('province', 'country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Province $province)
    {
        $request->validate([
            'name' => 'required',
            
            
        ]);
    
        $province->update($request->all());
    
        return redirect()->route('provinces.index')
                        ->with('success','Province updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Province $province)
    {   
        $province->districtProvince()->delete();
        $province->delete();

        return redirect()->route('countries.index')
        ->with('success','Country deleted successfully');
    }
}
