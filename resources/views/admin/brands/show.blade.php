@extends('layouts.admin')

@section('content')
    <section class="rightMain px-3 overflow-y-scroll">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center ">
                    <h2 class="fs-4 my-4 px-3 ">
                        {{ __('brands:') }} {{ $brand->id }}
                    </h2>
                    <div>
                        <a href="{{ route('admin.brands.edit', $brand->slug) }}" class="btn btn-sm my-btn-color mx-2 ">
                            <i class="fa-solid fa-pen-to-square fa-xs"></i>
                        </a>

                        <button class="btn btn-sm my-btn-color delete-button" data-bs-toggle="modal"
                            data-bs-target="#modal_delete" data-path="brands" data-slug="{{ $brand->slug }}">
                            <i class="fa-solid fa-trash-can fa-xs"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>{{ $brand->name }}</td>
                        <td>{{ $brand->price }}€</td>
                        <td>{{ count($brand->car) }}</td>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    @include('partials.modal_delete')
@endsection
