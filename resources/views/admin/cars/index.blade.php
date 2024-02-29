@extends('layouts.admin')

@section('content')
    <div class="rightMain">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center ">
                    <h2 class="fs-4 my-4 px-3 ">
                        {{ __('My cars') }}
                    </h2>

                    <a class="btn btn-sm my-btn-color mx-3" href="{{ route('admin.cars.create') }}">
                        <i class="fa-solid fa-car-side px-1"></i>
                        Add car
                    </a>

                </div>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Model</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Year</th>
                            <th scope="col">Description</th>
                            <th class="text-center" scope="col">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <th scope="row">{{ $car['id'] }}</th>
                                <td>{{ $car['model'] }}</td>
                                {{-- inserire brand --}}
                                <td></td>
                                <td>{{ $car['year'] }}</td>
                                <td>{{ Str::limit($car['description'], 50) }}</td>
                                <td class="d-flex justify-content-center ">
                                    <a href="{{ route('admin.cars.show', ['car' => $car->slug]) }}"
                                        class="btn btn-sm my-btn-color">
                                        <i class="fa-solid fa-eye fa-xs"></i>
                                    </a>
                                    <a href="{{ route('admin.cars.edit', $car->slug) }}"
                                        class="btn btn-sm my-btn-color mx-2 ">
                                        <i class="fa-solid fa-pen-to-square fa-xs"></i>
                                    </a>

                                    <button class="btn btn-sm my-btn-color delete-button" data-bs-toggle="modal" data-bs-target="#modal_delete" data-path="cars" data-slug="{{ $car->slug }}">
                                        <i class="fa-solid fa-trash-can fa-xs"></i>
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('partials.modal_delete')
@endsection
