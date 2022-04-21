<section class="most--populer">
    <div class="main--container">
        <div class="main--title">
            <h2>Most Popular</h2>
        </div>
        <div class="tab--wrapper">
            <div class="tab--titles tab--hover---title">
                <ul>
                    @if(!empty($popular_tags))
                        @foreach($popular_tags as $key=>$tag)
                            <li><a data-tag="tab{{$tag->id}}{{$key}}" class="{{($key==0)?'active--tab':''}}" href="#">{{$tag->title}}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="tab--slider--content">
                <div class="tab--slider--inner">
                @if(!empty($popular_tags))
                    @foreach($popular_tags as $keys=>$tag)
                        <?php 
                            $tag_posts =  $tag->posts()->orderBy('counter','desc')->take(4)->get();
                        ?>
                        <div id="tab{{$tag->id}}{{$keys}}" class="tab--hover-section" style="display: {{($keys==0)?'block':''}};">
                            @foreach($tag_posts as $key=>$tag_post)
                                <div class="tab--hover--wrapper">
                                  <div>
                                    <div class="tab--hover--inner">
                                        <div class="order--list">
                                            <span>{{ str_pad(($key+1),2,'0',STR_PAD_LEFT) }}</span>
                                        </div>
                                        <div class="tab--hover--data">
                                            <div class="post-cat-list">
                                                @foreach ($tag_post->tags as $t_key=>$tag)
                                                    @if($t_key > 0)
                                                        <span>,</span>
                                                    @endif
                                                    <a class="hover-flip-item-wrapper" href="{{url('/category/'.$tag->name)}}" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="{{ $tag->title }}">{{ $tag->title }}</span></span>
                                                    </a>
                                                @endforeach                
                                            </div>
                                            <h3><a href="{{url('/posts/'.$tag_post->post_slug)}}">{{$tag_post->post_title}}</a></h3>
                                            <div class="tab--hover--meta">
                                                <div class="post--meta--data">
                                                    <h5 class="post--meta--author">
                                                        <div class="post-cat-list">
                                                            <a class="hover-flip-item-wrapper" href="{{url('/category/'.$tag_post->tags[0]->name)}}" tabindex="0">
                                                            <span class="hover-flip-item"><span data-hover="{{$tag_post->tags[0]->title}}">{{$tag_post->tags[0]->title}}</span></span>
                                                            </a>                 
                                                                            
                                                        </div>
                                                    </h5>
                                                    <ul class="post--meta--list">
                                                        <li class="post--meta--date">{{\Carbon\Carbon::parse($tag_post->created_at)->format('F d, Y')}}</li>
                                                        <li class="post--meta--time"><i class="fa fa-eye" aria-hidden="true"></i> {{ shortNumber($tag_post->counter) }}</li>
                                                    </ul>
                                                </div>
                                                <div class="social--data">
                                                    <ul>
                                                        <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/posts/'.$tag_post->post_slug)}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                        <li><a target="_blank" href="http://www.linkedin.com/shareArticle?url={{url('/posts/'.$tag_post->post_slug)}}&title={{$tag_post->post_title}}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                        <li><a target="_blank" href="https://twitter.com/share?url={{url('/posts/'.$tag_post->post_slug)}}&text={{$tag_post->post_title}}"><i class="fa-brands fa-twitter"></i></a></li>
                                                        <li><a href="{{url('/posts/'.$tag_post->post_slug)}}" class="copyURI" data-id="{{$tag_post->id}}"><i class="fa-solid fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab--hover-thumbnil">
                                        <a href="#">
                                            <img src="{{ url('/uploads/'.$tag_post->post_media) }}" alt="">
                                        </a>
                                    </div>
                                 </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
    </div>
</section>