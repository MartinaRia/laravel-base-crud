@extends('layouts.template')

@section('header-title')
  <h1>{{ $omino['firstname'] }} {{ $omino['lastname'] }}</h1>
@endsection

@section('main-content')
    <div class="omini-list">
      <h4>NAME: </h4>
      <p>{{ $omino['firstname'] }}</p>
      <h4>SURNAME: </h4>
      <p>{{ $omino['lastname'] }}</p>
      <h4>ADDRESS: </h4>
      <p>{{ $omino['address']}} - {{$omino['code']}}, {{$omino['state']}} </p>
      <h4>TELEPHONE NUMBER: </h4>
      <p>{{ $omino['phonenumber'] }}</p>
      <h4>ROLE: </h4>
      <p>{{ $omino['role'] }}</p>
    </div>
    <div class="modification-button flex-container">
      <a href="{{route('destroy', $omino['id'])}}">DELETE THIS OMINO</a>
      <a href="{{route('edit', $omino['id'])}}">EDIT THIS OMINO</a>
    </div>
@endsection
