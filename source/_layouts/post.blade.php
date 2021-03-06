
@extends('_layouts.escuelita')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')
    <!--Page Title-->    
    <section class="page-title centred" 
        @if ($page->cover_image) 
        style="background-image: url({{ $page->cover_image }});" 
        @else 
        style="background-image: url(/assets/images/background/header-cursos-18.jpg )"
        @endif
        >
        <div class="container">
            <div class="content-box">
                <h1>{{ $page->title }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Inicio</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- blog-details -->
    <section class="blog-details sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="inner-box">
                            <div class="content-style-one">
                                <div class="top-content">
                                    <h4>{{ date('F j, Y', $page->date) }}</h4>
                                    <h1>{{ $page->title }}</h1>
                                    <div class="bold-text">{{ $page->description }}</div>
                                </div>
                                <div class="bold-text">
                                    @yield('content')
                                    <h4>{{ $page->author }}</h4>
                                </div>
                            </div>                            
{{--                            <div class="post-share-option">
                                 <ul class="tags">
                                    <li class="title">Etiquetas:</li>
                                    <li><a href="#">Design</a>,</li>
                                    <li><a href="#">Development</a></li>
                                </ul> 
                                <ul class="share">
                                    <li class="title">Compartir:</li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>--}}
                            {{-- <div class="comments-area">
                                <h3 class="group-title">Comments</h3>
                                <div class="comment-box">
                                    <div class="comment">
                                        <figure class="author-thumb"><img src="/assets/images/resource/comment-1.png" alt=""></figure>
                                        <div class="comment-inner">
                                            <div class="comment-info">
                                                <h4 class="name">Jack Nicholson</h4>
                                                <span class="date">15 january 2019 At 10:30 pm</span>
                                            </div>
                                            <div class="text">Eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. duis aute irure dolor in reprehenderit in voluptate.</div>
                                            <div class="replay-btn"><a href="#">Reply</a></div>
                                        </div>
                                    </div>
                                    <div class="comment replay-comment">
                                        <figure class="author-thumb"><img src="/assets/images/resource/comment-2.png" alt=""></figure>
                                        <div class="comment-inner">
                                            <div class="comment-info">
                                                <h4 class="name">Keira Knightley</h4>
                                                <span class="date">14 january 2019 At 10:30 pm</span>
                                            </div>
                                            <div class="text">Eiusmod tempor incididunte labore dolore magna aliqua.enamin veniam quis nostrud exercitation ullamco laboris nisi aliquip ex commodo conse duis aute irure dolor.</div>
                                            <div class="replay-btn"><a href="#">Reply</a></div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <figure class="author-thumb"><img src="/assets/images/resource/comment-3.png" alt=""></figure>
                                        <div class="comment-inner">
                                            <div class="comment-info">
                                                <h4 class="name">Humphrey Bogart</h4>
                                                <span class="date">13 january 2019 At 11:30 pm</span>
                                            </div>
                                            <div class="text">Eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. duis aute irure dolor in reprehenderit in voluptate.</div>
                                            <div class="replay-btn"><a href="#">Reply</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="comments-form-area">
                                <h3 class="group-title">Leave a Comment</h3>
                                <form action="#" method="post" class="comment-form default-form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="name" placeholder="Your Name*" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Your Email*" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Your Comment*"></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn">Submit now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>--}}
                        </div>
                    </div>
                </div>
                {{--                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar">
                         <div class="sidebar-search sidebar-widget">
                            <h3 class="sidebar-title">Search</h3>
                            <div class="search-form">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="search" name="search_field" placeholder="Search" required="">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-categories sidebar-widget">
                            <h3 class="sidebar-title">Categories</h3>
                            <div class="widget-content">
                                <div class="text">Lorem ipsum dolor sit amet consectur pisicelit sed do.</div>
                                <ul>
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">Olympiad</a></li>
                                    <li><a href="#">Drawing</a></li>
                                    <li><a href="#">Science</a></li>
                                    <li><a href="#">Mathmetics</a></li>
                                </ul>
                            </div>
                        </div>
                         <div class="sidebar-post sidebar-widget">
                            <h3 class="sidebar-title">Últimos Artículos</h3>
                            <div class="widget-content">
                                <div class="post">
                                    <figure class="image"><a href="blog-details.html"><img src="/assets/images/resource/post-1.png" alt=""></a></figure>
                                    <span class="post-date">April 20, 2019</span>
                                    <h4><a href="blog-details.html">Consequntur magni dolore eos qui.</a></h4>
                                </div>
                                <div class="post">
                                    <figure class="image"><a href="blog-details.html"><img src="/assets/images/resource/post-2.png" alt=""></a></figure>
                                    <span class="post-date">April 19, 2019</span>
                                    <h4><a href="blog-details.html">Magni dolore eos qui ratione seque.</a></h4>
                                </div>
                                <div class="post">
                                    <figure class="image"><a href="blog-details.html"><img src="/assets/images/resource/post-3.png" alt=""></a></figure>
                                    <span class="post-date">April 18, 2019</span>
                                    <h4><a href="blog-details.html">Ratone magni dolore eos qui ratione.</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-tags sidebar-widget">
                            <h3 class="sidebar-title">Popular Tags</h3>
                            <div class="widget-content">
                                <ul class="tag-list clearfix">
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">Drawing</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Book</a></li>
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">Kidko</a></li>
                                    <li><a href="#">Teacher</a></li>
                                    <li><a href="#">Toy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!-- blog-details end -->


{{--
    <p class="text-gray-700 text-xl md:mt-0">{{ $page->author }}  •  </p>

    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/blog/categories/' . $category }}"
                title="View posts in {{ $category }}"
                class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
            >{{ $category }}</a>
        @endforeach
    @endif

    <div class="border-b border-blue-200 mb-10 pb-4" v-pre>
        
    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
--}}
@endsection