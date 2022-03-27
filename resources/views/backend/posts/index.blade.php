@extends('backend.layouts.master')
@section('title')
Danh sách Blog
@endsection
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
                  @can('create-post', App\Models\Post::class)
                    <a href="{{route('backend.posts.create') }}"  class="btn btn-success"><i class="fas fa-plus"></i></a>
                  @endcan
                  <div class="card-tools">
                    <form>
                      <div class="input-group input-group-md" style="width: 400px;">
                        <input type="text" name="title" class="form-control float-right" placeholder="Title">
                        <input type="text" name="status" class="form-control float-right" placeholder="Status">
                          <button type="submit" class="btn btn-default">
                            Filter
                          </button>
                      </div>
                    </form>
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
                        <th>Tình Trạng</th>
                        <th>Tag</th>
                        {{-- <th>Nguời tạo</th> --}}
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                      <tr data-widget="expandable-table" aria-expanded="true">
                        <td>{{$post->id}}</td>
                        <td class="text-primary" style="max-width:80px;" >{{$post->title}}
                        <p class="text-dark">Slug: {{$post->slug}}</p>
                        </td>
                        <td>{{$post->category->name}}</td>
                        <td>{{$post->status_text}}</td>
                        <td>
                            @foreach($post->tags as $tag)
                              <span class="badge badge-info">{{ $tag->name }}</span>
                            @endforeach
                          </td>
                        {{-- <td>{{$post->user->name}}</td> --}}
                        <td>{{$post->created_at}}</td>
                        <td>
                          <a href="{{route('backend.posts.show',$post->id) }}"  class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                          
                          @can('update-post',$post)
                            <a href="{{route('backend.posts.edit',$post->id) }}"  class="btn btn-primary"><i class="fas fa-edit"></i></a>
                          @endcan
                          @can('delete-post',$post)
                            <form method="POST" action="{{route('backend.posts.destroy',$post->id) }}">
                              @csrf
                              @method('DELETE')
                              <button  class="btn btn-danger"><i class="fas fa-trash"></i></button>  
                            </form>     
                          @endcan           
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  {{$posts->links()}}
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
      </div><!-- /.container-fluid -->
@endsection
