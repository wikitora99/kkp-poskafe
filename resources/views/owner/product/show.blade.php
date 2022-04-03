@extends('layouts.main')

@section('title')
  {{ $product->name }}
@endsection

@section('content')
  
  @include('layouts.flasher')

  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="custom-tab-1">
            <ul class="nav nav-tabs">
              <li class="nav-item me-3">
                <a class="nav-link h5" data-bs-toggle="" href="{{ route('product.index') }}">&laquo; Kembali</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link h5 active" data-bs-toggle="tab" href="#update">Ubah Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link h5" data-bs-toggle="tab" href="#sales">Penjualan Produk</a>
              </li>
            </ul>
            <div class="tab-content">

              <div class="tab-pane fade active show" id="update" role="tabpanel">
                <div class="pt-5">
                  <div class="row">
                    <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="row mb-3">
                        <div class="col-md-3">
                          <img src="{{ asset('storage/'.$product->picture) }}" class="img-preview img-fluid d-block w-100">
                          <label for="picture" class="btn btn-xs btn-square btn-primary w-100">
                            <i class="fa fa-upload me-2"></i>Unggah Foto Produk
                          </label>
                          <input type="file" class="d-none" id="picture" name="picture">
                        </div>
                        <div class="col-md-9">
                          <div class="row">
                            <div class="mb-3">
                              <label class="form-label">SKU (Stock Keeping Unit)</label>
                              <input type="text" class="form-control" value="{{ $product->sku }}" readonly>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Nama Produk<span class="text-danger ms-1">*</span></label>
                              <input type="text" class="form-control" name="name" placeholder="Masukkan nama produk" value="{{ $product->name }}" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Kategori Produk<span class="text-danger ms-1">*</span></label>
                              <select name="category_id" class="default-select form-control" required>
                                @foreach ($categories as $category)
                                  <option {{ ($product->category_id == $category->id) ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row my-3">
                        <div class="mb-3">
                          <label class="form-label">Deskripsi Produk</label>
                          <textarea class="form-control bg-transparent" name="desc" rows="5" placeholder="Masukkan deskripsi produk" style="height: 80px;">{{ $product->desc }}</textarea>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                              <input type="hidden" name="is_active" value="0">
                              <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ $product->is_active ? 'checked' : '' }}>
                              <label class="form-check-label" for="is_active">Aktifkan di Menu Kasir</label>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Harga Beli</label>
                            <div class="input-group">
                              <span class="input-group-text">Rp</span>
                              <input type="number" class="form-control" name="buy_price" placeholder="0" value="{{ $product->buy_price }}">
                            </div>  
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Harga Jual<span class="text-danger ms-1">*</span></label>
                            <div class="input-group">
                              <span class="input-group-text">Rp</span>
                              <input type="number" class="form-control" name="sell_price" placeholder="0" value="{{ $product->sell_price }}" required>
                            </div>      
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <div class="form-check custom-checkbox mb-3 checkbox-primary">
                              <input type="hidden" name="has_stock" value="0">
                              <input type="checkbox" class="form-check-input" id="has_stock" name="has_stock" value="1" {{ $product->has_stock ? 'checked' : '' }}>
                              <label class="form-check-label" for="has_stock">Monitoring Stok Produk</label>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Stok Saat Ini</label>
                            <input type="number" class="form-control" name="cur_stock" placeholder="0" value="{{ $product->cur_stock }}" disabled>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Peringatan Stok Minimum</label>
                            <input type="number" class="form-control" name="min_stock" placeholder="0" value="{{ $product->min_stock }}" disabled>
                          </div>
                        </div>
                      </div>

                      <hr class="dropdown-divider">

                      <div class="row mt-4">
                        <div class="col text-start">
                          <button type="button" class="btn btn-xs btn-danger delete-btn">Hapus Produk</button>
                        </div>
                        <div class="col text-end">
                          <button type="button" class="btn btn-xs btn-outline-primary me-2 reset-btn">Batal</button>
                          <button type="submit" class="btn btn-xs btn-primary">Simpan Perubahan</button>
                        </div>
                      </div>
                    </form>

                    <form class="d-none delete-form" action="{{ route('product.destroy', $product) }}" method="POST">
                      @csrf
                      @method('DELETE')
                    </form>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="sales">
                <div class="pt-5">
                  <div class="table-responsive">
                    <table class="datatables table table-hover my-2">
                      <thead>
                        <tr>
                          <th>No. Transaksi</th>
                          <th>Waktu Pesan</th>
                          <th>Jumlah</th>
                          <th>Total Harga</th>
                          <th>Diskon</th>
                          <th>Total Bayar</th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- @foreach ($sales as $item) --}}
                          <tr>
                            <td><a href="#" class="text-info">TX220404000009</a></td>
                            <td>04 Apr 2022, 15:30:21</td>
                            <td>5</td>
                            <td>@currency_id(75000)</td>
                            <td>10%</td>
                            <td>@currency_id(68500)</td>
                          </tr>
                          <tr>
                            <td><a href="#" class="text-info">TX220331000029</a></td>
                            <td>31 Mar 2022, 17:25:14</td>
                            <td>2</td>
                            <td>@currency_id(42000)</td>
                            <td>Tidak ada</td>
                            <td>@currency_id(42000)</td>
                          </tr>
                          <tr>
                            <td><a href="#" class="text-info">TX220402000072</a></td>
                            <td>02 Apr 2022, 19:45:19</td>
                            <td>4</td>
                            <td>@currency_id(58000)</td>
                            <td>@currency_id(10000)</td>
                            <td>@currency_id(48000)</td>
                          </tr>
                        {{-- @endforeach --}}
                      </tbody>
                    </table>
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