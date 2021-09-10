@include('Frontend.layouts.header')

    <!-- page_title_section start -->
    <div class="page_title_section">
        <div class="page_title_overlay"></div>
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-7 col-md-7 col-xs-12 col-sm-7">

                        <h1> @yield('tituloSeccion') </h1>
                    </div>
                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-5">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> @yield('seccion') </a> <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                                <li>@yield('subseccion') </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page_title_section end -->


    <!-- contenido -->
    @section('contenido')








        
    @show

   
    <!-- tb build theme wrappper start-->
    <div class="tb_build_theme_wrapper jarallax">
        <div class="tb_build_theme_overlay"></div>
		<div class="cnt_overlay_left_img">
			<img src="{{asset('Frontend/images/cnt_ruler.png')}}" alt="img">
		</div>
		<div class="cnt_overlay_right_img">
			<img src="{{asset('Frontend/images/cnt_ruler2.png')}}" alt="img">
		</div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
                    <div class="tb_build_theme_title">
                        <h2>
                       ¿Te encantarón nuestros productos?</h2>
                        <p class="tb_toppadder20">Puedes descargar una representación impresa. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
				  <a id="descargaCatalogo"  target="_blank" href="#">
                    <div class="blob-btn quality_btn">
					
                        ¡Aqui!
                        <span class="blob-btn__inner">
									   <span class="blob-btn__blobs">
									   <span class="blob-btn__blob"></span>
                        <span class="blob-btn__blob"></span>
                        <span class="blob-btn__blob"></span>
                        <span class="blob-btn__blob"></span>
                        </span>
                        </span>
						
                    </div>
					</a>
                </div>
            </div>

        </div>

    </div>

  
 
   @include('Frontend.layouts.footer')


   