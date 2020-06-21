@extends('layouts.template')

@section('header-title')
  <h1>Edit {{$omino['firstname']}} {{$omino['lastname']}}</h1>
@endsection

@section('main-content')
    <div class="form-edit">

      <h3>EDIT OMINO</h3>
      <br>
      <form action="{{route('update', $omino['id'])}}" method="post">
        @csrf
        @method('POST')

        <input placeholder="Firstname" type="text" name="firstname" value="{{$omino['firstname']}}">
        <input placeholder="Lastname" type="text" name="lastname" value="{{$omino['lastname']}}">
        <input placeholder="Address" type="text" name="address" value="{{$omino['address']}}">
        <input placeholder="Code" type="text" name="code" value="{{$omino['code']}}">
        <input placeholder="State" type="text" name="state" value="{{$omino['state']}}">
        <input placeholder="Phonenumber" type="text" name="phonenumber" value="{{$omino['phonenumber']}}">
        <input placeholder="Role" type="text" name="role" value="{{$omino['role']}}">
        <input type="submit" name="submit" value="UPDATE">

      </form>
    </div>


@endsection
