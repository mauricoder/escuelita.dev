@extends('_layouts.escuelita')

@section('body')
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(/assets/images/background/header-cursos-9.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Aprende a hacer Juegos para Celulares con App Inventor</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Inicio</a></li>
                    <li>Webinarios</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- class-details -->
    <section class="class-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="class-details-content">
                        <div class="inner-box">
                            <div class="upper-content">
                                <div class="sec-title style-two">
                                    <h5>En este Webinario</h5>
                                    <h1>Aprende cómo empezar con App Inventor para crear Juegos y Aplicaciones para Celulares</h1>
                                </div>
                                <div class="bold-text">
                                    <p>¿Querés aprender a hacer apicaciones para celulares?</p>
                                    <p>¿Sabías que con App Inventor todos, incluso niños y jóvenes pueden crear aplicaciones para celulares y juegos?</p>
                                    <p>En esta clase abierta te ayudaremos a dar los primeros pasos para crear aplicaciones con App Inventor.</p>
                                    <p>Aprenderás:</p>
                                    <p>
                                        <ul class="list">
                                            <li>Cómo es y se usa la interfaz de App Inventor para la creación de aplicaciones</li>
                                            <li>Cómo se diseñan los componentes</li>
                                            <li>Cómo es la programación en bloques</li>
                                            <li>Cómo probar tu aplicación con el uso de un Emulador</li>
                                        </ul>
                                    </p>
                                </div>

                                <div class="bold-text">La clase es gratuita, y es el Martes 17 a las 18:00horas de Argentina. Inscríbete y te tendremos. Se celebrará por Zoom.</div>
                                <div class="bold-text">¡Inscríbete para participar!</div>

                                <div class="info-box">
                                    <ul class="clearfix">
                                        <li>
                                            <figure class="thumb-box"><img src="/assets/images/docentes/brenda-torrez.jpg" alt=""></figure>
                                            <h6>Docente</h6>
                                            <h5>Brenda Torrez</h5>
                                        </li>
                                        <li>
                                            <h6>Categoría</h6>
                                            <h5>Programación</h5>
                                        </li>
                                        <li class="btn-box">
                                            <a class="typeform-share button" href="https://form.typeform.com/to/POmJ9HeT" data-mode="drawer_right" style="display:inline-block;text-decoration:none;background-color:#FF7162;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:50px;text-align:center;margin:0;height:50px;padding:0px 33px;border-radius:0px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" target="_blank">INSCRIBIRME</a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3>¿Qué es App Inventor?</h3>
                                <div class="bold-text">
                                    <p>Es un entorno de programación para crear aplicaciones para Celulares</p>
                                    <p>Está pensando para que todos puedan aprender Programación y crear aplicaciones.</p>
                                    <p>La creación de aplicaciones con App Inventor consta de tres etapas:</p>
                                    <ul class="list">
                                        <li>El diseño de las pantallas</li>
                                        <li>La Programación en bloques</li>
                                        <li>La Compilación de la aplicación generando el instalador APK</li>
                                    </ul>
                                </div>
                                <figure class="image-box"><img src="/assets/images/resource/jugando-con-app-inventor.jpg" alt=""></figure>

                                <h3>¿A quiénes va dirigido?</h3>
                                <div class="bold-text">
                                    <p>A niños y adolescentes con ganas de aprender a crear aplicaciones móviles. Especialmente a quienes no tienen conocimientos de programación</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="class-details-sidebar">
                        <div class="inner-box">
                            {{-- <h3>Sobre este curso</h3>--}}
                            {{-- <div class="text">Detalles a tener en cuenta.</div>--}}
                            <ul class="info-list">
                                <li>
                                    <h5>Costo</h5>
                                    <span>Gratuito</span>
                                </li>
                                <li>
                                    <h5>Modalidad:</h5>
                                    <span>Por Videoconferencia (Zoom)</span>
                                </li>
                                <li>
                                    <h5>Cuándo:</h5>
                                    <span>Martes 17 de Noviembre - 18:00hs de Argentina</span>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- class-details end -->    
@endsection