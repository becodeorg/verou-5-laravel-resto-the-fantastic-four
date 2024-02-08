<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function reservations()
    {
        return view('dashboard.reservations');
    }

    public function editMenu()
    {
        $menuItems = Menu::all();
        $menuByType = $menuItems->groupBy('type');
        return view('dashboard.menu-index', ['menuByType' => $menuByType]);
    }

    public function edit($id)
    {
        $item = Menu::find($id);
        return view ('dashboard.edit',[
            'item'=>$item,
        ]);
    }

    public function update(Request $request)
    {
        dd($request);
    }
}
