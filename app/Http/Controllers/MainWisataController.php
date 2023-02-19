<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class MainWisataController extends Controller
{
    public function index()
    {
        $data = Wisata::all();

        return view('customer.wisata.index', compact('data'));
    }
}
