@extends('backend.layouts.master')
@section('content-header')
@endsection
@section('content')
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Chỉnh Sửa User</h3>
              </div>
              <form action="{{route('backend.users.update') }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <input type="hidden" name="_method" value="put"/>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên User</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ngày</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập ngày...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File Ảnh</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Chọn file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Chỉnh sửa</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Chỉnh sửa</button>
                </div>
              </form>
            </div> 
@endsection