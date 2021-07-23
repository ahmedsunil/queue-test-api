<?php

namespace App\Http\Controllers;

use App\Models\TokenStatus;
use Illuminate\Http\Request;

class TokenStatusController extends Controller
{
    public function index()
    {
        return TokenStatus::all();
    }

    public function show(TokenStatus $tokenstatus)
    {
        return $tokenstatus;
    }
}
