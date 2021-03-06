<section class="tab--slider">
    <div class="main--container">
        <div class="main--title">
            <h2>{{$home_tag->title}}</h2>
        </div>

        <div class="tab--wrapper">
            <div class="tab--titles tab--slider-tab">
                <ul>
                    @if(!$home_sub_tags->isEmpty())
                        @foreach($home_sub_tags as $key=>$home_sub_tag)
                            <li><a data-tag="tab{{$home_sub_tag->id}}" class="{{($key==0)?'active--tab':''}}" href="#">{{$home_sub_tag->title}}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="tab--slider--content">
                <div class="tab--slider--inner">
                @if(!$home_sub_tags->isEmpty())
                    @foreach($home_sub_tags as $key=>$home_sub_tag)
                    <div id="tab{{$home_sub_tag->id}}" class="tab--slider-tabs {{($key==0)?'block--tab':''}}">
                        <div class="tab---sliders">
                           @php ($home_sub_tag_posts = $home_sub_tag->posts()->where(['post_live'=>1])->latest()->take(10)->get())
                            @foreach($home_sub_tag_posts as $key=>$post)
                                <div class="slider--content--wrapper">
                                    <div class="slider-contant--main">
                                        <div class="slider-contant">
                                            <div class="slider-animate-title">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="{{url('/category/'.$home_sub_tag->name)}}" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="{{$home_sub_tag->title}}">{{$home_sub_tag->title}}</span></span>
                                                    </a>                 
                                                </div>
                                            </div>
                                            <div class="slider--main--title">
                                                <h4>
                                                <a href="{{url('/posts/'.$post->post_slug)}}">{{$post->post_title}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="slider--img">
                                            <a href="{{url('/posts/'.$post->post_slug)}}">
                                                <img src="{{ url('/uploads/'.$post->post_media) }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @if($key>9)
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                    @elseif(!empty($home_tag))
                        <div class="tab---sliders">
                        @php ($home_tag_posts = $home_tag->posts()->where(['post_live'=>1])->latest()->take(10)->get())
                            @foreach($home_tag_posts as $key=>$post)
                                <div class="slider--content--wrapper">
                                    <div class="slider-contant--main">
                                        <div class="slider-contant">
                                            <div class="slider-animate-title">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="{{url('/category/'.$home_tag->name)}}" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="{{$home_tag->title}}">{{$home_tag->title}}</span></span>
                                                    </a>                 
                                                </div>
                                            </div>
                                            <div class="slider--main--title">
                                                <h4>
                                                <a href="{{url('/posts/'.$post->post_slug)}}">{{$post->post_title}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="slider--img">
                                            <a href="{{url('/posts/'.$post->post_slug)}}">
                                                <img src="{{ url('/uploads/'.$post->post_media) }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @if($key>9)
                                    @break
                                @endif
                            @endforeach
                        </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</section>