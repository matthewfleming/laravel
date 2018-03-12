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

    public function search(Request $request) {
        $params = [
            'price',
            'bedrooms',
            'bathrooms',
            'garages',
            'storeys'
        ];

        $query = \DB::table('properties');
        foreach($params as $param) {
            $min = $request->input("$param-min");
            if($min) {
                $query->where($param, '>=', $min);
            }
            $max = $request->input("$param-max");
            if($max) {
                $query->where($param, '<=', $max);
            }
        }

        $result = $query->get();
        return response()->json($result);
    }
}
