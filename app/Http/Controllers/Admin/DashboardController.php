<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TravelPackage;
use App\Appointment;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackage::count(),
            'appointment' => Appointment::count(),
            'transaction_status' => Appointment::where('transaction_status','SUCCESS')->count(),
        ]);
    }
}
