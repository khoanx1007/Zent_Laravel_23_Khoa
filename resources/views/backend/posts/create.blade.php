@extends('backend.layouts.master')
@section('title')
Tạo Blog
@endsection
@section('content')
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card card-dark">
                    <div class="card-header">
                      <h1 class="card-title">Tạo bài viết mới</h1>
                    </div>   
                      <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('backend.posts.store') }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label>Tên bài viết</label>
                          <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror " placeholder="Enter..." >
                          @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label>Nội dung</label>
                          <textarea id="editor" name="content" class="form-control @error('content') is-invalid @enderror"></textarea>
                          @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group" >
                              <label>Tags</label>
                              <select multiple="" class="form-control" name="tags[]">
                                @foreach ($tags as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                              </select>
                        </div>  
                        <div class="form-group" >
                            <label>Danh mục</label>
                            <select class="form-control" name="category">
                                @foreach ($categories as $category)
                                  <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                          <input type="text" name="status" value="{{ old('status') }}" class="form-control @error('status') is-invalid @enderror " placeholder="Enter..." >
                          @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-dark">Tạo</button>
                        <a href="" class="btn btn-default float-right">Huỷ</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
@endsection
