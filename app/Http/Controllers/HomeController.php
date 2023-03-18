<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Area;

class HomeController extends Controller
{
    public function index()
    {
        // session()->forget('area');
        $areas = Area::get()->toTree();

        //Compact() is used to pass data to any view from DB as an array
        return view('home', compact('areas'));
    }
}
