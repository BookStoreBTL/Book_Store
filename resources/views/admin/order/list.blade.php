@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Order
                    <small>List</small>
                </h1>
            </div>
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>User</th>
                        <th>Books</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order as $o)
                    <tr class="odd gradeX" align="center">
                        <td id="orderID" style="width: 5%">{{$o->id}}</td>
                        <td style="width: 5%">{{$o->user->user_name}}</td>
                        <?php 
                            $order_detail = \App\OrderDetail::where('order_id', $o->id)->get();
                            $payment = \App\Payment::where('order_id', $o->id)->get();
                        ?>
                        <td id="book" style="width: 40%">
                            @foreach($order_detail as $od)
                                <div class='book' style=' text-overflow: ellipsis;overflow: hidden;white-space: nowrap;'>
                                    {{$od->book->name}}
                                </div>
                            @endforeach
                        </td>
                        <td id="quantity" style="width: 10%">
                            @foreach($order_detail as $od)
                                <div class='book' style=' text-overflow: ellipsis;overflow: hidden;white-space: nowrap;'>
                                    {{$od->quantity_order}}
                                </div>
                            @endforeach
                        </td>
                        <td id="amount" style="width: 5%"> 
                            @foreach($payment as $p)
                                <div class='book' style=' text-overflow: ellipsis;overflow: hidden;white-space: nowrap;'>
                                    {{$p->amount}}
                                </div>
                            @endforeach
                        </td>
                        <td style="width: 5%">{{$o->status}} </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection