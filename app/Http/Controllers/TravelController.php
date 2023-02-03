<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index()
    {
        $data = Travel::all();

        return view('admin.travel.index', compact('data'));
    }
}
