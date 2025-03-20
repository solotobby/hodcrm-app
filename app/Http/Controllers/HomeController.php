<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        
        $user = Auth::user();

        if($user->hasRole('system')){
           return redirect()->route('system');
        }else{
            return redirect()->route('dashboard');
        }
        
    }
}
