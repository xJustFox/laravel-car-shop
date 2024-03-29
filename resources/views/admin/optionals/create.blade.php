@extends('layouts.admin')

@section('content')

    <div class="rightMain">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <div class="col-12">
                            <h2 class="fs-4 my-4 px-3 ">
                                Add new optional
                            </h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form class="row g-3" action="{{ route('admin.optionals.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-12">

                                        <div class="col-12 py-2">
                                            <label for="name" class="form-label">Optional Name:</label>
                                            <input name="name" type="text" class="form-control form-control-sm" id="name" placeholder="Insert optional name..." value="{{ old('name') }}" required>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                
                                        <div class="col-12 py-2">
                                            <label for="price" class="form-label">Optional Price:</label>
                                            <div class="input-group input-group-sm ">
                                                <span class="input-group-text">€</span>
                                                <input name="price" type="number" class="form-control form-control-sm" id="price" aria-label="Amount (to the nearest euro)" 
                                                value="{{ old('price') }}">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                            @error('price')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="py-2">
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
