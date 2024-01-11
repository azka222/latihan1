<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
class CarsController extends Controller
{
    public function showAll(){
        return view('cars', [
            "title" => "All Cars",
            "cars" => Cars::all()
        ]);
    }

    public function showModel(Cars $car){
        return view('carModel', [
            "title" => $car->carModel,
            "car" => $car
        ]);
    }

    public function showCategory(Cars $car){
        $availableCategory = Cars::pluck('category_id')->toArray();
        if(in_array($car->category_id, $availableCategory)){
            $categoryCars = Cars::where('category_id', $car->category_id)->get();
        }
        return view('carCategory', [
            "title" => $car->category->nameCategory,
            "car_category" => $categoryCars,
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


