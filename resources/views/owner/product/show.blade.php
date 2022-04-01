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
                <div class="pt-4">
                  <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" name="username"
                                    placeholder="1234 Main St">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Password">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Password Confirmation</label>
                                <input type="password" class="form-control"
                                    name="password_confirmation" placeholder="Password">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Role</label>
                                <select name="role" class="form-control" id="">
                                    <option value=3>Agent</option>
                                    <option value=4>Bendahara</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Status Pegawai Bumdes</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_active"
                                        value=1>
                                    <label class="form-check-label">
                                        Activated
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_active"
                                        value=0>
                                    <label class="form-check-label">
                                        Disabled
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama"
                                    placeholder="1234 Main St">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" id="" cols="30"
                                    rows="10"></textarea>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Phone</label>
                                <input type="number" class="form-control" name="phone"
                                    placeholder="081234567">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="jk" class="form-control" id="">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Jabatan</label>
                                <select name="jabatan" class="form-control" id="">
                                </select>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="sales">
                <div class="pt-4">
                  <h4>This is product sales</h4>
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                  </p>
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection