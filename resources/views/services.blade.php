@extends('layouts.myapp')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<div class="content">
  <div cl&ass="title m-b-md">
    <h2> Nos {{$titre}}</h2>
  </div>
  <p> Les service offerts par cette application sont les suivants:</p>

    <ul class="list-group">

        <li class="list-group-item">  <a href="{{url('/comptes/create')}}">création compte</a></li>
        <li class="list-group-item"> <a href="{{url('/comptes/credite')}}">crediter</a></li>
        <li class="list-group-item"> <a href="{{url('/comptes/debit')}}">debiter</a></li>
        <li class="list-group-item"> <a href="{{url('/comptes/versement')}}">versement</a></li>
    </ul>

</div>

  @endsection
