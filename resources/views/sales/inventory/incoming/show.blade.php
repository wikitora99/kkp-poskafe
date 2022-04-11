@extends('layouts.main')

@section('title')
    Detail Stok Masuk
@endsection

@section('content')

    <div class="row page-titles mx-0 d-flex flex-wrap align-items-center">
		<div class="col-sm-6 p-md-0">
			<div class="welcome-text">
				<p class="mb-0">No. Stok Masuk</p>
				<h4>{{ $incoming_stock->code }}</h4>
			</div>
		</div>
		<div class="col-sm-6 p-md-0 justify-content-sm-end d-flex">
			<div class="breadcrumb">
				<button type="button" class="btn btn-xs btn-primary light me-3"><i class="fa fa-print me-2"></i>Cetak</button>
				<a href="{{ route('incoming-stock.index') }}" class="btn btn-xs btn-primary me-3"><i class="fa fa-list me-2"></i>Daftar Stok Masuk</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xl-3 col-xxl-4 col-sm-6">
			<div class="card">
				<div class="card-body">
					<label class="form-label fw-bold">Tanggal Stok Masuk</label>
					<input type="text" class="form-control" value="{{ $incoming_stock->date->format('d M Y') }}" readonly>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-xxl-4 col-sm-6">
			<div class="card">
				<div class="card-body">
					<label class="form-label fw-bold">Catatan</label>
					<input type="text" class="form-control" value="{{ $incoming_stock->note }}" readonly>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-xxl-4 col-sm-6">
			<div class="card">
				<div class="card-body">
					<label class="form-label fw-bold">Supplier</label>
					<input type="text" class="form-control" value="{{ $incoming_stock->supplier->name }}" readonly>
				</div>
			</div>
		</div>
	</div>

    <div class="row">
        <div class="col">
            <div class="card">
				<div class="card-header border-0 pb-0">
					<h4 class="mb-0">Daftar Barang Masuk</h4>
				</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Harga Beli (Rp)</th>
                                    <th>Jumlah</th>
                                    <th>Total (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
									<tr>
										<td>{{ $item->name }}</td>
										<td>{{ $item->price }}</td>
										<td>{{ $item->amount }}</td>
										<td>{{ $item->total_price }}</td>
									</tr>
								@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection