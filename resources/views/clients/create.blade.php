<!DOCTYPE html>
@extends('layouts.myapp')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<h1>Nouveau client</h1><br><br>


  @extends('layouts.message')

{!! Form::open(['action'=> 'ClientsController@store'])!!}
{{  Form::label('nom','Nom:',['class'=>'label-control']) }}
{{ Form::text('nom',null,['class'=>'form-control','palceholder'=>'Saisir le nom'])}}<br>
{{  Form::label('prenom','Prenom:') }}
{{ Form::text('prenom',null,['class'=>'form-control','palceholder'=>'Saisir le prenom'])}}<br>
{{  Form::label('adresse','Adresse:') }}
{{ Form::text('adresse',null,['class'=>'form-control','palceholder'=>'Saisir votre adresse'])}}<br>
{{  Form::label('dateN','Date Naissance:') }}
{{ Form::Date('dateN','\Carbon\Carbon::now()',['class'=>'form-control ','palceholder'=>'Saisir votre date naissance'])}}<br>
{{  Form::label('tel','Téléphone:') }}
{{ Form::text('tel',null,['class'=>'form-control','palceholder'=>'Saisir votre  téléphone'])}}<br>
{{ Form::submit('Enregistrer',['class'=>'form-control btn btn-primary']) }}
{!! Form::close()!!}

@endsection
