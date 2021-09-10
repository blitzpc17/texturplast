@extends('Frontend.layouts.body')

@push('css')
<style>
    .collapsible {
      background-color: #852e2c;;
      color: white;
      cursor: pointer;
      padding: 18px;
      width: 100%;
     /* border: none;*/
      text-align: left;
      outline: none;
      font-size: 18px;
      font-family: 'Fira Sans';
    }
    
    .active, .collapsible:hover {
      background-color: #555;
    }
    
    .content {
      padding: 25px;
      display: none;
      overflow: hidden;
      background-color: #f1f1f1;      
      border-color: black;
    }

    .btnRango {
        border: 2px solid black;
        background-color: white;
        color: black;
        padding: 14px 28px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 15px;
    }

    .success {
        border-color: #852e2c;
        color: #852e2c;
    }

    .success:hover {
        background-color: #852e2c;
        color: white;
    }


    
    </style>
@endpush
@section('tituloSeccion', "Glosario")

@section('seccion', "Glosario")

@section('subseccion', "Glosario")



@section('contenido')
<div class="best_Service_wrapper">
    <div class="container">
        <center>
            <button type="button" name="" id="btnRango1" class="btnRango success"> A - F</button>
            <button type="button" name="" id="btnRango2" class="btnRango success"> G - M</button>
            <button type="button" name="" id="btnRango3" class="btnRango success"> N - S</button>
            <button type="button" name="" id="btnRango4" class="btnRango success"> T - Z</button>
        </center>

        <br>
        

        <div id="rango1">

           @foreach ($glosario["rango1"] as $item)
           <button id="{{$item->id}}" class="collapsible" data-id="{{$item->id}}">            
                ¿Qué es {{$item->Concepto}}?
                <i style="display: block; float: right;" class="fa fa-chevron-down"></i>
            </button>
            <div id="c{{$item->id}}" class="content">
                <p>{{$item->Descripcion}}</p>
            </div>
           @endforeach              
        </div>

        <div id="rango2">
            @foreach ($glosario["rango2"] as $item)
            <button id="{{$item->id}}" class="collapsible" data-id="{{$item->id}}">            
                 ¿Qué es {{$item->Concepto}}?
                 <i style="display: block; float: right;" class="fa fa-chevron-down"></i>
             </button>
             <div id="c{{$item->id}}" class="content">
                 <p>{{$item->Descripcion}}</p>
             </div>
            @endforeach

        </div>

        <div id="rango3">
            @foreach ($glosario["rango3"] as $item)
            <button id="{{$item->id}}" class="collapsible" data-id="{{$item->id}}">            
                 ¿Qué es {{$item->Concepto}}?
                 <i style="display: block; float: right;" class="fa fa-chevron-down"></i>
             </button>
             <div id="c{{$item->id}}" class="content">
                 <p>{{$item->Descripcion}}</p>
             </div>
            @endforeach
        </div>

        <div id="rango4">
            @foreach ($glosario["rango4"] as $item)
            <button id="{{$item->id}}" class="collapsible" data-id="{{$item->id}}">            
                 ¿Qué es {{$item->Concepto}}?
                 <i style="display: block; float: right;" class="fa fa-chevron-down"></i>
             </button>
             <div id="c{{$item->id}}" class="content">
                 <p>{{$item->Descripcion}}</p>
             </div>
            @endforeach

        </div>

    </div>
</div>


@endsection


@push('js')
<script>


    $(document).ready(function () {
        var collapseActivo;
        var activo = false;
        $("#rango1").show();
        $("#rango2").hide();
        $("#rango3").hide();
        $("#rango4").hide();   

        $(".collapsible").on('click', function(){
            var index = $(this).attr('data-id');
            if(index == collapseActivo&&activo){
                $(this).removeClass("active");
                $("#c"+index).css("display", "none");
            //    collapseActivo = index;
                activo=false;
            }else if(index == collapseActivo&&!activo)
            {
                $(this).addClass("active");
                $("#c"+index).css("display", "block");
                activo=true;
            }else{
                $(this).addClass("active");
                $("#"+collapseActivo).removeClass("active");
                $("#c"+collapseActivo).css("display", "none");
                $("#c"+index).css("display", "block");
                collapseActivo = index;
                activo=true;
            }
        });

        $('#btnRango1').on("click", function(){
            $("#rango1").show();
            $("#rango2").hide();
            $("#rango3").hide();
            $("#rango4").hide();
        });

        $('#btnRango2').on("click", function(){
            $("#rango2").show();
            $("#rango1").hide();
            $("#rango3").hide();
            $("#rango4").hide();
        });

        $('#btnRango3').on("click", function(){
            $("#rango3").show();
            $("#rango1").hide();
            $("#rango2").hide();
            $("#rango4").hide();
        });

        $('#btnRango4').on("click", function(){
            $("#rango4").show();
            $("#rango1").hide();
            $("#rango2").hide();
            $("#rango3").hide();
        });



    });
    
    </script>
@endpush