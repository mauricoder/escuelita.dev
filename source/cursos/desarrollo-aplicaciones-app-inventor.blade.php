@extends('_layouts.escuelita')

@section('body')
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(/assets/images/background/header-cursos-9.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Desarrollo de Aplicaciones con App Inventor</h1>
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
                                    <h1>Aprende a crear Aplicaciones para Celulares</h1>
                                </div>
                                <div class="bold-text">En este curso, dirigido a jóvenes de 12 a 17 años, aprenderás desde el comienzo cómo crear aplicaciones y juegos para Celulares con el famoso App Inventor del MIT.</div>
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
                                            <a class="typeform-share button" x-bind:href="addUtms('https://eprenda.typeform.com/c/ZEdhRIcn')" data-mode="drawer_right" style="display:inline-block;text-decoration:none;background-color:#FF7162;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:50px;text-align:center;margin:0;height:50px;padding:0px 33px;border-radius:0px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" target="_blank">INSCRIBIRME</a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
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
                                <h3>¿Qué aprenderás?</h3>
                                <div class="bold-text">
                                    <ul class="list">
                                        <li>Cómo usar App Inventor para la creación de tus propias Apps</li>
                                        <li>Diseñar diferentes alternativas para la creación de Apps</li>
                                        <li>Usar los sensores del teléfono desde tus aplicaciones</li>
                                        <li>Crear tus primeros juegos para dispositivos móviles</li>
                                        <li>Cómo publicar tu App en la PlayStore de Android</li>
                                    </ul>
                                </div>                                
                                <h3>¿A quiénes va dirigido?</h3>
                                <div class="bold-text">
                                    <p>A niños y adolescentes de 12 a 17 años con ganas de aprender a crear aplicaciones móviles. Especialmente a quienes no tienen conocimientos de programación</p>
                                </div>



                                <h3>Temario del curso</h3>
                                <div class="bold-text">
                                    <p>El curso se divide en 4 módulos</p>
                                </div>
                                <ul class="accordion-box active-block">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                            <h4>MÓDULO 1. Introducción al pensamiento computacional</h4>
                                        </div>
                                        <div class="acc-content current" style="display: block;">
                                            <div class="content">
                                                <div class="text">Desarrollo del pensamiento algorítmico. Resoluión de problemas. Descomposición y abstracción. Introducción a entornos de programación en bloques.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                            <h4>MÓDULO 2. Primeros pasos con App Inventor</h4>
                                        </div>
                                        <div class="acc-content" style="display: none;">
                                            <div class="content">
                                                <div class="text">Construyendo tu primera App. Hola Mundo. Acercamiento a componentes del guión multimedia y los bloques de programación. Usamos componentes de interfaz de usuario: screen, botones y medios.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                            <h4>MÓDULO 3. Pensando en números aleatorios</h4>
                                        </div>
                                        <div class="acc-content" style="display: none;">
                                            <div class="content">
                                                <div class="text">Creamos una juego de adivinar números. Usamos sentencias, condicionales, variables, bloques lógico-matemáticos.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                            <h4>MÓDULO 4. ¡CREAMOS JUEGOS!</h4>
                                        </div>
                                        <div class="acc-content" style="">
                                            <div class="content">
                                                <div class="text">Con todo lo aprendido vamos a crear juegos. App con sonidos (usamos medios y procedimientos). Creamos juegos. Usamos componentes: medios, sensores, lienzo, animación, procedimientos, eventos y variables.</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <h3 class="mt-5">¿Qué necesitas para hacer el curso?</h3>
                                <div class="bold-text">
                                    <p>Para trabajar con App Inventor necesitarás una PC con conexión a Internet, y un teléfono celular (Smartphone con Android) </p>
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
                                        <li class="btn-box">
                                            <a class="typeform-share button" href="https://form.typeform.com/to/xP1beIWC" data-mode="drawer_right" style="display:inline-block;text-decoration:none;background-color:#FF7162;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:50px;text-align:center;margin:0;height:50px;padding:0px 33px;border-radius:0px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" target="_blank">INSCRIBIRME</a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
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
                                    <span>12 a 17 años</span>
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