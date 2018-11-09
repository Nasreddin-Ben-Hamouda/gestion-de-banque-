
<!DOCTYPE html>
@extends('layouts.myapp')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<br><br>
<div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <a href="{{url('clients')}}">
                        <button class="btn btn-info"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp; Retour</button>
                    </a>
                </div>
            </div>
  </div>
  <br><br><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Modification</th>
      <th scope="col">suppresion</th>

    </tr>
  </thead>
  <tbody>


    <tr>
      <th scope="row">{{$show->id}}</th>
      <td>{{$show->nom}}</td>
      <td>{{$show->prenom}}</td>
      <td>{{$show->adresse}}</td>
      <td>{{$show->dateN}}</td>
      <td>{{$show->tel}}</td>
      <td>

          <a href="{{URL('clients/'.$show->id.'/edit')}}">
            <button class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>Edite</button>
          </a>

       </td>
       <td>


      {!! Form::open(['method'=>'POST','action'=> ['ClientsController@destroy',$show->id]])!!}

<span class="glyphicon glyphicon-trash"></span>
      {{ Form::submit('Delete',['class'=>' btn btn-info ']) }}

      {{ Form::hidden('_method','DELETE ')}}
      {!! Form::close()!!}


      </td>



    </tr>



  </tbody>
</table>
@endsection
