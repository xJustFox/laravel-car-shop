<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cars.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          
        $car = car::find($id);
        return view('edit', compact('car'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, $id)
    {
            $form_data = $request->all();
            $car = Car::find($id);
            $car->model = $form_data['model'];
            $car->slug = $form_data['slug'];
            $car->brand = $form_data['brand'];
            $car->year = $form_data['year'];
            $car->color = $form_data['color'];
            $car->kilometers = $form_data['kilometers'];
            $car->price = $form_data['price'];
            $car->transmission = $form_data['transmission'];
            $car->fuel_type = $form_data['fuel_type'];
            $car->engine_size = $form_data['engine_size'];
            $car->description = $form_data['description'];
    
            $car-> update();
    
            return redirect()->route('admin.cars.index',['car' => $car]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
