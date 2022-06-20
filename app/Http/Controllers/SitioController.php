<?php

namespace App\Http\Controllers;

use App\Models\Sitio;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sdatos = Sitio::all();
        return view('CRUDSitio.index')->with('Sdatos',$Sdatos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUDSitio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Sdatos = new Sitio();

        $Sdatos->id =$request->get('id');
        $Sdatos->Nom_Sitio=$request->get('Nom_Sitio');

        $Sdatos->save();

        return redirect('/sitios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sitio  $sitio
     * @return \Illuminate\Http\Response
     */
    public function show(Sitio $sitio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sitio  $sitio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Sdato = Sitio::find($id);
        return view('CRUDSitio.edit')->with('Sdato',$Sdato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sitio  $sitio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Sdato = Sitio::find($id) ;

        $Sdato->id =$request->get('id');
        $Sdato->Nom_Sitio=$request->get('Nom_Sitio');

        $Sdato->save();

        return redirect('/sitios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sitio  $sitio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Sdato = Sitio::find($id);
        $Sdato->delete();
        return redirect('/sitios');
    }
}
