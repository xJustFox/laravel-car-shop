@extends('layouts.app')

@section('content')
<div class="rightMain">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Cars') }}
    </h2>
    <div class="col-12 my-3">
        <button type="button" class="btn btn-primary me-3 "><a class="text-decoration-none text-white" href="{{route('admin.cars.create')}}">Add new car</a></button>
    </div>
    <a href="{{route('admin.dashboard')}}">dashboard</a>
</div>
@endsection
