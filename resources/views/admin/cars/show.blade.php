@extends('layouts.admin')

@section('content')
    <section class="rightMain px-3 overflow-y-scroll" id="show">
        <div class="container">
            <div class="row my-2">
                <div class="col-12 mt-4">
                    <h1 class="text-center">{{ $car->model }}</h1>
                </div>
                <div class="col-6 px-5 mt-4">
                    <section class="info">
                        <h2>Info:</h2>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fa-solid fa-car"></i>
                                <span>Brand:</span> {{ $car->brand ? $car->brand->name : 'non specificato' }}
                            </li>
                            <li>
                                <i class="fa-solid fa-calendar-days"></i>
                                <span>Year:</span> {{ $car->year }}
                            </li>
                            <li>
                                <i class="fa-solid fa-sack-dollar"></i>
                                <span>Price:</span> {{ $car->price }} €
                            </li>
                            <li>
                                <i class="fa-solid fa-car-side"></i>
                                <span>Transmission:</span> {{ $car->transmission }}
                            </li>
                            <li>
                                <i class="fa-solid fa-gas-pump"></i>
                                <span>Fuel Type:</span> {{ $car->fuel_type }}
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-plus"></i>
                                <span>Optional:</span>
                                @forelse ($car->optional as $optional)
                                    {{ $optional->name . ',' }}
                                @empty
                                    Nessuno
                                @endforelse
                            </li>
                        </ul>
                    </section>
                    <section class="descrizione">
                        <h2>Description:</h2>
                        <p>{{ $car->description }}</p>
                    </section>
                    <section class="caratteristiche">
                        <h2>Features:</h2>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fa-solid fa-palette"></i>
                                <span>Color:</span> {{ $car->color }}
                            </li>
                            <li>
                                <i class="fa-solid fa-gauge-high"></i>
                                <span>Kilometers:</span> {{ $car->kilometers }} km
                            </li>
                            <li>
                                <i class="fa-solid fa-gas-pump"></i>
                                <span>Fuel Type:</span> {{ $car->fuel_type }}
                            </li>
                            <li>
                                <i class="fa-solid fa-truck-pickup"></i>
                                <span>Engine Size:</span> {{ $car->engine_size }}
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-6 px-5 mt-5 d-flex flex-column justify-content-between">
                    <div class="img-card">
                        @if ($car->image != null)
                            @if (Str::contains($car->img, 'https'))
                                <img src="{{$car->image}}" alt="{{ $car->name }}" class="img-fluid h-100 w-100">
                            @else
                                <img src="{{ asset('/storage/' . $car->image) }}" alt="{{ $car->name }}" class="img-fluid h-100 w-100">
                            @endif
                        @else
                            <img class="img-fluid h-100 w-100" src="https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg" alt="">
                        @endif
                    </div>
                    <div class="d-flex justify-content-end px-5">
                        <a href="{{ route('admin.cars.edit', $car->slug) }}" class="btn btn-sm my-btn-color mx-2 ">
                            <i class="fa-solid fa-pen-to-square fa-xs"></i>
                            <span>Modifica</span>
                        </a>
                        <button class="btn btn-sm my-btn-color delete-button" data-bs-toggle="modal"
                            data-bs-target="#modal_delete" data-path="cars" data-slug="{{ $car->slug }}">
                            <i class="fa-solid fa-trash-can fa-xs"></i> Elimina
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.modal_delete')
@endsection
