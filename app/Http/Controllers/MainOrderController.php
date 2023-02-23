<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;


class MainOrderController extends Controller
{
    public function index()
    {
        $data = Order::whereUserId(Auth::id())->whereStatus('Menunggu')->get;

        return view('customer.order.index' ,compact('data'));
    }
}
