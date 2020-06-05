
@extends('adminlte::page')

@section('title', 'Votes')

@section('content_header')
    <h1>Votes</h1>
@stop

{{-- @extends('layouts.app') --}}

@section('content')
    <div class="row justify-content-center table-responsive">
        <table class="table">
            <thead class="table-info">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Vote Direction</th>
                <th scope="col">ID Post</th>
                <th scope="col">ID User</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($votes as $vote)
                    <tr>
                        <td scope="row">{{$vote->id }}</td>
                        <td scope="row">{{$vote->vote_direction}}</td>
                        <td scope="row">{{$vote->id_post}}</td>
                        <td scope="row">{{$vote->id_user}}</td>
                    <td>
                        @csrf
                        @method('delete')
                        <a class="btn btn-danger btn-sm" href="/votes/delete/{{ $vote->id }}">Delete</a>
                    </td> 
                    </tr>
                    @endforeach
            </tbody>
          </table>

          <div class=" d-flex justify-content-center">{{ $votes->links() }}</div>

    </div>

@endsection