<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Glosario extends Model
{
    protected $table = "Glosario";

    protected $fillable = ['concepto', 'descripcion'];

    public $timestamps = false;




    public static function ListarConceptos(){

        $rango1 = DB::table('Glosario')->where('concepto', 'regexp', '^[A-Fa-f]'  )->orderby('concepto')->get();
        $rango2 = DB::table('Glosario')->where('concepto', 'regexp', '^[G-Mg-m]'  )->orderby('concepto')->get();
        $rango3 = DB::table('Glosario')->where('concepto', 'regexp', '^[N-Sn-s]'  )->orderby('concepto')->get();
        $rango4 = DB::table('Glosario')->where('concepto', 'regexp', '^[T-Zt-z]'  )->orderby('concepto')->get();

        $rangos = array("rango1"=>$rango1,"rango2"=>$rango2,"rango3"=>$rango3,"rango4"=>$rango4);
        return $rangos;

    }



}
