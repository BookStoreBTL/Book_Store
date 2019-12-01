@extends('admin.layout.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
            
                <div class="col-lg-12">
                    <h1 class="page-header">Author
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
                            <th>Name</th>
                            <th>Description</th>
                            <th>Img</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($author as $a)
                        <tr class="odd gradeX" align="center">
                            <td>{{$a->id}}</td>
                            <td>{{$a->name}}</td>
                            <td>{{$a->description}}</td>
                            <td>
                                <img width="90px" src="img/{{$a->img}}">
                            </td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/author/delete/{{$a->id}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/author/edit/{{$a->id}}">Edit</a></td>
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