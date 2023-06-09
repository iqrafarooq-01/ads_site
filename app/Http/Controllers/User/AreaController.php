<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Area;

class AreaController extends Controller
{
    public function store(Area $area) {
        //dd($area);
        session()->put('area', $area->slug);

        //redirect to category index
        return redirect()->route('category.index', [$area]);
    }
}
