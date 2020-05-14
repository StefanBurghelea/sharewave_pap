
@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <div class="row justify-content-center">
        <h1>BackOffice</h1>
    </div>
@stop

{{-- @extends('layouts.app') --}}

@section('content')

<div class="row">
<div class="col-6 col-md-4">      <div class="small-box bg-red">
        <div class="inner">
          <h3>Ver Users</h3>
          <p  style="color: red "> - </p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="tables/users" class="small-box-footer">Ver Utilizadores <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-6 col-md-4">      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>Ver Posts</h3>
          <p  style="color: yellow "> - </p>
        </div>
        <div class="icon">
          <i class="fa fa-paper-plane"></i>
        </div>
        <a href="tables/posts" class="small-box-footer">Ver Posts <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-6 col-md-4">      
    <div class="small-box bg-purple">
        <div class="inner">
          <h3>Ver Locations</h3>
          <p  style="color: purple "> - </p>
        </div>
        <div class="icon">
          <i class="fa fa-map-marker"></i>
        </div>
        <a href="tables/locations" class="small-box-footer">Ver Locations <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-6 col-md-4">      <div class="small-box bg-blue">
        <div class="inner">
          <h3>Ver Comments</h3>
          <p   style="color: blue "> - </p>
        </div>
        <div class="icon">
          <i class="fa fa-comment"></i>
        </div>
        <a href="tables/comments" class="small-box-footer">Ver Comments <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-6 col-md-4">      <div class="small-box bg-green">
        <div class="inner">
          <h3>Ver Votes</h3>
          <p   style="color: green "> - </p>
        </div>
        <div class="icon">
          <i class="fa fa-check-square"></i>
        </div>
        <a href="tables/comments" class="small-box-footer">Ver Votes <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-6 col-md-4">      <div class="small-box bg-pink">
        <div class="inner">
          <h3>Ver Rewards</h3>
          <p   style="color: pink "> - </p>
        </div>
        <div class="icon">
          <i class="fa fa-shopping-bag"></i>
        </div>
        <a href="tables/comments" class="small-box-footer">Ver Rewards <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
    

@endsection
