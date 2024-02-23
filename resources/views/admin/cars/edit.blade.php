@extends('layout.app')


@section('content')


<div class="container">
     <div class="row">
          <div class="col-12">
               <h1 class="d-flex justify-content-center p-5">Modifica Fumetto</h1>

              

               <form action="{{route('admin.cars.update',$car->id)}}" method="post">

                    @csrf
                    @method('PUT')
                    <div class="form-group my-3">
                         <input type="text" name="model" id="model" class="form-control" placeholder="model" required
                              value="{{ $car->model}}">
                    </div>
                    <div class="form-group my-3">
                         <textarea name="description" id="description" class="form-control" rows="9" cols="100"
                              placeholder="description" required>{{ $car->description}}
                         </textarea>
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="slug" id="slug" class="form-control" placeholder="slug" required
                              value="{{ $car->slug}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="brand" id="brand" class="form-control" placeholder="brand" required
                              value="{{ $car->brand}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="year" id="year" class="form-control" placeholder="year" required
                              value="{{ $car->year}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="color" id="color" class="form-control" placeholder="color"
                              required value="{{ $car->color}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="kilometers" id="kilometers" class="form-control" placeholder="kilometers" required
                              value="{{ $car->kilometers}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="price" id="price" class="form-control" placeholder="price"
                              required value="{{ $car->price}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="transmission" id="transmission" class="form-control" placeholder="transmission"
                              required value="{{ $car->transmission}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="fuel_type" id="fuel_type" class="form-control" placeholder="fuel_type"
                              required value="{{ $car->fuel_type}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="engine_size" id="engine_size" class="form-control" placeholder="engine_size"
                              required value="{{ $car->engine_size}}">
                    </div>
                    <div class="form-group my-3">
                         <input type="text" name="description" id="description" class="form-control" placeholder="description"
                              required value="{{ $car->description}}">
                    </div>
                    <div class="form-group my-3">
                         <button class="btn btn-success">salva</button>
                    </div>
               </form>
          </div>
     </div>
</div>
@endsection

<a href="{{route('admin.cars.edit',['comic'=>$comic->id])}}" class="btn btn-primary my-2">modifica</a>