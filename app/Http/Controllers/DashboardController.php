<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ContractsView;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index():ContractsView
    {

        $user = auth()->user();
        return view('auth.frontend.dashboard.index',compact('user'));
    }
}
