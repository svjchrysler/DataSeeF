@extends('layout')
@section('header')
<div class="page-header">
        <h1>Homes / Show #{{$home->id}}</h1>
        <form action="{{ route('homes.destroy', $home->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('homes.edit', $home->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$home->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="garage">GARAGE</label>
                     <p class="form-control-static">{{$home->garage}}</p>
                </div>
                    <div class="form-group">
                     <label for="price">PRICE</label>
                     <p class="form-control-static">{{$home->price}}</p>
                </div>
                    <div class="form-group">
                     <label for="phone">PHONE</label>
                     <p class="form-control-static">{{$home->phone}}</p>
                </div>
                    <div class="form-group">
                     <label for="address">ADDRESS</label>
                     <p class="form-control-static">{{$home->address}}</p>
                </div>
                    <div class="form-group">
                     <label for="x_coordinate">X_COORDINATE</label>
                     <p class="form-control-static">{{$home->x_coordinate}}</p>
                </div>
                    <div class="form-group">
                     <label for="y_coordinate">Y_COORDINATE</label>
                     <p class="form-control-static">{{$home->y_coordinate}}</p>
                </div>
                    <div class="form-group">
                     <label for="image_one">IMAGE_ONE</label>
                     <p class="form-control-static">{{$home->image_one}}</p>
                </div>
                    <div class="form-group">
                     <label for="image_two">IMAGE_TWO</label>
                     <p class="form-control-static">{{$home->image_two}}</p>
                </div>
                    <div class="form-group">
                     <label for="image_three">IMAGE_THREE</label>
                     <p class="form-control-static">{{$home->image_three}}</p>
                </div>
                    <div class="form-group">
                     <label for="descripcion">DESCRIPCION</label>
                     <p class="form-control-static">{{$home->descripcion}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('homes.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection