
<!DOCTYPE html>
@extends('layouts.myapp')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <a href="{{url('/clients/create')}}">
                        <button class="btn btn-info"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Nouveau client</button>
                    </a>
                </div>
            </div>

        </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Téléphone</th>


    </tr>
  </thead>
  <tbody>
    @foreach ($clients as $client)

    <tr>
      <th scope="row"><a href="{{url('clients',['id'=>$client->id])}}">{{$client->id}}</a></th>
      <td>{{$client->nom}}</td>
      <td>{{$client->prenom}}</td>
      <td>{{$client->adresse}}</td>
      <td>{{$client->dateN}}</td>
      <td>{{$client->tel}}</td>
    </tr>
    @endforeach;




  </tbody>

</table>
{{$clients->links()}}
@endsection
