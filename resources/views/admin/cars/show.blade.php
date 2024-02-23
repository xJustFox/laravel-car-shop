@extends('layouts.app')

@section('content')
    <section class="rightMain" id="show">
        <div class="container pt-3">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <p>Info Macchina</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->model }}</h5>
                        <p class="card-text">{{ $car->description }}</p>
                        <ul class="list-unstyled">
                            <li>Brand: {{ $car->brand }}</li>
                            <li>Year: {{ $car->year }}</li>
                            <li>Color: {{ $car->color }}</li>
                            <li>Kilometers: {{ $car->kilometers }} km</li>
                            <li>Price: {{ $car->price }} €</li>
                            <li>Transmission: {{ $car->transmission }}</li>
                            <li>Fuel Type: {{ $car->fuel_type }}</li>
                            <li>Engine Size: {{ $car->engine_size }}</li>
                        </ul>
                        <a href="{{ route('admin.cars.index') }}">Torna indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
