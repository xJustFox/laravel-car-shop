@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <h2 class="text-center">Add a New Car</h2>
            </div>
            <div class="col-12">
                <form class="row g-3" action="{{ route('admin.cars.store') }}" method="POST">
                    @csrf

                    <div class="col-6">
                        <div class="col-12">
                            <label for="model" class="form-label">Car Model:</label>
                            <input type="text" class="form-control" id="model" placeholder="Insert car model...">
                            @error('model')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="brand" class="form-label">Car Brand:</label>
                            <input type="text" class="form-control" id="brand" placeholder="Insert car brand...">
                            @error('brand')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="year" class="form-label">Car Year:</label>
                            <input class="form-control" type="number" min="1900" max="2099" step="1" name="year" id="year" />
                        </div>
                        <div class="col-12">
                            <label for="color" class="form-label">Color:</label>
                            <input type="text" class="form-control" id="color" placeholder="Insert color...">
                            @error('color')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="kilometers" class="form-label">Kilometers</label>
                            <input type="text" class="form-control" id="color" placeholder="Insert kilometers...">
                            @error('kilometers')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="col-12">
                            <label for="price" class="form-label">Sell Price:</label>
                            <div class="input-group">
                                <span class="input-group-text">€</span>
                                <input type="text" class="form-control" id="price" aria-label="Amount (to the nearest euro)">
                                <span class="input-group-text">.00</span>
                            </div>
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="transmission" class="form-label">Transmission:</label>
                            <input type="text" class="form-control" id="transmission" placeholder="Insert car transmission...">
                            @error('transmission')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="fuel_type" class="form-label">Fuel Type:</label>
                            <input type="text" class="form-control"  name="fuel_type" id="fuel_type" placeholder="Insert the type of fuel...">
                            @error('fuel_type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="engine_size" class="form-label">Engine Size:</label>
                            <input type="text" class="form-control" id="engine_size" placeholder="Insert engine size...">
                            @error('engine_size')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="kilometers" class="form-label">Car description:</label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Add description</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="btn btn-primary">Aggiungi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
