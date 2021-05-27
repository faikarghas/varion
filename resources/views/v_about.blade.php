@extends('components/layout.layout')
@section('content')
<div class="h_aks1"></div>
<header class="position-relative">
    @include('components/presentational/menu',['listMenu'=>$listMenu])

    <div class="container about__header">
        <div class="row">
            <div class="col-12 mb-5">
                <h1>WHEN GROWTH BECOMES<br/>OUR PASSION</h1>
            </div>
        </div>
    </div>
    <div class="slider__header m-0">
        <ul class="aboutHeaderSlider">
            @foreach ($slider as $item)
                <li style="background-image: url('https://source.unsplash.com/random/1255x500')"></li>
            @endforeach
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
                    <h4>{{$name}}</h4>
                    <h3>{{$title}}</h3>
                    {!! $description !!}
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

