<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function resources()
    {
        return view('resources');
    }

    public function faq()
    {
        return view('faq');
    }

    public function careers()
    {
        return view('careers');
    }
}
