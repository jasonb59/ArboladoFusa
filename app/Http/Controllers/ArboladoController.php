<?php

namespace App\Http\Controllers;

use App\Models\Arbolado;
use App\Models\Estado;
use App\Models\Origen;
use App\Models\EstdConserva;
use App\Models\Habito;
use App\Models\Raiz;
use App\Models\Sitio;
use App\Models\Tipo;
use Illuminate\Support\Facades\DB;
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
        $arbolados = DB::table('arbolados')
        ->join('origens', 'origens.id', '=', 'arbolados.Origen_id')
        ->join('estd_conservas','estd_conservas.id','=','arbolados.Econservacion_id')
        ->join('habitos','habitos.id','=','arbolados.Habito_id')
        ->join('tipos','habitos.id','=','arbolados.Tipo_id')
        ->join('sitios','habitos.id','=','arbolados.Sitio_id')
        ->join('estados','habitos.id','=','arbolados.Estado_id')
        ->join('raizs','habitos.id','=','arbolados.Raiz_id')
        ->select('arbolados.*', 'origens.Nom_Origen','estd_conservas.Nom_Econservacion','habitos.Nom_Habito','tipos.Nom_Tipo','sitios.Nom_Sitio','estados.Nom_Estado','raizs.Nom_Raiz')
        ->get();
        return view('CRUDArbolado.index', compact('arbolados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//se modifica la vista para traer los datos
       $origenes = Origen::all();
       $econservacions = EstdConserva::all();
       $habitos = Habito ::all();
       $tipos = Tipo ::all();
       $sitios = Sitio ::all();
       $estados = Estado ::all();
       $raizs = Raiz ::all();
       return view('CRUDArbolado.create',compact('origenes', 'econservacions','habitos','tipos','sitios','estados','raizs'));



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


        $Adatos->Localizacion=$request->get('Localizacion');
        $Adatos->Este=$request->get('Este');
        $Adatos->Norte=$request->get('Norte');
        $Adatos->Nom_Cientifico=$request->get('Nom_Cientifico');
        $Adatos->Familia=$request->get('Familia');
        $Adatos->Nom_Comun=$request->get('Nom_Comun');
        $Adatos->Origen_id=$request->get('Origen_id');
        $Adatos->Econservacion_id=$request->get('Econservacion_id');
        $Adatos->Habito_id=$request->get('Habito_id');
        $Adatos->Tipo_id=$request->get('Tipo_id');
        $Adatos->Sitio_id=$request->get('Sitio_id');
        $Adatos->Estado_id=$request->get('Estado_id');
        $Adatos->Raiz_id=$request->get('Raiz_id');
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
