<section class="featured_post banner--slider-section">
    <div class="main--container">
        <div class="main--title">
            <h2>More Featured Posts.</h2>
        </div>
        <div class="featured_post_wrapper">
            @foreach($featured_posts as $key=>$featured_post)
                <div class="post_col {{($key == 0)?'active':''}}">
                    <div class="slider--content--inner">
                        <div class="ctnt-col">
                        <div class="slider--content">
                        @if (count($featured_post->tags))
                        <div class="post-cat-list">
                            @foreach ($featured_post->tags as $t_key=>$tag)
                                @if($t_key > 0)
                                    <span>,</span>
                                @endif
                                <a class="hover-flip-item-wrapper" href="{{url('/category/'.$tag->name)}}" tabindex="0">
                                <span class="hover-flip-item"><span data-hover="{{ $tag->title }}">{{ $tag->title }}</span></span>
                                </a> 
                            @endforeach
                        </div>
                        @endif
                        <div class="slider--main--title">
                            <h4>
                            <a href="{{url('/posts/'.$featured_post->post_slug)}}" tabindex="0">{{ str_limit($featured_post->post_title, 50) }}</a>
                            </h4>
                        </div>
                        <div class="tab--hover--meta">
                        <div class="post--meta--data">
                        <div class="post--meta--avtaar">
                            <img src="{{ url('/images/'.$featured_post->user->avatar) }}" alt="">
                        </div>
                        <div class="post--meta--content">
                            <h5 class="post--meta--author">
                                <div class="post-cat-list">
                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                    <span class="hover-flip-item"><span data-hover="{{$featured_post->user->username}}">{{$featured_post->user->username}}</span></span>
                                    </a>                 
                                </div>
                            </h5>
                            <ul class="post--meta--list">
                                <li class="post--meta--date">{{ \Carbon\Carbon::parse($featured_post->created_at)->format('F d, Y')}}</li>
                                <li class="post--meta--time"><i class="fa fa-eye" aria-hidden="true"></i> {{ shortNumber($slider_post->counter) }}</li>
                            </ul>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="img-col">
                        <a href="#" tabindex="0">
                            <img src="{{ url('/uploads/'.$featured_post->post_media) }}" alt="">
                        </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>