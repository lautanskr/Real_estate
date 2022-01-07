<?php

namespace App\Http\Controllers;

use App\Models\RentProperty;
use App\Models\PropertyType;
use App\Models\propertyCategory;
use App\Models\Country;
use App\Models\Province;
use App\Models\District;
use App\Models\Municipality;
use Illuminate\Http\Request;

class RentPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rents = RentProperty::all();
        return view('rentProperty.index', compact('rents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country=Country::all(['name', 'id']);
        $propertyType=PropertyType::where('name', 'rent')->get();
        return view('rentProperty.create', compact('propertyType', 'country'));
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
            'price' => 'required',
            'description' => 'required',
            'addmore.*.image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'country' => 'required',  
            'province' => 'required',  
            'district' => 'required',  
            'ward' => 'required',  
            'street' => 'required',  
            'near_by' => 'required',  
        ]);
      $input = $request->all();
  
        $img = [];
        
         if($request->hasfile('image'))
          {      
           $i=0;
           $images=[];
             foreach($request->file('image') as $img)
             {
                 $destinationPath = 'rent_pro_image/';
                 $proImage = $request->image[$i]->getClientOriginalName();
                 $img->move($destinationPath, $proImage);
                 $images[]=$proImage;
                 $i++;
             }
             $input['image']=implode(',',$images);
            }
 
         RentProperty::create($input);
     
        return redirect()->route('rentProperty.index')
                        ->with('success','Rent Property category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RentProperty  $rentProperty
     * @return \Illuminate\Http\Response
     */
    public function show(RentProperty $rentProperty)
    {
        return view('rentProperty.show', compact('rentProperty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RentProperty  $rentProperty
     * @return \Illuminate\Http\Response
     */
    public function edit(RentProperty $rentProperty, PropertyType $propertyType, PropertyCategory $propertyCategory, Province $province, District $district, Municipality $municipality)
    {
        $country=Country::all(['name', 'id']);
        $province=Province::all('name','id');
        $district=District::all('name','id');
        $municipality=Municipality::all('m_name','id');
        $propertyType=PropertyType::where('name', 'rent')->get();
        $propertyCategory=PropertyCategory::all(['name','id']);
        return view('rentProperty.edit', compact('rentProperty','propertyType','propertyCategory','country','province','district','municipality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RentProperty  $rentProperty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RentProperty $rentProperty)
    {
        $request->validate([
            'price' => 'required',
            'description' => 'required',
            'addmore.*.image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  
            'country' => 'required',  
            'province' => 'required',  
            'district' => 'required',    
            'ward' => 'required',  
            'street' => 'required',  
            'near_by' => 'required', 
        ]);

        $input = $request->all();
        if (request()->hasFile('image') && request('image') != '') {
            $imagePath = public_path('sale_pro_image/'.$rentProperty->image);
            if(file_exists($imagePath)){
                unlink($imagePath);
            }
        }
  
        $img = [];
        
         if($request->hasfile('image'))
          {      
           $i=0;
           $images=[];
             foreach($request->file('image') as $img)
             {
                 $destinationPath = 'rent_pro_image/';
                 $proImage = $request->image[$i]->getClientOriginalName();
                 $img->move($destinationPath, $proImage);
                 $images[]=$proImage;
                 $i++;
             }
             $input['image']=implode(',',$images);
            }
          
        $rentProperty->update($input);
    
        return redirect()->route('rentProperty.index')
                        ->with('success','Rent Property updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RentProperty  $rentProperty
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentProperty $rentProperty)
    {
        $imgPath = 'rent_pro_image/'.$rentProperty->image;
        if(file_exists($imgPath))
        {
         unlink(public_path($imgPath ));
        }
        $rentProperty->delete();

        return redirect()->route('rentProperty.index')
            ->with('success','Rent Property deleted successfully');
    }
}
