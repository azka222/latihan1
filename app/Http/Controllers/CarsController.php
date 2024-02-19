<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CarsController extends Controller
{
    public function showAll()
    {
        return view('cars', [
            "title" => "All Cars",
            "cars" => Cars::with(['category', 'user'])->get(),
        ]);
    }

    public function showModel(Cars $car)
    {
        return view('carModel', [
            "title" => $car->carModel,
            "car" => $car,
        ]);
    }

    public function showBrand(Cars $car)
    {
        $brand = Cars::where('carBrand', $car->carBrand)->get();
        return view('carBrand', [
            "title" => $car->carBrand,
            "carBrand" => $brand,
        ]);
    }

    public function addNewCar(Request $request)
    {

    }

    public function showByAuthor(Cars $car)
    {
        $author = Session::get('user');
        $user = $author['id'];
        $showByAuthor = Cars::where('user_id', $user)->get();
        return view('carsAuthor', [
            "title" => "My Cars",
            "carsAuthor" => $showByAuthor,
        ]);
    }
}
