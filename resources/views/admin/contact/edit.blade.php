@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                    <small>Edit</small>
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

                <form action="admin/contact/edit/{{$contact->id}}" method="POST" enctype="multipart/form-data">
                    <!-- de truyen du lieu -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>User Name</label>
                        <input class="form-control" value="{{$contact->user->user_name}}" disabled/>
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" rows="10" cols="" disabled>{{$contact->title}}</textarea>
                    </div>

                    <div class="form-group">
                            <label>Contact Status</label>
                            <label class="radio-inline">
                                <input name="status" value="In Process" 
                                @if($contact->status == 'In Process') {{"checked"}}
                                @endif
                                 type="radio">In Process
                            </label>
                            <label class="radio-inline">
                                <input name="status" value="Done"
                                @if($contact->status == 'Done') {{"checked"}}
                                @endif
                                 type="radio">Done
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