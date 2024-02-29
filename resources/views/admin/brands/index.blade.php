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
                {{-- CONTENT --}}
            </div>
        </div>
    </div>
    @include('partials.modal_delete')
@endsection
