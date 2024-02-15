<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
class CarsController extends Controller
{
    public function showAll(){
        return view('cars', [
            "title" => "All Cars",
            "cars" => Cars::with(['category', 'user'])->get()
        ]);
    }

    public function showModel(Cars $car){
        return view('carModel', [
            "title" => $car->carModel,
            "car" => $car
        ]);
    }

    public function showBrand(Cars $car){
        $availableBrand = Cars::pluck('carBrand')->toArray();;
        if (in_array($car->carBrand, $availableBrand)) {
            $brand = Cars::where('carBrand', $car->carBrand)->get();
        }
        return view('carBrand', [
            "title" => $car->carBrand,
            "carBrand" => $brand
        ]);
    }
}

