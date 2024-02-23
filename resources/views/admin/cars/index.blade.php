@extends('layouts.admin')

@section('content')
<div class="rightMain px-3 overflow-y-scroll ">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center ">
                <h2 class="fs-4 my-4 px-3 ">
                    {{ __('My cars') }}
                </h2>
        
                <a class="btn btn-sm btn-primary mx-3" href="{{ route('admin.cars.create') }}">
                    <i class="fa-solid fa-car-side px-1"></i>
                    Add car
                </a>
        
            </div>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">model</th>
                        <th scope="col">brand</th>
                        <th scope="col">year</th>
                        <th scope="col">description</th>
                        <th class="text-center" scope="col">command</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car)
                        <tr>
                            <th scope="row">{{ $car['id'] }}</th>
                            <td>{{ $car['model'] }}</td>
                            <td>{{ $car['brand'] }}</td>
                            <td>{{ $car['year'] }}</td>
                            <td>{{ Str::limit($car['description'], 50) }}</td>
                            <td class="d-flex justify-content-center ">
                                <a href="{{ route('admin.cars.show', ['car' => $car->slug]) }}" class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-eye fa-xs"></i>
                                </a>
                                <a href="{{route('admin.cars.edit', $car->slug) }}" class="btn btn-sm btn-warning mx-2 ">
                                    <i class="fa-solid fa-pen-to-square fa-xs"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="fa-solid fa-trash-can fa-xs"></i>
                                </a>
                                    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
