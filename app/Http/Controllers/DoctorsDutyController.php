<?php

namespace App\Http\Controllers;

use App\Models\DoctorsDuty;
use Illuminate\Http\Request;

class DoctorsDutyController extends Controller
{
    public function index()
    {
        return DoctorsDuty::all();
    }

    public function show(DoctorsDuty $doctorsduty)
    {
        return $doctorsduty;
    }
}
