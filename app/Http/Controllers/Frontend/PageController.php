<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('Frontend.home');
    }

    public function about()
    {
        return view('Frontend.about');
    }

    public function services()
    {
        return view('Frontend.services');
    }

    public function instructor()
    {
        return view('Frontend.instructor');
    }

    public function contact()
    {
        return view('Frontend.contact');
    }
}
