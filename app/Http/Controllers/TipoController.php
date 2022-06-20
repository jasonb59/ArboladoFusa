<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tdatos = Tipo::all();
        return view('CRUDTipo.index')->with('Tdatos',$Tdatos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUDTipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Tdatos = new Tipo();

        $Tdatos->id =$request->get('id');
        $Tdatos->Nom_Tipo=$request->get('Nom_Tipo');

        $Tdatos->save();

        return redirect('/tipos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo $tipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Tdato = Tipo::find($id);
        return view('CRUDTipo.edit')->with('Tdato',$Tdato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Tdato = Tipo::find($id) ;

        $Tdato->id =$request->get('id');
        $Tdato->Nom_Tipo=$request->get('Nom_Tipo');

        $Tdato->save();

        return redirect('/tipos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Tdato =Tipo::find($id);
        $Tdato->delete();
        return redirect('/tipos');


    }
}
