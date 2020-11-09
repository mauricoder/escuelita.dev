@extends('_layouts.escuelita')

@section('body')
    <!-- main-slider -->
    <section class="main-slider style-two">
        <div class="main-slider-carousel owl-carousel owl-theme nav-style-two">
            <div class="slide" style="background-image:url(/assets/images/main-slider/slider-paisaje-escuelita.jpg)">
                <div class="container">
                    <div class="content-box">
{{--                         <h3></h3>--}}
                        <h1>El futuro de tus chicos es brillante</h1>
                        {{-- <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>--}}
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url(/assets/images/main-slider/slider-variacion-computadora.jpg)">
                <div class="container">
                    <div class="content-box">
                        <h1>Les ayudamos a aprender las herramientas de su época</h1>
                    </div>
                </div>
            </div>            
            <div class="slide" style="background-image:url(/assets/images/main-slider/slider-variacion-niño.jpg)">
                <div class="container">
                    <div class="content-box">
{{--                          <h3>Aprender Programación</h3>--}}
                        <h1>Para que puedan despegar por sí mismos</h1> 
{{--                         <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main-slider end -->

    <!-- about-section -->
    <a name="acerca"></a>    
    <section class="about-section">
        <div class="anim-icon">
            <div class="icon icon-2 wow zoomIn animated"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image image-1"><img src="/assets/images/resource/niña-programando.jpg" alt=""></figure>
                        <figure class="image image-2"><img src="/assets/images/resource/nino-programando-2.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title style-two">
                            <h5>Acerca de Escuelita.dev</h5>
                            <h1>Bienvenid@ a Escuelita.dev</h1>
                        </div>
                        <div class="bold-text">Somos un emprendimiento sin fines de lucro que ayuda a niños y jóvenes a aprender a Programar.</div>
                        <div class="bold-text">Nuestra misión es ayudar a niños y jóvenes a aprender programación para que puedan ser más felices ahora y tener un mejor futuro.</div>
                        <div class="bold-text">La programación ayuda a los chicos a aprender a trabajar en equipo, desarrollar habilidades sociales, aprender a resolver problemas, y abre las puertas a una profesión.</div>
                        <div class="bold-text">Por eso queremos que TODO niño y joven que quiera tenga la oportunidad de aprender Programación.</div>
                        <div class="bold-text">Creemos en el juego como el principal motor para el aprendizaje, y por eso en nuestros cursos lo niños aprenden mientras crean los proyectos que les apasionan.</div>
                        </div>
{{--                         <div class="btn-box"><a href="contact.html" class="theme-btn">Contact us</a></div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->    

    <!-- classes-section -->
    <a name="cursos"></a>
    <section class="classes-section style-two sec-pad">
        <div class="parallax-scene parallax-scene-1 parallax-icon">
            <span data-depth="0.40" class="parallax-layer icon icon-1"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-2"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-3"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-4"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-5"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-6"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-7"></span>
        </div>
        <div class="container">
            <div class="sec-title centred">
                <h5>Cursos Comenzando Pronto</h5>
                <h1>Cursos de Programación<br />para Niños y Jóvenes</h1>
            </div>
            <div class="row">
                @include('_partials.card-app-inventor')                
{{--            <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="inner-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="class-details.html"><img src="/assets/images/resource/class-2.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="link-btn"><a href="class-details.html"><i class="flaticon-next"></i></a></div>
                            <h3><a href="class-details.html">Paper Plates Art</a></h3>
                            <div class="price">$580</div>
                            <ul class="info-box">
                                <li>Age: <span>2-4 Years</span></li>
                                <li>Size: <span>12 Seats</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="inner-block wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="class-details.html"><img src="/assets/images/resource/class-3.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="link-btn"><a href="class-details.html"><i class="flaticon-next"></i></a></div>
                            <h3><a href="class-details.html">Education Lessons</a></h3>
                            <div class="price">$550</div>
                            <ul class="info-box">
                                <li>Age: <span>2-4 Years</span></li>
                                <li>Size: <span>12 Seats</span></li>
                            </ul>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!-- classes-section end -->    
    <!-- cta-section -->
    <a name="contact"></a>
    <section class="cta-section centred">
        <div class="parallax-scene parallax-scene-3 parallax-icon">
            <span data-depth="0.40" class="parallax-layer icon icon-1"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-2"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-3"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-4"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-5"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-6"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-7"></span>
        </div>
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-x"></div>
            <div class="icon icon-2 rotate-me"></div>
        </div>
        <div class="container">
            <div class="content-box">
                <h3>Escríbenos</h3>
                <h1>¿Quieres inscribir a tu hijo en uno de nuestros cursos?</h1>
                <div class="text">Entra en contacto con nosotros</div>
                <div class="btn-box">
                    <a class="typeform-share button theme-btn" href="https://form.typeform.com/to/xP1beIWC" data-mode="drawer_right" style="display:inline-block;text-decoration:none;background-color:#FF7162;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:50px;text-align:center;margin:0;height:50px;padding:0px 33px;border-radius:0px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" target="_blank">QUIERO MÁS INFORMACIÓN</a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
{{--                     <a href="#" class="theme-btn">Quiero más información</a>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- cta-section end -->    
    

    <!-- our-teachers -->
    <section class="our-teachers style-two sec-pad centred">
        <div class="parallax-scene parallax-scene-2 parallax-icon">
            <span data-depth="0.40" class="parallax-layer icon icon-1"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-2"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-3"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-4"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-5"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-6"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-7"></span>
        </div>
        <div class="container">
            <div class="sec-title">
                <h5>El Equipo</h5>
                <h1>El Equipo Fundador<br />de Escuelita.dev</h1>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12 block-column">
                    <div class="teachers-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-holder">
                                <figure class="image-box"><a href="#"><img src="/assets/images/equipo/mauricio-etcheverry.jpg" alt="Mauricio Etcheverry"></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Mauricio Etcheverry</a></h3>
                                <span class="designation">Fundador</span>
                                <ul class="social-list">
                                    <li></li>
{{--                                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 block-column">
                    <div class="teachers-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-holder">
                                <figure class="image-box"><a href="#"><img src="/assets/images/equipo/lucia-pardal.jpg" alt="Lucia Pardal"></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Lucía Pardal</a></h3>
                                <span class="designation">Coordinadora</span>
                            <ul class="social-list">
                                <li></li>
                            {{--                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 block-column">
                    <div class="teachers-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-holder">
                                <figure class="image-box"><a href="#"><img src="/assets/images/equipo/brenda-torrez.jpg" alt="Brenda Torrez"></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Brenda Torrez</a></h3>
                                <span class="designation">Docente</span>
                                <ul class="social-list">
                                    <li></li>
{{--                                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-teachers end -->
    
@endsection
