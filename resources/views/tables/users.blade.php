
@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

{{-- @extends('layouts.app') --}}

@section('content')
    <div class="row justify-content-center table-responsive">
        <table class="table">
            <thead class="table-info">
              <tr>
                <th scope="col">id</th>
                <th scope="col">UserName</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">FirstName</th>
                <th scope="col">LastName</th>
                <th scope="col">Privileges</th>
                <th scope="col">Created</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td scope="row">{{ $user->id }}</td>
                        <td scope="row">{{$user->name}}</td>
                        <td scope="row">{{$user->email}}</td>
                        <td scope="row">{{$user->password}}</td>
                        <td scope="row">{{$user->firstname}}</td>
                        <td scope="row">{{$user->lastname}}</td>
                        <td scope="row">{{$user->privileges}}</td>
                        <td scope="row">{{$user->created_at}}</td>
                    <td>
                        @csrf
                        @method('delete')
                        <a class="btn btn-danger btn-sm" href="/users/delete/{{ $user->id }}">Delete</a>
                    
                    </td> 
                    </tr>
                    @endforeach
            </tbody>
          </table>
          <div class=" d-flex justify-content-center">{{ $users->links() }}</div>

    </div>

@endsection
