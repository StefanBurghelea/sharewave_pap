
@extends('adminlte::page')

@section('title', 'Comments')

@section('content_header')
    <h1>Comments</h1>
@stop

{{-- @extends('layouts.app') --}}

@section('content')
    <div class="row justify-content-center table-responsive">
        <table class="table">
            <thead class="table-info">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Comment</th>
                <th scope="col">Id Post</th>
                <th scope="col">Id User</th>
                <th scope="col">Created</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <td scope="row">{{$comment->id }}</td>
                        <td scope="row">{{$comment->comment}}</td>
                        <td scope="row">{{$comment->id_post}}</td>
                        <td scope="row">{{$comment->id_user}}</td>
                        <td scope="row">{{$comment->created_at}}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="editar/{{ $comment->id }}">Editar</a> 
                        @csrf
                        @method('delete')
                        <a class="btn btn-danger btn-sm" href="/comments/delete/{{ $comment->id }}">Delete</a>
                    </td> 
                    </tr>
                    @endforeach
            </tbody>
          </table>
          <div class=" d-flex justify-content-center">{{ $comments->links() }}</div>

    </div>

@endsection