<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    // Method to display the home page
    public function home() 
    {
        return view('data/home');
    }
}
