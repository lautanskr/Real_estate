<?php

namespace App\Http\Controllers;

use App\Models\RegisteredAgent;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisteredAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = RegisteredAgent::all();
        return view('agent.index', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country=Country::all(['name', 'id']);
        return view('front_end.log-reg.register', compact('country'));
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
            'email' => 'required',
            'password' => 'required',
            'mobile' => 'required',  
            'country' => 'required',  
            'province' => 'required',  
            'district' => 'required',  
            'ward' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  
              
        ]);
        
         $input = $request->all();
         if ($image = $request->file('image')) {
            $destinationPath = 'agent_image/';
            $profileImage = $image->getClientOriginalName();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        $input['password']= Hash::make($request->password);
        $input['status']=0;

         RegisteredAgent::create($input);
     
        return redirect()->route('LoginAgent')
                        ->with('success',' Agent Registered successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisteredAgent  $registeredAgent
     * @return \Illuminate\Http\Response
     */
    public function show(RegisteredAgent $registeredAgent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegisteredAgent  $registeredAgent
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisteredAgent $registeredAgent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisteredAgent  $registeredAgent
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request)
    {
        // $agent = RegisteredAgent::find($request->id);
        // $agent->status = $request->status;
        // $agent->save();
  
        // return response()->json(['success'=>'Agent status change successfully.']);
        if($request->state == true) {
        
            RegisteredAgent::where('status',0)->update(['status' => 1]);
         
         }
       
         return response()->json(['message' => 'status Update']);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisteredAgent  $registeredAgent
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisteredAgent $registeredAgent)
    {
        //
    }
}
