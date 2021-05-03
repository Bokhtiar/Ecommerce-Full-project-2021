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
              <h3 class="card-title">All Category</h3>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Add Category
            </button>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table  table-striped">
                <thead class="text-center">
                <tr>
                  <th>SL.</th>
                  <th>Artist Name</th>
                  <th>vidoe</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody class="text-center">
                @foreach ($videos as $video)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$video->artist_name}}</td>
                    <td>
                    {!! $video->video !!}
                    </td>
                    <td>{!!$video->des!!}</td>
                    @if($video->status==1)
                    <td class=""><i class="btn btn-sm btn-primary fas fa-hand-point-up"></i></td>
                    @else
                    <td><i class="btn btn-sm btn-danger fas fa-hand-point-down"></i></td>
                    @endif
                    <td>
                      @if($video->status==0)
                      <a href="{{url('admin/video/active/'.$video->id)}}"><i class="btn btn-sm  btn-primary fas fa-hand-point-up"></i></a>
                      @else
                      <a href="{{url('admin/video/inactive/'.$video->id)}}"><i class="btn btn-sm  btn-danger fas fa-hand-point-down"></i></a>
                      @endif



                                        <a type="" class="" data-bs-toggle="modal" data-bs-target="#exampleModal{{$video->id}}">
                                          <i class="btn  btn-sm btn-primary fas fa-pen-alt"></i>
                                        </a>
                      <a class="" href="{{url('admin/video/delete/'.$video->id)}}"  id="delete"><i class="btn btn-sm btn-danger  text-light far fa-trash-alt"></i></a>
                    </td>
                </tr>

                <!--edit section start -->
                <!-- Button trigger modal -->


              <!-- Modal -->
              <div class="modal fade" id="exampleModal{{$video->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Video</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{url('admin/video/update/'.$video->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                        <label for="">Artist Name</label>
                        <input class="form-control" type="text" name="artist_name" value="{{$video->artist_name}}" id="">
                      </div>
                      <div>
                          <label for="">Video</label>
                          <input class="form-control" type="link" name="video" value="{{$video->video}}" id="">
                      </div>
                      <div>
                        <label for="">Video Body</label>
                        <textarea id="editor2" name="des" style="width: 100%;" placeholder="Enter Description">{{$video->des}}</textarea>
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
                <!--edit section end -->
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
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="staticBackdropLabel">Add Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('admin.video.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div>
          <label for="">Artist Name</label>
          <input class="form-control" type="text" placeholder="Enter Artist Name" name="artist_name"  id="">
        </div>
        <div>
            <label for="">Video</label>
            <input class="form-control" type="link" placeholder="Enter Video Link" name="video" id="">
        </div>
        <div>
          <label for="">Video Body</label>
          <textarea id="editor2" name="des" style="width: 100%;" placeholder="Enter Description"></textarea>
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
<!-- modal end -->

</body>
</html>
@endsection
