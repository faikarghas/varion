<menu class="menu__home">
    @include('components/presentational/menuMobile')
    <div class="menu__home-logo"><a href="{{url('/')}}"><img src="{{asset('/images/logo_black.png')}}" alt="" srcset=""  height="40px"></a></div>
    <div class="menu__home-link forDesktop-dflex">
        <ul>
            <li><a href="{{route('home')}}">HOME</a></li>
            <li><a href="{{route('about')}}">ABOUT US</a></li>
            <li class="dropdown_link">
                <a href="">SUBSIDIARIES</a>
                <ul class="sub__menu">
                    @foreach ($listMenu as $item)
                        <li><a href="{{url('subsidiaries/'.$item->slug)}}">{{$item->name}}</a></li>
                    @endforeach
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