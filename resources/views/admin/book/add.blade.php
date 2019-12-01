@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Book
                    <small>Add</small>
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

                <form action="admin/book/add" method="POST" enctype="multipart/form-data">
                    <!-- de truyen du lieu -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                    <div class="form-group">
                        <label>Book Name</label>
                        <input class="form-control" name="name" />
                    </div>

                    <div class="form-group">
                        <label>Author</label>
                        <select class="form-control" name="author">
                            @foreach($author as $a)
                                <option value="{{$a->id}}">{{$a->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category">
                            @foreach($category as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Language</label>
                        <select class="form-control" name="language">
                            @foreach($language as $l)
                                <option value="{{$l->id}}">{{$l->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Publisher</label>
                        <select class="form-control" name="publisher">
                            @foreach($publisher as $p)
                                <option value="{{$p->id}}">{{$p->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="demo" class="form-control ckeditor " name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Release Year</label>
                        <input class="form-control" name="release_year"  />
                    </div>

                    <div class="form-group">
                        <label>Page Number</label>
                        <input class="form-control" name="page" />
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" name="price" />
                    </div>

                    <div class="form-group">
                        <label>Quantity In Stock</label>
                        <input class="form-control" name="quantity_in_stock" />
                    </div>

                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="img">
                    </div>
                    
                    <button type="submit" class="btn btn-default">Add</button>
                    <!-- <button type="reset" class="btn btn-default">Reset</button> -->
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection