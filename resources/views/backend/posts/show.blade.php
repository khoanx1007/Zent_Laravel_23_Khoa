@extends('backend.layouts.master')
@section('title')
Post
@endsection
@section('content-header')
Bài viết {{$post -> id}}
@endsection
@section('content')
<h1>Tên: {{$post -> title}}</h1>
<h1>Nội dung: {{$post -> content}}</h1>
@endsection
