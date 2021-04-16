<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Varion</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
    </head>
    <body>
        <header>
            <menu class="menu__home">
                <div class="menu__home-logo"><img src="{{asset('/images/varion.png')}}" alt="" srcset="" width="222px" height="40px"></div>
                <div class="menu__home-link">
                    <ul>
                        <li><a href="">HOME</a></li>
                        <li><a href="{{route('about')}}">ABOUT US</a></li>
                        <li><a href="">SUBSIDIARIES</a></li>
                        <li><a href="">CONTACT</a></li>
                        <li><a href="">CAREER</a></li>
                    </ul>
                </div>
                <div class="menu__home-navbar"></div>
            </menu>
            <div class="slider__header">
                <ul class="homeHeaderSlider">
                    <li style="background-image: url('https://source.unsplash.com/random/1255x500')">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <div class="slider__header-desc">
                                        <h1>AT VARION&CO, WE CONSTANTLY GROW TO CONTRIBUTE & ENDLESSLY INNOVATE THROUGH TECHNOLOGY</h1>
                                        <div class="learn__button"><a href="{{route('home')}}">LEARN MORE</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url('https://source.unsplash.com/random/1255x501')">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <div class="slider__header-desc">
                                        <h1>AT VARION&CO, WE CONSTANTLY GROW TO CONTRIBUTE & ENDLESSLY INNOVATE THROUGH TECHNOLOGY</h1>
                                        <div class="learn__button"><a href="{{route('home')}}">LEARN MORE</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
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
                        <div class="col-12 col-lg-4 sectionHome__subsidiaries-left">
                            <div class="slider-for">
                                <div>
                                    <h3>OUR<br/>SUBSIDIARIES</h3>
                                    <h4>PT VARION CAPTAL MANAGEMENT</h4>
                                    <h3 class="text-dark">WHEN GROWTH<br/>BECOMES OUR<br/>PASSION</h3>
                                    <p class="sectionHome__subsidiaries-desc">Our mission is for the existing national industry to keep thriving as the whole world evolves. we also devote ourselves to create a profitable collaboration with our indonesian partners.</p>
                                    <div class="learn__button-dark"><a href="{{route('home')}}">LEARN MORE</a></div>
                                </div>
                                <div>
                                    <h3>OUR<br/>SUBSIDIARIES</h3>
                                    <h4>PT VARION CAPTAL MANAGEMENT</h4>
                                    <h3 class="text-dark">WHEN GROWTH<br/>BECOMES OUR<br/>PASSION</h3>
                                    <p class="sectionHome__subsidiaries-desc">Our mission is for the existing national industry to keep thriving as the whole world evolves. we also devote ourselves to create a profitable collaboration with our indonesian partners.</p>
                                    <div class="learn__button-dark"><a href="{{route('home')}}">LEARN MORE</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 d-flex align-items-end position-relative sectionHome__subsidiaries-right">
                            <div class="paging__info">
                                <p class="paging__info-curr"></p>
                                <p>/</p>
                                <p class="paging__info-total"></p>
                            </div>
                            <ul class="slider-nav">
                                <li><img src="https://source.unsplash.com/random/745x360" width="100%" height="360px" alt=""><div class="box_number"><p></p></div></li>
                                <li><img src="https://source.unsplash.com/random/745x361" width="100%" height="360px" alt=""><div class="box_number"><p></p></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-sliderSub"></div>
                <div class="bg-sliderSub2"></div>
            </section>
            <section class="sectionHome__slider">
                <ul class="homeSectionSlider">
                    <li><img src="https://source.unsplash.com/random/430x430" alt="" width="100%"></li>
                    <li><img src="https://source.unsplash.com/random/430x431" alt="" width="100%"></li>
                    <li><img src="https://source.unsplash.com/random/430x432" alt="" width="100%"></li>
                    <li><img src="https://source.unsplash.com/random/430x433" alt="" width="100%"></li>
                    <li><img src="https://source.unsplash.com/random/430x434" alt="" width="100%"></li>
                </ul>
            </section>
            <section class="sectionHome__contact">
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
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5"><img src="{{asset('/images/varion.png')}}" alt="" srcset="" width="222px" height="40px"></div>
                    <div class="col-12 col-lg-6">
                        <ul>
                            <li><a href="">SITEMAP</a></li>
                            <li><a href="">KEBIJAKAN SITUS</a></li>
                            <li><a href="">SYARAT PENGGUNA</a></li>
                            <li><a href="">PRIVASI</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-end">
                        <p>2021 VARION & CO AL RESERVED</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
