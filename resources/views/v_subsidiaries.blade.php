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
                            <div class="desc forDesktop"><h4>{!!$titleHeader!!}</h4></div>
                        </div>
                        {{-- <div class="right-img"><img src="{{asset('images')}}/{{$imageHeader2}}" alt="fume-img1" width="100%"></div> --}}
                        <div class="aboutHeaderSlider-item--desc forMobile">
                            <div class="container-fluid g-0">
                                <div class="row g-0">
                                    <div class="col-6 pt-5 pb-5">
                                        <h4>{!!$titleHeader!!}</h4>
                                    </div>
                                    <div class="col-6"></div>
                                    <div class="col-6">
                                        <div class="learn__button"><a href="{{route('home')}}">LEARN MORE</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="bg-headerAbout"></div>
            <div class="bg-headerAbout2 forDesktop"></div>
            <div class="h_aks2"></div>
        </header>
        <main>
            <section class="section__subsidiaries-first">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="forDesktop">{{$name}}</h4>
                        </div>
                        <div class="col-12 col-lg-7 ps-0">
                            <div class="img__wrapper">
                                <div class="img__wrapper-front"><img src="{{asset('images')}}/{{$imageFront}}" width="100%" height="100%" alt=""></div>
                                <div class="img__wrapper-back"><img src="{{asset('images')}}/{{$imageBack}}" width="100%" height="100%"     alt=""></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 ps-0">
                            <div class="forDesktop">
                                <h3>{{$title}}</h3>
                                {!! $description !!}
                            </div>
                            <div class="row g-0 forMobile-dflex">
                                <div class="col-6 p-5" style="background-color: #F4F4F5">
                                    <h3>{{$title}}</h3>
                                </div>
                                <div class="col-6 p-5">
                                    {!! $description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-mainSubsiFirst"></div>
                <div class="bg-mainSubsiFirst2"></div>
            </section>
            <section class="section__subsidiaries-second">
                <div class="container">
                    <div class="row subSlider">
                        <div class="col-12 col-lg-4 mb-5">
                            <div class="img__wrapper">
                                <img src="{{asset('images')}}/{{$imageInvestment}}" width="100%" height="100%" alt="">
                            </div>
                            <div class="desc__wrapper">
                                @if ($slug === 'pt-varion-sukses-makmur')
                                    <h3 class="mb-4">SOURCING</h3>
                                    <p>Our sourcing is coming from region which produces best Arabica coffee in Indonesia. The region mentioned are West Java, North Sumatra, and Aceh. Our network of farmers in 3 regions is growing from 500 farmers to 5.000 farmers and keep counting. The sourcing team is eager to source smarter and thus can promote best arabica coffee from Indonesia. Varion Sukses Makmur also promote traceability practice in the sourcing by working with partner such as Emurgo and Farmer Connect.</p>
                                @elseif($slug === 'pt-varion-agritech-indonesia')
                                    <h3 class="mb-4">RESEARCH & DEVELOPMENT</h3>
                                    <p>This is where our innovations and future breakthroughs are born. We strive to put consistent research and development as a top priority in order to keep serving people the best of our products and services. </p>
                                @else
                                    <h3 class="mb-4">RESEARCH & DEVELOPMENT</h3>
                                    <p>This is where our innovations and future breakthroughs are born. We strive to put consistent research and development as a top priority in order to keep serving people the best of our products and services. </p>
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
                                    <p>The coffee-processing method utilized in the company is wet-hulled process. After the coffee-picking, processing must begin immediately before the fruits become spoiled. Best coffee are often found in the high elevation area. Gloomy weather, humid,  and lack of sun are natural reasons that wet hulled is best processing method in Indonesia. By using this method, processor do not have to wait until parchment fully dried, instead hulling them in a  semi - wet stage. </p>
                                @elseif($slug ===  'pt-varion-agritech-indonesia')
                                    <h3 class="mb-4">FARMING</h3>
                                    <p>Strawberry production in Japan is mostly done in green houses due to the uncertain temperatures, water and conditions. Bringing those strawberries to the tropical land like Indonesia has become the better decision since the humidity stays in control.</p>
                                @else
                                    <h3 class="mb-4">FARMING</h3>
                                    <p>The potato has been selected as priority crop in the strategic plans of research and development program of the Indonesian Center for Horticulture Research and Development (ICHORD), the Indonesian Agency for Agricultural Research and Development (IAARD) in Indonesia in the last 30 years. This is due to its potential as alternative source of carbohydrates in food diversification and as export commodity.</p>
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
                                    <p>Being the second most commonly traded commodity in the world with more than 2.25 billion cups consumed daily, coffee trails only as a source of foreign exchange to developing countries.</p>
                                @elseif($slug ===  'pt-varion-agritech-indonesia')
                                    <h3 class="mb-4">DISTRIBUTION</h3>
                                    <p>Strawberries are widely consumed as the fruit itself, jams, beverages, and other food flavorings. In the market, strawberry fruits are among the fancy fruits that many people often dig in because of the taste and health benefits.</p>
                                @else
                                    <h3 class="mb-4">DISTRIBUTION</h3>
                                    <p>Seed potatoes are imported and produced locally by official institutes. However, a large part of the seed potatoes are taken from preceding production fields. Whenever there are not many problems with diseases during production and the yield is good farmers keep a large share of the produced potatoes back to be used for a next planting.</p>
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
                        {{-- <div class="banner_wrapper-left" style="background-image: url('{{asset('images')}}/{{$imageFooter}}')">
                            <div class="desc forDesktop">{!!$imageFooterDesc!!}</div>
                            <img src="http://127.0.0.1:3020/images/Varionsuksesmakmur-b1.jpg" class="img-fluid forMobile" alt="">
                        </div>
                        <div class="banner_wrapper-leftM forMobile">
                            <div class="desc p-5">{!!$imageFooterDesc!!}</div>
                        </div> --}}
                        <div class="banner_wrapper-right forDesktop" style="background-image: url('{{asset('images')}}/{{$imageFooter2}}')">
                            <div class="desc">{!!$imageFooter2Desc!!}</div>
                            <div class="btn-readMore">
                                <a href="{{route('fume')}}">READ MORE</a>
                            </div>
                        </div>
                        <div class="container forMobile">
                            <div class="row">
                                <div class=" col-7 banner_wrapper-right" style="background-image: url('{{asset('images')}}/{{$imageFooter2}}')">
                                    <div class="desc">{!!$imageFooter2Desc!!}</div>
                                    <div class="btn-readMore">
                                        <a href="{{route('fume')}}">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif ($imageFooterType === 2)
                <div class="banner_wrapper2 forDesktop-dflex">
                    <div class="banner_wrapper2-left" style="background-image: url('{{asset('images')}}/{{$imageFooter}}')">
                        <div class="desc">{!!$imageFooterDesc!!}</div>
                    </div>
                    <div class="banner_wrapper2-right" style="background-image: url('{{asset('images')}}/{{$imageFooter2}}')"></div>
                </div>
                <div class="banner_wrapper2M forMobile">
                    <div class="row g-0">
                        <div class="col-6 banner_wrapper2M-img">
                            <img width="100%" src="{{asset('images')}}/{{$imageFooter}}" alt="">
                            <img width="100%" src="{{asset('images')}}/{{$imageFooter2}}" alt="">
                        </div>
                        <div class="col-6 banner_wrapper2M-desc">
                            <div class="desc">{!!$imageFooterDesc!!}</div>
                        </div>
                    </div>
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
                                        @elseif($slug === 'pt-varion-agro-sentosa')
                                            <h2 class="mb-4">WILL BE ON THE<br> MARKET IN 2022</h2>
                                            <p>It is with great pleasure to announce to you that our finest potatoes are coming to your nearest supermarket soon.</p>
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

