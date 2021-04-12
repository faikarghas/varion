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
                        <li><a href="">ABOUT US</a></li>
                        <li><a href="">SUBSIDIARIES</a></li>
                        <li><a href="">CONTACT</a></li>
                        <li><a href="">CAREER</a></li>
                    </ul>
                </div>
                <div class="menu__home-navbar"></div>
            </menu>
            <div class="slider__header">
                <ul class="homeHeaderSlider">
                    <li>
                        <img src="https://source.unsplash.com/random/1255x500" width="100%" alt="">
                    </li>
                    <li>
                        <img src="https://source.unsplash.com/random/1255x501" width="100%" alt="">
                    </li>
                </ul>
                <div class="slider__header-desc">
                    <h1>AT VARION&CO, WE CONSTANTLY GROW TO CONTRIBUTE & ENDLESSLY INNOVATE THROUGH TECHNOLOGY</h1>
                    <div class="learn__button"><a href="{{route('home')}}">LEARN MORE</a></div>
                </div>
            </div>
            <div class="bg-slider"></div>
        </header>
        <main>

        </main>
        <footer>

        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
