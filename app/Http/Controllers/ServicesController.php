<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return Services::all();
    }

    public function show(Services $services)
    {
        return $services;
    }
}
