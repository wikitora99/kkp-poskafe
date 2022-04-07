@extends('layouts.main')

@section('title')
  Tambah Produk
@endsection

@section('content')
  
  @include('layouts.flasher')

  <div class="row page-titles mx-0 d-flex flex-wrap align-items-center">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Tambah Produk</h4>
      </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end d-flex">
      <div class="breadcrumb">
        <button type="button" class="btn btn-xs btn-primary light me-3"><i class="fa fa-upload me-2"></i>Impor Data</button>
        <a href="{{ route('product.index') }}" class="btn btn-xs btn-primary"><i class="fa fa-list me-2"></i>Daftar Produk</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <div class="col-md-3">
                  <img src="{{ asset('storage/product/default.jpg') }}" class="img-preview img-fluid d-block w-100">
                  <label for="picture" class="btn btn-xs btn-square btn-primary w-100">
                    <i class="fa fa-upload me-2"></i>Unggah Foto Produk
                  </label>
                  <input type="file" class="d-none" id="picture" name="picture">
                </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="mb-3">
                      <label class="form-label">SKU (Stock Keeping Unit)<span class="text-danger ms-1">*</span></label>
                      <input type="text" class="form-control" name="sku" placeholder="Masukkan SKU produk" >
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nama Produk<span class="text-danger ms-1">*</span></label>
                      <input type="text" class="form-control" name="name" placeholder="Masukkan nama produk">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Kategori Produk<span class="text-danger ms-1">*</span></label>
                      <select name="category_id" class="default-select form-control">
                        <option selected disabled>Pilih kategori</option>
                        @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row my-3">
                <div class="mb-3">
                  <label class="form-label">Deskripsi Produk</label>
                  <textarea class="form-control bg-transparent" name="desc" rows="5" placeholder="Masukkan deskripsi produk" style="height: 80px;"></textarea>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <div class="form-check custom-checkbox mb-3 checkbox-primary">
                      <input type="hidden" name="is_active" value=0>
                      <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1">
                      <label class="form-check-label" for="is_active">Aktifkan di Menu Kasir</label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Harga Beli</label>
                    <div class="input-group">
                      <span class="input-group-text">Rp</span>
                      <input type="number" class="form-control" name="buy_price" placeholder="0">
                    </div>  
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Harga Jual<span class="text-danger ms-1">*</span></label>
                    <div class="input-group">
                      <span class="input-group-text">Rp</span>
                      <input type="number" class="form-control" name="sell_price" placeholder="0">
                    </div>      
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <div class="form-check custom-checkbox mb-3 checkbox-primary">
                      <input type="hidden" name="has_stock" value=0>
                      <input type="checkbox" class="form-check-input" id="has_stock" name="has_stock" value="1">
                      <label class="form-check-label" for="has_stock">Monitoring Stok Produk</label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Stok Saat Ini</label>
                    <input type="number" class="form-control" name="cur_stock" placeholder="0">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Peringatan Stok Minimum</label>
                    <input type="number" class="form-control" name="min_stock" placeholder="0">
                  </div>
                </div>
              </div>

              <hr class="dropdown-divider">

              <div class="row mt-4">
                <div class="col text-end">
                  <button type="button" class="btn btn-xs btn-outline-primary me-2 reset-btn">Reset</button>
                  <button type="submit" class="btn btn-xs btn-primary">Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection