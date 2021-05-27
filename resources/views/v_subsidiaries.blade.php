@extends('components/layout.layout')
@section('content')
<div class="h_aks1"></div>
        <header class="position-relative">
            <menu class="menu__home">
                @include('components/presentational/menuMobile')
                <div class="menu__home-logo"><a href="{{url('/')}}"><img src="{{asset('/images/logo_black.png')}}" alt="" srcset=""  height="40px"></a></div>
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
            <div class="slider__header">
                <ul class="aboutHeaderSlider">
                    @foreach ($slider as $item)
                        <li style="background-image: url('https://source.unsplash.com/random/1255x500')">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <div class="slider__header-desc">
                                            <h1>{{$item->description}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-headerAbout"></div>
            <div class="bg-headerAbout2"></div>
            <div class="h_aks2"></div>
        </header>
        <main>
            <section class="section__subsidiaries-first">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4>{{$name}}</h4>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="img__wrapper">
                                <div class="img__wrapper-front"><img src="https://source.unsplash.com/random/1255x500" width="100%" height="100%" alt=""></div>
                                <div class="img__wrapper-back"><img src="https://source.unsplash.com/random/1255x501" width="100%" height="100%"     alt=""></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <h3>{{$title}}</h3>
                            {!! $description !!}
                        </div>
                    </div>
                </div>
                <div class="bg-mainSubsiFirst"></div>
                <div class="bg-mainSubsiFirst2"></div>
            </section>
            <section class="section__subsidiaries-second">
                <div class="container">
                    <div class="row">
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
                    </div>
                </div>
                <div class="bg-mainSubsiSecond"></div>
            </section>
            <section class="section__subsidiaries-third">
                <div class="banner__subsidiaries" style="background-image: url('https://source.unsplash.com/random/1255x1200')">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner__subsidiaries-desc">
                                    <h2 class="mb-4">WILL BE ON THEM<br/> MARKET IN 2022</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh euismod tincidunt ut laoreet dolore
                                        magna aliquam erat volutpat. Ut wisi enim ad minim
                                        veniam, quis nostrud exerci tation ullamcorper suscipit
                                        loborti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section__subsidiaries-contact">
                @include('components/presentational/contact',[
                    'description'=>$descriptionCT,
                    'addressCT'=>$addressCT,
                    'phoneCT'=>$phoneCT,
                    'faxCT'=>$faxCT,
                    'emailCT'=>$emailCT
                ])
            </section>
        </main>
@endsection

