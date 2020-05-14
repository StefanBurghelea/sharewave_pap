
@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Posts</h1>
@stop

{{-- @extends('layouts.app') --}}

@section('content')
    <div class="row justify-content-center table-responsive">
        <table class="table">
            <thead class="table-info">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Path</th>
                <th scope="col">Caption</th>
                <th scope="col">Rating</th>
                <th scope="col">Image_size</th>
                <th scope="col">id_location</th>
                <th scope="col">id_user</th>
                <th scope="col">created_at</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td scope="row">{{ $post->id }}</td>
                        <td scope="row"><img src="{{$post->path}}" alt="" height="50px" weight="50px"></td>
                        <td scope="row">{{$post->caption}}</td>
                        <td scope="row">{{$post->rating}}</td>
                        <td scope="row">{{$post->image_size}}</td>
                        <td scope="row">{{$post->id_location}}</td>
                        <td scope="row">{{$post->id_location}}</td>
                        <td scope="row">{{$post->created_at}}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="editar/{{ $post->id }}">Editar</a> 
                        <a class="btn btn-danger btn-sm" href="excluir/{{ $post->id }}">Excluir</a>
                    </td> 
                    </tr>
                    @endforeach
            </tbody>
          </table>
          <div class=" d-flex justify-content-center">{{ $posts->links() }}</div>

          <br>
          <br>

          <!-- <div class="uploadfile">

            <h3>File Upload</h3>

            <form action="{{}}">
                @csrf

                <input type="file" name="file" >

                <input type="submit" class="btn btn-primary">

            </form>

          </div> -->


    </div>

    
@endsection
