@extends('Frontend.layouts.body')


@section('tituloSeccion', $seccion)

@section('seccion', $categoria)

@section('subseccion', $seccion)


@section('contenido')

<div class="row">

    <div id="mobile" class="col-sm-12">       
        
        @foreach ($imgMobile as $item)
            <img src="{{asset($item)}}" alt="" style="width:100%">
        @endforeach
    </div>

    <div id="compu" class="col-sm-12">       
        
        @foreach ($imgCompu as $item)
            <img src="{{asset($item)}}" alt="" style="width:100%">
        @endforeach
    </div>

</div>


  

@endsection


@push('js')
<script>
    $(document).ready(function () {
        var urlDescarga="";
        if($(window).width()<=1020){
            $("#mobile").show();
            $("#compu").hide();
            urlDescarga = "{{asset('Frontend/descargas/CAT_MOVIL_WHATS.pdf')}}";
            //$('#cat').attr("src", "{{asset('Frontend/images/catalogos/TRAFICO_MOVIL-10.png')}}");
        }else{
            $("#mobile").hide();
            $("#compu").show();
            urlDescarga = "{{asset('Frontend/descargas/CAT_MOVIL_WHATS.pdf')}}";
           //$('#cat').attr("src", "{{asset('Frontend/images/catalogos/TRAFICO_WEB-01.png')}}");
        }
        $('#descargaCatalogo').attr("href", urlDescarga );
        $(window).resize(function () {
            var ancho = $(window).width();
            if(ancho<=1020){
               // $('#cat').attr("src", "{{asset('Frontend/images/catalogos/TRAFICO_MOVIL-10.png')}}");
               $("#mobile").show();
               $("#compu").hide();
            }else{
                $("#mobile").hide();
                $("#compu").show();
               // $('#cat').attr("src", "{{asset('Frontend/images/catalogos/TRAFICO_WEB-01.png')}}");
            }
        });
    });

</script>
@endpush