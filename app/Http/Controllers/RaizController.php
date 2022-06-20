<?php

namespace App\Http\Controllers;

use App\Models\Raiz;
use Illuminate\Http\Request;

class RaizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Rdatos = Raiz::all();
        return view('CRUDRaiz.index')->with('Rdatos',$Rdatos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUDRaiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Rdatos = new Raiz();

        $Rdatos->id =$request->get('id');
        $Rdatos->Nom_Raiz=$request->get('Nom_Raiz');

        $Rdatos->save();

        return redirect('/raizs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Raiz  $raiz
     * @return \Illuminate\Http\Response
     */
    public function show(Raiz $raiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Raiz  $raiz
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Rdato = Raiz::find($id);
        return view('CRUDRaiz.edit')->with('Rdato',$Rdato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Raiz  $raiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Rdato = Raiz::find($id) ;

        $Rdato->id =$request->get('id');
        $Rdato->Nom_Raiz=$request->get('Nom_Raiz');

        $Rdato->save();

        return redirect('/raizs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Raiz  $raiz
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Odato = Raiz::find($id);
        $Odato->delete();
        return redirect('/raizs');
    }
}
