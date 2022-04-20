@extends('layouts.custom')
@section('bodyclass')
    <body class="d-flex flex-column h-100">
@endsection
@section('content')
<!-- banner slider -->
    @if(!empty($slider_posts))
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
@if(!empty($featured_posts))
    @include('public.custom.featured_post')
@endif
<!-- Featured post end -->

<!-- tab Section -->
@if(!empty($home_tag) && !empty($home_sub_tags))
    @include('public.custom.home_tag_section')  
@endif

@if(!empty($trending_topics))
    @include('public.custom.trending_topics')
@endif
<!-- hover img section -->
@if(!empty($popular_tags))
    @include('public.custom.home_popular_tag_section')
@endif
<!-- hover img section end -->
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('/custom/js/custom.js') }}"></script>
@endsection