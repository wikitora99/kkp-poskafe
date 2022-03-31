@extends('layouts.main')

@section('title')
  Produk {{ $product->name }}
@endsection

@section('content')
  
  @include('layouts.flasher')

  <div class="row page-titles mx-0 d-flex flex-wrap align-items-center">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Detail Produk</h4>
      </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end d-flex">
      <div class="breadcrumb">
        <a href="{{ route('product.index') }}" class="btn btn-xs btn-primary light me-2"><i class="fa fa-arrow-left me-2"></i>Kembali</a>
        <a href="{{ route('product.edit', $product) }}" class="btn btn-xs btn-primary"><i class="fas fa-pencil-alt me-2"></i>Ubah Produk</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade show active" id="first">
                  <img class="img-fluid" src="{{ asset('src/images/product/1.jpg') }}" alt="Gambar produk">
                </div>
              </div>
            </div>
            <!--Tab slider End-->
            <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
              <div class="product-detail-content">
                <!--Product details-->
                <div class="new-arrival-content pr">
                  <h2>{{ $product->name }}</h2>
                  <div class="comment-review star-rating">
                    <ul>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span class="review-text">735 terjual (8,2% dari total penjualan semua produk)</span>
                  </div>
                  <div class="d-table mb-3">
                    <p class="price float-start d-block">@currency_id($product->price)</p>
                  </div>
                  <div>
                    <p>Stok Produk :&nbsp; Tersedia</p>
                    <p>Kode SKU :&nbsp; {{ $product->sku }}</p>
                    <p>Kategori :&nbsp; {{ $product->category->name }}</p>
                    <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection