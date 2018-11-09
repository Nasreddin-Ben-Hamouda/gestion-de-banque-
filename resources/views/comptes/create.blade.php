<!DOCTYPE html>
@extends('layouts.myapp')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<h1>Nouveau Compte</h1><br><br>




{!! Form::open(['action'=> 'ComptesController@store'])!!}
{{  Form::label('codeBanq','codeBanq:',['class'=>'label-control']) }}
{{ Form::text('codeBanq',null,['class'=>'form-control','palceholder'=>'Saisir le codeBanq'])}}<br>
{{  Form::label('codeGuichet','codeGuichet:') }}
{{ Form::text('codeGuichet',null,['class'=>'form-control','palceholder'=>'Saisir le codeGuichet'])}}<br>
{{  Form::label('cleRib','cleRib:') }}
{{ Form::text('cleRib',null,['class'=>'form-control','palceholder'=>'Saisir votre cleRib'])}}<br>

{{  Form::label('solde','Solde:') }}
{{ Form::text('solde',null,['class'=>'form-control','palceholder'=>'Saisir votre  Solde'])}}<br>
{{  Form::label('devise','Devise:') }}
{{ Form::text('devise',null,['class'=>'form-control','palceholder'=>'Saisir votre  Devise'])}}<br>
{{  Form::label('codeclient','Code client:') }}
{{ Form::text('client_id',null,['class'=>'form-control','palceholder'=>'Saisir code client'])}}<br>
{{ Form::submit('Enregistrer',['class'=>'form-control btn btn-primary']) }}

{!! Form::close()!!}

@endsection
