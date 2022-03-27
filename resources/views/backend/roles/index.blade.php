@extends('backend.layouts.master')
@section('title')
Danh sách Role
@endsection
@section('content-header')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Danh sách roles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Danh sách Role</li>
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
                  <a href="{{route('backend.roles.create') }}"  class="btn btn-success"><i class="fas fa-plus"></i></a>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr class="bg-dark">
                        <th>ID</th>
                        <th>Role</th>
                        <th>Quyền</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>                     
                      @foreach($roles as $role)
                      <tr>
                        <td>{{$role->id}}</td>
                        <td>
                          {{$role->name}}
                          <p class="text-dark">Slug: {{$role->slug}}</p>
                        </td>
                        <td>
                          @foreach($role->permissions as $permission)
                              <span class="badge p-1 badge-warning">{{ $permission->name }}</span>
                            @endforeach
                        </td>
                        <td><span class="text-success">{{$role->created_at}}</span></td>
                        <td>
                          <a href="{{route('backend.roles.edit',$role->id) }}"  class="btn btn-primary"><i class="fas fa-pen"></i></a>
                          <form method="POST" action="{{route('backend.roles.destroy',$role->id) }}">
                            @csrf
                            @method('DELETE')
                            <button  class="btn btn-danger"><i class="fas fa-trash"></i></button>  
                          </form>                         
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{$roles->links()}}
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
      </div><!-- /.container-fluid -->
@endsection
