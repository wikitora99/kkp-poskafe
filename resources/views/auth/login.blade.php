<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <title>RKS Backoffice - Masuk</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('src/images/favicon.png') }}">
  <link href="{{ asset('src/vendors/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
  <link href="{{ asset('src/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('src/vendors/toastr/css/toastr.min.css') }}" rel="stylesheet">
</head>

<body class="vh-100">
  <div class="authincation h-100">
    <div class="container h-100">
      <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">

          @include('layouts.flasher')

          <div class="authincation-content">
            <div class="row no-gutters">
              <div class="col-xl-12">
                <div class="auth-form">
                  <div class="text-center mb-3">
                    <img src="{{ asset('src/images/logo-full-black.png') }}" alt="">
                  </div>
                  <h4 class="text-center mb-4">Masuk Backoffice</h4>
                  <form action="{{ route('post.login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label class="mb-1"><strong>Username</strong></label>
                      <input type="text" class="form-control" name="username" placeholder="Masukkan username..." required autofocus>
                    </div>
                    <div class="form-group">
                      <label class="mb-1"><strong>Password</strong></label>
                      <input type="password" class="form-control" name="password" placeholder="Masukkan password..." required>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Required vendors -->
  <script src="{{ asset('src/vendors/global/global.min.js') }}"></script>
  <script src="{{ asset('src/vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
  <script src="{{ asset('src/js/deznav-init.js') }}"></script>
  <script src="{{ asset('src/js/custom.js') }}"></script>
  <script src="{{ asset('src/vendors/toastr/js/toastr.min.js') }}"></script>
  <script src="{{ asset('src/js/script.js') }}"></script>
</body>
</html>