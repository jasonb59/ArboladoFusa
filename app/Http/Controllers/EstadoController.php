<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Esdatos = Estado::all();
        return view('CRUDEstado.Index')->with('Esdatos',$Esdatos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUDEstado.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Esdatos = new Estado();

        $Esdatos->id =$request->get('id');
        $Esdatos->Nom_Estado=$request->get('Nom_Estado');

        $Esdatos->save();

        return redirect('/estados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Esdato = Estado::find($id);
        return view('CRUDEstado.edit')->with('Esdato',$Esdato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Esdato = Estado::find($id) ;

        $Esdato->id =$request->get('id');
        $Esdato->Nom_Estado=$request->get('Nom_Estado');

        $Esdato->save();

        return redirect('/estados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Esdato = Estado::find($id);
        $Esdato->delete();
        return redirect('/estados');
    }
}
