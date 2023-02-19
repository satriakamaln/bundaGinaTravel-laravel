<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class MainTravelController extends Controller
{
    public function index()
    {
        $data = Travel::whereStatus('tersedia')->get();

        return view('customer.travel.index', compact('data'));
    }
}
