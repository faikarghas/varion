@extends('components/layout.layout')
@section('content')
<div class="h_aks1"></div>
<header class="position-relative">
    @include('components/presentational/menu',['listMenu'=>$listMenu])
</header>
<main>
    <section class="section__fume-first">
        <div class="left-img"><img src="{{asset('images/fume-2.jpg')}}" alt="fume-img1" width="100%"></div>
        <div class="right-img"><img src="{{asset('images/fume-3.jpg')}}" alt="fume-img1" width="100%"></div>
    </section>
    <section class="section__fume-second">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title_wrapper">
                        <span class="spTitle"><strong>FUME KOPI INDONESIA</strong></span>
                        <h1 class="title">FROM BEANS TO BREW</h1>
                    </div>
                </div>
            </div>
            <div class="row g-lg-0">
                <div class="col-6 col-lg-3 cb_wr order-2 order-lg-1">
                    <div class="content-border">
                        <img src="{{asset('images/coffee-cup.png')}}" alt="fume cup" width="70px">
                    </div>
                </div>
                <div class="col-lg-6 cb_wr order-1 order-lg-2">
                    <div class="content-border">
                        <img src="{{asset('images/fume_kitchen_logo.png')}}" alt="fume cup" width="200px">
                    </div>
                </div>
                <div class="col-6 col-lg-3 cb_wr order-3 order-lg-3">
                    <div class="content-border">
                        <img src="{{asset('images/cutlery.png')}}" alt="fume cup" width="70px">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="content-beginning">
                        <h2>OUR BEGINNING</h2>
                        <p>Established in 2019, PT Fume Kopi Indonesia began the journey as a coffee roastery at Kemang, South Jakarta.
                            We have faith that each step of the whole process – from planting, harvesting, sorting, fermenting, drying,
                            milling, roasting, cupping to brewing – has always taken part in creating an exceptional flavor of the coffee.</p>
                    </div>
                </div>
            </div>
            <div class="row g-lg-0">
                <div class="col-lg-4 cb_wr2">
                    <div class="content-border2">
                        <div class="content-border2--sliderWrapper">
                            <div class="fume_cb2">
                                <div>
                                    <img src="{{asset('images/fumeb.png')}}" alt="fume cup" width="100%">
                                </div>
                                <div>
                                    <img src="{{asset('images/fumeb.png')}}" alt="fume cup" width="100%">
                                </div>
                                <div>
                                    <img src="{{asset('images/fumeb.png')}}" alt="fume cup" width="100%">
                                </div>
                            </div>
                            <ul class="fume_cb2_arrow">
                                <li class="fume_prev1">prev</li>
                                <li class="fume_next1">next</li>
                            </ul>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, consequatur. Vero vel totam cumque eligendi! Veniam aspernatur suscipit aperiam, reprehenderit quos recusandae.!</p>
                    </div>
                </div>
                <div class="col-lg-8 cb_wr2">
                    <div class="row g-lg-0" style="height: 100%;">
                        <div class="col-6 cb_wr2-1">
                            <div class="content-border2">
                                <img src="{{asset('images/fume-map.png')}}" alt="fume cup" >
                            </div>
                        </div>
                        <div class="col-6 cb_wr2-1">
                            <div class="content-border2">
                                <img src="{{asset('images/fume-roasting.png')}}" alt="fume cup" >
                            </div>
                        </div>
                        <div class="col-lg-12 cb_wr2-1">
                            <div class="content-border2">
                                <h2>OUR CREATION</h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio explicabo numquam consequuntur asperiores itaque obcaecati expedita eos libero quam aliquam?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="content-beginning">
                        <h2>ASIAN-WESTERN FUSION CUISINES PRESENTED <br/> BY OUR PASSIONATE JAPANESE CHEF.</h2>
                    </div>
                </div>
            </div>
            <div class="row g-lg-0">
                <div class="col-6 cb_wr3">
                    <div class="content-border">
                        <img src="{{asset('images/japanese_chef_icon.png')}}" alt="fume cup" width="140px">
                    </div>
                </div>
                <div class="col-6 cb_wr3">
                    <div class="content-border">
                        <div class="content-border--sliderWrapper">
                            <div class="fume_cb3">
                                <div>
                                    <img src="{{asset('images/fume-kitchen1.png')}}" alt="fume cup" width="100%">
                                </div>
                                {{-- <div>
                                    <img src="{{asset('images/jpm.png')}}" alt="fume cup" width="100%">
                                </div>
                                <div>
                                    <img src="{{asset('images/jpm.png')}}" alt="fume cup" width="100%">
                                </div> --}}
                            </div>
                            <ul class="fume_cb2_arrow">
                                <li class="fume_prev2">prev</li>
                                <li class="fume_next2">next</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-lg-0">
                <div class="col-lg-12">
                    <div class="end_desc">
                        <p>We proudly launched our first coffee shop outlet at Kemang in April 2020. With the 'homy' concept, we bring the atmosphere of being at home while serving our house blend coffee along with various Asian-Western fusion cuisines presented by our passionate Japanese chef. This year, we are expanding our signature outlet at Senopati, where the roastery, semi-outdoor, and fine-dining concept combines our coffee with cocktails and cuisines.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__fume-third">
        <div class="banner_wrapper">
            <div class="banner_wrapper-left" style="background-image: url('{{asset('images/fume-4.png')}}')">
                {{-- <img src="https://source.unsplash.com/400x340" alt="banner"> --}}
                <div class="desc"><h4>FUME KERTANEGARA<br/>BREWING SOON<br/>IN AUGUST 2021</h4></div>
            </div>
            <div class="banner_wrapper-right" style="background-image: url('{{asset('images/fume-5.png')}}')">
                {{-- <img src="https://source.unsplash.com/700x340" alt="banner"> --}}
                <div class="desc"><h4>PLANTATION &<br/>PROCESSING</h4></div>
                <div class="btn-readMore">
                    <a href="">READ MORE</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section__career-contact">
        @include('components/presentational/contact',['country'=>$country])
    </section>
</main>
@endsection

