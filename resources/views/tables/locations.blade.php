
@extends('adminlte::page')

@section('title', 'Location')

@section('content_header')
    <h1>Locations</h1>
@stop

{{-- @extends('layouts.app') --}}

@section('content')
    <div class="row justify-content-center table-responsive">
        <table class="table">
            <thead class="table-info">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Location</th>
                <th scope="col">Beach</th>
                <th scope="col">Longitude</th>
                <th scope="col">Latitude</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($locations as $location)
                    <tr>
                        <td scope="row">{{$location->id }}</td>
                        <td scope="row">{{$location->location_name}}</td>
                        <td scope="row">{{$location->beach_name}}</td>
                        <td scope="row">{{$location->longitude}}</td>
                        <td scope="row">{{$location->latitude}}</td>
                    <td>
                        @csrf
                        @method('delete')
                        <a class="btn btn-danger btn-sm" href="/locations/delete/{{ $location->id }}">Delete</a>
                    </td> 
                    </tr>
                    @endforeach
            </tbody>
          </table>
          <div class=" d-flex justify-content-center">{{ $locations->links() }}</div>

    </div>


    <form method="POST" action="{{ route('location.store') }}" enctype="multipart/form-data">
 
        @csrf
        {{ method_field('POST') }}
    
            <div class="card border-primary text-center" style="max-width: 40rem;margin: 0 auto; float: none;">
                <div class="card-header">Add Location</div>
                    <div class="card-body text-primary">
                   
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Location Name" id="location" name="location">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Beach Name" id="beach" name="beach">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Latitude" id="latitude" name="latitude" min="-91" max="91">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Longitude" id="longitude" name="longitude" min="-181" max="181">
                            </div>
                        </div>

                        <div class="col-auto my-1">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                     
                    </div>
                </div>
            </div>
     
</form>

@endsection