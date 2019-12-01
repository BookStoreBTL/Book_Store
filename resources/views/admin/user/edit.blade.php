@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>{{$user->user_name}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}} <br>
                    @endforeach
                </div>
                @endif

                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif

                @if(session('loi'))
                <div class="alert alert-danger">
                    {{session('loi')}}
                </div>
                @endif

                <form action="admin/user/edit/{{$user->id}}" method="POST" enctype="multipart/form-data">
                    <!-- de truyen du lieu -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>User Name</label>
                        <input class="form-control" name="name" value="{{$user->user_name}}" />
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input class="form-control" name="name" value="{{$user->phone_number}}" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="name" value="{{$user->email}}" />
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input class="form-control" name="name" value="{{$user->address}}" />
                    </div>

                    <div class="form-group">
                        <label>Level</label>
                        <label class="radio-inline">
                            <input name="level" value="0" checked="" type="radio">User
                        </label>
                        <label class="radio-inline">
                            <input name="level" value="1" type="radio">Admin
                        </label>
                    </div>

                    <button type="submit" class="btn btn-default">Edit</button>
                    <!-- <button type="reset" class="btn btn-default">Reset</button> -->
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection