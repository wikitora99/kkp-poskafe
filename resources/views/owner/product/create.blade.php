@extends('layouts.main')

@section('title')
    Tambah Produk
@endsection

@section('content')

    <div class="row page-titles mx-0 d-flex flex-wrap align-items-center">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
            <h4>Tambah Produk</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end d-flex">
            <div class="breadcrumb">
            <a href="{{ route('product.index') }}" class="btn btn-xs btn-primary light me-2"><i class="fa fa-arrow-left me-2"></i>Kembali</a>
            </div>
        </div>
    </div>

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
                    <form action="" method="POST" enctype="multipart/form-data"> 

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">SKU</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="sku" id="sku">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Kategori Produk</label>
                            <div class="col-sm-9">
                                <select name="category_id" id="category_id" class="default-select form-control wide">
                                    @foreach ($category as $kat)
                                        <option value="<?= $kat['category_id']; ?>"><?= $kat['name']; ?></option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Produk</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Picture</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input form-control" name="picture" id="picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="price" id="price">
                            </div>
                        </div>
                        
                        <div class="mt-4 row">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-plus me-1"></i> Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
@endsection