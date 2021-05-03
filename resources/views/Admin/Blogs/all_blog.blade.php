@extends('layouts.Admin.asset')
@section('admin_content')



        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
          <div class="card ">
            <div class="card-header">
              <h3 class="card-title">All Blog</h3>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Add Blog
            </button>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table  table-striped">
                <thead class="text-center">
                <tr>
                  <th>SL.</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Image</th>
                  <th>Tegs</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody class="text-center">

                  @foreach ($blogs as $blog)
                  <tr>
                      <td>{{$loop->index+1}}</td>
                      <td>{!!$blog->title!!}</td>
                      <td>{{$blog->blog_category_id?$blog->blog_category_id : ''}}</td>
                      @php
                      $image=json_decode($blog->featured_image);
                      @endphp
                      <td><img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                      <td>{{$blog->tegs}}</td>
                      @if($blog->status==1)
                      <td class=""><i class="btn btn-sm btn-primary fas fa-hand-point-up"></i></td>
                      @else
                      <td><i class="btn btn-sm btn-danger fas fa-hand-point-down"></i></td>
                      @endif
                      <td>
                        @if($blog->status==0)
                        <a href="{{url('admin/blog/active/'.$blog->id)}}"><i class="btn btn-sm  btn-primary fas fa-hand-point-up"></i></a>
                        @else
                        <a href="{{url('admin/blog/inactive/'.$blog->id)}}"><i class="btn btn-sm  btn-danger fas fa-hand-point-down"></i></a>
                        @endif
                        <a class="" href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{$blog->id}}"><i class="btn btn-primary btn-sm text-light fas fa-eye"></i></a>
                        <a class="" data-bs-toggle="modal" data-bs-target="#exampleModaEdit{{$blog->id}}" href=""><i class="btn  btn-sm btn-primary fas fa-pen-alt"></i></a>
                        <a class="" href="{{url('admin/blog/delete/'.$blog->id)}}"><i class="btn btn-sm btn-danger  text-light far fa-trash-alt"></i></a>
                      </td>
                  </tr>
                    <!-- blog details page show start-->
                    <div class="modal fade" id="exampleModal{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <strong>Blog Short Description</strong>
                            {!!$blog->short_des!!}
                            <br>
                            <strong>Blog body</strong>
                            {!!$blog->short_des!!}
                            <br>
                            <strong>Love</strong>
                            {{$blog->love}}
                            <br>
                            <strong>View</strong>
                            {{$blog->view}}



                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- blog details page show end-->

                        <!-- blog Edit page show start-->

                        <div class="modal fade" id="exampleModaEdit{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$blog->title}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">

                                <form action="{{url('admin/blog/update-blog/'.$blog->id)}}" method="post" enctype="multipart/form-data">
                                  @csrf

                                  <div>
                                  <label for="">Blog Title</label>
                                  <textarea id="editor4" name="title" style="width: 100%;">{!!$blog->title!!}</textarea>
                                  </div><!-- blog title end -->

                                  <div>
                                  <label for="">Select Category</label>
                                  <select class="form-control" name="blog_category_id" id="">

                                      @foreach ($blogcategories as $item)
                                          <option value="{{$item->id}}">{{$item->category_Name}}</option>
                                      @endforeach
                                  </select>
                                  </div><!--category end -->

                                  <div>
                                      <label for="">Blog Image</label>
                                      <input class="form-control" type="file" name="featured_image[]" multiple  id="">
                                      @php
                                       $image=json_decode($blog->featured_image);
                                      @endphp
                                      <strong>Presend Image:</strong>
                                      <img height="80px" width="90px"   src="{{asset($image[0])}}" alt="">
                                    </div><!--image end -->

                                  <div>
                                      <label for="">Blog Tegs</label>
                                      <input class="form-control" type="text" value="{{$blog->tegs}}" name="tegs" placeholder="Enter tegs" id="">
                                  </div><!-- blog tegs end -->
                                  <div>
                                      <label for="">Short Des</label>
                                      <textarea id="editor5" name="short_des" style="width: 100%;  ">{{$blog->short_des}}.</textarea>
                                  </div><!-- short des-->

                                  <div>
                                      <label for="">Blog Body</label>
                                      <textarea id="editor6" name="body" style="width: 100%;">{{$blog->body}}.</textarea>
                                  </div><!-- short des-->




                                <input class="btn btn-primary ml-auto text-light mt-1" type="submit" name="btn" value="Submit" id="">
                                </form>



                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- blog edit page show end-->

                              @endforeach
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->
            </div>
<!-- ./wrapper -->


<!-- modal start -->
<!-- Modal -->
<div style="" class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="staticBackdropLabel">Add Blog Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="{{route('admin.blog.add-blog')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div>
        <label for="">Blog Title</label>
        <textarea id="editor3" name="title" style="width: 100%;  ">This is Your textarea Write Here Blog.</textarea>
        </div><!-- short des--><!-- blog title end -->

        <div>
        <label for="">Select Category</label>
        <select class="form-control" name="blog_category_id" id="">
            <option value="disable">Select Category</option>
            @foreach ($blogcategories as $item)
                <option value="{{$item->id}}">{{$item->category_Name}}</option>
            @endforeach
        </select>
        </div><!--category end -->

        <div>
            <label for="">Blog Image</label>
            <input class="form-control" type="file" name="featured_image[]" multiple  id="">
        </div><!--image end -->

        <div>
            <label for="">Blog Tegs</label>
            <input class="form-control" type="text" name="tegs" placeholder="Enter tegs" id="">
        </div><!-- blog tegs end -->
        <div>
            <label for="">Short Des</label>
            <textarea id="editor1" name="short_des" style="width: 100%;  ">This is Your textarea Write Here Blog.</textarea>
        </div><!-- short des-->

        <div>
            <label for="">Blog Body</label>
            <textarea id="editor2" name="body" style="width: 100%;  ">This is Your textarea Write Here Blog.</textarea>
        </div><!-- short des-->




      <input class="btn btn-primary ml-auto text-light mt-1" type="submit" name="btn" value="Submit" id="">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- add blog section end -->


<!-- data hsow -->
<!-- Modal --></div>
</body>
</html>
@endsection
