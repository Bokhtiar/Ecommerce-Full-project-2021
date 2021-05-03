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
                  <th>Artist Category Name</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach ($artisatCategory as $artist_cat)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$artist_cat->artist_cat_name}}</td>
                    @php
                    $image=json_decode($artist_cat->image);
                    @endphp
                    <td><img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                    @if($artist_cat->status==1)
                    <td class=""><i class="btn btn-sm btn-primary fas fa-hand-point-up"></i></td>
                    @else
                    <td><i class="btn btn-sm btn-danger fas fa-hand-point-down"></i></td>
                    @endif
                    <td>
                      @if($artist_cat->status==0)
                      <a href="{{url('admin/artistCategory/active/'.$artist_cat->id)}}"><i class="btn btn-sm  btn-primary fas fa-hand-point-up"></i></a>
                      @else
                      <a href="{{url('admin/artistCategory/inactive/'.$artist_cat->id)}}"><i class="btn btn-sm  btn-danger fas fa-hand-point-down"></i></a>
                      @endif    
                                        
                                        
                                        
                                        <a type="" class="" data-bs-toggle="modal" data-bs-target="#exampleModal{{$artist_cat->id}}">
                                          <i class="btn  btn-sm btn-primary fas fa-pen-alt"></i>
                                        </a>
                      <a class="" href="{{url('admin/artistCategory/delete/'.$artist_cat->id)}}"  id="delete"><i class="btn btn-sm btn-danger  text-light far fa-trash-alt"></i></a>
                    </td>
                </tr>

                <!--edit section start -->
                <!-- Button trigger modal -->


              <!-- Modal -->
              <div class="modal fade" id="exampleModal{{$artist_cat->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Update Artist Category</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{url('admin/artistCategory/update/'.$artist_cat->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                        <label for="">Artist Category Name</label>
                        <input class="form-control" type="text" name="artist_cat_name" value="{{$artist_cat->artist_cat_name}}" id="">
                      </div>
                      <div>
                        <label for="">Category Image</label>
                        <input class="form-control" type="file" name="image[]" multiple  id="">
                        <p>
                          <strong>Present Category Image:</strong>
                          @php
                              $image=json_decode($artist_cat->image);
                          @endphp
                          <img height="80px" width="80px" src="{{asset($image[0])}}" alt="">
                        </p>
                      </div>
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
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="staticBackdropLabel">Add Artist Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="{{route('admin.artistCategory.add-artistCategory')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
        <label for="">Artist Category Name</label>
        <input class="form-control" type="text" name="artist_cat_name" placeholder="Artist Category Name" id="">
      </div>
      <div>
        <label for="">Artist Category Image</label>
        <input class="form-control" type="file" name="image[]" multiple  id="">
      </div>
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

