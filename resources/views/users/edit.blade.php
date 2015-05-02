@extends('app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>User / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{$user->id}}"/>

                <div class="form-group">
                     <label for="name">NAME</label>
                     <input type="text" name="name" class="form-control" value="{{$user->name}}"/>
                </div>
                <div class="form-group">
                     <label for="display_name">Email</label>
                     <input type="email" name="email" class="form-control" value="{{$user->email}}"/>
                </div>
                <a class="btn btn-default" href="{{ route('users.index') }}">Back</a>
                <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>
</div>
@endsection