<div class="col-lg-4 col-md-6 col-sm-12 news-block">
    <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="inner-box">
            <!-- <figure class="image-box"><a href="blog-details.html"><img src="/assets/images/resource/news-1.jpg" alt=""></a></figure> -->
            <div class="lower-content">
                <h3><a href="{{ $post->getUrl() }}">{{ $post->title }}</a></h3>
                <ul class="info-box">
                    <li>{{ date('F j, Y', $post->date) }}</li>
                </ul>
                <div class="text">{{ $post->description }}</div>
                <div class="link-btn"><a href="{{ $post->getUrl() }}"><i class="flaticon-next"></i></a></div>
                <div class="more-btn"><a href="{{ $post->getUrl() }}" class="theme-btn">Leer Más</a></div>
            </div>
        </div>
    </div>
</div>