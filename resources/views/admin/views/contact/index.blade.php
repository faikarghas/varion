@extends('admin/layout.index')

@section('content')
  <div class="content-wrapper">
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
                          
                          <table id="contact_table" class="table table-bordered table-striped" style="overflow: auto">
                                <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Name</th>
                                  <th>Country</th>
                                  <th>Email</th>
                                  <th>Phone Number</th>
                                  <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($contact as $key => $value)
                                      <tr data-key={{$key+1}}>
                                        <td>{{$key+1}}</td>
                                        <td height="30">{{$value->name}}</td>
                                        <td height="30">{{$value->country}}</td>
                                        <td height="30">{{$value->email}}</td>
                                        <td height="30">{{$value->phoneNumber}}</td>
                                        <td height="30">{{$value->date}}</td>
                                      </tr>
                                  @endforeach
                                </tbody>
                              </table>
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
        var table = $('#contact_table').DataTable({
          fixedHeader: true,
          scrollX: true,
          scrollY:        '70vh',
          scrollCollapse: true,
          lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
          columnDefs: [
                { width: 200, targets: 1 },
                { width: 200, targets: 2 },
                { width: 200, targets: 3 },
          ],
        });
  </script>
@endsection

