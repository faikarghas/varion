@extends('components/layout.layout')
@section('content')
<div class="h_aks1"></div>
        <header class="position-relative">
            {{-- <menu class="menu__home">
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
            </menu> --}}
            @include('components/presentational/menu',['listMenu'=>$listMenu])
            <div class="slider__header">
                <ul class="aboutHeaderSlider">
                    <li class="aboutHeaderSlider-item">
                        <div class="left-img"><img src="{{asset('images')}}/{{$imageHeader1}}" alt="fume-img1" width="100%">
                            <div class="desc"><h4>{!!$titleHeader!!}</h4></div>
                        </div>
                        {{-- <div class="right-img"><img src="{{asset('images')}}/{{$imageHeader2}}" alt="fume-img1" width="100%"></div> --}}
                    </li>
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
                                <div class="img__wrapper-front"><img src="{{asset('images')}}/{{$imageFront}}" width="100%" height="100%" alt=""></div>
                                <div class="img__wrapper-back"><img src="{{asset('images')}}/{{$imageBack}}" width="100%" height="100%"     alt=""></div>
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
                                <img src="{{asset('images')}}/{{$imageInvestment}}" width="100%" height="100%" alt="">
                            </div>
                            <div class="desc__wrapper">
                                @if ($slug ===  'pt-varion-sukses-makmur')
                                    <h3 class="mb-4">PLANTATION</h3>
                                @elseif($slug ===  'pt-varion-agritech-indonesia')
                                    <h3 class="mb-4">RESEARCH & DEVELOPMENT</h3>
                                    <p>This is where our innovations and future breakthroughs are born. We strive to put consistent research and development as a top priority in order to keep serving people the best of our products and services. </p>
                                @else
                                    <h3 class="mb-4">RESEARCH & DEVELOPMENT</h3>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 mb-5">
                            <div class="img__wrapper">
                                <img src="{{asset('images')}}/{{$imageBusiness}}" width="100%" height="100%" alt="">
                            </div>
                            <div class="desc__wrapper">
                                @if ($slug ===  'pt-varion-sukses-makmur')
                                    <h3 class="mb-4">PROCESSING</h3>
                                @elseif($slug ===  'pt-varion-agritech-indonesia')
                                    <h3 class="mb-4">STRAWBERRY FARMING</h3>
                                    <p>Strawberry production in Japan is mostly done in greenhouses due to the uncertain temperatures, water, and conditions. Bringing those strawberries to tropical land like Indonesia has become the better decision since the humidity stays in control. </p>
                                @else
                                    <h3 class="mb-4">FARMING</h3>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 mb-5">
                            <div class="img__wrapper">
                                <img src="{{asset('images')}}/{{$imageCapital}}" width="100%" height="100%" alt="">
                            </div>
                            <div class="desc__wrapper">
                                @if ($slug ===  'pt-varion-sukses-makmur')
                                    <h3 class="mb-4">TRADING</h3>
                                @elseif($slug ===  'pt-varion-agritech-indonesia')
                                    <h3 class="mb-4">DISTRIBUTION</h3>
                                    <p>Strawberries are widely consumed as the fruit itself, jams, beverages, and other food flavorings. In the market, strawberry fruits are among the fancy fruits that many people often dig in because of the taste and health benefits. </p>
                                @else
                                    <h3 class="mb-4">DISTRIBUTION</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-mainSubsiSecond"></div>
            </section>
            <section class="section__subsidiaries-third">
                @if ($imageFooterType === 1)
                    <div class="banner_wrapper">
                        <div class="banner_wrapper-left" style="background-image: url('{{asset('images')}}/{{$imageFooter}}')">
                            <div class="desc">{!!$imageFooterDesc!!}</div>
                        </div>
                        <div class="banner_wrapper-right" style="background-image: url('{{asset('images')}}/{{$imageFooter2}}')">
                            <div class="desc">{!!$imageFooter2Desc!!}</div>
                            <div class="btn-readMore">
                                <a href="">READ MORE</a>
                            </div>
                        </div>
                    </div>
                @elseif ($imageFooterType === 2)
                <div class="banner_wrapper2">
                    <div class="banner_wrapper2-left" style="background-image: url('{{asset('images')}}/{{$imageFooter}}')">
                        <div class="desc">{!!$imageFooterDesc!!}</div>
                    </div>
                    <div class="banner_wrapper2-right" style="background-image: url('{{asset('images')}}/{{$imageFooter2}}')"></div>
                </div>
                @else
                    <div class="banner__subsidiaries" style="background-image: url('{{asset('images')}}/{{$imageFooter}}')">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner__subsidiaries-desc">
                                        @if($slug ===  'pt-varion-agritech-indonesia')
                                            <h2 class="mb-4">WILL BE ON THE<br> MARKET IN 2022</h2>
                                            <p>It is with great pleasure to announce to you that our finest strawberries are coming to your nearest supermarket soon.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

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

