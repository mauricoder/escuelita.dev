@extends('_layouts.escuelita')

@section('body')
<!--Page Title-->
    <section class="page-title centred" style="background-image: url(/assets/images/background/header-cursos-8.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>El Blog de Escuelita</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Inicio</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- news-section -->
    <section class="news-section blog-page-section">
        <div class="container">
            <div class="row">
                @each('_partials.card-blog-post', $posts, 'post')
            </div>
        </div>
    </section>
    <!-- news-section end -->
@endsection
