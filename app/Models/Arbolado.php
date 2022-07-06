<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arbolado extends Model
{
    use HasFactory;
//relacion de uno a muchos arbolado-arbolado
public function origen(){
    return $this->belongsTo(Origen::class,'Id_Origen');
}
}
