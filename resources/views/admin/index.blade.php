@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2 class="fs-4 my-4 px-3 ">
                        {{ __('Dashboard') }}
                    </h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem nostrum nesciunt reiciendis fugit molestiae neque ea maxime repudiandae commodi vitae. Consequatur culpa sunt doloremque officia nesciunt sapiente atque nostrum inventore.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
