@extends('backend.layouts.master')
@section('title')
Danh sách User
@endsection
@section('content-header')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Danh sách users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Danh sách Users</li>
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
                  <a href="{{route('backend.users.create') }}"  class="btn btn-success"><i class="fas fa-plus"></i></a>

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
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr class="bg-dark">
                        <th>ID</th>
                        <th>Tên User</th>
                        <th>Email</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                      </tr>
                    </thead>
                    <tbody>                     
                      @foreach($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><span class="text-success">Chấp thuận</span></td>
                        <td>
                          <a href="{{route('backend.users.show',$user->id) }}"  class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                          <a href="{{route('backend.users.edit',$user->id) }}"  class="btn btn-primary"><i class="fas fa-pen"></i></a>
                          <form method="POST" action="{{route('backend.users.destroy',$user->id) }}">
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
