@extends('auth.auth_layout')
@section('content')
<div class="register-box">
    <div class="register-logo">
      <a href="/backend/index2.html" class="text-white"><b>Admin</b>LTE</a>
    </div>
  
    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Đăng kí thành viên</p>
  
        <form action="{{ route('auth.register') }}" method="POST">
          @csrf
          <div class="form-group mb-2">
            <label>Tên:</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid  @enderror" placeholder="Nhập Tên.." value="{{ old('name') }}">
            @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group mb-2">
            <label>Email:</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid  @enderror" placeholder="Nhập Email.." value="{{ old('email') }}">
            @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group mb-2">
            <label>Mật khẩu:</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid  @enderror" placeholder="Nhập mật khẩu.. " value="{{ old('password') }}">
            @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group mb-3">
            <label>Nhập lại mật khẩu:</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                 I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Sign up using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Sign up using Google+
          </a>
        </div>
  
        <a href="login.html" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
@endsection

     