<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $patients = DB::select('select * from patients');

        return view('dashboard', ['patients' => $patients]);
    }
}
