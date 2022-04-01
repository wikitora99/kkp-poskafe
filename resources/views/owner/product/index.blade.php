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
        <button type="button" class="btn btn-xs btn-primary light me-3"><i class="fa fa-download me-2"></i>Expor Data</button>
        <a href="{{ route('product.create') }}" class="btn btn-xs btn-primary"><i class="fa fa-plus me-2"></i>Tambah Produk</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="datatables display table table-hover my-2">
              <thead>
                <tr>
                  <th>Foto</th>
                  <th>Produk</th>
                  <th>SKU</th>
                  <th>Jum. Stok</th>
                  <th>Harga Beli</th>
                  <th>Harga Jual</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                  <tr>
                    <td>
                      <img class="rounded-circle" width="45" src="{{ asset('src/images/profile/1.png') }}" alt="Foto produk">
                    </td>
                    <td>
                      <a href="{{ route('product.show', $product) }}" class="text-info">{{ $product->name }}</a>
                      <br>
                      <small>{{ $product->category->name }}</small>
                    </td>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->has_stock ? $product->cur_stock : 'Unlimited' }}</td>
                    <td>@currency_id($product->buy_price)</td>
                    <td>@currency_id($product->sell_price)</td>
                    <td>
                      @if ($product->is_active)
                        <span class="badge light badge-success">Aktif</span>
                      @else
                        <span class="badge light badge-danger">Nonaktif</span>
                      @endif
                    </td>               
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection