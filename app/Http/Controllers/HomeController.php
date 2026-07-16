<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function services()
    {
        return view('public.services');
    }

    public function gallery()
    {
        return view('public.gallery');
    }

    public function contact()
    {
        return view('public.contact');
    }
}