@extends('backend.layouts.master')
@section('content-header')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0">Danh sách bài viết</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Danh sách bài Viết</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-header">
                  <a href="{{route('backend.posts.create') }}"  class="btn btn-success"><i class="fas fa-plus"></i></a>

                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover">
                    <thead>
                      <tr class="bg-dark" aria-expanded="false">
                        <th>ID</th>
                        <th>Tên bài viết</th>
                        <th>Danh mục</th>
                        <th>Người tạo</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr data-widget="expandable-table" aria-expanded="true">
                        <td>1</td>
                        <td class="text-primary" style="max-width:80px;" >Cận cảnh bên trong chiếc cano bị chìm khiến 17 người chết và mất tích </td>
                        <td>Xã hội</td>
                        <td>Khoa</td>
                        <td>11-7-2014</td>
                        <td>
                          <a href="{{route('backend.posts.edit') }}"  class="btn btn-primary"><i class="fas fa-pen"></i></a>
                          <a href="#"  class="btn btn-danger"><i class="fas fa-trash"></i></a>                         
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
      </div><!-- /.container-fluid -->
@endsection
