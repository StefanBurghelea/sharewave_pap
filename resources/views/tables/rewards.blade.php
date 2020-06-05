
@extends('adminlte::page')

@section('title', 'Rewards')

@section('content_header')
    <h1>Rewards</h1>
@stop

{{-- @extends('layouts.app') --}}

@section('content')
    <div class="row justify-content-center table-responsive">
        <table class="table">
            <thead class="table-info">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Points</th>
                <th scope="col">ID User</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($rewards as $reward)
                    <tr>
                        <td scope="row">{{$reward->id }}</td>
                        <td scope="row">{{$reward->points}}</td>
                        <td scope="row">{{$reward->id_user}}</td>
                    <td>
                        @csrf
                        @method('delete')
                        <a class="btn btn-danger btn-sm" href="/rewards/delete/{{ $reward->id }}">Delete</a>
                    </td> 
                    </tr>
                    @endforeach
            </tbody>
          </table>
          <div class=" d-flex justify-content-center">{{ $rewards->links() }}</div>

    </div>

@endsection