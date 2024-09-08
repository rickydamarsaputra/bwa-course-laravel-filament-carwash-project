<?php

namespace App\Http\Controllers;

use App\Models\CarService;
use App\Models\City;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $services = CarService::with(['storeServices'])->get();

        return view('front.index', compact('cities', 'services'));
    }
}
