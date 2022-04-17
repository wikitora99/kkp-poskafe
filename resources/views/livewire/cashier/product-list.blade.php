
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
                    <input type="text" class="form-control" placeholder="Cari produk..." wire:model="search">
                </div>
            </div>
            <div class="scrollable">
                <div class="card-body">
                    <div class="row">
                        @forelse ($products as $product)
                            <div class="col-xl-3 col-lg-6 col-sm-6">
                                <a class="{{ $product->is_active ? 'product-order' : ''}}" data-attr="{{ $product }}">
                                    <div class="card">
                                        <img class="card-img img-fluid rounded-0" src="{{ asset('src/images/profile/small/profile.jpg') }}" alt="Foto produk">
                                        <div class="card-body px-2 pt-2 pb-0">
                                            <h5 class="text-primary">{{ $product->name }}</h5>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between px-2 pb-2 pt-0 border-0">
                                            @if ($product->discounts->count() > 0 && $product->discounts->first()->due_date >= now())
                                            <strike><span class="text-danger">@number_id($product->sell_price)</span></strike>
                                            <span class="text-success product-price">@number_id($product->sell_price)</span>
                                            @else
                                            <span class="text-black product-price">@currency_id($product->sell_price)</span>
                                            @endif
                                        </div>
                                        @if (!$product->is_active)
                                            <div class="card-img-overlay h-100 text-white d-flex justify-content-center align-items-center text-center overlay-dark rounded-0 h6">
                                                <p>Tidak tersedia</p>
                                            </div>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="text-center">
                                <span class="h6 text-danger">Produk tidak ditemukan</span>
                            </div>
                        @endforelse
                    </div>
                </div>
                {{-- <div class="row mt-3">
                    {{ $products->links() }}
                </div> --}}
            </div>
        </div>
    </div>
</div>
