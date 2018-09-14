<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Persona extends Model
{
     protected $table = 'personas';
     protected $fillable = ['dni','nombre','apellido','email','edad','telefono','ciudadProcedencia','areaConocimiento','nivelEjerce','estudianteActual','categoria_id'];

     public function categoria()
   {
   		return	$this->belongsTo(Categoria::class);
   }

}
