<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAgentController extends Controller
{
    public function agentLogin()
    {
      return view('front_end.log-reg.login');
    }
}
