@extends('admin.layout.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
            
                <div class="col-lg-12">
                    <h1 class="page-header">Contact
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
                            <th>User Name</th>
                            <th>Content</th>
                            <th>Status</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contact as $c)
                        <tr class="odd gradeX" align="center">
                            <td>{{$c->id}}</td>
                            <td>{{$c->user->user_name}}</td>
                            <td>{{$c->title}}</td>
                            <td>{{$c->status}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/contact/delete/{{$c->id}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/contact/edit/{{$c->id}}">Edit</a></td>
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