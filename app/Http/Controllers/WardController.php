<?php

namespace App\Http\Controllers;

use App\Models\Ward;
use App\Models\Country;
use App\Models\Province;
use App\Models\District;
use App\Models\Municipality;
use Illuminate\Http\Request;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wards = Ward::all();
        return view('wards.index', compact('wards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country= Country::all(['name', 'id']);
        return view('wards.create', compact('country'));
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
            'ward_no' => 'required',
            
        ]);
    
        Ward::create($request->all());
     
        return redirect()->route('wards.index')
                        ->with('success','Ward created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function show(Ward $ward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function edit(Ward $ward, Country $country, Province $province, District $district, Municipality $municipality)
    {
        $country= Country::all('name','id');
        $province=Province::all('name','id');
        $district=District::all('name','id');
        $municipality=Municipality::all('m_name','id');
        return view('wards.edit',compact('ward','country', 'province', 'district','municipality' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ward $ward)
    {
        $request->validate([
            'ward_no' => 'required',
            
            
        ]);
    
        $ward->update($request->all());
    
        return redirect()->route('wards.index')
                        ->with('success','Ward updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ward $ward)
    {
        $ward->delete();

        return redirect()->route('wards.index')
          ->with('success','Ward deleted successfully');
    }
}
