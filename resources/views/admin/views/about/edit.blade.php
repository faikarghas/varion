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
                        <form id="edit_fellow" action="/post_about/{{$about[0]->idAbout}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="card-body">
                              <div class="form-group">
                                <label for="name">Name</label>
                                <input value="{{$about[0]->name}}" name="name" type="text" class="form-control" id="name">
                              </div>
                              <div class="form-group">
                                <label for="title">Title</label>
                                <input value="{{$about[0]->title}}" name="title" type="text" class="form-control" id="title">
                              </div>
                              <div class="form-group">
                                <label for="description">Description</label>
                                <textarea  name="summernoteInput" class="summernote"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="investment">Investment</label>
                                <input value="{{$about[0]->investment}}" name="investment" type="text" class="form-control" id="investment">
                              </div>
                              <div class="form-group">
                                <label for="business">Business</label>
                                <input value="{{$about[0]->business}}" name="business" type="text" class="form-control" id="business">
                              </div>
                              <div class="form-group">
                                <label for="capital">Capital</label>
                                <input value="{{$about[0]->capital}}" name="capital" type="text" class="form-control" id="capital">
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

      var content = {!! json_encode($about[0]->description) !!};
      //set the content to summernote using `code` attribute.
      $('.summernote').summernote('code', content);

    </script>
@endsection

