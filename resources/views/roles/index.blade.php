@extends('app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Roles</h1>
        </div>


        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>DISPLAY_NAME</th>
                            <th>DESCRIPTION</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td>{{$role->display_name}}</td>
                        <td>{{$role->description}}</td>

                        <td class="text-right">
                            <a class="btn btn-primary" href="{{ route('roles.show', $role->id) }}">View</a>
                            <a class="btn btn-warning " href="{{ route('roles.edit', $role->id) }}">Edit</a>
                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                        </td>
                    </tr>

                    @endforeach

                    </tbody>
                </table>

                <a class="btn btn-success" href="{{ route('roles.create') }}">Create</a>
            </div>
        </div>
    </div>
@endsection