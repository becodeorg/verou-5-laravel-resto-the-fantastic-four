<?php

namespace App\Http\Controllers;

use App\Models\v;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('menu.index');
    }

}
