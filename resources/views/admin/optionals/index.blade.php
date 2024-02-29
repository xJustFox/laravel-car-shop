@extends('layouts.admin')

@section('content')
    <div class="rightMain">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center ">
                    <h2 class="fs-4 my-4 px-3 ">
                        {{ __('Optionals') }}
                    </h2>

                    <a class="btn btn-sm my-btn-color mx-3" href="{{ route('admin.optionals.create') }}">
                        <i class="fa-solid fa-car-on px-1"></i>
                        Add optional
                    </a>
                </div>
            </div>

            <div class="card-body">
                {{-- CONTENT --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Count</th>
                            <th class="text-center" scope="col">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($optionals as $optional)
                            <tr>
                                <th scope="row">{{ $optional['id'] }}</th>
                                <td>{{ $optional['name'] }}</td>
                                <td>{{ $optional['price'] }}€</td>
                                <td>{{ count($optional->car) }}</td>

                                <td class="d-flex justify-content-center ">
                                    <a href="{{ route('admin.optionals.show', ['optional' => $optional->slug]) }}"
                                        class="btn btn-sm my-btn-color">
                                        <i class="fa-solid fa-eye fa-xs"></i>
                                    </a>
                                    <a href="{{ route('admin.optionals.edit', $optional->slug) }}"
                                        class="btn btn-sm my-btn-color mx-2 ">
                                        <i class="fa-solid fa-pen-to-square fa-xs"></i>
                                    </a>

                                    <button class="btn btn-sm my-btn-color delete-button" data-bs-toggle="modal"
                                        data-bs-target="#modal_delete" data-path="optionals"
                                        data-slug="{{ $optional->slug }}">
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
