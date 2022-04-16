
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="row">
                    <div class="col">
                        <select class="form-select bg-primary text-white rounded" wire:model="category">
                            <option value="0" selected>Semua Produk</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="input-group search-area right d-lg-inline-flex d-none ms-3">
                    <input type="text" class="form-control" placeholder="Cari produk...">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <a href="javascript:void(0)">
                                <i class="flaticon-381-search-2"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-body">
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
                                                @if ($product->discounts->count() > 0 && $product->discounts->first()->due_date >= now())
                                                    <div class="d-flex justify-content-between">
                                                        <strike><span class="text-danger">@number_id($product->sell_price)</span></strike>
                                                        <span class="text-success product-price">@number_id($product->sell_price)</span>
                                                    </div>
                                                @else
                                                    <span class="text-black product-price">@number_id($product->sell_price)</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
