<!DOCTYPE html>
@extends('layouts.myapp')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<h1>versement</h1><br><br>




{!! Form::open(['action'=> 'ComptesController@versement1'])!!}

{{  Form::label('codeclient','criditer le compte numéro :') }}
{{ Form::text('id1',null,['class'=>'form-control','palceholder'=>'Saisir code client'])}}<br>
{{  Form::label('codeclient','debiter le compte numéro :') }}
{{ Form::text('id2',null,['class'=>'form-control','palceholder'=>'Saisir code client'])}}<br>
{{  Form::label('solde','Solde:') }}
{{ Form::text('solde',null,['class'=>'form-control','palceholder'=>'Saisir le solde'])}}<br>
{{ Form::submit('Enregistrer',['class'=>'form-control btn btn-primary']) }}

{!! Form::close()!!}

@endsection
