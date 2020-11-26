<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="canonical" href="{{ $page->getUrl() }}">
<meta name="description" content="{{ $page->description }}">
<title>{{ $page->title }}</title>

<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/responsive.css">


<!-- Stylesheets -->
<link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W92TZHV');</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-24678770-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-24678770-2');
</script>

</head>

<!-- page wrapper -->
<body class="boxed_wrapper">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W92TZHV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- .preloader -->
     <div class="preloader"></div>
    <!-- /.preloader -->


    <!-- search-box-layout -->
{{--     <div class="wraper_flyout_search">
        <div class="table">
            <div class="table-cell">
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-close">
                    <span class="flyout-search-close-line"></span>
                    <span class="flyout-search-close-line"></span>
                </div>
                <div class="flyout_search">
                    <div class="flyout-search-title">
                        <h4>Buscar</h4>
                    </div>
                    <div class="flyout-search-bar">
                        <form role="search" method="get" action="#">
                            <div class="form-row">
                                <input type="search" placeholder="Escribe para buscar..." value="" name="s" required="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!-- search-box-layout end -->


    <!-- Main Header -->
    <header class="main-header">

        <div class="header-top">
            <div class="container">
                <div class="inner-container clearfix">
                    <div class="social-links pull-left">
                        <ul class="social-list">
{{--                             <li><a href="https://www.facebook.com/escuelita.dev/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/escuelita.dev/"><i class="fab fa-instagram"></i></a></li>--}}
                            <!-- <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li> -->
                        </ul>
                    </div>
                    <div class="header-info pull-right">
                        <ul class="info-list">
                            {{-- <li>
                                <i class="fas fa-phone"></i>
                                <a href="tel:12345615523">123 4561 5523</a>
                            </li> --}}
                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:hola@escuelita.dev">hola@escuelita.dev</a>
                            </li>
                            <li>
                                <i class="fas fa-user"></i>
                                <a href="#">Ingreso Alumnos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="/"><img src="/assets/images/logo-escuelita.png" alt="Escuelita.dev - Tu Escuela de Programacion - Cursos de Programacion para Niños"></a></figure>
                    </div>
                    <div class="nav-outer pull-right clearfix">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="/">Inicio</a></li>
                                        <li><a href="/#acerca">Acerca</a></li> 
                                        <li><a href="/cursos/">Cursos</a></li> 
                                        <li><a href="/webinarios/">Webinarios</a></li> 
                                        <li><a href="/#contact">Contacto</a></li>                                        
                                    </ul>
                                </div>
                            </nav>
                        </div>
{{--                    <div class="outer-box">
                            <ul class="outer-content">
                                <li class="header-flyout-searchbar">
                                    <i class="fa fa-search"></i>
                                </li>
                                <!-- <li><a href="shop.html"><i class="fas fa-shopping-cart"></i></a></li> -->
                            </ul>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="/"><img src="/assets/images/logo-escuelita-horizontal.png" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="/">Inicio</a></li>
                                <li><a href="/#acerca">Acerca</a></li> 
                                <li><a href="/cursos/">Cursos</a></li>
                                <li><a href="/webinarios/">Webinarios</a></li> 
                                <li><a href="/#contact">Contacto</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- sticky-header end -->
    </header>
    <!-- End Main Header -->

    @yield('body')

    <!-- main-footer -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="parallax-scene parallax-scene-4 parallax-icon">
                <span data-depth="0.40" class="parallax-layer icon icon-1"></span>
                <span data-depth="0.50" class="parallax-layer icon icon-2"></span>
                <span data-depth="0.30" class="parallax-layer icon icon-3"></span>
                <span data-depth="0.40" class="parallax-layer icon icon-4"></span>
                <span data-depth="0.50" class="parallax-layer icon icon-5"></span>
                <span data-depth="0.30" class="parallax-layer icon icon-6"></span>
                <span data-depth="0.40" class="parallax-layer icon icon-7"></span>
            </div>
            <div class="container">
                <div class="widget-section">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="about-widget footer-widget">
                                <h3 class="widget-title">¿Qué es Escuelita.dev?</h3>
                                <div class="widget-content">
                                    <div class="text">
                                        <p>Somos un emprendimiento sin fines de lucro.</p>
                                        <p>Nuestra misión es ayudar a niños y jóvenes a aprender programación para que puedan ser más felices ahora y tener un mejor futuro.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="link-widget footer-widget">
                                <h3 class="widget-title">Enlaces Útiles</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="/#acerca">Acerca de Nosotros</a></li>
                                        <li><a href="/cursos/">Cursos Gratis</a></li>
                                        <li><a href="/webinarios/">Webinarios Gratis</a></li> 
                                        <li><a href="/#contact">Contacto</a></li>
{{--                                         <li><a href="#">Teacher & Staff</a></li>
                                        <li><a href="#">Contact us</a></li>
                                        <li><a href="#">Our Gallery</a></li>
                                        <li><a href="#">Privacy policy</a></li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="contact-widget footer-widget">
                                <h3 class="widget-title">Ponte en Contacto</h3>
                                <div class="widget-content">
                                    {{-- <div class="text">Con mucho gusto te  .</div>--}}
                                    <ul class="info-list">
                                         <li><i class="fas fa-home"></i>Boulevard Doctor Manuel Herrera Y Obes 4316, Montevideo, Uruguay</li>
{{--                                        <li><i class="fas fa-phone"></i><a href="tel:88657524332">[88] 657 524 332</a></li>--}}
                                        <li><i class="fas fa-envelope"></i><a href="mailto:info@example.com">hola@escuelita.dev</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="subscribe-widget footer-widget">
                                <h3 class="widget-title">¡No te pierdas!</h3>
                                <div class="widget-content">
                                    <div class="text">Déjanos tu email para tenerte al tanto de las novedades de Escuelita.dev :)</div>
                                    <div class="subscribe-inner">
                                        <form action="https://dev.us2.list-manage.com/subscribe/post?u=e66e067f7aed1f417ebf8672b&amp;id=b2bdb8327d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribe-form validate" target="_blank" novalidate>
                                            <div class="form-group">
                                                <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="Escribe tu nombre">
                                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Escribe tu email">

                                                <div id="mce-responses" class="clear">
                                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e66e067f7aed1f417ebf8672b_b2bdb8327d" tabindex="-1" value=""></div>

                                                <button type="submit" class="theme-btn" id="mc-embedded-subscribe">Subscribirme!</button>

                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="inner-container clearfix">
                    <div class="left-content pull-left">
                        <div class="copyright">Copyright &copy; <a href="#">Escuelita.dev</a> 2020. Todos los derechos reservados</div>
                    </div>
                    <div class="right-content pull-right">
                        <figure class="footer-logo"><a href="/"><img src="/assets/images/logo-escuelita.png" alt=""></a></figure>
                        <ul class="social-style-one footer-social clearfix">
{{--                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
                            <li><a href="https://www.instagram.com/escuelita.dev/"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fa fa-arrow-up"></i>
</button>



<!-- jequery plugins -->

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<script src="/assets/js/owl.js"></script>
<script src="/assets/js/wow.js"></script>
<script src="/assets/js/validation.js"></script>
<script src="/assets/js/jquery.fancybox.js"></script>
<script src="/assets/js/appear.js"></script>
<script src="/assets/js/parallax.min.js"></script>
<script src="/assets/js/isotope.js"></script>

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="/assets/js/gmaps.js"></script>
<script src="/assets/js/map-helper.js"></script>

<!-- main-js -->
<script src="/assets/js/script.js"></script>
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/e66e067f7aed1f417ebf8672b/b5feeb9c54ebb7377313651c3.js");</script>
</body><!-- End of .page_wrapper -->
</html>
