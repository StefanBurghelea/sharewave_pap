
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
                        @csrf
                        @method('delete')
                        <a class="btn btn-danger btn-sm" href="/posts/delete/{{ $post->id }}">Delete</a>
                    </td> 
                    </tr>
                    @endforeach
            </tbody>
          </table>
          <div class=" d-flex justify-content-center">{{ $posts->links() }}</div>

          <br>
          <br>
          

          <div class="card border-primary text-center" style="max-width: 40rem;margin: 0 auto; float: none;">
            <div class="card-header">Posts</div>
            <div class="card-body text-primary">
            <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Photo</label><br>
              <input type="file" name="file" >
            </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Caption">
              </div>
              <div class="col">
                <input type="number" class="form-control" placeholder="Rating">
              </div>
            </div>

            <div class="row">
              <div class="col">
              <label for="exampleFormControlInput1">Location</label>
              <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>              
              </div>
              <div class="col">
              <label for="exampleFormControlInput1">User</label>
              <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
              </select>              
              </div>
            </div>
            
            <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
          </form>
            </div>
          </div>

          

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
