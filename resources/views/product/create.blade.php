@extends('layouts.main')

@section('content')

    {{-- Menu Title --}}
    @include('layouts.partials.menutitle')
    {{-- Menu Title End --}}
    
  
    <div class="col-xl-8 col-lg-12">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
            <strong>Sukses! </strong>{{ session('success') }}
        </div>
      @endif

      @if (session('failed'))
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
            <strong>Error! </strong>{{ session('failed') }}
        </div>
      @endif
      
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="POST">

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Produk</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="" id="">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Kategori Produk</label>
                            <div class="col-sm-9">
                                <select name="" id="" class="default-select form-control wide">
                                    <option value="COFFE">COFFE</option>
                                    <option value="SNACK">SNACK</option>
                                    <option value="MILKSHAKE">MILKSHAKE</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="" id="">
                            </div>
                        </div>
                        
                        <div class="mt-4 row">
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('product.index') }}" class="btn btn-xs btn-secondary mx-2"><i class="fa fa-arrow-left me-1"></i> Kembali</a>
                                <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-plus me-1"></i> Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
@endsection