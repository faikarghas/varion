<div class="contact__wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>CONTACT US</h3>
            </div>
            <div class="col-12 col-lg-4 mb-5">
                <p>{{$descriptionCT}}</p>
            </div>
            <div class="col-12 col-lg-8">
                <div class="contact__wrapper-r">
                    <ul class="contact__wrapper-r-info forDesktop">
                        <li><p>{{$addressCT}}</p></li>
                        <li><p>PHONE {{$phoneCT}}</p></li>
                        <li><p>FAX {{$faxCT}}</p></li>
                        <li><p>{{$emailCT}}</p></li>
                        <img class="loc_img" src="{{asset('images/office.svg')}}" width="25px" height="25px" alt="">
                    </ul>
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
    </div>
    <div class="bg-contact"></div>
</div>