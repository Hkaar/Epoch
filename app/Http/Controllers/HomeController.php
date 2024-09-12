<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show the home page
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the browse page
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function browse()
    {
        return view('browse');
    }

    /**
     * Show the welcome / landing page
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function welcome()
    {
        return view('welcome');
    }
}
