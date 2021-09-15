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
                        <form id="edit_fellow" action="/post_subsidiaries/{{$subsidiaries[0]->idSubsidiaries}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="card-body">
                              <div class="form-group">
                                <label for="name">Name</label>
                                <input value="{{$subsidiaries[0]->name}}" name="name" type="text" class="form-control" id="name">
                              </div>
                              <div class="form-group">
                                <label for="title">Title</label>
                                <input value="{{$subsidiaries[0]->title}}" name="title" type="text" class="form-control" id="title">
                              </div>
                              <div class="form-group">
                                <label for="titleHome">Title Home</label>
                                <input value="{{$subsidiaries[0]->titleHome}}" name="titleHome" type="text" class="form-control" id="titleHome">
                              </div>
                              <div class="form-group">
                                <label for="titleHeader">Title Header</label>
                                <input value="{{$subsidiaries[0]->titleHeader}}" name="titleHeader" type="text" class="form-control" id="titleHeader">
                              </div>
                              <div class="form-group">
                                <label for="shortDescription">Short Description</label>
                                <textarea value="{{$subsidiaries[0]->shortDescription}}" name="shortDescription" class="form-control" id="shortDescription" rows="3">{{$subsidiaries[0]->shortDescription}}</textarea>
                              </div>
                              <div class="form-group">
                                <label for="shortDescriptionHome">Short Description Home</label>
                                <textarea value="{{$subsidiaries[0]->shortDescriptionHome}}" name="shortDescriptionHome" class="form-control" id="shortDescriptionHome" rows="3">{{$subsidiaries[0]->shortDescriptionHome}}</textarea>
                              </div>
                              <div class="form-group">
                                <label for="description">Description</label>
                                <textarea  name="summernoteInput" class="summernote"></textarea>
                              </div>

                              <div class="form-group">
                                <label for="description">Image 1</label>
                                <div class="custom-file mb-4">
                                    <input name="image1" type="file" class="custom-file-input" id="myInput1" aria-describedby="myInput">
                                    <label class="custom-file-label" for="myInput1">Choose file</label>
                                </div>
                                <div class="d-flex">
                                  <div class="mr-4">
                                    <img src="{{asset('images')}}/{{$subsidiaries[0]->imageFront}}" width="200px" height="200px" style="object-fit:contain;" alt="">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="description">Image 2</label>
                                <div class="custom-file mb-4">
                                    <input name="image2" type="file" class="custom-file-input" id="myInput2" aria-describedby="myInput">
                                    <label class="custom-file-label" for="myInput2">Choose file</label>
                                </div>
                                <div class="d-flex">
                                  <div class="mr-4">
                                    <img src="{{asset('images')}}/{{$subsidiaries[0]->imageBack}}" width="200px" height="200px" style="object-fit:contain;" alt="">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="description">Image 3</label>
                                <div class="custom-file mb-4">
                                    <input name="image3" type="file" class="custom-file-input" id="myInput3" aria-describedby="myInput">
                                    <label class="custom-file-label" for="myInput3">Choose file</label>
                                </div>
                                <div class="d-flex">
                                  <div class="mr-4">
                                    <img src="{{asset('images')}}/{{$subsidiaries[0]->imageHome}}" width="200px" height="200px" style="object-fit:contain;" alt="">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="description">Image 4</label>
                                <div class="custom-file mb-4">
                                    <input name="image4" type="file" class="custom-file-input" id="myInput4" aria-describedby="myInput">
                                    <label class="custom-file-label" for="myInput4">Choose file</label>
                                </div>
                                <div class="d-flex">
                                  <div class="mr-4">
                                    <img src="{{asset('images')}}/{{$subsidiaries[0]->imagHome1}}" width="200px" height="200px" style="object-fit:contain;" alt="">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="description">Image 5</label>
                                <div class="custom-file mb-4">
                                    <input name="image5" type="file" class="custom-file-input" id="myInput5" aria-describedby="myInput">
                                    <label class="custom-file-label" for="myInput5">Choose file</label>
                                </div>
                                <div class="d-flex">
                                  <div class="mr-4">
                                    <img src="{{asset('images')}}/{{$subsidiaries[0]->imagHome2}}" width="200px" height="200px" style="object-fit:contain;" alt="">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="description">Image 6</label>
                                <div class="custom-file mb-4">
                                    <input name="image6" type="file" class="custom-file-input" id="myInput6" aria-describedby="myInput">
                                    <label class="custom-file-label" for="myInput6">Choose file</label>
                                </div>
                                <div class="d-flex">
                                  <div class="mr-4">
                                    <img src="{{asset('images')}}/{{$subsidiaries[0]->imageHeader1}}" width="200px" height="200px" style="object-fit:contain;" alt="">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="description">Image 7</label>
                                <div class="custom-file mb-4">
                                    <input name="image7" type="file" class="custom-file-input" id="myInput7" aria-describedby="myInput">
                                    <label class="custom-file-label" for="myInput7">Choose file</label>
                                </div>
                                <div class="d-flex">
                                  <div class="mr-4">
                                    <img src="{{asset('images')}}/{{$subsidiaries[0]->imageHeader2}}" width="200px" height="200px" style="object-fit:contain;" alt="">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="description">Image 8</label>
                                <div class="custom-file mb-4">
                                    <input name="image8" type="file" class="custom-file-input" id="myInput8" aria-describedby="myInput">
                                    <label class="custom-file-label" for="myInput8">Choose file</label>
                                </div>
                                <div class="d-flex">
                                  <div class="mr-4">
                                    <img src="{{asset('images')}}/{{$subsidiaries[0]->imageInvesment}}" width="200px" height="200px" style="object-fit:contain;" alt="">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="description">Image 9</label>
                                <div class="custom-file mb-4">
                                    <input name="image9" type="file" class="custom-file-input" id="myInput9" aria-describedby="myInput">
                                    <label class="custom-file-label" for="myInput9">Choose file</label>
                                </div>
                                <div class="d-flex">
                                  <div class="mr-4">
                                    <img src="{{asset('images')}}/{{$subsidiaries[0]->imageBusiness}}" width="200px" height="200px" style="object-fit:contain;" alt="">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="description">Image 10</label>
                                <div class="custom-file mb-4">
                                    <input name="image10" type="file" class="custom-file-input" id="myInput10" aria-describedby="myInput">
                                    <label class="custom-file-label" for="myInput10">Choose file</label>
                                </div>
                                <div class="d-flex">
                                  <div class="mr-4">
                                    <img src="{{asset('images')}}/{{$subsidiaries[0]->imageCapital}}" width="200px" height="200px" style="object-fit:contain;" alt="">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="description">Image 11</label>
                                <div class="custom-file mb-4">
                                    <input name="image11" type="file" class="custom-file-input" id="myInput11" aria-describedby="myInput">
                                    <label class="custom-file-label" for="myInput11">Choose file</label>
                                </div>
                                <div class="d-flex">
                                  <div class="mr-4">
                                    <img src="{{asset('images')}}/{{$subsidiaries[0]->imageFooter}}" width="200px" height="200px" style="object-fit:contain;" alt="">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="description">Image 12</label>
                                <div class="custom-file mb-4">
                                    <input name="image12" type="file" class="custom-file-input" id="myInput12" aria-describedby="myInput">
                                    <label class="custom-file-label" for="myInput12">Choose file</label>
                                </div>
                                <div class="d-flex">
                                  <div class="mr-4">
                                    <img src="{{asset('images')}}/{{$subsidiaries[0]->imageFooter2}}" width="200px" height="200px" style="object-fit:contain;" alt="">
                                  </div>
                                </div>
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

      var content = {!! json_encode($subsidiaries[0]->description) !!};
      //set the content to summernote using `code` attribute.
      $('.summernote').summernote('code', content);

      // document.querySelector('.custom-file-input').addEventListener('change',function(e){
      //   var fileName = document.getElementById("myInput").files[0].name;
      //   var nextSibling = e.target.nextElementSibling
      //   nextSibling.innerText = fileName
      // })

      $('.custom-file-input').each(function () {
        $(this).on('change',function () {
          let filename = $(this).val().split('\\').pop()
          $(this).next().text(`${filename}`)
        })
      })

    </script>
@endsection

