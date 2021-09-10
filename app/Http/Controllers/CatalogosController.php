<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogosController extends Controller
{
    public function CatalogoProductos($tipo)
    {
        $imgMobile = [];
        $imgCompu = [];
        $categoria = '';
        $seccion = '';
        switch($tipo)
        {
            case 'acrilicos': 
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-02.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-03.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-04.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-05.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-06.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-07.png";

                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB2.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB3.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB4.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB5.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB6.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB7.png";


                    $categoria = 'PINTURAS';
                    $seccion = 'VINIL ACRÍLICAS';
                break;

            case 'especiales': 
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-08.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-10.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-11.png";  
                    
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB8.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB10.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB11.png";

                    $categoria = 'PINTURAS';
                    $seccion = 'PINTURAS ESPECIALES';
                break;

            case 'granitos': 
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-13.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-14.png"; 
                    
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB13.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB14.png";

                    $categoria = 'GRANITOS';
                    $seccion = 'GRANITOS PLANCHADOS';
                break;

            case 'selladores':
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-15.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-17.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-18.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-19.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-20.png";  
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-21.png";
                    
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB15.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB17.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB18.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB19.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB20.png";

                    $categoria = 'SELLADORES Y ADHESIVOS';
                    $seccion = 'SELLADORES Y ADHESIVOS'; 
                break;

            case 'pastas': 
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-23.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-25.png"; 
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-26.png";    
                    
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB23.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB25.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB26.png";

                    $categoria = 'PASTAS';
                    $seccion = 'PASTAS ACRÍLICAS'; 
                break;

            case 'impermeabilizantes': 
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-27.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-29.png";  
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-30.png";  
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-31.png";
                    
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB27.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB29.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB30.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB31.png";


                    $categoria = 'IMPERMEABILIZANTES';
                    $seccion = 'IMPERMEABILIZANTES ELASTOMÉRICOS'; 
                break;

            case 'pegazuelos': 
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-32.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-34.png";
                    
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB32.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB34.png";


                    $categoria = 'PEGAZULEJOS';
                    $seccion = 'PEGAZULEJOS'; 
                break;

            case 'recubrimiento': 
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-35.png";
                    $imgMobile[] = "Frontend/images/catalogos/mobile/CAT_MOVIL-36.png";   
                    
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB35.png";
                    $imgCompu[] = "Frontend/images/catalogos/pc/CATALOGO_WEB36.png";


                    $categoria = 'RECUBRIMIENTOS';
                    $seccion = 'RECUBRIMIENTO CEMÉNTICIO'; 
                break;
        }
        return view('Frontend.Catalogos.Pc.prueba', compact('imgMobile','imgCompu','categoria','seccion'));
    }
}
