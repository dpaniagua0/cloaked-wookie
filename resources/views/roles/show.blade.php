@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Roles / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$role->id}}</p>
                </div>
                <div class="form-group">
                     <label for="id">ID</label>
                     <p class="form-control-static">{{$role->id}}</p>
                </div>
                    <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$role->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="display_name">DISPLAY_NAME</label>
                     <p class="form-control-static">{{$role->display_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <p class="form-control-static">{{$role->description}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('roles.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('roles.edit', $role->id) }}">Edit</a>
            <form action="#/$role->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection