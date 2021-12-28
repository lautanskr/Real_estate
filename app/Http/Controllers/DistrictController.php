<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Country;
use App\Models\Province;
use Illuminate\Http\Request;


class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::all();
        return view('districts.index', compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $country= Country::all(['name', 'id']);
        $province= Province::all(['name', 'id']);
        return view('districts.create', compact('country','province'));
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
    
        District::create($request->all());
     
        return redirect()->route('districts.index')
                        ->with('success','District created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function show(District $district)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit(District $district, Country $country)
    {   
        $country=Country::all('name', 'id');
        $provinces=Province::all('name','id');
        return view('districts.edit',compact('district', 'country','provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District $district)
    {
        $request->validate([
            'name' => 'required',
            
            
        ]);
    
        $district->update($request->all());
    
        return redirect()->route('districts.index')
                        ->with('success','District updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $district)
    {
       
        $district->delete();

        return redirect()->route('districts.index')
        ->with('success','District deleted successfully');
    }

    
}

