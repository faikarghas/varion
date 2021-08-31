@extends('components/layout.layout')
@section('content')
<div class="h_aks1"></div>
<header class="position-relative fumeHead">
    @include('components/presentational/menu',['listMenu'=>$listMenu])
    <div class="slider__header fumex forMobile" style="background-color: #2E2D35;">
        <ul class="m-0">
            <li class="">
                <div class="">
                    <img src="{{asset('images')}}/fume-2.jpg" alt="fume-img1" height="200" width="100%">
                    <img src="{{asset('images')}}/fume-3.jpg" alt="fume-img2" height="100" width="100%">
                </div>
                <div class="aboutHeaderSlider-item--desc forMobile">
                    <div class="container-fluid g-0">
                        <div class="row g-0">
                            <div class="col-8 pt-5 pb-5">
                                {{-- <h4>{!!$titleHeader!!}</h4> --}}
                                <div class="title_wrapper">
                                    <span class="spTitle"><strong>FUME KOPI INDONESIA</strong></span>
                                    <h1 class="title"><strong>FROM BEANS TO BREW</strong></h1>
                                </div>
                            </div>
                            <div class="col-6" style="background-color: #2E2D35"></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
<main>
    <section class="section__fume-first forDesktop-dflex">
        <div class="left-img"><img src="{{asset('images/fume-2.jpg')}}" alt="fume-img1" width="100%"></div>
        <div class="right-img"><img src="{{asset('images/fume-3.jpg')}}" alt="fume-img1" width="100%"></div>
    </section>
    <section class="section__fume-second">
        <div class="container">
            <div class="row forDesktop">
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
                        <p>PT Fume Kopi Indonesia began its journey as a coffee roastery in Kemang, South Jakarta, in 2019. We believe that each step of the coffee production process – from planting, harvesting, sorting, fermenting, drying, milling, roasting, cupping, and brewing – has always contributed to the coffee's exceptional flavor. We create a seed-to-cup ecosystem of stockholders that is constantly discovering new ways to be creative in the coffee-making process.</p>
                    </div>
                </div>
            </div>
            <div class="row g-lg-0">
                <div class="col-lg-4 cb_wr2">
                    <div class="content-border2">
                        <div class="content-border2--sliderWrapper">
                            <div class="">
                                <div>
                                    <img src="{{asset('images/fumeb.png')}}" alt="fume cup" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 cb_wr2">
                    <div class="row g-lg-0" style="height: 100%;">
                        <div class="col-12 col-lg-6 cb_wr2-1 map-bt">
                            <div class="content-border2">
                                <img src="{{asset('images/fume-map.png')}}" width="80%" alt="fume cup" >
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 cb_wr2-1">
                            <div class="content-border2">
                                <img src="{{asset('images/fume-roasting.png')}}" width="80%" alt="fume cup" >
                            </div>
                        </div>
                        <div class="col-lg-12 cb_wr2-1">
                            <div class="content-border2">
                                <div class="sodmed-fume">
                                    <h2>FOLLOW US</h2>
                                    <div class="ig-s"><span><img src="{{asset('images/instagram.svg')}}" width="20px" alt=""></span><a href="https://www.instagram.com/fume.coffee/" target="_blank" rel="noopener">@fume.coffee</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-lg-0">
                <div class="col-lg-12">
                    <div class="content-beginning"  style="border-bottom: 1px solid #ffffff47">
                        <p>We proudly launched our first coffee shop outlet at Kemang in April 2020. With the 'homy' concept, we bring the atmosphere of being at home while serving our house blend coffee along with various Asian-Western fusion cuisines presented by our passionate Japanese chef. This year, we are expanding our signature outlet at Senopati, where the roastery, semi-outdoor, and fine-dining concept combines our coffee with cocktails and cuisines.</p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-lg-0 fume_contact-pad">
                <div class="col-12 col-lg-4 fume_contact">
                    <div class="fumee_contact_item">
                        <p><strong>Coffee Roaster and Trading Consultant Management</strong></p>
                        <p>Jl. Kemang Utara No.9, RT.3/RW.4,<br>
                            Bangka, Kec. Mampang Prpt.,<br>
                            Kota Jakarta Selatan,<br>
                            Daerah Khusus Ibukota<br>
                            Jakarta 12730</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 fume_contact">
                    <div class="fumee_contact_item">
                        <p><strong>Fume Coffee Shop</strong></p>
                        <p>Wisma46 Building, 45th Floor,<br>
                            Jalan Jenderal Sudirman,<br>
                            Kav-1, Jakarta,</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 fume_contact">
                    <div class="fumee_contact_item">
                        <p><strong>Fume Coffee & Kitchen</strong></p>
                        <p>Jl. Kemang Utara No.9, RT.3/RW.4,<br>
                            Bangka, Kec. Mampang Prpt.,<br>
                            Kota Jakarta Selatan,<br>
                            Daerah Khusus Ibukota<br>
                            Jakarta 12730</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__fume-third">
        <div class="banner_wrapper">
            <div class="banner_wrapper-left" style="background-image: url('{{asset('images/fume-4.png')}}')">
                <div class="desc"><h4>FUME KERTANEGARA<br/>BREWING SOON<br/>IN AUGUST 2021</h4></div>
            </div>
            <div class="banner_wrapper-right" style="background-image: url('{{asset('images/fume-5.png')}}')">
                <div class="desc"><h4>PLANTATION &<br/>PROCESSING</h4></div>
                <div class="btn-readMore">
                    <a href="{{route('sub.data','pt-varion-sukses-makmur')}}">READ MORE</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section__career-contact">
        @include('components/presentational/contact',['country'=>$country])
    </section>
</main>
@endsection

