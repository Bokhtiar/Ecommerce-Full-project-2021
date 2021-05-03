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
                  <th>Category Name</th>
                  <th>Category Image</th>
                  <th>Status</th>
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach ($categories as $cat)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$cat->category_name}}</td>
                    @php
                    $image=json_decode($cat->category_image);
                    @endphp
                    <td><img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                    @if($cat->status==1)
                    <td class=""><i class="btn btn-sm btn-primary fas fa-hand-point-up"></i></td>
                    @else
                    <td><i class="btn btn-sm btn-danger fas fa-hand-point-down"></i></td>
                    @endif
                    <td>
                      @if($cat->status==0)
                      <a href="{{url('admin/category/active/'.$cat->id)}}"><i class="btn btn-sm  btn-primary fas fa-hand-point-up"></i></a>
                      @else
                      <a href="{{url('admin/category/inactive/'.$cat->id)}}"><i class="btn btn-sm  btn-danger fas fa-hand-point-down"></i></a>
                      @endif    
                                        
                                        
                                        
                                        <a type="" class="" data-bs-toggle="modal" data-bs-target="#exampleModal{{$cat->id}}">
                                          <i class="btn  btn-sm btn-primary fas fa-pen-alt"></i>
                                        </a>
                      <a class="" href="{{url('admin/category/delete/'.$cat->id)}}"  id="delete"><i class="btn btn-sm btn-danger  text-light far fa-trash-alt"></i></a>
                    </td>
                </tr>

                <!--edit section start -->
                <!-- Button trigger modal -->


              <!-- Modal -->
              <div class="modal fade" id="exampleModal{{$cat->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{url('admin/category/update/'.$cat->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                        <label for="">Category Name</label>
                        <input class="form-control" type="text" name="category_name" value="{{$cat->category_name}}" id="">
                      </div>
                      <div>
                        <label for="">Category Image</label>
                        <input class="form-control" type="file" name="category_image[]" multiple  id="">
                        <p>
                          <strong>Present Category Image:</strong>
                          @php
                              $image=json_decode($cat->category_image);
                          @endphp
                          <img height="80px" width="80px" src="{{asset($image[0])}}" alt="">
                        </p>
                      </div>
                      <input class="btn btn-primary ml-auto text-light mt-1" type="submit" name="btn" value="Submit" id="">
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
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
        <h5 class="modal-title " id="staticBackdropLabel">Add Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="{{route('admin.category.add-category')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
        <label for="">Category Name</label>
        <input class="form-control" type="text" name="category_name" placeholder="Category Name" id="">
      </div>
      <div>
        <label for="">Category Image</label>
        <input class="form-control" type="file" name="category_image[]" multiple  id="">
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