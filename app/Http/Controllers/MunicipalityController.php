<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use App\Models\Country;
use App\Models\Province;
use App\Models\District;
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipalities = Municipality::all();
        return view('municipalities.index', compact('municipalities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country= Country::all(['name', 'id']);
        return view('municipalities.create', compact('country'));
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
            'm_name' => 'required',
            
        ]);
    
        Municipality::create($request->all());
     
        return redirect()->route('municipalities.index')
                        ->with('success','Municipality created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function show(Municipality $municipality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function edit(Municipality $municipality, Country $country, Province $province, District $district)
    {
        $country= Country::all('name','id');
        $province=Province::all('name','id');
        $district=District::all('name','id');
        return view('municipalities.edit',compact('municipality', 'country', 'province', 'district'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipality $municipality)
    {
        $request->validate([
            'm_name' => 'required',
            
            
        ]);
    
        $municipality->update($request->all());
    
        return redirect()->route('municipalities.index')
                        ->with('success','Municipality updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipality $municipality)
    {
        $municipality->delete();

        return redirect()->route('municipalities.index')
        ->with('success','Municipality deleted successfully');
    }
}
