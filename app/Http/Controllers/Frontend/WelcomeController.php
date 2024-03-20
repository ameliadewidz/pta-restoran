<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // $specials = Category::where('name', 'specials')->firstOrfail();
        $menus = Menu::all()->take(3);

        return view('welcome', compact('menus'));
    }
    public function thankyou()
    {
        return view('thankyou');
    }
}
