<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HolidayRequest;

class HolidayRequestController extends Controller
{
    public function index()
    {
        return view('request.index',['requests' => HolidayRequest::all()]);
    }

    public function create()
    {
        return view('request.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:holiday_requests',
            'reason' => 'required|string'
        ]);

        HolidayRequest::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'reason' => $request->reason,
        ]);

        return redirect(route('request.index'));
    }
}
