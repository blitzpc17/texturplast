<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Glosario;

class GlosarioController extends Controller
{
    public function Glosario()
    {
        $glosario = Glosario::ListarConceptos();
        return view('Frontend.Glosarios.glosarioGral', compact('glosario'));
    }
    public function GlosarioAdmin(){
        return view('Backend.adminGlosario');
    }
    public function Add(Request $request)
    {
        $data = array(
            "concepto"=> $request->concepto,
            "descripcion" => $request->descripcion
        );
        Glosario::create($data);
        return redirect()->route("glosario.new");

    }
    public function ListarConceptos(){
        return Glosario::ListarConceptos();
    }
}
