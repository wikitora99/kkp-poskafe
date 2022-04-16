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
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <select class="form-select bg-primary text-white rounded">
                                        <option hidden selected>Jenis Pesanan</option>
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
                                        <tbody id="order-list">
                                            <tr>
                                                <td><strong>2</strong></td>
                                                <td><strong>Nasi Goreng Sabit</strong></td>
                                                <td><strong>@currency_id(40000)</strong></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>    
                                                </td>  
                                            </tr>
                                            <tr>
                                                <td><strong>1</strong></td>
                                                <td><strong>Rice Bowl Karage</strong></td>
                                                <td><strong>@currency_id(25000)</strong></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>2</strong></td>
                                                <td><strong>Extrajoss Anggur Merah</strong></td>
                                                <td><strong>@currency_id(32000)</strong></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>    
                                                </td>  
                                            </tr>
                                            <tr>
                                                <td><strong>2</strong></td>
                                                <td><strong>Caramel Milkshake</strong></td>
                                                <td><strong>@currency_id(40000)</strong></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col d-flex justify-content-between">
                                    <div class="row">
                                        <button type="button" class="btn btn-danger light">
                                            <i class="fa fa-trash me-2"></i>Hapus Semua
                                        </button>
                                    </div>
                                    <div class="row">
                                        <button type="button" class="btn btn-info light">
                                            <i class="fa fa-bookmark me-2"></i>Bayar Nanti
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <button type="button" class="btn btn-primary d-flex justify-content-between">
                                    <span>
                                        <i class="fa fa-dollar-sign me-2"></i>Bayar Sekarang
                                    </span>
                                    <span>
                                        <strong>@currency_id(137000)</strong><i class="fa fa-chevron-right ms-2"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection