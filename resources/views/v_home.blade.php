@extends('components/layout.layout')
@section('content')
<header>
    @include('components/presentational/menu',['listMenu'=>$listMenu])
    <div class="slider__header" page="home">
        <ul class="homeHeaderSlider">
            @foreach ($slider as $item)
                <li style="background-image: url('https://source.unsplash.com/random/1255x500')">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="slider__header-desc forDesktop">
                                    <h1>{{$item->description}}</h1>
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
                                <h3 class="text-dark">{{$item->title}}</h3>
                                <p class="sectionHome__subsidiaries-desc">{{$item->shortDescription}}</p>
                                <div class="learn__button-dark"><a href="{{route('home')}}">LEARN MORE</a></div>
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
                            <li><img src="https://source.unsplash.com/random/745x360" width="100%" height="360px" alt=""><div class="box_number"><p>0{{$key + 1}}.</p></div></li>
                        @endforeach
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

