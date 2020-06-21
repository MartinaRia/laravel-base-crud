@extends('layouts.template')

@section('header-title')
  <h1>Tutti gli Omini</h1>
@endsection

@section('main-content')
  @foreach ($ominiAll as $omino)
    <div class="omini-list flex-container">
      <a href="{{route('show', $omino['id'])}}" class="flex-container">
        <h4>NAME: </h4>
        <p>{{ $omino['firstname'] }}</p>
        <h4>SURNAME: </h4>
        <p>{{ $omino['lastname'] }}</p>
      </a>
    </div>
  @endforeach
@endsection
