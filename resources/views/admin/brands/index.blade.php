@extends('layouts.admin')

@section('content')
    <div class="rightMain">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center ">
                    <h2 class="fs-4 my-4 px-3 ">
                        {{ __('Brands') }}
                    </h2>

                    <a class="btn btn-sm my-btn-color mx-3" href="{{ route('admin.brands.create') }}">
                        <i class="fa-solid fa-briefcase px-1"></i>
                        Add brand
                    </a>
                </div>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">Car type</th>
                            <th class="text-center" scope="col">Cars Count</th>
                            <th class="text-center" scope="col">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <th scope="row">{{ $brand['id'] }}</th>
                                <td>{{ $brand['name'] }}</td>
                                <td>{{ $brand['phone_num'] }}</td>
                                <td>{{ $brand['car_type'] }}</td>
                                <td class="text-center">{{ count($brand->cars) }}</td>

                                <td class="d-flex justify-content-center ">
                                    <a href="{{ route('admin.brands.show', ['brand' => $brand->slug]) }}"
                                        class="btn btn-sm my-btn-color">
                                        <i class="fa-solid fa-eye fa-xs"></i>
                                    </a>
                                    <a href="{{ route('admin.brands.edit', $brand->slug) }}"
                                        class="btn btn-sm my-btn-color mx-2 ">
                                        <i class="fa-solid fa-pen-to-square fa-xs"></i>
                                    </a>

                                    <button class="btn btn-sm my-btn-color delete-button" data-bs-toggle="modal"
                                        data-bs-target="#modal_delete" data-path="brands"
                                        data-slug="{{ $brand->slug }}">
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
