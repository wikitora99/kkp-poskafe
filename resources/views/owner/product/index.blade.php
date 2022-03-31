@extends('layouts.main')

@section('title')
  Daftar Produk
@endsection

@section('content')
  
  @include('layouts.flasher')

  <div class="row page-titles mx-0 d-flex flex-wrap align-items-center">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Daftar Produk</h4>
      </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end d-flex">
      <div class="breadcrumb">
        <button type="button" class="btn btn-xs btn-primary light me-2"><i class="fa fa-download me-2"></i>Export Excel</button>
        <a href="{{ route('product.create') }}" class="btn btn-xs btn-primary"><i class="fa fa-plus me-2"></i>Tambah Produk</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="product-table" class="datatables display compact table table-hover my-2">
              <thead>
                <tr>
                  <th>Gambar</th>
                  <th>SKU</th>
                  <th>Nama Produk</th>
                  <th>Kategori</th>
                  <th>Jumlah Stok</th>
                  <th>Harga Jual</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                  <tr>
                    <td>
                      <img class="rounded-circle" width="45" src="{{ asset('src/images/profile/1.png') }}" alt="Gambar produk">
                    </td>
                    <td>{{ $product->sku }}</td>
                    <td>
                      <a href="{{ route('product.show', $product) }}" class="text-info">{{ $product->name }}</a>
                    </td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->has_stock ? $product->cur_stock : 'Unlimited' }}</td>
                    <td>@currency_id($product->price)</td>
                    <td>
                      <div class="d-flex">
                        <a href="{{ route('product.show', $product) }}" class="btn btn-xs btn-primary shadow sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                        <a href="#" class="btn btn-xs btn-danger shadow sharp"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>                       
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Gambar</th>
                  <th>SKU</th>
                  <th>Nama Produk</th>
                  <th>Kategori</th>
                  <th>Jumlah Stok</th>
                  <th>Harga Jual</th>
                  <th></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection