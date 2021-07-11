@extends('components/layout.layout')
@section('content')
<div class="h_aks1"></div>
<header class="position-relative">
    @include('components/presentational/menu',['listMenu'=>$listMenu])
</header>
<main>
    <section class="section__contact-first">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-6 section__contact-first-l">
                    <div>
                        <h3>OUR HEADQUARTER</h3>
                        <ul class="contact__wrapper-r-info">
                            <li class="mb-4"><p>{{$address}}</p></li>
                            <li><p class="m-0">PHONE {{$phone}}</p>
                            <li class="mb-4"><p>FAX {{$fax}}</p></li>
                            <li><p>{{$email}}</p></li>
                            <img class="loc_img forDesktop" src="{{asset('images/office.svg')}}" width="25px" height="25px" alt="">
                        </ul>
                    </div>
                    <div>
                        <img class="mail-logo forDesktop" src="{{asset('images/contact.svg')}}" width="150px" alt="">
                    </div>
                </div>
                <div class="section__contact-first-lex col-6 col-lg-6 forMobile-dflex justify-content-center align-item-center">
                    <img class="mail-logo" src="{{asset('images/contact.svg')}}" width="150px" alt="">
                </div>
                <div class="col-12 col-lg-6 section__contact-first-r ">
                    <div>
                        <h3>CONTACT US</h3>
                        <p>{{$description}}</p>
                    </div>
                    <form class="contact__wrapper-r-form" action="/contact/form" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input name="name" class="form-control" type="text" placeholder="YOUR NAME" value="{{old('name')}}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select name="country" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>COUNTRY</option>
                                @foreach ($country as $item)
                                    <option value="{{$item['name']}}">{{$item['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input name="email" class="form-control" type="text" placeholder="EMAIL" aria-label="default input example" value="{{old('email')}}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input name="phoneNumber" class="form-control" type="number" placeholder="PHONE NUMER" aria-label="default input example" value="{{old('phoneNumber')}}">
                            @error('phoneNumber')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary">SEND</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-mainCareerFirst"></div>
    </section>
</main>
@endsection

