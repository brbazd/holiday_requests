<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolidayRequestController extends Controller
{
    public function index()
    {
        return view('request.index');
    }

    public function create()
    {
        return view('request.create');
    }
}
