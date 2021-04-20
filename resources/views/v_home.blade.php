@extends('components/layout.layout')
@section('content')
<header>
    <menu class="menu__home">
        <div class="menu__home-logo"><img src="{{asset('/images/logo_black.png')}}" alt="" srcset="" width="222px" height="40px"></div>
        <div class="menu__home-link forDesktop-dflex">
            <ul>
                <li><a href="">HOME</a></li>
                <li><a href="{{route('about')}}">ABOUT US</a></li>
                <li class="dropdown_link">
                    <a href="">SUBSIDIARIES</a>
                    <ul class="sub__menu">
                        <li><a href="{{url('subsidiaries/pt-varion-sukses-makmur')}}">PT VARION SUKSES MAKMUR</a></li>
                        <li><a href="{{url('subsidiaries/fume-kopi-indonesia')}}">FUME KOPI INDONESIA</a></li>
                        <li><a href="{{url('subsidiaries/pt-varion-agritech-indonesia')}}">PT VARION AGRITECH INDONESIA</a></li>
                        <li><a href="{{url('subsidiaries/pt-varion-agro-sentosa')}}">PT VARION AGRO SENTOSA</a></li>
                    </ul>
                </li>
                <li><a href="{{route('contact')}}">CONTACT</a></li>
                <li><a href="{{route('career')}}">CAREER</a></li>
            </ul>
        </div>
        <div class="menu__home-navbar"></div>
    </menu>
    <div class="slider__header">
        <ul class="homeHeaderSlider">
            <li style="background-image: url('https://source.unsplash.com/random/1255x500')">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="slider__header-desc forDesktop">
                                <h1>AT VARION&CO, WE CONSTANTLY GROW TO CONTRIBUTE & ENDLESSLY INNOVATE THROUGH TECHNOLOGY</h1>
                                <div class="learn__button"><a href="{{route('home')}}">LEARN MORE</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url('https://source.unsplash.com/random/1255x501')">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="slider__header-desc forDesktop">
                                <h1>AT VARION&CO, WE CONSTANTLY GROW TO CONTRIBUTE & ENDLESSLY INNOVATE THROUGH TECHNOLOGY</h1>
                                <div class="learn__button"><a href="{{route('home')}}">LEARN MORE</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="bg-headerHome"></div>
    <div class="h_aks1"></div>
    <div class="h_aks2"></div>
</header>
<main>
    <section class="sectionHome__subsidiaries">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-4 sectionHome__subsidiaries-left">
                    <div class="slider-for">
                        <div>
                            <h3>OUR<br/>SUBSIDIARIES</h3>
                            <h4>PT VARION CAPTAL MANAGEMENT</h4>
                            <h3 class="text-dark">WHEN GROWTH<br/>BECOMES OUR<br/>PASSION</h3>
                            <p class="sectionHome__subsidiaries-desc">Our mission is for the existing national industry to keep thriving as the whole world evolves. we also devote ourselves to create a profitable collaboration with our indonesian partners.</p>
                            <div class="learn__button-dark"><a href="{{route('home')}}">LEARN MORE</a></div>
                        </div>
                        <div>
                            <h3>OUR<br/>SUBSIDIARIES</h3>
                            <h4>PT VARION CAPTAL MANAGEMENT</h4>
                            <h3 class="text-dark">WHEN GROWTH<br/>BECOMES OUR<br/>PASSION</h3>
                            <p class="sectionHome__subsidiaries-desc">Our mission is for the existing national industry to keep thriving as the whole world evolves. we also devote ourselves to create a profitable collaboration with our indonesian partners.</p>
                            <div class="learn__button-dark"><a href="{{route('home')}}">LEARN MORE</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-8 d-flex align-items-end position-relative sectionHome__subsidiaries-right">
                    <div class="paging__info">
                        <p class="paging__info-curr"></p>
                        <p>/</p>
                        <p class="paging__info-total"></p>
                    </div>
                    <ul class="slider-nav">
                        <li><img src="https://source.unsplash.com/random/745x360" width="100%" height="360px" alt=""><div class="box_number"><p></p></div></li>
                        <li><img src="https://source.unsplash.com/random/745x361" width="100%" height="360px" alt=""><div class="box_number"><p></p></div></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-sliderSub"></div>
        <div class="bg-sliderSub2"></div>
    </section>
    <section class="sectionHome__slider">
        <ul class="homeSectionSlider">
            <li><img src="https://source.unsplash.com/random/430x430" alt="" width="100%" height="100%"></li>
            <li><img src="https://source.unsplash.com/random/430x431" alt="" width="100%" height="100%"></li>
            <li><img src="https://source.unsplash.com/random/430x432" alt="" width="100%" height="100%"></li>
            <li><img src="https://source.unsplash.com/random/430x433" alt="" width="100%" height="100%"></li>
            <li><img src="https://source.unsplash.com/random/430x434" alt="" width="100%" height="100%"></li>
        </ul>
    </section>
    <section class="sectionHome__contact">
        @include('components/presentational/contact')
    </section>
</main>
@endsection

