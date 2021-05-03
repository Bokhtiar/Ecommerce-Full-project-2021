@extends('layouts.Admin.asset')
@section('admin_content')
<section>
    <div class="text-center container">


<table class="table">
    <thead>
      <tr>
        <th scope="col">Order Sl</th>
        <th scope="col">Name</th>
        <th scope="col">phone</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <th scope="row">{{$order->id}}</th>
            <td>{{$order->user->name}}</td>
            <td>{{$order->phone}}</td>

                @if ($order->is_complete==1)
                <td><span class="bg-success">Complete</span></td>
                @else
                <td ><span class="bg-danger">Incomplete</span></td>
                @endif
                <td>
                @if ($order->is_complete==0)
                <a class="btn btn-sm btn-success" href="{{url('admin/order/complete/'.$order->id)}}">Complete</a>
                @else
                <a class="btn btn-sm btn-danger" href="{{url('admin/order/incomplete/'.$order->id)}}">Incomplete</a>
                @endif

                <a class="btn btn-sm btn-info" href="{{url('admin/order/view/'.$order->id)}}">View</a>
                <a class="btn btn-sm btn-danger" href="{{url('admin/order/delete/'.$order->id)}}">Delete</a>
                </td>
          </tr>
        @endforeach
    </tbody>
  </table>
</div>
</section>
@endsection
