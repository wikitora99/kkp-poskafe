@extends('layouts.main')

@section('title')
  Produk {{ $category->name }}
@endsection

@section('content')
  
  @include('layouts.flasher')

  <div class="row page-titles mx-0 d-flex flex-wrap align-items-center">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Produk {{ $category->name }}</h4>
      </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end d-flex">
      <div class="breadcrumb">
        <a href="{{ route('category.index') }}" class="btn btn-xs btn-primary"><i class="fa fa-list me-2"></i>Daftar Kategori</a>
      </div>
    </div>
  </div>

  <div class="row">
    @forelse ($category->products as $product)
      <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="card">
          <div class="card-body">
            <div class="new-arrival-product">
              <div class="new-arrivals-img-contnent">
                <img class="img-fluid" src="{{ asset('storage/'.$product->picture) }}" alt="Gambar produk">
              </div>
              <div class="new-arrival-content text-center mt-3">
                <h4><a href="{{ route('product.show', $product) }}" class="text-primary">{{ $product->name }}</a></h4>
                <h6 class="text-muted">{{ $category->name }}</h6>
                <span class="price text-warning">@currency_id($product->sell_price)</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    @empty
      <h4 class="text-muted text-center mt-5">Kategori ini belum memiliki Produk.</h4>
    @endforelse
  </div>

@endsection