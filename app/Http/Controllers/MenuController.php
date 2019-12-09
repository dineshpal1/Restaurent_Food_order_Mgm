<?php

namespace App\Http\Controllers;
use App\Menu;
use App\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        //Shows all menu
        $categories = Category::all();
        $menus = Menu::all();

        return view('menus.index', compact('menus', 'categories'));
    }

    	 public function show(Menu $menu)
    {
         $interested = Menu::where('id', '!=', $menu)->get()->random(2);
        return view('menus.show', compact('menu','interested'));
        
    }

}
