@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Roles / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('roles.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="id">ID</label>
                     <input type="text" name="id" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="name">NAME</label>
                     <input type="text" name="name" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="display_name">DISPLAY_NAME</label>
                     <input type="text" name="display_name" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <input type="text" name="description" class="form-control" value=""/>
                </div>



            <a class="btn btn-default" href="{{ route('roles.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection