@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Homes / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('homes.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('name')) has-error @endif">
                       <label for="name-field">Name</label>
                    <input type="text" id="name-field" name="name" class="form-control" value="{{ old("name") }}"/>
                       @if($errors->has("name"))
                        <span class="help-block">{{ $errors->first("name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('garage')) has-error @endif">
                       <label for="garage-field">Garage</label>
                    <input type="text" id="garage-field" name="garage" class="form-control" value="{{ old("garage") }}"/>
                       @if($errors->has("garage"))
                        <span class="help-block">{{ $errors->first("garage") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('price')) has-error @endif">
                       <label for="price-field">Price</label>
                    <input type="text" id="price-field" name="price" class="form-control" value="{{ old("price") }}"/>
                       @if($errors->has("price"))
                        <span class="help-block">{{ $errors->first("price") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('phone')) has-error @endif">
                       <label for="phone-field">Phone</label>
                    <input type="text" id="phone-field" name="phone" class="form-control" value="{{ old("phone") }}"/>
                       @if($errors->has("phone"))
                        <span class="help-block">{{ $errors->first("phone") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('address')) has-error @endif">
                       <label for="address-field">Address</label>
                    <input type="text" id="address-field" name="address" class="form-control" value="{{ old("address") }}"/>
                       @if($errors->has("address"))
                        <span class="help-block">{{ $errors->first("address") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('x_coordinate')) has-error @endif">
                       <label for="x_coordinate-field">X_coordinate</label>
                    <input type="text" id="x_coordinate-field" name="x_coordinate" class="form-control" value="{{ old("x_coordinate") }}"/>
                       @if($errors->has("x_coordinate"))
                        <span class="help-block">{{ $errors->first("x_coordinate") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('y_coordinate')) has-error @endif">
                       <label for="y_coordinate-field">Y_coordinate</label>
                    <input type="text" id="y_coordinate-field" name="y_coordinate" class="form-control" value="{{ old("y_coordinate") }}"/>
                       @if($errors->has("y_coordinate"))
                        <span class="help-block">{{ $errors->first("y_coordinate") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('image_one')) has-error @endif">
                       <label for="image_one-field">Image_one</label>
                    <input type="text" id="image_one-field" name="image_one" class="form-control" value="{{ old("image_one") }}"/>
                       @if($errors->has("image_one"))
                        <span class="help-block">{{ $errors->first("image_one") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('image_two')) has-error @endif">
                       <label for="image_two-field">Image_two</label>
                    <input type="text" id="image_two-field" name="image_two" class="form-control" value="{{ old("image_two") }}"/>
                       @if($errors->has("image_two"))
                        <span class="help-block">{{ $errors->first("image_two") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('image_three')) has-error @endif">
                       <label for="image_three-field">Image_three</label>
                    <input type="text" id="image_three-field" name="image_three" class="form-control" value="{{ old("image_three") }}"/>
                       @if($errors->has("image_three"))
                        <span class="help-block">{{ $errors->first("image_three") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('descripcion')) has-error @endif">
                       <label for="descripcion-field">Descripcion</label>
                    <input type="text" id="descripcion-field" name="descripcion" class="form-control" value="{{ old("descripcion") }}"/>
                       @if($errors->has("descripcion"))
                        <span class="help-block">{{ $errors->first("descripcion") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('homes.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
