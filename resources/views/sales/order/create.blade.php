@extends('layouts.main')

@section('title')
    Kasir
@endsection

@section('content')

    @include('layouts.flasher')

    <div class="row">

        <div class="col-md-7">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="cutstom-tab-1">
                                
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link h5 active" data-bs-toggle="tab" href="#all">Semua</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h5" data-bs-toggle="tab" href="#coffee">Kopi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h5" data-bs-toggle="tab" href="#snack">Snack</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h5" data-bs-toggle="tab" href="#milkshake">Milkshake</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h5" data-bs-toggle="tab" href="#noodle">Noodle</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h5" data-bs-toggle="tab" href="#longdrink">Long Drink</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="all" role="tabpanel">
                                        <div class="pt-4">
                                            <div class="row">
                                                @foreach ($products as $product)
                                                    <div class="col-xl-3 col-lg-6 col-sm-6">
                                                        <div class="card">
                                                            <div class="card-body p-0">
                                                                <div class="new-arrival-product">
                                                                    <div class="new-arrivals-img-contnent">
                                                                        <img class="img-fluid" src="{{ asset('storage/'.$product->picture) }}" alt="Gambar produk">
                                                                    </div>
                                                                    <div class="new-arrival-content text-center m-2">
                                                                        <h5 class="text-primary">{{ $product->name }}</h5>
                                                                        <span class="text-black">@currency_id($product->sell_price)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="coffee" role="tabpanel">
                                        <div class="pt-3">
                                            <div class="row">
                                                <h4 class="text-center mt-3">Daftar Produk Coffee</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="snack" role="tabpanel">
                                        <div class="pt-3">
                                            <div class="row">
                                                <h4 class="text-center mt-3">Daftar Produk Snack</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="milkshake" role="tabpanel">
                                        <div class="pt-3">
                                            <div class="row">
                                                <h4 class="text-center mt-3">Daftar Produk Milkshake</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="noodle" role="tabpanel">
                                        <div class="pt-3">
                                            <div class="row">
                                                <h4 class="text-center mt-3">Daftar Produk Noodle</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="longdrink" role="tabpanel">
                                        <div class="pt-3">
                                            <div class="row">
                                                <h4 class="text-center mt-3">Daftar Produk Long Drink</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-5">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection