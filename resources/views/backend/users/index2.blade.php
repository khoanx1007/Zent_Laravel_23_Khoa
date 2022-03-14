@extends('backend.layouts.master')
@section('title')
Danh sách User đã xoá
@endsection
@section('content-header')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Danh sách users đã xoá</h1>
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
                    <a href="{{route('backend.users.index') }}"  class="btn btn-success"><i class="fas fa-list"></i></a>
                    <div class="card-tools">
                      <form>
                        <div class="input-group input-group-md" style="width: 400px;">
                          <input type="text" name="email" class="form-control float-right" placeholder="Email" value="{{request()->get('email')}}">
                          <input type="text" name="name" class="form-control float-right"  placeholder="Name" value="{{request()->get('name')}}">
                            <button type="submit" class="btn btn-default">
                              Filter
                            </button>
                        </div>
                      </form>
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
                          <a href="{{route('backend.users.restore',$user->id) }}"  class="btn btn-info"><i class="fas fa-recycle"></i></a>                      
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{$users->links()}}
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
      </div><!-- /.container-fluid -->
@endsection
