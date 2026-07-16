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
        $services = \App\Models\Service::all();
        return view('public.services', compact('services'));
    }

    public function gallery()
    {
        $galleries = \App\Models\Gallery::all();
        return view('public.gallery', compact('galleries'));
    }

    public function contact()
    {
        return view('public.contact');
    }
}