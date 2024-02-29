@extends('layouts.admin')

@section('content')

    <div class="rightMain">
    @extends('layouts.admin')

@section('content')

    <div class="rightMain">
    <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <div class="col-12">
                            <h2 class="fs-4 my-4 px-3 ">
                                Add new car
                            </h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form class="row g-3" action="{{ route('admin.brands.update', $brand->slug) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-6">
                
                                        <div class="col-12 py-2">
                                            <label for="name" class="form-label">brand name:</label>
                                            <input name="name" type="text" class="form-control form-control-sm" id="name" placeholder="Insert brand name..." value="{{ $brand->name}}">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                
                                            <div class="col-12 py-2">
                                            <label for="price" class="form-label">brand Price:</label>
                                            <div class="input-group input-group-sm ">
                                                <span class="input-group-text">€</span>
                                                <input name="price" type="number" class="form-control form-control-sm" id="price" aria-label="Amount (to the nearest euro)" 
                                                value="{{ $brand->price}}">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                            @error('price')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    
                                        <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-sm my-btn-color float-end">Save</button>
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
    </div>

@endsection