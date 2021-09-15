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
                        <form id="edit_fellow" action="/post_create_career" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="card-body">
                              <div class="form-group">
                                <label for="name">Name</label>
                                <input  name="name" type="text" class="form-control" id="name">
                              </div>
                              <div class="form-group">
                                <label for="title">Description</label>
                                <input  name="description" type="text" class="form-control" id="description">
                              </div>
                              <div class="form-group">
                                <label for="title">Status</label>
                                <input name="status" type="text" class="form-control" id="status">
                              </div>
                              <div class="form-group">
                                <label for="title">Location</label>
                                <input  name="location" type="text" class="form-control" id="location">
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
   
@endsection

