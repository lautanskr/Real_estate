<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $count['saleProperty']=$this->saleCount();
        $count['rentProperty']=$this->rentCount();
        $count['agent']=$this->agentCount();
    
        
         return view('dashboard',$count);

   }

   public function saleCount()
   {
       $count = DB::table('sale_properties')->count('id');
       return $count;
   }

   public function rentCount()
   {
       $count = DB::table('rent_properties')->count('id');
       return $count;
   }

   public function agentCount()
   {
       $count = DB::table('registered_agents')->count('id');
       return $count;
   }

   public function dashboard1()
   {
    return view('dashboard1'); 
   }
}
