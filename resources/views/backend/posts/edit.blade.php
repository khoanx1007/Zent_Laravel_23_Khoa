@extends('backend.layouts.master')
@section('title')
Chỉnh sửa Blog
@endsection
@section('content')
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Chỉnh Sửa Bài Viết</h3>
              </div>
              <form action="{{route('backend.posts.update',$post->id) }}" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PUT')
                <input type="hidden" name="_method" value="put"/>
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên bài viết</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter..." value="@error('title'){{ old('title') }} @else{{ $post->title }}  @enderror" >
                    @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Content</label>
                    <textarea id="editor" class="form-control @error('content') is-invalid @enderror" name='content' value="">{{ $post->content }}</textarea>
                    @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group col-12" >
                      <label>Danh mục</label>
                      <select class="form-control" name='category'>
                          @foreach ($categories as $category)
                            <option value="{{$category->id}}"
                              @if($post->category_id == $category->id) 
                                selected 
                              @endif
                              >{{$category->name}}</option>
                          @endforeach
                      </select>
                  </div>  
                  <div class="form-group col-12">
                        <label>Tags</label>
                        <select multiple="" class="form-control" name='tags[]'>
                          @foreach ($tags as $item)
                            @foreach ($post->tags as $post_tag)
                              @php
                                $selected = "";
                                if ($post_tag->id == $item->id){
                                  $selected = "selected";
                                  break;
                                }
                              @endphp
                            @endforeach
                            <option value="{{$item->id}}" {{ $selected }}>{{$item->name}} </option>
                          @endforeach
                        </select>
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
