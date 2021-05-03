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
              <h3 class="card-title">All SubCategory</h3>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Add SubCategory
            </button>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table  table-striped">
                <thead class="text-center">
                <tr>
                  <th>SL.</th>
                  <th>Category Name</th>
                  <th>SubCategory Name</th>
                  <th>SubCategory Image</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody class="text-center">
                  @foreach ($subcategories as $subcat)
                  <tr>
                      <td>{{$loop->index+1}}</td>
                      <td>{{$subcat->category?$subcat->category->category_name:''}}</td>
                      <td>{{$subcat->subcategory_name}}</td>
                      @php
                      $image=json_decode($subcat->subcategory_image);
                      @endphp
                      <td><img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                      @if($subcat->status==1)
                      <td class=""><i class="btn btn-sm btn-primary fas fa-hand-point-up"></i></td>
                      @else
                      <td><i class="btn btn-sm btn-danger fas fa-hand-point-down"></i></td>
                      @endif
                      <td>
                        @if($subcat->status==0)
                        <a href="{{url('admin/subcategory/active/'.$subcat->id)}}"><i class="btn btn-sm  btn-primary fas fa-hand-point-up"></i></a>
                        @else
                        <a href="{{url('admin/subcategory/inactive/'.$subcat->id)}}"><i class="btn btn-sm  btn-danger fas fa-hand-point-down"></i></a>
                        @endif



                                          <a type="" class="" data-bs-toggle="modal" data-bs-target="#exampleModal{{$subcat->id}}">
                                            <i class="btn  btn-sm btn-primary fas fa-pen-alt"></i>
                                          </a>
                        <a class="" href="{{url('admin/subcategory/delete/'.$subcat->id)}}"  id="delete"><i class="btn btn-sm btn-danger  text-light far fa-trash-alt"></i></a>
                      </td>
                  </tr>

                  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal{{$subcat->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Update SubCategory{{$subcat->id}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{url('admin/subcategory/update/'.$subcat->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          <div>
          <select class="form-control" name="category_id" id="">
            @foreach ($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->category_name}}</option>
            @endforeach
          </select>
        </div>
        <div>
          <label for="">SubCategory Name</label>
          @php
          @endphp

          <input class="form-control" type="text" value="{{$subcat->subcategory_name}}" name="subcategory_name" id="">
        </div>
        <div>
          <label for="">SubCategory Image</label>
          <input class="form-control" type="file" name="subcategory_image[]" multiple  id="">
          @php
              $image=json_decode($subcat->subcategory_image);
          @endphp
          <p>
            <strong>Present SubCategory Image</strong>
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
        <h5 class="modal-title " id="staticBackdropLabel">Add SubCategory</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="{{route('admin.subcategory.add-subcategory')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
        <select class="form-control" name="category_id" id="">
          <option value="disable">Select Categroy</option>
          @foreach ($categories as $cat)
          <option value="{{$cat->id}}">{{$cat->category_name}}</option>
          @endforeach
        </select>
      </div>
      <div>
        <label for="">SubCategory Name</label>
        <input class="form-control" type="text" placeholder="Enter SubCategory Name" name="subcategory_name" id="">
      </div>
      <div>
        <label for="">SubCategory Image</label>
        <input class="form-control" type="file" name="subcategory_image[]" multiple  id="">
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
