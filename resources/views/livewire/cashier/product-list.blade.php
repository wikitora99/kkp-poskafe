<div class="row">
    @foreach ($products as $product)
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <a class="product-order" data-attr="{{ $product }}">
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
            </a>
        </div>
    @endforeach
</div>
