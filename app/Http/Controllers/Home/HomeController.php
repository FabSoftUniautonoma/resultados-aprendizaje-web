<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(auth()->user()->hasRole("admin")){
            return view("admin.dashboard.dashboard");
        }
        if(auth()->user()->hasRole("vicerrector")){
            return view("admin.dashboard.dashboard");
        }
        if (auth()->user()->hasRole("estudiante")){
            return redirect()->route('cuestionario.indexByUserId', ['userId'=> auth()->user()->id]);
        }
    }
}
