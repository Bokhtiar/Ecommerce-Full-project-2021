@extends('layouts.Admin.asset')
@section('admin_content')

<div class="card-body">
    <table id="example1" class="table  table-striped">
      <thead class="text-center">
      <tr>
        <th>SL.</th>
        <th>Phone</th>
        <th>Messages</th>
        <th>Action</th>

      </tr>
      </thead>
      <tbody class="text-center">
      @foreach ($quotes as $quote)
      <tr>
          <td>{{$loop->index+1}}</td>
          <td>{{$quote->phone}}</td>
          <td>{{$quote->msg}}</td>

         <td>
            <a class="" href="{{url('admin/quote/delete/'.$quote->id)}}"  id="delete"><i class="btn btn-sm btn-danger  text-light far fa-trash-alt"></i></a>
          </td>
      </tr>

      <!--edit section start -->
      <!-- Button trigger modal -->



      @endforeach

      </tfoot>
    </table>
  </div>

@endsection
