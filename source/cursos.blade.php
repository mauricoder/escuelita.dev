@extends('_layouts.escuelita')

@section('body')
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(/assets/images/background/header-cursos-32.jpg);">
        <div class="position-absolute w-100 h-100 opacity-4 bg-dark"></div>
        <div class="container">
            <div class="content-box">
                <h1>Cursos de Programación para Niños y Jóvenes</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Inicio</a></li>
                    <li>Cursos</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title--> 


    <!-- classes-section -->
    <section class="classes-section classes-page-section sec-pad">
        <div class="container">
            <div class="row">
                @include('_partials.card-programacion-ninos-scratch')

                @include('_partials.card-app-inventor')
                
                @include('_partials.card-python')                

            </div>
        </div>
    </section>
    <!-- classes-section end -->
@endsection