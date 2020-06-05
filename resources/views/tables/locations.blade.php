
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

@endsection