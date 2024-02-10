<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems  = Menu::all();
        $menuByType = $menuItems->groupBy('type');
        return view('menu.index', ['menuByType' => $menuByType]);
    }

}
