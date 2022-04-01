@extends('backend.layouts.master')
@section('title')
Danh sách danh mục
@endsection
@section('content-header')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0">Danh sách danh mục</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Danh sách danh mục</li>
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
                  <a href="{{route('backend.categories.create') }}"  class="btn btn-success"><i class="fas fa-plus"></i></a>
                  <a href="{{route('backend.categories.index2') }}"  class="btn btn-success"><i class="fas fa-recycle"></i></a>
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
                        <th>Tên danh mục</th>
                        <th>Mô tả</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($categories as $category)
                        <tr data-widget="expandable-table" aria-expanded="true">
                          <td>{{$category->id}}</td>
                          <td class="text-primary" style="max-width:80px;" >{{$category->name}}
                          <p class="text-dark">Slug: {{$category->slug}}</p>
                          </td>
                          <td>{{$category->content}}</td>
                          <td>{{$category->created_at}}</td>
                          <td class="d-flex flex-wrap">
                            <a href="{{route('backend.categories.edit',$category->id) }}"  class="btn btn-primary"><i class="fas fa-pen"></i></a>
                            <form method="POST" action="{{route('backend.categories.destroy',$category->id) }}">
                              @csrf
                              @method('DELETE')
                              <button  class="btn btn-danger"><i class="fas fa-trash"></i></button>  
                            </form>                         
                          </td>
                        </tr>
                      @endforeach
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
