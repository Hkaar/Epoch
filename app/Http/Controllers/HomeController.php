<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show the home page
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the browse page
     */
    public function browse()
    {
        return view('browse');
    }

    /**
     * Show the welcome / landing page
     */
    public function welcome()
    {
        return view('welcome');
    }
}
