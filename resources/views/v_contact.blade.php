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
</header>
<main>
    <section class="section__contact-first">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 section__contact-first-l">
                    <h3>OFFICE</h3>
                    <ul class="contact__wrapper-r-info forDesktop">
                        <li class="mb-4"><p>WISMA46 BUILDING, 45TH FLOOR JALAN JENDERAL SUDIRMAN, KAV-1, JAKARTA, 10220</p></li>
                        <li><p class="m-0">PHONE (+62) 6578.95000</p></li>
                        <li class="mb-4"><p>FAX (+62) 6578.95000</p></li>
                        <li><p>SUPPORT@VARION.CO.ID</p></li>
                        <img class="loc_img" src="{{asset('images/office.svg')}}" width="25px" height="25px" alt="">
                    </ul>
                    <img class="mail-logo" src="{{asset('images/contact.svg')}}" width="150px" alt="">
                </div>
                <div class="col-12 col-lg-6 section__contact-first-r">
                    <div>
                        <h3>CONTACT US</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dolore autem fugit veritatis dolorem deleniti expedita inventore itaque dignissimos, deserunt consectetur quia commodi! Nisi similique consequuntur, veniam earum veritatis eius.</p>
                    </div>
                    <form class="contact__wrapper-r-form" action="">
                        <input class="form-control" type="text" placeholder="YOUR NAME" aria-label="default input example">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>COUNTRY</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <input class="form-control" type="text" placeholder="EMAIL" aria-label="default input example">
                        <input class="form-control" type="number" placeholder="PHONE NUMER" aria-label="default input example">
                        <button type="button" class="btn btn-primary">SEND</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-mainCareerFirst"></div>
    </section>
</main>
@endsection

