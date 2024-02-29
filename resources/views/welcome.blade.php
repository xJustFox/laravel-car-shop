@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <div class="logo_laravel">
            <img src="{{Vite::asset('resources/img/logo.png')}}" alt="" height="100px">
        </div>
        <h1 class="display-5 fw-bold">
            Welcome to The Car Shop
        </h1>

        <p class="col-md-8 fs-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia cumque nobis sed laudantium optio ut quibusdam doloremque eius recusandae quam quas dolor reprehenderit aperiam, rem est tempora molestiae accusamus quaerat.</p>
        <a href="" class="btn btn-primary btn-lg" type="button">Click me!</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis accusamus dolores!</p>
    </div>
</div>
@endsection