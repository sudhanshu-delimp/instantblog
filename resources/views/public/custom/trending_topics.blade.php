<!-- slide section -->
<section class="client_section banner--slider-section">
    <div class="main--container">
        <div class="main--title">
            <h2>Trending Topics</h2>
            <a class=" axil-link-button " href="#">See All Topics</a>
        </div>
        <div class="main">
            <div class="slider slider-for"></div>
            <div class="slider slider-nav">
                @foreach($trending_topics as $key_v=>$trending_topic)
                <div class="inner_box">
                    <div class="box_item">
                    <a href="{{url('/category/'.$trending_topic->name)}}">
                    <img src="{{ url('/uploads/'.$trending_topic->tag_media) }}" alt="">
                    <h5 class="title"> {{$trending_topic->title}} </h5></a>  
                    </div>
                </div>
                @endforeach
            </div>
          </div>
</div>
</section>
<!-- slide section end -->