<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Varion</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
    </head>
    <body style="overflow-x: hidden;">
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
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>OPEN POSITIONS</h2>
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
        <script>
            let valLeft = 0
            let valLeft2 = 40
            let valTop = 0
            for (let i = 1; i <= 5; i++) {
                valLeft += 300
                valLeft2 += 10
                valTop += 45
                if (i === 1) {
                    $(`.section__career-second ul .item-${i}`).css('left',`-50px`)
                    $(`.section__career-second ul .item-${i}`).css('top',`0`)
                } else {
                    $(`.section__career-second ul .item-${i}`).css('left',`${(valLeft-300)-valLeft2}px`)
                    $(`.section__career-second ul .item-${i}`).css('top',`-${valTop-45}px`)
                }
            }

        </script>
    </body>
</html>
