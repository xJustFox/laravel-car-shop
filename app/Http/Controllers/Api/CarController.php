<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('brand', 'optional')->paginate(6);

        return response()->json([
            'succes' => true,
            'results' => $cars
        ]);
    }
}
