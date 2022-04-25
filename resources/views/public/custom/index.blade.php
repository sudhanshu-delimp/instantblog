@extends('layouts.custom')
@section('bodyclass')
    <body class="d-flex flex-column h-100">
@endsection
@section('content')
<!-- banner slider -->
    @if(!$slider_posts->isEmpty())
        <section class="banner--slider-section">
            <div class="main--container">
                <div class="banner--slider--wrapper">
                    <div class="banner--slider">
                        @foreach($slider_posts as $key => $slider_post)
                                @include('public.custom.slider_post')
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
<!-- banner slider end -->

<!-- Featured post -->
@if(!$featured_posts->isEmpty())
    @include('public.custom.featured_post')
@endif
<!-- Featured post end -->

<!-- tab Section -->
@if(!empty($home_tag) && !$home_sub_tags->isEmpty())
    @include('public.custom.home_tag_section')  
@endif

@if(!$trending_topics->isEmpty())
    @include('public.custom.trending_topics')
@endif
<!-- hover img section -->
@if(!$popular_tags->isEmpty())
    @include('public.custom.home_popular_tag_section')
@endif
 <!-- search section -->
<section class="search_section">
    <div class="main--container">
        <div class="search_left_col sbs_rest_posts">
        @if(!$rest_posts->isEmpty())
            @include('public.custom.rest_posts_section')
        @endif
        </div>
        <div class="search_ryt_col">
        <div class="side_bar">
            <aside id="search-3" class="widget-sidebar widget widget_search widgets-sidebar"><div class="widget-title"><h3>Search</h3></div><div class="inner">
                <form id="search-2" action="#" method="GET" class="blog-search">
                <div class="axil-search form-group">
                <button type="submit" class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                <input type="text" name="s" placeholder="Search ..." value="">
                </div>
                </form>
                </div>
            </aside>
            <aside id="blobar_social_widget-2" class="widget-sidebar widget blobar_social_widget widgets-sidebar"><div class="widget-title"><h3>Stay In Touch</h3></div>            <ul class="social-icon md-size justify-content-center">
                <li>
                <a href="#">
                <i class="fab fa-facebook-f"></i>
                </a>
                </li>
                <li>
                <a href="#">
                <i class="fab fa-twitter"></i>
                </a>
                </li>
                <li>
                <a href="#">
                <i class="fab fa-instagram"></i>
                </a>
                </li>
                <li>
                <a href="#">
                <i class="fab fa-pinterest"></i>
                </a>
                </li>
                <li>
                <a href="#">
                <i class="fab fa-linkedin-in"></i>
                </a>
                </li>
                </ul>
                </aside>
            <aside class="hide_section">
                <div class="widget-title"><h3>Recent on Blogar</h3></div> 
                <div class="post_col">
                    <div class="slider--content--inner">
                    <div class="ctnt-col">
                    <div class="slider--content">
                    <div class="slider--main--title">
                    <h4>
                    <a href="#" tabindex="0">iPadOS 14 introduces new designed specifically for iPad</a>
                    </h4>
                    </div>
                    <div class="tab--hover--meta">
                    <div class="post--meta--data">
                    <div class="post--meta--content">
                    <ul class="post--meta--list">
                    <li class="post--meta--date">January 24, 2021</li>
                    <li class="post--meta--time">4 min read</li>
                    </ul>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="img-col">
                        <a href="#" tabindex="0">
                            <img src="http://localhost/instantblog_html/instantblog_local_html/assets/Images/post-column-01-390x260.jpg" alt="">
                        </a>
                    </div>
                    </div>
               </div>
               <div class="post_col">
                <div class="slider--content--inner">
                <div class="ctnt-col">
                <div class="slider--content">
                <div class="slider--main--title">
                <h4>
                <a href="#" tabindex="0">iPadOS 14 introduces new designed specifically for iPad</a>
                </h4>
                </div>
                <div class="tab--hover--meta">
                <div class="post--meta--data">
                <div class="post--meta--content">
                <ul class="post--meta--list">
                <li class="post--meta--date">January 24, 2021</li>
                <li class="post--meta--time">4 min read</li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="img-col">
                    <a href="#" tabindex="0">
                        <img src="http://localhost/instantblog_html/instantblog_local_html/assets/Images/post-column-01-390x260.jpg" alt="">
                    </a>

                </div>


                </div>

           </div>
            </aside>

                <aside id="media_gallery-2" class="widget-sidebar widget widget_media_gallery widgets-sidebar hide_section"><div class="widget-title"><h3>Gallery</h3></div><div id="gallery-1" class="gallery galleryid-361 gallery-columns-3 gallery-size-thumbnail"><figure class="gallery-item">
                    <div class="gallery-icon landscape">
                    <img width="150" height="150" src="assets/Images/banner--slider-img.jpg" class="attachment-thumbnail size-thumbnail" alt="demo_image-26" loading="lazy" srcset="https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/demo_image-26-150x150.jpg 150w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/demo_image-26-300x300.jpg 300w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/demo_image-26-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px">
                    </div></figure><figure class="gallery-item">
                    <div class="gallery-icon landscape">
                    <img width="150" height="150" src="assets/Images/banner--slider-img.jpg" class="attachment-thumbnail size-thumbnail" alt="post-column-01-13" loading="lazy" srcset="https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/post-column-01-13-150x150.jpg 150w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/post-column-01-13-300x300.jpg 300w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/post-column-01-13-100x100.jpg 100w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/post-column-01-13-600x600.jpg 600w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/post-column-01-13-1024x1024.jpg 1024w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/post-column-01-13-768x768.jpg 768w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/post-column-01-13-1536x1536.jpg 1536w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/post-column-01-13.jpg 1920w" sizes="(max-width: 150px) 100vw, 150px">
                    </div></figure><figure class="gallery-item">
                    <div class="gallery-icon landscape">
                    <img width="150" height="150" src="assets/Images/banner--slider-img.jpg" class="attachment-thumbnail size-thumbnail" alt="demo_image-6" loading="lazy" srcset="https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/demo_image-6-150x150.jpg 150w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/demo_image-6-300x300.jpg 300w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/demo_image-6-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px">
                    </div></figure><figure class="gallery-item">
                    <div class="gallery-icon landscape">
                    <img width="150" height="150" src="assets/Images/banner--slider-img.jpg" class="attachment-thumbnail size-thumbnail" alt="demo_image-38" loading="lazy" srcset="https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/demo_image-38-1-150x150.jpg 150w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/demo_image-38-1-300x300.jpg 300w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/demo_image-38-1-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px">
                    </div></figure><figure class="gallery-item">
                    <div class="gallery-icon landscape">
                    <img width="150" height="150" src="assets/Images/banner--slider-img.jpg" class="attachment-thumbnail size-thumbnail" alt="post-column-01-4" loading="lazy" srcset="https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/post-column-01-4-150x150.jpg 150w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/post-column-01-4-300x300.jpg 300w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/post-column-01-4-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px">
                    </div></figure><figure class="gallery-item">
                    <div class="gallery-icon landscape">
                    <img width="150" height="150" src="assets/Images/banner--slider-img.jpg" class="attachment-thumbnail size-thumbnail" alt="post-column-01-6" loading="lazy" srcset="https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/post-column-01-6-150x150.jpg 150w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/post-column-01-6-300x300.jpg 300w, https://axilthemes.com/themes/blogar/wp-content/uploads/2021/01/post-column-01-6-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px">
                    </div></figure>
                    </div>
                    </aside>

        </div>
        </div>
    </div>
</section>
 <!-- search section -->
@endsection

@push('scripts')
<script>
    var getRestPostsURL = "{{ url('blog/getRestPosts') }}";
</script>
<script type="text/javascript" src="{{ asset('/custom/js/custom.js') }}"></script>
@endpush