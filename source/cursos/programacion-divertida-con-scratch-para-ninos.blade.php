@extends('_layouts.escuelita')

@section('body')
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(/assets/images/background/header-cursos-29.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Programación Divertida con Scratch para Niños</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Inicio</a></li>
                    <li>Cursos</li>
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
                                    <h5>En este curso</h5>
                                    <h1>Dale vida a tu imaginación mientras aprendes Programación con Scratch</h1>
                                </div>
                                <div class="bold-text">En este curso, dirigido a niños y niñas de 8 a 12 años, le darás vida a tu imaginación creando programas con personajes animados en Scratch, el entorno de programación con bloques para que los niños puedan aprender a programar.</div>
                            </div>
                            
                            <div class="lower-content">
                                <h3>¿Qué es Scratch?</h3>
                                <div class="bold-text">
                                    <p>Es un entorno de programación con un lenguaje orientado a bloques, que hace muy fácil que los niños aprendan los conceptos fundamentales de hacer programas para computadoras, mientras se divierten creando historias, animaciones, y juegos.</p>
                                    
                                </div>

                                <div id="carouselExampleControls" class="carousel slide mb-4" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img class="d-block w-100" src="/assets/images/resource/curso-programacion-para-niños.jpg">
                                        </div>                                        
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="/assets/images/resource/curso-scratch-programacion.jpg">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="/assets/images/resource/programacion-niños-con-scratch.png">
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="/assets/images/resource/curso-primer-lenguaje-programacion-niños.jpg">
                                        </div>                                        
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <h3>¿A quiénes va dirigido?</h3>
                                <div class="bold-text">
                                    <p>A niños 8 a 12 que quieren aprender a hacer programas e historias animadas.</p>
                                </div>

                                <h3 class="mt-5">¿Qué necesitas para hacer el curso?</h3>
                                <div class="bold-text">
                                    <p>Para trabajar con Scratch necesitarás una PC con conexión a Internet</p>
                                    <p>Además las clases serán por Zoom. Necesitarás una conexión que soporte llamadas por videoconferencia.</p>
                                    <p>Si te falta alguno de estos recursos, y el curso te interesa, por favor, ¡inscríbete igual! Queremos saber de tí y apoyarte para que puedas aprender Programación.</p>
                                </div>

                                <h3 class="mt-5">¿Quieres participar?</h3>
                                <div class="bold-text">
                                    <p>El curso es gratuito, y estamos en fase de pre-inscripción. Puedes inscribirte ahora y te tendremos al tanto de la fecha de inicio. Pídele a tu madre / padre o adulto responsable que haga la inscripción y entraremos en contacto contigo para darte más información y confirmar tu inscripción.</p>
                                </div>
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
                                        <li class="btn-box" x-data>
                                            <a class="typeform-share button" x-bind:href="addUtms('https://eprenda.typeform.com/to/ZEdhRIcn?curso=scratch')" data-mode="drawer_right" style="display:inline-block;text-decoration:none;background-color:#FF7162;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:50px;text-align:center;margin:0;height:50px;padding:0px 33px;border-radius:0px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" target="_blank">INSCRIBIRME</a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>                                            
                                        </li>
                                    </ul>
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
                                    <h5>Edades:</h5>
                                    <span>8 a 12 años</span>
                                </li>
                                <li>
                                    <h5>Tamaño del grupo:</h5>
                                    <span>15 chicos por clase</span>
                                </li>
                                <li>
                                    <h5>Cantidad de encuentros:</h5>
                                    <span>12 clases (una por semana)</span>
                                </li>
                                <li>
                                    <h5>Comienzo:</h5>
                                    <span>PROXIMAMENTE</span>
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

@section('finbody')
@parent
<script>
    amplitude.getInstance().logEvent('Ve Curso', {curso: 'Desarrollo Aplicaciones App Inventor'});

    $( ".typeform-share" ).click(function() {
        amplitude.getInstance().logEvent('Click Inscripcion Curso', {curso: 'Desarrollo Aplicaciones App Inventor'});
    });

    function addUtms (link) {
        const params = new URLSearchParams(window.location.search);
        const utm_params = [];
        params.forEach(function(value, key) {
            if (key.startsWith('utm_')) {
                utm_params.push(key+'='+value)
            }
        })
        utm_search = utm_params.join('&');
        if (!!utm_search) {
            return link + (link.indexOf('?') === -1 ? '?' : '&') + utm_search;
        } else {
            return link
        }
    };
</script>    
@endsection