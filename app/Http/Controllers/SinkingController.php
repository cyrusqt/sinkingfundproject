<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinkingController extends Controller
{
    public function index()
    {
        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        return view('frontend.dashboard');
    }

    public function funds()
    {
        return view('frontend.myfunds');
    }

    public function contributions()
    {
        return view('frontend.contributions');
    }

    public function reports()
    {
        return view('frontend.reports');
    }
}