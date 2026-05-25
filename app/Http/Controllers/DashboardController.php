<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ContractsView;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index():ContractsView
    {
        return view('auth.frontend.dashboard.index');
    }
}
