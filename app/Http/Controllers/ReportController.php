<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Mobil;
use App\Models\Order;
use App\Models\Travel;
use App\Models\Wisata;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->now = Carbon::now()->translatedFormat('d F Y');

        // $this->ttdName = 'Dr. H. Sufiansyah, M.AP';
    }

    public function userall()
    {
        $data = User::all();
        $now = $this->now;
        $pdf = PDF::loadView('admin.report.user', compact('now', 'data'));
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream('Laporan User.pdf');
    }

    public function wisataall()
    {
        $data = Wisata::all();
        $now = $this->now;
        $pdf = PDF::loadView('admin.report.wisata', compact('now', 'data'));
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream('Laporan Wisata.pdf');
    }
    public function mobilall()
    {
        $data = Mobil::all();
        $now = $this->now;
        $pdf = PDF::loadView('admin.report.mobil', compact('now', 'data'));
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream('Laporan Mobil.pdf');
    }
    public function travelall()
    {
        $data = Travel::all();
        $now = $this->now;
        $pdf = PDF::loadView('admin.report.travel', compact('now', 'data'));
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream('Laporan Travel.pdf');
    }

    public function orderall()
    {
        $data = Order::all();
        $now = $this->now;
        $pdf = PDF::loadView('admin.report.order', compact('now', 'data'));
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Order.pdf');
    }

    public function orderdate(Request $req)
    {
        $year = $req->year;
        $month = $req->month;
        if (!$month) {
            $data = Order::whereYear('created_at', $year)->get();
            $month = NULL;
        } else {
            $data = Order::whereMonth('created_at', $month)->whereYear('created_at', $year)->get();
            $month = strtoupper(Carbon::parse('01-' . $month . '-' . $year)->translatedFormat('F'));
            // dd($month);
        }



        $now = $this->now;
        $pdf = PDF::loadView('admin.report.order', compact('now', 'data'));
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Order.pdf');
    }
}
