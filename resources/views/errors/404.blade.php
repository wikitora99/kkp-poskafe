
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>RKS Backoffice - Halaman Tidak Ditemukan</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('src/images/favicon.png') }}">
    <link href="{{ asset('src/css/style.css') }}" rel="stylesheet">
    
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-8">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-weight-bold">404</h1>
                        <h4><i class="fa fa-exclamation-triangle text-warning me-2 my-3"></i>Halaman tidak dapat ditemukan!</h4>
                        <p>Silakan kembali ke halaman utama melalui tombol di bawah ini.</p>
						<div>
                            <a class="btn btn-xs btn-info" href="{{ route('home') }}"><i class="fa fa-chevron-left me-2"></i>Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('src/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('src/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('src/js/custom.js') }}"></script>
<script src="{{ asset('src/js/deznav-init.js') }}"></script>
</body>
</html>