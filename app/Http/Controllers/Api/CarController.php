<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function show($slug)
    {
        $car = Car::with('brand', 'optional')->where('slug', $slug)->first();

        return response()->json([
            'succes' => true,
            'results' => $car,
        ]);
    }

    public function brand_cars($slug)
    {
        $cars = DB::table('cars')
            ->join('brands', 'brands.id', '=', 'cars.brand_id')
            ->select('cars.*', 'brands.slug as brandSlug')
            ->where('brands.slug', $slug)
            ->paginate(6);

        return response()->json([
            'succes' => true,
            'results' => $cars,
        ]);
    }
}
