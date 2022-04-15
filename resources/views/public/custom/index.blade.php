@extends('layouts.custom')

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

<!-- tab Section -->
<section class="tab--slider">
    <div class="main--container">
        <div class="main--title">
            <h2>Innovation & Tech</h2>
        </div>

        <div class="tab--wrapper">
            <div class="tab--titles tab--slider-tab">
                <ul>
                    <li><a data-tag="tab1" class="active--tab" href="#">Accessibility</a></li>
                    <li><a data-tag="tab2" href="#">Android Dev</a> </li>
                    <li><a data-tag="tab3" href="#">Gadgets</a></li>
                </ul>
            </div>
            <div class="tab--slider--content">
                <div class="tab--slider--inner">
                    <div id="tab1" class="tab--slider-tabs">
                        <div class="tab---sliders">
                            
                            <div class="slider--content--wrapper">
                                <div class="slider-contant--main">
                                    <div class="slider-contant">
                                        <div class="slider-animate-title">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                </a>                 
                                            </div>
                                        </div>
                                        <div class="slider--main--title">
                                            <h4>
                                                <a href="#">Lightweight, grippable, and ready to go.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="slider--img">
                                        <a href="#">
                                            <img src="{{ asset('/custom/Images/post-column-01-390x260.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider--content--wrapper">
                                <div class="slider-contant--main">
                                    <div class="slider-contant">
                                        <div class="slider-animate-title">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                </a>                 
                                            </div>
                                        </div>
                                        <div class="slider--main--title">
                                            <h4>
                                                <a href="#">Lightweight, grippable, and ready to go.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="slider--img">
                                        <a href="#">
                                            <img src="{{ asset('/custom/Images/post-column-01-390x260.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider--content--wrapper">
                                <div class="slider-contant--main">
                                    <div class="slider-contant">
                                        <div class="slider-animate-title">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                </a>                 
                                            </div>
                                        </div>
                                        <div class="slider--main--title">
                                            <h4>
                                                <a href="#">Lightweight, grippable, and ready to go.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="slider--img">
                                        <a href="#">
                                            <img src="{{ asset('/custom/Images/post-column-01-390x260.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider--content--wrapper">
                                <div class="slider-contant--main">
                                    <div class="slider-contant">
                                        <div class="slider-animate-title">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                </a>                 
                                            </div>
                                        </div>
                                        <div class="slider--main--title">
                                            <h4>
                                                <a href="#">Lightweight, grippable, and ready to go.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="slider--img">
                                        <a href="#">
                                            <img src="{{ asset('/custom/Images/post-column-01-390x260.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
                    </div>
                    <div id="tab2" class="tab--slider-tabs">
                        <div class="tab---sliders2">
                            
                            <div class="slider--content--wrapper">
                                <div class="slider-contant--main">
                                    <div class="slider-contant">
                                        <div class="slider-animate-title">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                </a>                 
                                            </div>
                                        </div>
                                        <div class="slider--main--title">
                                            <h4>
                                                <a href="#">Lightweight, grippable, and ready to go.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="slider--img">
                                        <a href="#">
                                            <img src="{{ asset('/custom/Images/post-column-01-390x260.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider--content--wrapper">
                                <div class="slider-contant--main">
                                    <div class="slider-contant">
                                        <div class="slider-animate-title">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                </a>                 
                                            </div>
                                        </div>
                                        <div class="slider--main--title">
                                            <h4>
                                                <a href="#">Lightweight, grippable, and ready to go.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="slider--img">
                                        <a href="#">
                                            <img src="{{ asset('/custom/Images/post-column-01-390x260.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider--content--wrapper">
                                <div class="slider-contant--main">
                                    <div class="slider-contant">
                                        <div class="slider-animate-title">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                </a>                 
                                            </div>
                                        </div>
                                        <div class="slider--main--title">
                                            <h4>
                                                <a href="#">Lightweight, grippable, and ready to go.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="slider--img">
                                        <a href="#">
                                            <img src="{{ asset('/custom/Images/post-column-01-390x260.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider--content--wrapper">
                                <div class="slider-contant--main">
                                    <div class="slider-contant">
                                        <div class="slider-animate-title">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                </a>                 
                                            </div>
                                        </div>
                                        <div class="slider--main--title">
                                            <h4>
                                                <a href="#">Lightweight, grippable, and ready to go.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="slider--img">
                                        <a href="#">
                                            <img src="{{ asset('/custom/Images/post-column-01-390x260.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
                    </div>
                    <div id="tab3" class="tab--slider-tabs">
                        <div class="tab---sliders3">
                            
                            <div class="slider--content--wrapper">
                                <div class="slider-contant--main">
                                    <div class="slider-contant">
                                        <div class="slider-animate-title">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                </a>                 
                                            </div>
                                        </div>
                                        <div class="slider--main--title">
                                            <h4>
                                                <a href="#">Lightweight, grippable, and ready to go.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="slider--img">
                                        <a href="#">
                                            <img src="{{ asset('/custom/Images/post-column-01-390x260.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider--content--wrapper">
                                <div class="slider-contant--main">
                                    <div class="slider-contant">
                                        <div class="slider-animate-title">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                </a>                 
                                            </div>
                                        </div>
                                        <div class="slider--main--title">
                                            <h4>
                                                <a href="#">Lightweight, grippable, and ready to go.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="slider--img">
                                        <a href="#">
                                            <img src="{{ asset('/custom/Images/post-column-01-390x260.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider--content--wrapper">
                                <div class="slider-contant--main">
                                    <div class="slider-contant">
                                        <div class="slider-animate-title">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                </a>                 
                                            </div>
                                        </div>
                                        <div class="slider--main--title">
                                            <h4>
                                                <a href="#">Lightweight, grippable, and ready to go.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="slider--img">
                                        <a href="#">
                                            <img src="{{ asset('/custom/Images/post-column-01-390x260.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider--content--wrapper">
                                <div class="slider-contant--main">
                                    <div class="slider-contant">
                                        <div class="slider-animate-title">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                </a>                 
                                            </div>
                                        </div>
                                        <div class="slider--main--title">
                                            <h4>
                                                <a href="#">Lightweight, grippable, and ready to go.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="slider--img">
                                        <a href="#">
                                            <img src="{{ asset('/custom/Images/post-column-01-390x260.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- hover img section -->
<section class="most--populer">
    <div class="main--container">
        <div class="main--title">
            <h2>Innovation & Tech</h2>
        </div>

        <div class="tab--wrapper">
            <div class="tab--titles tab--hover---title">
                <ul>
                    <li><a data-tag="tab4" class="active--tab" href="#">Accessibility</a></li>
                    <li><a data-tag="tab5" href="#">Android Dev</a> </li>
                    <li><a data-tag="tab6" href="#">Blockchain</a></li>
                    <li><a data-tag="tab7" href="#">Gadgets</a></li>
                </ul>
            </div>
            <div class="tab--slider--content">
                <div class="tab--slider--inner">
                    <div id="tab4" class="tab--hover-section">
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>01</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img1.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>02</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img2.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>03</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img3.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>04</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img4.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="tab5" class="tab--hover-section">
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>01</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img1.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>02</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img2.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>03</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img3.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>04</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img4.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="tab6" class="tab--hover-section">
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>01</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img1.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>02</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img2.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>03</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img3.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>04</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img4.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="tab7" class="tab--hover-section">
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>01</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img1.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>02</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img2.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>03</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img3.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tab--hover--wrapper">
                            <div class="tab--hover--inner">
                                <div class="order--list">
                                    <span>04</span>
                                </div>
                                <div class="tab--hover--data">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>  
                                        <span>,</span>               
                                        <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                        <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                        </a>                 
                                    </div>
                                    <h3><a href="#">Lightweight, grippable, and ready to go.</a></h3>
                                    <div class="tab--hover--meta">
                                        <div class="post--meta--data">
                                            <h5 class="post--meta--author">
                                                <div class="post-cat-list">
                                                    <a class="hover-flip-item-wrapper" href="#" tabindex="0">
                                                    <span class="hover-flip-item"><span data-hover="Innovation">Innovation</span></span>
                                                    </a>                 
                                                                    
                                                </div>
                                            </h5>
                                            <ul class="post--meta--list">
                                                <li class="post--meta--date">January 24, 2021</li>
                                                <li class="post--meta--time">4 min read</li>
                                            </ul>
                                        </div>
                                        <div class="social--data">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab--hover-thumbnil">
                                <a href="#">
                                    <img src="{{ asset('/custom/Images/hover--img4.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hover img section end -->
@endsection
@section('script')
<script>
$(document).ready(function(){
        
    $("#tab1").addClass("block--tab");
    $("#tab4").fadeIn();
    $('.tab--hover---title ul li a').click(function(e){
        e.preventDefault();
        var ths = $(this);
        var tagid = $(this).data('tag');
        $('.tab--hover---title ul li a').removeClass('active--tab');
        ths.addClass("active--tab");
        $(".most--populer .tab--slider--inner .tab--hover-section").fadeOut();
        $('#'+tagid).fadeIn();
        
    });


    $('.tab--slider-tab ul li a').on("click", function(e){
        e.preventDefault();
        var ths = $(this);
        var tagid = $(this).data('tag');
        $('.tab--slider-tab ul li a').removeClass('active--tab');
        ths.addClass("active--tab");
        $(".tab--slider--inner .tab--slider-tabs").removeClass("block--tab");
        // $('#'+tagid).delay(500).queue(function(){$('#'+tagid).addClass('block--tab')});
            setTimeout(function(){ 
                $('#'+tagid).addClass("block--tab");
    }, 300);
        
    });

    // slider

    $('.tab---sliders').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next'><i class='fa-solid fa-arrow-right'></i></button>",
        responsive: [
            {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });


        $('.tab---sliders2').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next'><i class='fa-solid fa-arrow-right'></i></button>",
        responsive: [
            {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });


        $('.tab---sliders3').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next'><i class='fa-solid fa-arrow-right'></i></button>",
        responsive: [
            {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });

        // banner slider
        $('.banner--slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev'><i class='fa-solid fa-arrow-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next'><i class='fa-solid fa-arrow-right'></i></button>",
        responsive: [
            {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });
    });
// swiper js
</script>
@endsection