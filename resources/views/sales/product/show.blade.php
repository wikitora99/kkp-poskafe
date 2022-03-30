@extends('layouts.main')

@section('title')
    Detail Produk
@endsection

@section('content')

    {{-- Simple Call Menu Title Partials --}}
        @include('layouts.partials.menu-title')
    {{-- Menu Title End --}}

<div class="col-xl-6">
    <div class="card">
        <div class="card-header my-0 ">
            <h5 class="text-primary"> {{ $product->name }}</h5>
            <img class="rounded-circle" width="70" src="{{ asset('src/images/profile/1.png') }}" alt="Gambar produk"> 
        </div>
        <div class="card-body">
            <div class="basic-list-group">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success">SKU : {{ $product->sku }}</li>
                    <li class="list-group-item list-group-item-success">Kategori : {{ $product->category->name }}</li>
                    <li class="list-group-item list-group-item-success">Harga : Rp. {{ number_format($product->price )}},-</li>
                    <li class="list-group-item list-group-item-success">Tanggal Input : {{ $product->created_at->format('d, M Y') }}</li>
                </ul>
            </div>
        </div>
        <div class="card-footer d-sm-flex justify-content-between align-items-center">
            <div class="card-footer-link mb-4 mb-sm-0">
                <p class="card-text text-dark d-inline">Last updated {{ $product->updated_at->diffForHumans() }}</p>
            </div>

            <a href="{{ route('product.index') }}" class="btn btn-xs btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection