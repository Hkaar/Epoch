<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the home page of the admin dashboard
     */
    public function index()
    {
        return view('admin.home');
    }
}
