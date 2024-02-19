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
        $menuItems  = Menu::all();
        $menuByType = $menuItems->groupBy('type');
        return view('dashboard.menu-index', ['menuByType' => $menuByType]);
    }

    public function edit($id)
    {
        $item = Menu::find($id);
        return view ('dashboard.edit',[
            'item' => $item,
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
        'name'        => 'required|string|max:100',
        'description' => 'required|string',
        'price'       => 'required|integer',
        'image'       => 'required|string',
        'gluten'      => 'required|boolean',
        'lactose'     => 'required|boolean',
        'nuts'        => 'required|boolean',
        'id'          => 'required|integer',
        ]);

        $id = $validatedData['id'];

        $menu = Menu::findOrFail($id);
        $menu->update([
            'name'        => $validatedData['name'],
            'description' => $validatedData['description'],
            'price'       => $validatedData['price'],
            'image'       => $validatedData['image'],
            'gluten'      => $validatedData['gluten'],
            'lactose'     => $validatedData['lactose'],
            'nuts'        => $validatedData['nuts'],
        ]);

        return redirect('/dashboard/menu');
    }

    public function destroy(Request $request)
    {
        Menu::where('id', $request->id)->delete();
        return back();
    }
}
