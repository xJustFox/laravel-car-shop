@extends('layouts.app')

@section('content')
<div class="rightMain">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Cars') }}
    </h2>
    <a href="{{route('admin.dashboard')}}">dashboard</a>
</div>
@endsection
