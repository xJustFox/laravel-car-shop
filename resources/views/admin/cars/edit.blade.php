@extends('layouts.admin')

@section('content')
    <div class="rightMain">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <div class="col-12">
                            <h2 class="fs-4 my-4 px-3 ">
                                Modify car
                            </h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form class="row g-3" action="{{ route('admin.cars.update', $car->slug) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-6">

                                        <div class="col-12 py-2">
                                            <label for="model" class="form-label">Car Model:</label>
                                            <input name="model" type="text" class="form-control form-control-sm"
                                                id="model" placeholder="Insert car model..."
                                                value="{{ $car->model }}">
                                            @error('model')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 py-2">
                                            <label for="color" class="form-label">Color:</label>
                                            <input name="color" type="text" class="form-control form-control-sm"
                                                id="color" placeholder="Insert color..." value="{{ $car->color }}">
                                            @error('color')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 py-2">
                                            <label for="kilometers" class="form-label">Kilometers</label>
                                            <input name="kilometers" type="number" class="form-control form-control-sm"
                                                id="kilometers" placeholder="Insert kilometers..."
                                                value="{{ $car->kilometers }}">
                                            @error('kilometers')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="col-12 py-2">
                                            <label for="brand_id" class="form-label">Car Brand:</label>
                                            <select name="brand_id"
                                                class="form-select form-select-sm  @error('brand_id') is-invalid border-danger @enderror"
                                                id="brand_id" placeholder="Choose a brand...">

                                                <option value="{{ old('brand_id') }}" selected>Select a brand...</option>
                                                @foreach ($brands as $brand)
                                                    <option value="{{ $brand->id }} @selected($brand->id == old('brand_id', $car->name ? $car->brand->id : ''))">
                                                        {{ $brand->name }}</option>
                                                @endforeach

                                            </select>
                                            @error('brand_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                
                                        <div class="col-12 py-2">
                                            <label for="year" class="form-label">Car Year:</label>
                                            <input class="form-control form-control-sm" b="number" min="1900"
                                                max="2099" step="1" name="year" id="year"
                                                value="{{ $car->year }}" />
                                        </div>

                                        <div class="col-12 py-2">
                                            <label for="price" class="form-label">Sell Price:</label>
                                            <div class="input-group input-group-sm ">
                                                <span class="input-group-text">€</span>
                                                <input name="price" type="number" class="form-control form-control-sm"
                                                    id="price" aria-label="Amount (to the nearest euro)"
                                                    value="{{ $car->price }}">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                            @error('price')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex">

                                        <div class="col-4">
                                            <label for="transmission" class="form-label">Transmission:</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select form-select-sm" name="transmission"
                                                    id="transmission">
                                                    <option selected>Choose...</option>
                                                    <option value="Manual" @selected($car->transmission == $car->transmission ? 'Manual' : '')>Manual</option>
                                                    <option value="Automatic" @selected($car->transmission == $car->transmission ? 'Automatic' : '')>Automatic
                                                    </option>
                                                </select>
                                            </div>
                                            @error('transmission')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-4 px-3">
                                            <label for="fuel_type" class="form-label">Fuel Type:</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select form-select-sm" name="fuel_type" id="fuel_type">
                                                    <option selected>Choose...</option>
                                                    <option value="Gasoline" @selected($car->fuel_type == $car->fuel_type ? 'Gasoline' : '')> Gasoline</option>
                                                    <option value="Electric" @selected($car->fuel_type == $car->fuel_type ? 'Electric' : '')>Electric</option>
                                                    <option value="Diesel" @selected($car->fuel_type == $car->fuel_type ? 'Diesel' : '')>Diesel</option>
                                                    <option value="Hybrid" @selected($car->fuel_type == $car->fuel_type ? 'Hybrid' : '')>Hybrid</option>
                                                    <option value="Plugin-hybrid" @selected($car->fuel_type == $car->fuel_type ? 'Plugin-hybrid' : '')>
                                                        Plugin-hybrid</option>
                                                    <option value="Natural-gas" @selected($car->fuel_type == $car->fuel_type ? 'Natural-gas' : '')>Natural-gas
                                                    </option>
                                                </select>
                                            </div>
                                            @error('fuel_type')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-4">
                                            <label for="engine_size" class="form-label ">Engine Size:</label>
                                            <input name="engine_size" step=".01" type="number"
                                                class="form-control form-control-sm" id="engine_size"
                                                value="{{ $car->engine_size }}">
                                            @error('engine_size')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-12">
                                        <label class="form-label my-label">Car Optionals</label>
                                        <div>
                                            @foreach ($optionals as $optional)
                                                <div class="form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="optionals[]"
                                                        id="opt-{{ $optional->id }}" value="{{ $optional->id }}"
                                                        {{ $car->optional->contains($optional->id) ? 'checked' : '' }}>
                                                    <label for=""
                                                        class="form-check-label">{{ $optional->name }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="image" class="form-label ">Immagine di copertina</label>
                                        <input type="file" name="image" id="image" class="form-control"
                                            value="{{ old('image') }}">
                                    </div>

                                    <div class="col-12">
                                        <label for="description" class="form-label">Car description:</label>
                                        <div class="form-floating">
                                            <textarea name="description" class="form-control form-control-sm" placeholder="Leave a comment here"
                                                id="floatingTextarea2" style="height: 100px">{{ $car->description }}</textarea>
                                            <label for="floatingTextarea2">Add description</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-sm my-btn-color float-end">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
