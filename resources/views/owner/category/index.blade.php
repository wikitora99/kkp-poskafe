@extends('layouts.main')

@section('title')
  Daftar Kategori Produk
@endsection

@section('content')
  
  @include('layouts.flasher')

  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Tambah Kategori</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('product.store') }}" method="POST">
            @csrf
            
          </form>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Daftar Kategori</h5>
        </div>
        <div class="card-body">
          <div class="basic-list-group">
            <ul class="list-group">
              @foreach ($categories as $category)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a href="{{ route('category.show', $category) }}" class="d-block text-primary">
                    {{ $category->name.' ('.$category->products->count().')' }}
                  </a>
                  <div class="d-flex">
                    <button type="button" class="btn btn-primary shadow btn-xs sharp me-2 edit-category" data-bs-toggle="modal" data-bs-target="#editCategoryModal" data-attr="{{ $category }}">
                      <i class="fas fa-pencil-alt"></i>
                    </button>
                    <form action="{{ route('category.destroy', $category) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger shadow btn-xs sharp delete-btn">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="editCategoryModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ubah Data Kategori</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal">
          </button>
        </div>
        <form action="#" method="POST" id="form-category">
          @csrf
          @method('PUT')
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label class="form-label">Nama Kategori<span class="text-danger ms-1">*</span></label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama kategori" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Deskripsi</label>
                  <textarea class="form-control bg-transparent" id="desc" name="desc" rows="5" placeholder="Masukkan deskripsi kategori" style="height: 80px;"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-xs btn-outline-primary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-xs btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection