<?php

namespace App\Http\Controllers;
use App\OminiModel;

use Illuminate\Http\Request;

class OminiController extends Controller
{

  public function index(){
    $ominiAll = OminiModel::all();

    return view('home', compact('ominiAll'));
  }


  public function show($id){
    $omino = OminiModel::findOrFail($id);

    return view('ominidetails', compact('omino'));
  }


  public function destroy($id){
    $omino = OminiModel::findOrFail($id);
    $omino -> delete();

    return redirect() -> route('home');
  }


  public function store(Request $request){
    $data = $request -> all();
    $omino = new OminiModel;

    $omino -> firstname = $data['firstname'];
    $omino -> lastname = $data['lastname'];
    $omino -> address = $data['address'];
    $omino -> code = $data['code'];
    $omino -> state = $data['state'];
    $omino -> phonenumber = $data['phonenumber'];
    $omino -> role = $data['role'];

    $omino ->save();

    return redirect() -> route ('home');
  }


  public function edit($id){
    $omino = OminiModel::findOrFail($id);

    return view('omino-edit', compact('omino'));
  }


}
