<?php

namespace App\Http\Controllers;

use App\Models\Arbolado;
use Illuminate\Http\Request;

class ArboladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Adatos = Arbolado::all();
        return view('CRUDArbolado.index')->with('Adatos',$Adatos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUDArbolado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Adatos = new Arbolado();

        $Adatos->id =$request->get('id');
        $Adatos->Localizacion=$request->get('Localizacion');
        $Adatos->Este=$request->get('Este');
        $Adatos->Norte=$request->get('Norte');
        $Adatos->Nom_Cientifico=$request->get('Nom_Cientifico');
        $Adatos->Familia=$request->get('Familia');
        $Adatos->Nom_Comun=$request->get('Nom_Comun');
        $Adatos->Origen=$request->get('Origen');
        $Adatos->Econservacion=$request->get('Econservacion');
        $Adatos->Habito=$request->get('Habito');
        $Adatos->Tipo=$request->get('Tipo');
        $Adatos->Sitio=$request->get('Sitio');
        $Adatos->Estado=$request->get('Estado');
        $Adatos->Raiz=$request->get('Raiz');
        $Adatos->DAP_m=$request->get('DAP_m');
        $Adatos->Alt_Total=$request->get('Alt_Total');
        $Adatos->Alt_Comercial=$request->get('Alt_Comercial');
        $Adatos->Grados=$request->get('Grados');
        $Adatos->Norte_Sur=$request->get('Norte_Sur');
        $Adatos->Este_Oeste=$request->get('Este_Oeste');
        $Adatos->Ramas_Secas=$request->get('Ramas_Secas');
        $Adatos->Hongos=$request->get('Hongos');
        $Adatos->Insectos=$request->get('Insectos');
        $Adatos->Nidos=$request->get('Nidos');
        $Adatos->Abejas=$request->get('Abejas');
        $Adatos->Plantas=$request->get('Plantas');
        $Adatos->Epifetas=$request->get('Epifetas');
        $Adatos->Moluscos=$request->get('Moluscos');
        $Adatos->Tumores=$request->get('Tumores');
        $Adatos->Agallas=$request->get('Agallas');
        $Adatos->Aracnidos=$request->get('Aracnidos');
        $Adatos->U_Muestral=$request->get('U_Muestral');
        $Adatos->Area_Basal=$request->get('Area_Basal');
        $Adatos->Vol_Total=$request->get('Vol_Total');
        $Adatos->Vol_Comercial=$request->get('Vol_Comercial');
        $Adatos->Bv_t=$request->get('Bv_t');
        $Adatos->BIOM_INDIV_Tn=$request->get('BIOM_INDIV_Tn');
        $Adatos->CARB_INDIV_Tn=$request->get('CARB_INDIV_Tn');
        $Adatos->Categ_diame=$request->get('Categ_diame');
        $Adatos->Estrato=$request->get('Estrato');
        $Adatos->Observaciones=$request->get('Observaciones');

        $Adatos->save();

        return redirect('/arbolados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arbolado  $arbolado
     * @return \Illuminate\Http\Response
     */
    public function show(Arbolado $arbolado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arbolado  $arbolado
     * @return \Illuminate\Http\Response
     */
    public function edit(Arbolado $arbolado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arbolado  $arbolado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arbolado $arbolado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arbolado  $arbolado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arbolado $arbolado)
    {
        //
    }
}
