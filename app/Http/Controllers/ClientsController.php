<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Client;
use \App\Http\Requests\ClientsRequest;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('id')->paginate(10);
        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /* public function validate(){
      $validate=$this->validate($request,[
         'title'=>'required|unique:posts|max:255',
         'body'=>'required',
       ]);
       return view('clients.create',compact('$validate'));
     }*/
    public function store(ClientsRequest $request)
    {

      $client=new Client;
      $client->nom=$request->nom;
      $client->prenom=$request->prenom;
      $client->adresse=$request->adresse;
      $client->dateN=$request->dateN;
      $client->tel=$request->tel;
      $client->save();
      return Redirect('clients')->with('success','Client ajouté');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $show=Client::find($id);
      return view('clients.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client=Client::find($id);
       return view('clients.edite')->with('client',$client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientsRequest $request, $id)
    {

      $client=Client::find($id);
      $client->nom=$request->nom;
      $client->prenom=$request->prenom;
      $client->adresse=$request->adresse;
      $client->dateN=$request->dateN;
      $client->tel=$request->tel;
      $client->save();
      return Redirect('clients')->with('success','Client mdifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $client=Client::find($id);
      $client->DELETE();
      return Redirect('clients')->with('succes','suppresion avec succes');
    }

}
