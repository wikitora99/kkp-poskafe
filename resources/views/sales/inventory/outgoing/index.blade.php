@extends('layouts.main')

@section('title')
    Daftar Stok Keluar
@endsection

@section('content')

    @include('layouts.flasher')

    <div class="row page-titles mx-0 d-flex flex-wrap align-items-center">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Stok Keluar</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end d-flex">
            <div class="breadcrumb">      
                <a href="{{ route('outgoing-stock.create') }}" class="btn btn-xs btn-primary"><i class="fa fa-plus me-2"></i>Tambah Stok Keluar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatables display table table-hover my-2">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Tanggal</th>
                                    <th>Catatan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stocks as $stock)
                                    <tr>
                                        <td>
                                            <a href="{{ route('outgoing-stock.show', $stock) }}" class="text-info">{{ $stock->code }}</a>
                                        </td>
                                        <td>{{ $stock->date->format('d M Y') }}</td>
                                        <td>{{ $stock->note }}</td>
                                        <td>
                                            <form action="{{ route('outgoing-stock.destroy', $stock) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger shadow btn-xs sharp delete-btn">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>               
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