@foreach($rest_posts as $key=>$rest_post)
@php ($last_id = $rest_post->id)
<div class="slider--content--inner sbs_rest_post_item" data-item="{{$rest_post->id}}">
<div class="ctnt-col">
<div class="slider--content">
<div class="post-cat-list">
@foreach ($rest_post->tags as $tg_key=>$tag)
    @if($tg_key > 0)
        <span>,</span>
    @endif
    <a class="hover-flip-item-wrapper" href="{{url('/category/'.$tag->name)}}" tabindex="0">
        <span class="hover-flip-item"><span data-hover="{{ $tag->title }}">{{ $tag->title }}</span></span>
    </a> 
@endforeach 
</div>
<div class="slider--main--title">
<h4>
<a href="{{url('/posts/'.$rest_post->post_slug)}}" tabindex="0">{{ str_limit($rest_post->post_title, 50) }}</a>
</h4>
</div>
<div class="tab--hover--meta">
<div class="post--meta--data">
<div class="post--meta--avtaar">
<img src="{{ url('/images/'.$rest_post->user->avatar) }}" alt="">
</div>
<div class="post--meta--content">
<h5 class="post--meta--author">
<div class="post-cat-list">
<a class="hover-flip-item-wrapper" href="{{ url('/profile/' . $rest_post->user->username) }}" tabindex="0">
<span class="hover-flip-item"><span data-hover="{{$rest_post->user->username}}">{{$rest_post->user->username}}</span></span>
</a>                 
</div>
</h5>
<ul class="post--meta--list">
<li class="post--meta--date">{{ \Carbon\Carbon::parse($rest_post->created_at)->format('F d, Y')}}</li>
<li class="post--meta--time"><i class="fa fa-eye" aria-hidden="true"></i> {{ shortNumber($rest_post->counter) }}</li>
</ul>
</div>
</div>

<div class="social--data">
<ul>
<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('/posts/'.$rest_post->post_slug)}}"><i class="fa-brands fa-facebook-f"></i></a></li>
<li><a target="_blank" href="http://www.linkedin.com/shareArticle?url={{url('/posts/'.$rest_post->post_slug)}}&title={{$rest_post->post_title}}"><i class="fa-brands fa-linkedin-in"></i></a></li>
<li><a target="_blank" href="https://twitter.com/share?url={{url('/posts/'.$rest_post->post_slug)}}&text={{$rest_post->post_title}}"><i class="fa-brands fa-twitter"></i></a></li>
<li><a href="{{url('/posts/'.$rest_post->post_slug)}}" class="copyURI" data-id="{{$rest_post->id}}"><i class="fa-solid fa-link"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="img-col">
<a href="#" tabindex="0">
<img src="{{ url('/uploads/'.$rest_post->post_media) }}" alt="">
</a>

</div>
</div>
@endforeach

@if($rest_post_count > (count($rest_posts)+$existing_count) )
<a href=""class="btn load_more_rest_post" last-post-id = "{{$last_id}}" restrict-data="{{$not_in_ids}}">Load More</a>
@endif