<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
      $titre="welcome";
      return view('welcome',compact('titre'));

    }
    public function about()
    {
      $titre="about";
      return view('about')->with('titre',$titre);

    }

    public function services()
    {

    $data=array('titre'=>'services','listeservice'=>['création compte','versement','retrait','transfer dargent']);
      return view('services')->with($data);

    }
    public function create()
    {

      return view('clients.create');

    }
    public function message()
    {
        return view('layouts.message');
        
    }
}
