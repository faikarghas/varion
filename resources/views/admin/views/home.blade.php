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

