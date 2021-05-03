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
              <h3 class="card-title">All Dealer</h3>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Add Dealer
            </button>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table  table-striped">
                <thead class="text-center">
                <tr>
                  <th>SL.</th>
                  <th>Dealer Title</th>
                  <th>Dealer Location</th>
                  <th>Image</th>
                  <th>Comment</th>
                  <th>Status</th>
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody class="text-center">
                  
                  @foreach ($dealers as $dealer)
                  <tr>
                      <td>{{$loop->index+1}}</td>
                      <td>{!!$dealer->dealer_name!!}</td>
                      <td>{{$dealer->dealer_location}}</td>
                      @php
                      $image=json_decode($dealer->dealer_image);
                      @endphp
                      <td><img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                      <td>{!!$dealer->comment!!}</td>
                      @if($dealer->status==1)
                      <td class=""><i class="btn btn-sm btn-primary fas fa-hand-point-up"></i></td>
                      @else
                      <td><i class="btn btn-sm btn-danger fas fa-hand-point-down"></i></td>
                      @endif
                      <td>
                        @if($dealer->status==0)
                        <a href="{{url('admin/dealer/active/'.$dealer->id)}}"><i class="btn btn-sm  btn-primary fas fa-hand-point-up"></i></a>
                        @else
                        <a href="{{url('admin/dealer/inactive/'.$dealer->id)}}"><i class="btn btn-sm  btn-danger fas fa-hand-point-down"></i></a>
                        @endif    
                                          
                                          
                                          
                                          <a type="" class="" data-bs-toggle="modal" data-bs-target="#exampleModaEdit{{$dealer->id}}">
                                            <i class="btn  btn-sm btn-primary fas fa-pen-alt"></i>
                                          </a>
                        <a class="" href="{{url('admin/dealer/delete/'.$dealer->id)}}"  id="delete"><i class="btn btn-sm btn-danger  text-light far fa-trash-alt"></i></a>
                      </td>
                  </tr>
                

                        <!-- blog Edit page show start-->
                        
                        <div class="modal fade" id="exampleModaEdit{{$dealer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Dealer</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                
                                <form action="{{url('admin/dealer/update-dealer/'.$dealer->id)}}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  
                                  <div>
                                  <label for="">Dealer Title</label>
                                  <textarea id="editor4" name="dealer_name" style="width: 100%;">{!!$dealer->dealer_name!!}</textarea>
                                  </div><!-- blog title end -->
                                  
            
                                  <div>
                                      <label for="">Dealer Image</label>
                                      <input class="form-control" type="file" name="dealer_image[]" multiple  id="">
                                      @php
                                       $image=json_decode($dealer->dealer_image);   
                                      @endphp
                                      <strong>Presend Image:</strong>
                                      <img height="80px" width="90px"   src="{{asset($image[0])}}" alt="">
                                    </div><!--image end -->
                          
                                  <div>
                                      <label for="">Dealer Location</label>
                                      <input class="form-control" type="text" value="{{$dealer->dealer_location}}" name="dealer_location" placeholder="Enter Dealer Location" id="">
                                  </div><!-- Dealer location end -->
                                  <div>
                                      <label for="">Comment Box</label>
                                      <textarea id="editor5" name="Comment" style="width: 100%;  ">{{$dealer->comment}}.</textarea>
                                  </div><!-- Comment des-->
                          
                                  
                          
                          
                          
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
        <h5 class="modal-title " id="staticBackdropLabel">Add Dealer </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="{{route('admin.dealer.add-dealer')}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div>
        <label for="">Dealer Title</label>
        <textarea id="editor3" name="dealer_name" style="width: 100%; " placeholder="Dealer Title" ></textarea>
        </div><!-- short des-->

        <div>
            <label for="">Blog Image</label>
            <input class="form-control" type="file" name="dealer_image[]" multiple  id="">
        </div><!--image end -->

        <div>
            <label for="">Dealer Location</label>
            <input class="form-control" type="text" name="dealer_location" placeholder="Enter location" id="">
        </div><!-- blog tegs end -->
        <div>
            <label for="">Comment Box</label>
            <textarea id="editor1" name="Comment" style="width: 100%;" placeholder="Dealer Comment Box"></textarea>
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