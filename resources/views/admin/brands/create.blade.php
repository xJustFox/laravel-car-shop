@extends('layouts.admin')

@section('content')

<div class="rightMain">
    <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <div class="col-12">
                            <h2 class="fs-4 my-4 px-3 ">
                                Add new brand
                            </h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form class="row g-3" action="{{ route('admin.brands.store') }}" method="POST">
                                    @csrf
                                    <div class="col-6">
                
                                        <div class="col-12 py-2">
                                            <label for="name" class="form-label">brand name:</label>
                                            <input name="name" type="text" class="form-control form-control-sm" id="name" placeholder="Insert brand name..." value="{{ old('name') }}"required>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12 py-2">
                                            <label for="phone_num" class="form-label">brand phone number:</label>
                                            <input name="phone_num" type="text" class="form-control form-control-sm" id="phone_num" placeholder="Insert brand phone num..." 
                                            value="{{ old('phone_num') }}"required>
                                            @error('phone_num')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12 py-2">
                                            <label for="car_type" class="form-label">brand main car type:</label>
                                            <input name="car_type" type="text" class="form-control form-control-sm" id="car_type" placeholder="Insert brand car type..."
                                             value="{{ old('car_type') }}"required>
                                            @error('car_type')
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
