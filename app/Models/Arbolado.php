<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arbolado extends Model
{
    use HasFactory;
     protected $fillable= [
        'id',
        'Localizacion',
        'Este',
        'Norte',
        'Nom_Cientifico',
        'Familia',
        'Nom_Comun',
        'Origen_id',
        'Econservacion_id',
        'Habito_id',
        'Tipo_id',
        'Sitio_id',
        'Estado_id',
        'Raiz_id',
        'DAP_m',
        'Alt_Total',
        'Alt_Comercial',
        'Grados',
        'Norte_Sur',
        'Este_Oeste',
        'Ramas_Secas',
        'Hongos',
        'Insectos',
        'Nidos',
        'Abejas',
        'Plantas',
        'Epifetas',
        'Moluscos',
        'Tumores',
        'Agallas',
        'Aracnidos',
        'U_Muestral',
        'Area_Basal',
        'Vol_Total',
        'Vol_Comercial',
        'Bv_t',
        'BIOM_INDIV_Tn',
        'CARB_INDIV_Tn',
        'Categ_diame',
        'Estrato',
        'Observaciones'
    ];

}
