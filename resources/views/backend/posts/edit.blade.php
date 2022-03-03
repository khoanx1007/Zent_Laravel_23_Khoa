@extends('backend.layouts.master')
@section('content-header')
@endsection
@section('content')
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Chỉnh Sửa Bài Viết</h3>
              </div>
              <form action="{{route('backend.posts.update',1) }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <input type="hidden" name="_method" value="put"/>
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên bài viết</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter...">
                  </div>
                  <div class="form-group">
                    <label>Text Arena</label>
                    <textarea id="summernote" class="form-control"></textarea>
                  </div>
                  <div class="row">
                    <div class="form-group col-6" >
                      <label>Danh mục</label>
                      <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Trạng thái</label>
                      <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                      </select>
                    </div>
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
