@extends('layouts.main')

@section('content')

    {{-- Menu Title --}}
    @include('layouts.partials.menutitle')
    {{-- Menu Title End --}}
  
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama Produk</label>
                    <div class="col-sm-9">
                        <p class="card-text mt-1">Lorem, ipsum.</p>         
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Kategori Produk</label>
                    <div class="col-sm-9">
                        <p class="card-text mt-1">Lorem, ipsum.</p>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <p class="card-text mt-1">Lorem, ipsum.</p>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Stok</label>
                    <div class="col-sm-9">
                        <p class="card-text mt-1">Lorem, ipsum.</p>
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Tanggal Input</label>
                    <div class="col-sm-9">
                        <p class="card-text mt-1"><?= date('F j, Y, g:i a') ?></p>
                    </div>
                </div>
                
                <div class="mt-4 row">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('product.index') }}" class="btn btn-xs btn-secondary"><i class="fa fa-arrow-left me-1"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection