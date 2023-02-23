<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainTravelController extends Controller
{
    public function index()
    {
        $data = Travel::whereStatus('tersedia')->get();

        return view('customer.travel.index', compact('data'));
    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function upload()
    {

    }

    public function cancel()
    {

    }
}
