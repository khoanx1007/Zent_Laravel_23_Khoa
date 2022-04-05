@extends('backend.layouts.master')
@section('title')
Danh sách Menu
@endsection
@section('content-header')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0">Danh sách Menu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Danh sách Menu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
      <div class="container-fluid">
        @if (session('error'))
          <div class="alert alert-danger" role="alert">
            {{ session('error') }}
          </div>
        @endif
        @if (session('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
        @endif
        <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-header">
                  {{-- @can('create-menu', App\Models\menu::class) --}}
                  <a href="{{route('backend.menus.create') }}"  class="btn btn-success"><i class="fas fa-plus"></i></a>
                  {{-- @endcan --}} 
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover">
                    <thead>
                      <tr class="bg-dark" aria-expanded="false">
                        <th>ID</th>
                        <th>Tên menu</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($menus as $menu)
                        <tr data-widget="expandable-table" aria-expanded="true">
                          <td>{{$menu->id}}</td>
                          <td class="text-primary" style="max-width:80px;" >{{$menu->name}}
                          </td>
                          <td>{{$menu->created_at}}</td>
                          <td class="d-flex flex-wrap">
                            {{-- @can('update-menu',$menu) --}}
                              <a href="{{route('backend.menus.edit',$menu->id) }}"  class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            {{-- @endcan
                            @can('delete-menu',$menu) --}}
                              <form method="menu" action="{{route('backend.menus.destroy',$menu->id) }}">
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-danger"><i class="fas fa-trash"></i></button>  
                              </form>     
                            {{-- @endcan            --}}
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
