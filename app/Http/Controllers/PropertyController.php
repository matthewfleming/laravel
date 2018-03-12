<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index() {
        $featured = \App\Property::find(2);
        return view('properties', ['featured' => $featured]);
    }

}
