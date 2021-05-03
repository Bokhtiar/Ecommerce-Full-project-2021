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
              <h3 class="card-title">All Product</h3>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add Product
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
                  <th>Sell Price</th>
                  <th>Code</th>
                  <th>image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($products as $product)
                        <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->category->category_name}}</td>
                        <td>{{$product->sell_price}}</td>
                        <td>{{$product->code}}</td>
                        @php
                        $image=json_decode($product->featured_image);
                        @endphp
                        <td><img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                        @if($product->status==1)
                        <td class=""><i class="btn btn-sm btn-primary fas fa-hand-point-up"></i></td>
                        @else
                        <td><i class="btn btn-sm btn-danger fas fa-hand-point-down"></i></td>
                        @endif
                        <td>
                          @if($product->status==0)
                          <a href="{{url('admin/product/active/'.$product->id)}}"><i class="btn btn-sm  btn-primary fas fa-hand-point-up"></i></a>
                          @else
                          <a href="{{url('admin/product/inactive/'.$product->id)}}"><i class="btn btn-sm  btn-danger fas fa-hand-point-down"></i></a>
                          @endif



                                            <a type="" class="" data-bs-toggle="modal" data-bs-target="#exampleModal{{$product->id}}">
                                              <i class="btn  btn-sm btn-primary fas fa-pen-alt"></i>
                                            </a>
                                            <a type="" class="" data-bs-toggle="modal" data-bs-target="#exampleModaledit{{$product->id}}">
                                                <i class="btn btn-primary btn-sm text-light fas fa-eye"></i>
                                              </a>

                          <a class="" href="{{url('admin/product/delete/'.$product->id)}}"  id="delete"><i class="btn btn-sm btn-danger  text-light far fa-trash-alt"></i></a>
                        </td>
                    </tr>


                        <!-- Button trigger edit -->


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Product Update</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url('admin/product/update/'.$product->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                <div>
                                    <label for="">Select Category</label>
                                    <select class="form-control" name="category_id" id="">

                                        <option value="{{$product->category_id}}">{{$product->category->category_name}}</option>
                                        @foreach ($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!--category_id-->
                                <div>
                                    <label for="">Select Sub Category</label>
                                    <select class="form-control" name="sub_category_id" id="">
                                        <option value="{{$product->subcategory_id}}">{{$product->subcategory?$product->subcategory->subcategory_name:''}}</option>
                                        @foreach ($subcategories as $subcat)
                                        <option value="{{$subcat->id}}">{{$subcat->subcategory_name}}</option>
                                        @endforeach
                                    </select>
                                </div><!--subcategory_id-->
                                <div>
                                    <label for="">Display Product Name</label>
                                    <input class="form-control" type="text" name="title" value="{{$product->title}}" placeholder="Display Name" id="">
                                </div><!-- title -->
                                <div>
                                    <label for="">Display Product Code</label>
                                    <input class="form-control" type="text" name="code" value="{{$product->code}}" placeholder="Display Code" id="">
                                </div><!-- code -->
                                <div>
                                    <label for="">Display Sell Price</label>
                                    <input class="form-control" type="number" name="sell_price" value="{{$product->sell_price}}"  placeholder="Display Product Sell Price" id="">
                                </div><!-- Sell Price -->
                                <div>
                                    <label for="">Discount Type</label>

                                    <select class="form-control" name="discount_type" id="">
                                        <option value="{{$product->discount_type}}"></option>
                                        <option value="0">Fixed</option>
                                        <option value="1">Discount</option>
                                    </select>
                                </div><!-- discount_type -->
                                <div>
                                    <label for="">Display Discount Amount</label>
                                    <input class="form-control" type="number" name="discount_amount" value="{{$product->discount_amount}}" placeholder=" Product Discount Amount" id="">
                                </div><!--discount_amount -->
                                <div>
                                    <label for="">Display Stock Amount</label>
                                    <input class="form-control" type="number" name="stock_amount" value="{{$product->stock_amount}}" placeholder=" Product Stock Amount" id="">
                                </div><!--stock_amount -->
                                <div>
                                    <label for=""> Des</label>
                                    <textarea id="editor5" name="description" style="width: 100%;" placeholder="Product Description">{{$product->description}}</textarea>
                                </div><!-- Description-->
                                <div>
                                    <label for="">Featured Image</label>
                                    <input type="file" name="featured_image[]" multiple id="">
                                    @php
                                        $image = json_decode($product->featured_image);
                                    @endphp
                                    <img height="80px" width="80px" src="{{asset($image[0])}}" alt="">
                                </div><!-- featured_image-->
                                <div>
                                    <label for="">Video</label>
                                    <input type="file" name="product_video[]" multiple id="">
                                    @php
                                        $image = json_decode($product->featured_image);
                                    @endphp
                                    <img height="80px" width="80px" src="{{asset($image[0])}}" alt="">
                                </div><!-- video-->


                                <input type="submit" class="btn btn-info" name="btn" value="Submit" id="">
                            </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                </div>
                            </div>
                            </div>
                        </div>


                        <!-- single product show start -->
                        <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModaledit{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{$product->title}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div>
              <p>
                  <strong>slug:</strong>
                    {{$product->slug}}
              </p>
          </div>
          <div>
            <p>
                <strong>Discount type:</strong>
                @if($product->discount_type==0)
                    no discount
                @else
                  {{$product->discount_amount}}
                @endif
            </p>
        </div>
        <div>
            <p>
                <strong>Stock Amount:</strong>
                  {{$product->stock_amount}}
            </p>
        </div>
        <div>
            <p>
                <strong>Description:</strong>
                  {{$product->description}}
            </p>
        </div>
        <div>
            <p>
                @if ($product->video)
                <strong>video:</strong>
                  @php
                  $image = json_decode($product->video)
                  @endphp

                  <img src="{{asset($image[0])}}" alt="">
                  @else

                  @endif

            </p>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
  <!-- single product end -->
                    @endforeach


                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>


<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                @csrf
        <div>
            <label for="">Select Category</label>
            <select class="form-control" name="category_id" id="">
                <option value="">Select Category</option>
                @foreach ($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                @endforeach
            </select>
        </div><!--category_id-->
        <div>
            <label for="">Select Sub Category</label>
            <select class="form-control" name="subcategory_id" id="">
                <option value="">Select Sub Category</option>
                @foreach ($subcategories as $subcat)
                <option value="{{$subcat->id}}">{{$subcat->subcategory_name}}</option>
                @endforeach
            </select>
        </div><!--subcategory_id-->
        <div>
            <label for="">Display Product Name</label>
            <input class="form-control" type="text" name="title" placeholder="Display Name" id="">
        </div><!-- title -->
        <div>
            <label for="">Display Product Code</label>
            <input class="form-control" type="text" name="code" placeholder="Display Code" id="">
        </div><!-- code -->
        <div>
            <label for="">Display Sell Price</label>
            <input class="form-control" type="number" name="sell_price" placeholder="Display Product Sell Price" id="">
        </div><!-- Sell Price -->
        <div>
            <label for="">Discount Type</label>
            <select class="form-control" name="discount_type" id="">
                <option value="0">Fixed</option>
                <option value="1">Discount</option>
            </select>
        </div><!-- discount_type -->
        <div>
            <label for="">Display Discount Amount</label>
            <input class="form-control" type="number" name="discount_amount" placeholder=" Product Discount Amount" id="">
        </div><!--discount_amount -->
        <div>
            <label for="">Display Stock Amount</label>
            <input class="form-control" type="number" name="stock_amount" placeholder=" Product Stock Amount" id="">
        </div><!--stock_amount -->
        <div>
            <label for="">Short Des</label>
            <textarea id="editor5" name="description" style="width: 100%;" placeholder="Product Description"></textarea>
        </div><!-- Description-->
        <div>
            <label for="">Featured Image</label>
            <input type="file" name="featured_image[]" multiple id="">
        </div><!-- featured_image-->
        <div>
            <label for="">Video</label>
            <input type="file" name="product_video[]" multiple id="">
        </div><!-- video-->


        <input type="submit" class="btn btn-info" name="btn" value="Submit" id="">
    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
@endsection
