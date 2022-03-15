@extends('backend.layouts.master')
@section('title')
Tạo Blog
@endsection
@section('content')
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
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter...">
                  </div>
                  <div class="form-group">
                    <label>Text Arena</label>
                    <textarea id="editor" name="content" class="form-control"></textarea>
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
                      <select class="form-control">
                          @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                      </select>
                  </div>
                    
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Tạo</button>
                  <a href="" class="btn btn-default float-right">Huỷ</a>
                </div>
              </form>
            </div>
@endsection
