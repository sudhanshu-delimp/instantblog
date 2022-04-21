<div class="slider--content--wrapper">
    <div class="slider--content--inner">
    <div class="slider--thumbnail">
    <a href="#">
    <img src="{{ url('/uploads/'.$slider_post->post_media) }}" alt="">
    </a>
    </div>
    <div class="slider--content">
    <div class="post-cat-list">
    @if (count($slider_post->tags))
        <div class="category">
            @foreach ($slider_post->tags as $tag)
                <a class="hover-flip-item-wrapper" href="{{url('/category/'.$tag->name)}}" tabindex="0">
                    <span class="hover-flip-item"><span data-hover="{{ $tag->title }}">{{ $tag->title }}</span></span>
                </a> 
            @endforeach
        </div>
    @endif
    </div>
    <div class="slider--main--title">
    <h4>
        <a href="{{url('/posts/'.$slider_post->post_slug)}}" tabindex="0">{{ str_limit($slider_post->post_title, 50) }}</a>
    </h4>
    </div>
    <div class="tab--hover--meta">
    <div class="post--meta--data">
        <div class="post--meta--avtaar">
            <img src="{{ url('/images/'.$slider_post->user->avatar) }}" alt="">
        </div>
        <div class="post--meta--content">
            <h5 class="post--meta--author">
                <div class="post-cat-list">
                    <a class="hover-flip-item-wrapper" href="{{ url('/profile/' . $slider_post->user->username) }}" tabindex="0">
                    <span class="hover-flip-item"><span data-hover="{{$slider_post->user->username}}">{{$slider_post->user->username}}</span></span>
                    </a>                 
                </div>
            </h5>
            <ul class="post--meta--list">
                <li class="post--meta--date">{{ \Carbon\Carbon::parse($slider_post->created_at)->format('F d, Y')}}</li>
                <li class="post--meta--time"><i class="fa fa-eye" aria-hidden="true"></i> {{ shortNumber($slider_post->counter) }}</li>
            </ul>
        </div>
    </div>
    <div class="social--data">
        <ul>
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
        </ul>
    </div>
    <div class="read--post--btn">
        <a href="{{url('/posts/'.$slider_post->post_slug)}}">
            <span class="hover-flip-item"><span data-hover="Read Post">Read Post</span></span>
        </a>
    </div>
    </div>
    </div>
    </div>
    </div>