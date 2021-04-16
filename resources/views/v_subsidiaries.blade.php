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
            <div class="container about__header">
                <div class="row">
                    <div class="col-12 mb-5">
                        <h1>WHEN GROWTH BECOMES<br/>OUR PASSION</h1>
                    </div>
                </div>
            </div>
            {{-- <div class="slider__header m-0">
                <ul class="aboutHeaderSlider">
                    <li style="background-image: url('https://source.unsplash.com/random/1255x500')"></li>
                    <li style="background-image: url('https://source.unsplash.com/random/1255x500')"></li>
                </ul>
            </div> --}}
            <div class="slider__header">
                <ul class="aboutHeaderSlider">
                    <li style="background-image: url('https://source.unsplash.com/random/1255x500')">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <div class="slider__header-desc">
                                        <h1>AT VARION&CO, WE CONSTANTLY GROW TO CONTRIBUTE & ENDLESSLY INNOVATE THROUGH TECHNOLOGY</h1>
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
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <h4>PT VARION SUKSES MAKMUR</h4>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="img__wrapper">
                                <div class="img__wrapper-front"><img src="https://source.unsplash.com/random/1255x500" width="100%" height="100%" alt=""></div>
                                <div class="img__wrapper-back"><img src="https://source.unsplash.com/random/1255x501" width="100%" height="100%"     alt=""></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <h3>FAIRLY PRICED, SUSTAINABLY PRODUCED,<br/>
                                HIGH-QUALITY COFFEE ALL THE WAY<br/>
                                TO A CUP ISN’T EASY.</h3>
                            <p>Varion Capital Management as the core of Varion & Co. is a company
                                involved in investment and business development, headquartered in Jakarta.
                                We aim to drive the growth of existing business with potentials and promote
                                new opportunities to committed investors.</p>
                            <p>We provide a comprehensive range of investment products & services
                                including funds, portfolio management and advisory among others. As our
                                team responsible for business management, we also given opportunity to
                                creatively work and develop our own business and become project leader in
                                the future and expanding Varion & Co. group.</p>
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
                    </div>
                </div>
                <div class="bg-mainSubsiSecond"></div>
            </section>
            <section class="section__subsidiaries-third">
                <div class="banner__subsidiaries" style="background-image: url('https://source.unsplash.com/random/1255x1200')">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner__subsidiaries-desc">
                                    <h2 class="mb-4">WILL BE ON THEM<br/> MARKET IN 2022</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh euismod tincidunt ut laoreet dolore
                                        magna aliquam erat volutpat. Ut wisi enim ad minim
                                        veniam, quis nostrud exerci tation ullamcorper suscipit
                                        loborti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section__subsidiaries-contact">
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

