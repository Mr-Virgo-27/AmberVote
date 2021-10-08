<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Returns the dashboard view
     */
    public function index()
    {
        return view('dashboard');
    }
}
