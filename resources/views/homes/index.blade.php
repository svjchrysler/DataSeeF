@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Homes
            <a class="btn btn-success pull-right" href="{{ route('homes.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($homes->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                        <th>GARAGE</th>
                        <th>PRICE</th>
                        <th>PHONE</th>
                        <th>ADDRESS</th>
                        <th>X_COORDINATE</th>
                        <th>Y_COORDINATE</th>
                        <th>IMAGE_ONE</th>
                        <th>IMAGE_TWO</th>
                        <th>IMAGE_THREE</th>
                        <th>DESCRIPCION</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($homes as $home)
                            <tr>
                                <td>{{$home->id}}</td>
                                <td>{{$home->name}}</td>
                    <td>{{$home->garage}}</td>
                    <td>{{$home->price}}</td>
                    <td>{{$home->phone}}</td>
                    <td>{{$home->address}}</td>
                    <td>{{$home->x_coordinate}}</td>
                    <td>{{$home->y_coordinate}}</td>
                    <td>{{$home->image_one}}</td>
                    <td>{{$home->image_two}}</td>
                    <td>{{$home->image_three}}</td>
                    <td>{{$home->descripcion}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('homes.show', $home->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('homes.edit', $home->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('homes.destroy', $home->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $homes->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection