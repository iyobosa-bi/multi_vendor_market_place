<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ProfileController extends Controller
{
        public function index(){

            $user = Auth::user();
            // dd($user);
           return view('auth.frontend.profile.index',compact('user'));
        }
}
