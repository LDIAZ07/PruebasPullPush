<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //
    public function proovedor(){
        return $this->belongsTo(Proveedor::class);
        // - Laravel asume que la clave foránea en la tabla actual es proveedor_id (siguiendo la convención de nombres).
        // - Si la clave foránea tuviera otro nombre, deberías especificarlo:
        // return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }
}
