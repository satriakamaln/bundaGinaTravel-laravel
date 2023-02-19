<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MainRentalController extends Controller
{
    public function index()
    {
        $data = Mobil::all();

        return view('customer.rental.index', compact('data'));
    }
}
