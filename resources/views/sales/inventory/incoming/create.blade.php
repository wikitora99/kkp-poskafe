@extends('layouts.main')

@section('title')
    Tambah Stok Masuk
@endsection

@section('content')

    @include('layouts.flasher')

    <form class="d-block" action="{{ route('incoming-stock.store') }}" method="POST">
        @csrf
        <div class="row page-titles mx-0 d-flex flex-wrap align-items-center">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Tambah Stok Masuk</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('incoming-stock.index') }}" class="btn btn-xs btn-primary light me-3"><i class="fa fa-eject me-2"></i>Batalkan</a>
                    <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-paper-plane me-2"></i>Simpan Stok Masuk</button>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-xl-3 col-xxl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <label class="form-label fw-bold">Tanggal Stok Masuk<span class="text-danger ms-1">*</span></label>
                        <input type="date" class="form-control" name="date" required>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <label class="form-label fw-bold">Catatan</label>
                        <input type="text" class="form-control bg-transparent" name="note" placeholder="Masukkan catatan">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <label class="form-label fw-bold">Supplier<span class="text-danger ms-1">*</span></label>
                        <select name="supplier_id" class="default-select form-control" required>
                            <option selected disabled>Pilih supplier</option>
                            @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Barang</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-none" id="incoming-datas"></div>
                        <input type="hidden" id="item-id" value=1>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Nama Barang<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control" id="item-name" placeholder="Masukkan nama barang">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-bold">Harga Beli</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control" id="item-price" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-bold">Jumlah<span class="text-danger ms-1">*</span></label>
                                <input type="number" class="form-control" id="item-amount">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="button" class="btn btn-xs btn-primary" id="add-incoming-item" disabled><i class="fa fa-plus me-2"></i>Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Harga Beli (Rp)</th>
                                    <th>Jumlah</th>
                                    <th>Total (Rp)</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="incoming-items">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection