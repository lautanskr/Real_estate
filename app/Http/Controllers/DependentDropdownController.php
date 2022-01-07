<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DependentDropdownController extends Controller
{
    public function getCon()
    {
        $countries = DB::table("countries")->pluck("name", "id");
        return view('saleProperty.create', compact('countries'));
    }

    public function getPro(Request $request)
    {
        $provinces = DB::table("provinces")
            ->where("country_id", $request->country_id)
            ->pluck("name", "id");
        return response()->json($provinces);
    }

    public function getDis(Request $request)
    {
        $districts = DB::table("districts")
            ->where("province_id", $request->province_id)
            ->pluck("name", "id");
        return response()->json($districts);
    }

    public function getMun(Request $request)
    {
        $municipalities = DB::table("municipalities")
            ->where("district_id", $request->district_id)
            ->pluck("m_name", "id");
        return response()->json($municipalities);
    }


//for property category
    public function getProp(Request $request)
    {
        $property = DB::table("property_categories")
            ->where("pro_type_id", $request->pro_type_id)
            ->pluck("name", "id");
        return response()->json($property);
    }
}
