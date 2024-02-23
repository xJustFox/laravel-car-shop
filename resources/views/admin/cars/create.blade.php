@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <h2 class="text-center">Add a New Car</h2>
            </div>
            <div class="col-12">
                <form class="row g-3" action="" method="POST">
                    <div class="col-6">
                        <div class="col-12">
                            <label for="model" class="form-label">Car Model:</label>
                            <input type="text" class="form-control" id="model" placeholder="Insert car model...">
                        </div>
                        <div class="col-12">
                            <label for="brand" class="form-label">Car Brand:</label>
                            <input type="text" class="form-control" id="brand" placeholder="Insert car brand...">
                        </div>
                        <div class="col-12">
                            <label for="year" class="form-label">Car Year:</label>
                            <input class="form-control" type="number" min="1900" max="2099" step="1" name="year" id="year" />
                        </div>
                        <div class="col-12">
                            <label for="color" class="form-label">Color:</label>
                            <input type="text" class="form-control" id="color" placeholder="Insert color...">
                        </div>
                        <div class="col-12">
                            <label for="kilometers" class="form-label">Kilometers</label>
                            <input type="text" class="form-control" id="color" placeholder="Insert kilometers...">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="col-12">
                            <label for="kilometers" class="form-label">Sell Price:</label>
                            <div class="input-group">
                                <span class="input-group-text">€</span>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest euro)">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="transmission" class="form-label">Transmission:</label>
                            <input type="text" class="form-control" id="transmission" placeholder="Insert car transmission...">
                        </div>
                        <div class="col-12">
                            <label for="fuel_type" class="form-label">Fuel Type:</label>
                            <input class="form-control" type="number" min="1900" max="2099" step="1" name="fuel_type" id="fuel_type" />
                        </div>
                        <div class="col-12">
                            <label for="engine_size" class="form-label">Engine Size:</label>
                            <input type="text" class="form-control" id="engine_size" placeholder="Insert engine size...">
                        </div>
                        <div class="col-12">
                            <label for="kilometers" class="form-label">Car description:</label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Add description</label>
                              </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
