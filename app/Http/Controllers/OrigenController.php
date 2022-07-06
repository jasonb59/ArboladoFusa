<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Origen;

class OrigenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Odatos = Origen::all();
        return view('CRUDOrigen.index')->with('Odatos',$Odatos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUDOrigen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Odatos = new Origen();

        $Odatos->id =$request->get('id');
        $Odatos->Nom_Origen=$request->get('Nom_Origen');

        $Odatos->save();

        return redirect('/origens');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Origen  $origen
     * @return \Illuminate\Http\Response
     */
    public function show(Origen $origen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Origen  $origen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Odato = Origen::find($id);
        return view('CRUDOrigen.edit')->with('Odato',$Odato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Origen  $origen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $Odato = Origen::find($id);

        $Odato->id =$request->get('id');
        $Odato->Nom_Origen=$request->get('Nom_Origen');

        $Odato->save();

        return redirect('/origens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Origen  $origen
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $Odato = Origen::find($id);
        $Odato->delete();
        return redirect('/origens');
    }
}
