@extends('admin/layout.index')

@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-6 text-right">
              <button type="submit" class="btn btn-light save-data">
                <img src="{{asset('images/sync.svg')}}" width="30px" alt="" srcset="">
              </button>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                        <form id="edit_fellow" action="/post_contact/{{$contact[0]->idContactInfo}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="card-body">
                              <div class="form-group">
                                <label for="name">Description</label>
                                <input value="{{$contact[0]->description}}" name="description" type="text" class="form-control" id="description">
                              </div>
                              <div class="form-group">
                                <label for="title">Address</label>
                                <input value="{{$contact[0]->address}}" name="address" type="text" class="form-control" id="address">
                              </div>
                              <div class="form-group">
                                <label for="description">Phone</label>
                                <input value="{{$contact[0]->phone}}" name="phone" type="text" class="form-control" id="phone">
                              </div>
                              <div class="form-group">
                                <label for="investment">Fax</label>
                                <input value="{{$contact[0]->fax}}" name="fax" type="text" class="form-control" id="fax">
                              </div>
                              <div class="form-group">
                                <label for="business">Email</label>
                                <input value="{{$contact[0]->email}}" name="email" type="email" class="form-control" id="email">
                              </div>
                              <div class="form-group">
                                <button class="btn btn-primary" type="submit">Submit</button>
                              </div>
                          </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
@endsection

@section('script')
     <script>
      $('.summernote').summernote({
        tabsize: 2,
        height: 100
      });

      var content = {!! json_encode($contact[0]->description) !!};
      //set the content to summernote using `code` attribute.
      $('.summernote').summernote('code', content);

    </script>
@endsection

