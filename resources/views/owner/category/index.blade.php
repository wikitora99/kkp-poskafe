@extends('layouts.main')

@section('title')
  Daftar Kategori Produk
@endsection

@section('content')
  
  @include('layouts.flasher')

  <div class="row">
    
    <div class="col-md-5">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <h4>Kategori Baru</h4>
          </div>         

          <hr class="dropdown-divider my-3">

        </div>
      </div>
    </div>

    <div class="col-md-7">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <h4>Daftar Kategori</h4>
          </div>         

          <hr class="dropdown-divider my-3">

        </div>
      </div>
    </div>

  </div>

@endsection