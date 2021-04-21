@extends('components/layout.layout')
@section('content')
<div class="h_aks1"></div>
<header class="position-relative">
    <menu class="menu__home">
        @include('components/presentational/menuMobile')
        <div class="menu__home-logo"><img src="{{asset('/images/logo_black.png')}}" alt="" srcset=""  height="40px"></div>
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
        <div class="menu__home-navbar forMobile">
            <ul>
                <li class="open_menu">
                    <div id="menu-hamburger" class="">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </li>
            </ul>
        </div>
    </menu>

    <div class="container about__header">
        <div class="row">
            <div class="col-12 mb-5">
                <h1>WHEN GROWTH BECOMES<br/>OUR PASSION</h1>
            </div>
        </div>
    </div>
    <div class="slider__header m-0">
        <ul class="aboutHeaderSlider">
            <li style="background-image: url('https://source.unsplash.com/random/1255x500')"></li>
        </ul>
    </div>
    <div class="bg-headerAbout"></div>
    <div class="bg-headerAbout2"></div>
    <div class="h_aks2"></div>
</header>
<main>
    <section class="section__about-first">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h4>PT VARION CAPITAL MANAGEMENT</h4>
                    <h3>OUR MISSION IS FOR THE EXISTING<br/>
                        NATIONAL INDUSTRY TO KEEP THRIVING<br/>
                        AS THE WHOLE WORLD EVOLVES.</h3>
                    <p>Varion Capital Management as the core of Varion & Co. is a company
                        involved in investment and business development, headquartered in Jakarta.
                        We aim to drive the growth of existing business with potentials and promote
                        new opportunities to committed investors.</p>
                    <p>We provide a comprehensive range of investment products & services
                        including funds, portfolio management and advisory among others. As our
                        team responsible for business management, we also given opportunity to
                        creatively work and develop our own business and become project leader in
                        the future and expanding Varion & Co. group.</p>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="img__wrapper">
                        <div class="img__wrapper-front"><img src="https://source.unsplash.com/random/1255x500" width="100%" height="100%" alt=""></div>
                        <div class="img__wrapper-back"><img src="https://source.unsplash.com/random/1255x501" width="100%" height="100%"     alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-mainAboutFirst"></div>
        <div class="bg-mainAboutFirst2"></div>
    </section>
    <section class="section__about-second">
        <div class="container">
            <div class="row">
                <div class="col-12"><div class="hr"></div></div>
                <div class="col-12 col-lg-4 mb-5">
                    <div class="img__wrapper">
                        <img src="https://source.unsplash.com/random/1255x701" width="100%" height="100%" alt="">
                    </div>
                    <div class="desc__wrapper">
                        <h3 class="mb-4">INVESTMENT</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-5">
                    <div class="img__wrapper">
                        <img src="https://source.unsplash.com/random/1255x702" width="100%" height="100%" alt="">
                    </div>
                    <div class="desc__wrapper">
                        <h3 class="mb-4">BUSINESS DEVELOPMENT</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-5">
                    <div class="img__wrapper">
                        <img src="https://source.unsplash.com/random/1255x703" width="100%" height="100%" alt="">
                    </div>
                    <div class="desc__wrapper">
                        <h3 class="mb-4">CAPITAL MANAGEMENT</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
                    </div>
                </div>
                <div class="col-12"><div class="hr mb-0"></div></div>
            </div>
        </div>
        <div class="bg-mainAboutSecond"></div>
    </section>
    <section class="section__about-third">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner__wrapper">
                        <h3>OUR PARTNERS</h3>
                        <ul>
                            <li><img src="{{asset('/images/varion.png')}}" alt=""></li>
                            <li><img src="{{asset('/images/varion.png')}}" alt=""></li>
                            <li><img src="{{asset('/images/varion.png')}}" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__about-contact">
        @include('components/presentational/contact')
    </section>
</main>
@endsection

