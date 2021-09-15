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
                                  <a href="{{route('create-career')}}">Create</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                          
                          <table id="career_table" class="table table-bordered table-striped" style="overflow: auto">
                                <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Name</th>
                                  <th>Description</th>
                                  <th>Status</th>
                                  <th>Location</th>
                                  <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($career as $key => $value)
                                      <tr data-key={{$key+1}}>
                                        <td>{{$key+1}}</td>
                                        <td height="30">
                                            {{$value->name}}
                                        </td>
                                        <td height="30">
                                          {{$value->description}}
                                        </td>
                                        <td height="30">
                                          {{$value->status}}
                                        </td>
                                        <td height="30">
                                          {{$value->location}}
                                        </td>
                                        <td> <a href="{{route('editcareer.data',$value->idCareer)}}">edit</a></td>
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
        var table = $('#career_table').DataTable({
          fixedHeader: true,
          scrollX: true,
          scrollY:        '70vh',
          scrollCollapse: true,
          lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
          columnDefs: [
                { width: 800, targets: 1 },
                { width: 100, targets: 2 },
          ],
        });
  </script>
@endsection

