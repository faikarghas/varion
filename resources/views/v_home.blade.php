@extends('components/layout.layout')
@section('content')
<header>
    @include('components/presentational/menu',['listMenu'=>$listMenu])
    <div class="slider__header" page="home">
        <ul class="homeHeaderSlider">
            @foreach ($slider as $item)
                <li class="homeHeaderSlider-item">
                    <div class="left-img"><img src="{{asset('images/home1.jpg')}}" alt="fume-img1" width="100%">
                        <div class="homeHeaderSlider-item--desc forDesktop">
                            <h1>{!!$item->description!!}</h1>
                            <div class="learn__button"><a href="{{route('home')}}">LEARN MORE</a></div>
                        </div>
                        <div class="logo_varion forMobile">
                            <img class="" src="{{asset('images/varion_logo_white.png')}}" alt="">
                        </div>
                    </div>
                    <div class="right-img"><img src="{{asset('images/home2.jpg')}}" alt="fume-img1" width="100%">
                        <div class="logo_varion forDesktop">
                            <img class="" src="{{asset('images/varion_logo_white.png')}}" alt="">
                        </div>
                    </div>
                    <div class="homeHeaderSlider-item--desc forMobile">
                        <div class="container-fluid g-0">
                            <div class="row g-0">
                                <div class="col-6 pt-5 pb-5">
                                    <h1>{!!$item->description!!}</h1>
                                </div>
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <div class="learn__button"><a href="{{route('home')}}">LEARN MORE</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
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
                        @foreach ($content as $item)
                            <div>
                                <h3>OUR<br/>SUBSIDIARIES</h3>
                                <h4>{{$item->name}}</h4>
                                <h3 class="text-dark">{{$item->titleHome}}</h3>
                                <p class="sectionHome__subsidiaries-desc">{{$item->shortDescriptionHome}}</p>
                                <div class="learn__button-dark"><a href="{{url('subsidiaries')}}/{{$item->slug}}">LEARN MORE</a></div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-6 col-lg-8 d-flex align-items-end position-relative sectionHome__subsidiaries-right">
                    <div class="paging__info">
                        <p class="paging__info-curr"></p>
                        <p>/</p>
                        <p class="paging__info-total"></p>
                    </div>
                    <ul class="slider-nav">
                        @foreach ($content as $key => $item)
                            <li><img src="{{asset('images')}}/{{$item->imageHome}}" width="100%" height="360px" alt=""><div class="box_number"><p>0{{$key + 1}}.</p></div></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-sliderSub"></div>
        <div class="bg-sliderSub2 forDesktop"></div>
    </section>
    <section class="sectionHome__slider">
        <ul class="homeSectionSlider">
            <li><img src="{{asset('images/Varionsuksesmakmur-3.jpg')}}" alt="" width="100%" height="100%"></li>
            <li><img src="{{asset('images/VarionagritechIndo-4.jpg')}}" alt="" width="100%" height="100%"></li>
            <li><img src="{{asset('images/VarionAgroSentosa-12.jpg')}}" alt="" width="100%" height="100%"></li>
            <li><img src="{{asset('images/fume-4.png')}}" alt="" width="100%" height="100%"></li>
            <li><img src="{{asset('images/VarionagritechIndo-3.jpg')}}" alt="" width="100%" height="100%"></li>
        </ul>
    </section>
    <section class="sectionHome__contact">
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

