@extends('components/layout.layout')
@section('content')
<div class="h_aks1"></div>
<header class="position-relative">
    @include('components/presentational/menu',['listMenu'=>$listMenu])
</header>
<main>
    <section class="section__career-first">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h1 class="mb-5">{{$title}}</h1>
                    <p class="mb-5">{{$description}}</p>
                    <a href="">
                        <ul>
                            <li>VIEW JOB OPENING</li>
                            <li><img src="{{asset('/images/right-arrow.svg')}}" width="20px" height="20px"/></li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-mainCareerFirst"></div>
    </section>
    {{-- <section class="section__career-second">
        <ul class="p-0">
            <li class="item-1"><img src="https://source.unsplash.com/random/250x250" width="250px" height="250px" alt=""></li>
            <li class="item-2"><img src="https://source.unsplash.com/random/250x251" width="250px" height="250px" alt=""></li>
            <li class="item-3"><img src="https://source.unsplash.com/random/250x252" width="250px" height="250px" alt=""></li>
            <li class="item-4"><img src="https://source.unsplash.com/random/250x253" width="250px" height="250px" alt=""></li>
            <li class="item-5"><img src="https://source.unsplash.com/random/250x254" width="250px" height="250px" alt=""></li>
        </ul>
        <ul class="p-0">
            <li class="item-1"><img src="https://source.unsplash.com/random/250x255" width="250px" height="250px" alt=""></li>
            <li class="item-2"><img src="https://source.unsplash.com/random/250x256" width="250px" height="250px" alt=""></li>
            <li class="item-3"><img src="https://source.unsplash.com/random/250x257" width="250px" height="250px" alt=""></li>
            <li class="item-4"><img src="https://source.unsplash.com/random/250x258" width="250px" height="250px" alt=""></li>
            <li class="item-5"><img src="https://source.unsplash.com/random/250x259" width="250px" height="250px" alt=""></li>
        </ul>
        <div class="bg-mainSubsiFirst"></div>
        <div class="bg-mainSubsiSecond"></div>
    </section> --}}
    <section class="section__career-second">
        <img src="{{asset('images/carrer.jpg')}}" width="100%" alt="">
    </section>
    <section class="section__career-third">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5r">
                    <div class="opcareer">
                        <h2>OPEN POSITIONS</h2>
                    </div>
                </div>
                @foreach ($listCareer as $item)
                <div class="col-12 list__career">
                    <div class="row">
                        <div class="list__career-desc col-12 col-lg-6">
                            <h4>{{$item->name}}</h4>
                            <p>{{$item->description}}</p>
                        </div>
                        <div class="list__career-status col-12 col-lg-3 d-flex flex-column justify-content-lg-center justify-content-start align-items-start align-items-lg-center">
                            <ul>
                                <li>Status  : {{$item->status}}</li>
                                <li>Location  : {{$item->location}}</li>
                            </ul>
                        </div>
                        <div class="list__career-join col-12 col-lg-3 d-flex flex-column justify-content-start justify-content-lg-center align-items-start align-items-lg-end">
                            <a class="btn-danger btn btn-join">Join Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section__career-contact">
        @include('components/presentational/contact',['country'=>$country])
    </section>
</main>
@endsection

