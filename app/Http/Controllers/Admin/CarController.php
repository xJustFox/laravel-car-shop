<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Optional;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy('updated_at', 'desc')->get();

        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $brands = Brand::all();
        $optionals = Optional::all();
        return view('admin.cars.create', compact('optionals', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        $form_data = $request->all();

        $car = new Car();

        if ($request->hasFile('image')) {
            $img = Storage::disk('public')->put('cars_images', $form_data['image']);
            $form_data['image'] = $img;
        }

        $car->fill($form_data);
        $car->slug = Str::slug($car->model . '-');
        $car->save();

        if ($request->has('optionals')) {
            $car->optional()->attach($form_data['optionals']);
        }

        return redirect()->route('admin.cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('admin.cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {   
        $brands = Brand::all();
        $optionals = Optional::all();
        return view('admin.cars.edit', compact('car', 'optionals','brands'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $form_data = $request->all();

        if ($request->hasFile('image')) {
            if ($car->image != null) {
                Storage::disk('public')->delete($car->image);
            }

            $img = Storage::disk('public')->put('cars_images', $form_data['image']);
            $form_data['image'] = $img;
        }
        
        // $car->fill($form_data);
        
        $car->slug = Str::slug($car->model . '-');
        
        $car->update($form_data);

        if ($request->has('optionals')) {
            $car->optional()->sync($form_data['optionals']);
        } else {
            $car->optional()->sync([]);
        }

        return redirect()->route('admin.cars.index', $car->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('admin.cars.index');
    }
}
