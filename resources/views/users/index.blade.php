@extends('app')

@section('content')
<div class="container">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<h1>All Users</h1>
		@if($users->count())
			{{ $users }}
			<table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Created at</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach ($users as $user)
                		<tr>
                			<td>{{ $user->id }}</td>
                			<td>{{ $user->email }}</td>
                			<td>{{ $user->name }}</td>
                			<td>{{ $user->created_at }}</td>
	                		<td class="text-right">
                            	<a class="btn btn-primary" href="{{ route('users.show', $user->id) }}">View</a>
                            	<a class="btn btn-warning " href="{{ route('users.edit', $user->id) }}">Edit</a>
                            	<form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                        	</td>
                		</tr>
                	@endforeach
                </tbody>
             </table>
		@else
			There is no users
		@endif
	</div>
</div>

@endsection