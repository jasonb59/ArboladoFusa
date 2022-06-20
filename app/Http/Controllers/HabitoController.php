<?php

namespace App\Http\Controllers;

use App\Models\Habito;
use Illuminate\Http\Request;

class HabitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Hdatos = Habito::all();
        return view('CRUDHabito.index')->with('Hdatos',$Hdatos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUDHabito.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Hdatos = new Habito();

        $Hdatos->id =$request->get('id');
        $Hdatos->Nom_Habito=$request->get('Nom_Habito');

        $Hdatos->save();

        return redirect('/habitos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habito  $habito
     * @return \Illuminate\Http\Response
     */
    public function show(Habito $habito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habito  $habito
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Hdato = Habito::find($id);
        return view('CRUDHabito.edit')->with('Hdato',$Hdato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habito  $habito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $Hdato = Habito::find($id) ;

        $Hdato->id =$request->get('id');
        $Hdato->Nom_Habito=$request->get('Nom_Habito');

        $Hdato->save();

        return redirect('/habitos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habito  $habito
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Hdato = Habito::find($id);
        $Hdato->delete();
        return redirect('/habitos');
    }
}
