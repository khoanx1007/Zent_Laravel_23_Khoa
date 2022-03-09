@extends('backend.layouts.master')
@section('title')
Chỉnh sửa Blog
@endsection
@section('content')
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Chỉnh Sửa Bài Viết</h3>
              </div>
              <form action="{{route('backend.categories.update',$category->id) }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PUT')
                <input type="hidden" name="_method" value="put"/>
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên bài viết</label>
                    <input type="text" name="name" class="form-control" value="{{$category->name}}" id="exampleInputEmail1" placeholder="Enter...">
                  </div>
                  <div class="form-group">
                    <label>Mô tả</label>
                    <textarea id="editor" name="content" class="form-control">{{$category->content}}</textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Sửa</button>
                  <a href="" class="btn btn-default float-right">Huỷ</a>
                </div>
              </form>
            </div> 
@endsection
