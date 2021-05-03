@extends('layouts.Admin.asset')
@section('admin_content')
<div class="card-body">
    <table id="example1" class="table  table-striped">
      <thead class="text-center">
      <tr>
        <th>SL.</th>
        <th>Email</th>
        <th>Date</th>
      </tr>
      </thead>
      <tbody class="text-center">
      @foreach ($Subscribes as $sub)
      <tr>
          <td>{{$loop->index+1}}</td>
          <td>{{$sub->email}}</td>
          <td>{{$sub->created_at->diffForHumans()}} </td>
      </tr>

      <!--edit section start -->
      <!-- Button trigger modal -->


      @endforeach

      </tfoot>
    </table>
  </div>
@endsection
