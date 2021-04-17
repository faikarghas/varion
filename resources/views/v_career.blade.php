@extends('components/layout.layout')
@section('content')
<div class="h_aks1"></div>
<header class="position-relative">
    <menu class="menu__home">
        <div class="menu__home-logo"><img src="{{asset('/images/varion.png')}}" alt="" srcset="" width="222px" height="40px"></div>
        <div class="menu__home-link">
            <ul>
                <li><a href="">HOME</a></li>
                <li><a href="{{route('about')}}">ABOUT US</a></li>
                <li><a href="subsidiaries/test">SUBSIDIARIES</a></li>
                <li><a href="">CONTACT</a></li>
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
    <section class="section__career-second">
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
    </section>
    <section class="section__career-third">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5r">
                    <h2>OPEN POSITIONS</h2>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <h4>MARKETING MANAGER</h4>
                            <p>OREM IPSUM DOLOR SIT AMET, CONS ECTETUER ADIPISCING ELIT, SED JOIN NOW
                                DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE
                                MAGNA ALIQUAM ERAT VOLUTPAT. UT WISI ENIM AD MINIM VENIAM,
                                QUIS NOSTRUD EXERCI TATION ULLAMCORPER SUSCIPIT LOBORTIS NISL</p>
                        </div>
                        <div class="col-3">
                            <ul>
                                <li>Status  : Full Time</li>
                                <li>Location  : Jakarta</li>
                            </ul>
                        </div>
                        <div class="col-3 d-inline-flex justify-content-end">
                            <button class="btn-danger btn btn-join">Join Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__career-contact">
        <div class="contact__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>CONTACT US</h3>
                    </div>
                    <div class="col-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dolore autem fugit veritatis dolorem deleniti expedita inventore itaque dignissimos, deserunt consectetur quia commodi! Nisi similique consequuntur, veniam earum veritatis eius.</p>
                    </div>
                    <div class="col-8">
                        <div class="d-flex">
                            <ul class="contact__wrapper-info">
                                <li><p>WISMA46 BUILDING, 45TH FLOOR JALAN JENDERAL SUDIRMAN, KAV-1, JAKARTA, 10220</p></li>
                                <li><p>PHONE (+62) 6578.95000</p></li>
                                <li><p>FAX (+62) 6578.95000</p></li>
                            </ul>
                            <form class="contact__wrapper-form" action="">
                                <input class="form-control" type="text" placeholder="YOUR NAME" aria-label="default input example">
                                <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                                <input class="form-control" type="text" placeholder="EMAIL" aria-label="default input example">
                                <input class="form-control" type="number" placeholder="PHONE NUMER" aria-label="default input example">
                                <button type="button" class="btn btn-primary">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-contact"></div>
        </div>
    </section>
</main>
@endsection

