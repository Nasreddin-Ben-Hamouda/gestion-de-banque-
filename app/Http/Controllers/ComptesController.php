<?php

namespace App\Http\Controllers;

use App\Comptes;
use Illuminate\Http\Request;

class ComptesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comptes.create');
    }
    public function debit()
    {
        return view('comptes.debit');
    }
    public function credite()
    {
        return view('comptes.credite');
    }
    public function versement()
    {
        return view('comptes.versement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $compte =new Comptes;
      $compte->codeBanq=$request->codeBanq;
      $compte->codeGuichet=$request->codeGuichet;
      $compte->cleRib=$request->cleRib;
      $compte->solde=$request->solde;
      $compte->devise=$request->devise;
      $compte->client_id=$request->client_id;
      $compte->save();
      return Redirect('/services')->with('success','Compte ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comptes  $comptes
     * @return \Illuminate\Http\Response
     */
    public function show(Comptes $comptes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comptes  $comptes
     * @return \Illuminate\Http\Response
     */
    public function edit(Comptes $comptes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comptes  $comptes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


    }
    public function criditer(Request $request)
    {
        $compte=Comptes::find($request->id);
        $compte->solde-=$request->solde;
        $compte->save();
        return Redirect('/services')->with('success','compte mdifier');

    }
    public function debiter(Request $request)
    {
        $compte1=Comptes::find($request->id1);
        $compte1->solde+=$request->solde;
        $compte1->save();
        return Redirect('/services')->with('success','compte mdifier');

    }
    public function versement1(Request $request)
    {

        $compte=Comptes::find($request->id1);
        $compte->solde-=$request->solde;
        $compte->save();
        $compte1=Comptes::find($request->id2);
        $compte1->solde+=$request->solde;
        $compte1->save();
        return Redirect('/services')->with('success','compte mdifier');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comptes  $comptes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comptes $comptes)
    {
        //
    }
}
