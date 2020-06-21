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
}
