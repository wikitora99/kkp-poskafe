@extends('layouts.main')

@section('title')
    Kasir
@endsection

@section('content')

    @include('layouts.flasher')

    <div class="row">

        {{-- Product List --}}
        <div class="col-md-7">
            @livewire('cashier.product-list')
        </div>
        
        {{-- Order List --}}
        <div class="col-md-5">
            <div class="row">
                <div class="col">
                    <div class="card">

                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <select class="form-select bg-primary text-white rounded" name="order_type">
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}">{{ Str::title($type->name) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <div class="text-center" id="no-order">
                                                <span class="text-muted h6">Daftar pesanan kosong</span>
                                            </div>
                                            <tbody id="order-list">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="d-none" id="product-order-datas">
                                </div>

                                <div class="row mb-3">
                                    <div class="col d-flex justify-content-between">
                                        <div class="row">
                                            <button type="button" class="btn btn-danger light del-all-order" disabled>
                                                <i class="fa fa-trash me-2"></i>Hapus Semua
                                            </button>
                                        </div>
                                        <div class="row">
                                            <button type="button" class="btn btn-info light pay-latter" disabled>
                                                <i class="fa fa-bookmark me-2"></i>Bayar Nanti
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit" class="btn btn-primary d-flex justify-content-between pay-now" disabled>
                                        <span>
                                            <i class="fa fa-dollar-sign me-2"></i>Bayar Sekarang
                                        </span>
                                        <span>
                                            <strong id="total-order-price"></strong><i class="fa fa-chevron-right ms-2"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection