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
              <h3 class="card-title">All Artist Blog</h3>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Add Artist Blog
            </button>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table  table-striped">
                <thead class="text-center">
                <tr>
                  <th>SL.</th>
                  <th>Artist Name</th>
                  <th>Category</th>
                  <th>tegs</th>
                  <th>image</th>
                  <th>Status</th>
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach ($artists as $artist)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$artist->title}}</td>
                    <td>{{$artist->ArtistCategory->artist_cat_name}}</td>
                    <td>{{$artist->tegs}}</td>
                    @php
                    $image=json_decode($artist->image);
                    @endphp
                    <td><img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                    @if($artist->status==1)
                    <td class=""><i class="btn btn-sm btn-primary fas fa-hand-point-up"></i></td>
                    @else
                    <td><i class="btn btn-sm btn-danger fas fa-hand-point-down"></i></td>
                    @endif
                    <td>
                      @if($artist->status==0)
                      <a href="{{url('admin/artist/active/'.$artist->id)}}"><i class="btn btn-sm  btn-primary fas fa-hand-point-up"></i></a>
                      @else
                      <a href="{{url('admin/artist/inactive/'.$artist->id)}}"><i class="btn btn-sm  btn-danger fas fa-hand-point-down"></i></a>
                      @endif    
                                        
                                        
                                        
                                        <a type="" class="" data-bs-toggle="modal" data-bs-target="#exampleModal{{$artist->id}}">
                                          <i class="btn  btn-sm btn-primary fas fa-pen-alt"></i>
                                        </a>
                      <a class="" href="{{url('admin/artist/delete/'.$artist->id)}}"  id="delete"><i class="btn btn-sm btn-danger  text-light far fa-trash-alt"></i></a>
                    </td>
                </tr>

                <!--edit section start -->
                <!-- Button trigger modal -->


              <!-- Modal -->
              <div class="modal fade" id="exampleModal{{$artist->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Update Artist Category</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('admin/artist/update/'.$artist->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                            <label for="">Artist Blog Title</label>
                            <input class="form-control" type="text" name="title" value="{{$artist->title}}" placeholder="Artist Category Name" id="">
                          </div>
                          <div>
                              <label for="">Artist Category </label>
                              <select name="artist_category_id" class="form-control" id="">
                                 
                                  @foreach ($artist_categories as $artist_cat)
                                  <option value="{{$artist_cat->id}}">{{$artist_cat->artist_cat_name}}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div>
                            <label for="">Artist blog Image</label>
                            <input class="form-control" type="file" name="image[]" multiple  id="">
                            @php
                                $image = json_decode($artist->image);
                            @endphp
                            <img height="80px;" width="80px;" src="{{asset($image[0])}}" alt="">
                          </div>
                          <div>
                            <label for="">Tegs</label>
                            <input class="form-control" type="text" name="tegs" value="{{$artist->tegs}}"  id="">
                          </div>
                          <div>
                            <label for="">Short Des</label>
                            <textarea id="editor5" name="short_des" style="width: 100%;  ">{{$artist->short_des}}</textarea>
                        </div><!-- short des-->
                    
                        <div>
                            <label for="">Blog Body</label>
                            <textarea id="editor6" name="body" style="width: 100%;">{{$artist->body}}</textarea>
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
        <h5 class="modal-title " id="staticBackdropLabel">Add Artist </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="{{route('admin.artist.add-artist')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
        <label for="">Artist Blog Title</label>
        <input class="form-control" type="text" name="title" placeholder="Artist Category Name" id="">
      </div>
      <div>
          <label for="">Artist Category </label>
          <select name="artist_category_id" class="form-control" id="">
              <option value="disable">Select Category Artist</option>
              @foreach ($artist_categories as $artist_cat)
              <option value="{{$artist_cat->id}}">{{$artist_cat->artist_cat_name}}</option>
              @endforeach
          </select>
      </div>
      <div>
        <label for="">Artist blog Image</label>
        <input class="form-control" type="file" name="image[]" multiple  id="">
      </div>
      <div>
        <label for="">Tegs</label>
        <input class="form-control" type="text" name="tegs"   id="">
      </div>
      <div>
        <label for="">Short Des</label>
        <textarea id="editor5" name="short_des" style="width: 100%;  "></textarea>
    </div><!-- short des-->

    <div>
        <label for="">Blog Body</label>
        <textarea id="editor6" name="body" style="width: 100%;"></textarea>
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

