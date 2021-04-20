@extends('components/layout.layout')
@section('content')
<div class="h_aks1"></div>
<header class="position-relative">
    <menu class="menu__home">
        <div class="menu__home-logo"><img src="{{asset('/images/logo_black.png')}}" alt="" srcset="" width="222px" height="40px"></div>
        <div class="menu__home-link">
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
</header>
<main>
    <section class="section__career-first">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h1 class="mb-5">JOIN OUR<br/>TEAM</h1>
                    <p class="mb-5">Varion Capital Management as the core of Varion & Co. is a company
                        involved in investment and business development, headquartered in Jakarta.
                        We aim to drive the growth of existing business with potentials and promote
                        new opportunities to committed investors.</p>
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
                    <h2>OPEN POSITIONS</h2>
                </div>
                <div class="col-12 list__career">
                    <div class="row">
                        <div class="col-6">
                            <h4>MARKETING MANAGER</h4>
                            <p>OREM IPSUM DOLOR SIT AMET, CONS ECTETUER ADIPISCING ELIT, SED JOIN NOW
                                DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE
                                MAGNA ALIQUAM ERAT VOLUTPAT. UT WISI ENIM AD MINIM VENIAM,
                                QUIS NOSTRUD EXERCI TATION ULLAMCORPER SUSCIPIT LOBORTIS NISL</p>
                        </div>
                        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                            <ul>
                                <li>Status  : Full Time</li>
                                <li>Location  : Jakarta</li>
                            </ul>
                        </div>
                        <div class="col-3 d-flex flex-column justify-content-center align-items-end">
                            <a class="btn-danger btn btn-join">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 list__career">
                    <div class="row">
                        <div class="col-6">
                            <h4>MARKETING MANAGER</h4>
                            <p>OREM IPSUM DOLOR SIT AMET, CONS ECTETUER ADIPISCING ELIT, SED JOIN NOW
                                DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE
                                MAGNA ALIQUAM ERAT VOLUTPAT. UT WISI ENIM AD MINIM VENIAM,
                                QUIS NOSTRUD EXERCI TATION ULLAMCORPER SUSCIPIT LOBORTIS NISL</p>
                        </div>
                        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                            <ul>
                                <li>Status  : Full Time</li>
                                <li>Location  : Jakarta</li>
                            </ul>
                        </div>
                        <div class="col-3 d-flex flex-column justify-content-center align-items-end">
                            <a class="btn-danger btn btn-join">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 list__career">
                    <div class="row">
                        <div class="col-6">
                            <h4>MARKETING MANAGER</h4>
                            <p>OREM IPSUM DOLOR SIT AMET, CONS ECTETUER ADIPISCING ELIT, SED JOIN NOW
                                DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE
                                MAGNA ALIQUAM ERAT VOLUTPAT. UT WISI ENIM AD MINIM VENIAM,
                                QUIS NOSTRUD EXERCI TATION ULLAMCORPER SUSCIPIT LOBORTIS NISL</p>
                        </div>
                        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                            <ul>
                                <li>Status  : Full Time</li>
                                <li>Location  : Jakarta</li>
                            </ul>
                        </div>
                        <div class="col-3 d-flex flex-column justify-content-center align-items-end">
                            <a class="btn-danger btn btn-join">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__career-contact">
        @include('components/presentational/contact')
    </section>
</main>
@endsection

