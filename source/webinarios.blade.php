@extends('_layouts.escuelita')

@section('body')
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(/assets/images/background/header-cursos-9.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Webinarios Gratuitos</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Inicio</a></li>
                    <li>Webinarios</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title--> 


    <!-- classes-section -->
    <section class="classes-section classes-page-section sec-pad">
        <div class="container">
            <div class="row">
                @include('_partials.card-webinario-1-aplicaciones')                              
            </div>
        </div>
    </section>
    <!-- classes-section end -->
@endsection