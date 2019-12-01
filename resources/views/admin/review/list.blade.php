@extends('admin.layout.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
            
                <div class="col-lg-12">
                    <h1 class="page-header">Review
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
                            <th>Book Name</th>
                            <th>User Name</th>
                            <th>Content</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($review as $r)
                        <tr class="odd gradeX" align="center">
                            <td>{{$r->id}}</td>
                            <td>{{$r->book->name}}</td>
                            <td>{{$r->user->user_name}}</td>
                            <td>{{$r->title}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/review/delete/{{$r->id}}"> Delete</a></td>
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