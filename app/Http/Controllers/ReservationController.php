<?php

namespace App\Http\Controllers;

use App\Models\v;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reservations.index');
    }

}
