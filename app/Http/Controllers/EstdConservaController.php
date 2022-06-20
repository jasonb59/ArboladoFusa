<?php

namespace App\Http\Controllers;

use App\Models\EstdConserva;
use Illuminate\Http\Request;

class EstdConservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ECdatos =EstdConserva ::all();
        return view('CRUDEstdConserv.index')->with('ECdatos',$ECdatos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUDEstdConserv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ECdatos = new EstdConserva();

        $ECdatos->id =$request->get('id');
        $ECdatos->Nom_Econservacion=$request->get('Nom_Econservacion');

        $ECdatos->save();

        return redirect('/estd_conservas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstdConserva  $estdConserva
     * @return \Illuminate\Http\Response
     */
    public function show(EstdConserva $estdConserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstdConserva  $estdConserva
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ECdato = EstdConserva::find($id);
        return view('CRUDEstdConserv.edit')->with('ECdato',$ECdato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstdConserva  $estdConserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ECdato =  EstdConserva::find($id);

        $ECdato->id =$request->get('id');
        $ECdato->Nom_Econservacion=$request->get('Nom_Econservacion');

        $ECdato->save();

        return redirect('/estd_conservas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstdConserva  $estdConserva
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ECdato = EstdConserva::find($id);
        $ECdato->delete();
        return redirect('/estd_conservas');
    }
}
