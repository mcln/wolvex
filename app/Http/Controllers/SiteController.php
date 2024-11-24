<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('home'); 
    }

    public function services()
    {
        return view('services'); 
    }

    public function portfolio()
    {
        return view('portfolio'); 
    }

    public function about()
    {
        return view('about'); 
    }

    public function blog()
    {
        return view('blog'); 
    }

    public function faq()
    {
        return view('faq'); 
    }

    public function client()
    {
        return view('client'); 
    }
}
