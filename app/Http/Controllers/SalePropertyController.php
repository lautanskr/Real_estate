<?php

namespace App\Http\Controllers;

use App\Models\SaleProperty;
use App\Models\PropertyType;
use App\Models\propertyCategory;
use App\Models\Country;
use App\Models\Province;
use App\Models\District;
use App\Models\Municipality;
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
        $country=Country::all(['name', 'id']);
        $propertyType=PropertyType::where('name', 'sale')->get();
        return view('saleProperty.create', compact('propertyType', 'country'));
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
                 $destinationPath = 'sale_pro_image/';
                 $proImage = $request->image[$i]->getClientOriginalName();
                 $img->move($destinationPath, $proImage);
                 $images[]=$proImage;
                 $i++;
             }
             $input['image']=implode(',',$images);
            }
 
         SaleProperty::create($input);
     
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
    public function edit(SaleProperty $saleProperty, PropertyType $propertyType, PropertyCategory $propertyCategory, Province $province, District $district, Municipality $municipality)
   
    {
        $country=Country::all(['name', 'id']);
        $province=Province::all('name','id');
        $district=District::all('name','id');
        $municipality=Municipality::all('m_name','id');
        $propertyType=PropertyType::where('name', 'sale')->get();
        $propertyCategory=PropertyCategory::all(['name','id']);
        return view('saleProperty.edit', compact('saleProperty','propertyType','propertyCategory','country','province','district','municipality'));
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
            $imagePath = public_path('sale_pro_image/'.$saleProperty->image);
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
                 $destinationPath = 'sale_pro_image/';
                 $proImage = $request->image[$i]->getClientOriginalName();
                 $img->move($destinationPath, $proImage);
                 $images[]=$proImage;
                 $i++;
             }
             $input['image']=implode(',',$images);
            }
          
        $saleProperty->update($input);
    
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
        $imgPath = 'sale_pro_image/'.$saleProperty->image;
        if(file_exists($imgPath))
        {
         unlink(public_path($imgPath ));
        }
        $saleProperty->delete();

        return redirect()->route('saleProperty.index')
            ->with('success','Sale Property deleted successfully');
    }
}
