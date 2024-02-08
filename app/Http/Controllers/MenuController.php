<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuItems = Menu::all();

        $menuByType = $menuItems->groupBy('type');

        return view('menu.index', ['menuByType' => $menuByType]);
    }

    public function edit ()
    {
        return view('menu.edit');
    }
}

/* use Illuminate\Support\Facades\DB;

public function menu() {
    $menuItems = DB::table('menus')->get();

    $menuByType = $menuItems->groupBy('type');

    return view('menu', ['menuByType' => $menuByType]);
} */
