<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\teszt;
use Illuminate\Http\Request;

class TesztController extends Controller
{
    public function index()
    {
        return response()->json(teszt::all());
    }
}
