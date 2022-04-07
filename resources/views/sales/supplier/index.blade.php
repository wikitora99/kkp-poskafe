@extends('layouts.main')

@section('title')
  Daftar Supplier
@endsection

@section('content')
  
  @include('layouts.flasher')

  <div class="row page-titles mx-0 d-flex flex-wrap align-items-center">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Daftar Suplplier</h4>
      </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end d-flex">
      <div class="breadcrumb">
        <button type="button" class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#addSupplierModal"><i class="fa fa-plus me-2"></i>Tambah Supplier</button>
      </div>
    </div>
  </div>

  <div class="modal" id="addSupplierModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Supplier Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal">
          </button>
        </div>
        <form action="{{ route('supplier.store') }}" method="POST">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label class="form-label">Nama Suppler<span class="text-danger ms-1">*</span></label>
                  <input type="text" class="form-control" name="name" placeholder="Masukkan nama supplier" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Keterangan</label>
                  <textarea class="form-control bg-transparent" name="desc" rows="5" placeholder="Masukkan keterangan" style="height: 80px;"></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label">Email atau No. Handphone<span class="text-danger ms-1">*</span></label>
                  <input type="text" class="form-control" name="contact" placeholder="Masukkan kontak supplier" required>
                </div>
                <div class="mb-0">
                  <label class="form-label">Alamat Supplier</label>
                  <textarea class="form-control bg-transparent" name="address" rows="5" placeholder="Masukkan alamat lengkap" style="height: 80px;"></textarea>
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

  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="datatables display table table-hover my-2">
              <thead>
                <tr>
                  <th>Nama Supplier</th>
                  <th>Keterangan</th>
                  <th>Kontak</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($suppliers as $supplier)
                  <tr>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->desc ?? '-' }}</td>
                    <td>{{ $supplier->contact }}</td>
                    <td>{{ $supplier->address ?? '-' }}</td>
                    <td>
                      <div class="d-flex">
                        <button type="button" class="btn btn-primary shadow btn-xs sharp me-2 edit-supplier" data-bs-toggle="modal" data-bs-target="#editSupplierModal" data-attr="{{ $supplier }}">
                          <i class="fas fa-pencil-alt"></i>
                        </button>
                        <form action="{{ route('supplier.destroy', $supplier) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger shadow btn-xs sharp delete-btn">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </div>
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

  <div class="modal" id="editSupplierModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ubah Supplier</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal">
          </button>
        </div>
        <form action="#" method="POST" id="form-supplier">
          @csrf
          @method('PUT')
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label class="form-label">Nama Suppler<span class="text-danger ms-1">*</span></label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama supplier" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Keterangan</label>
                  <textarea class="form-control bg-transparent" id="desc" name="desc" rows="5" placeholder="Masukkan keterangan" style="height: 80px;"></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label">Email atau No. Handphone<span class="text-danger ms-1">*</span></label>
                  <input type="text" class="form-control" id="contact" name="contact" placeholder="Masukkan kontak supplier" required>
                </div>
                <div class="mb-0">
                  <label class="form-label">Alamat Supplier</label>
                  <textarea class="form-control bg-transparent" id="address" name="address" rows="5" placeholder="Masukkan alamat lengkap" style="height: 80px;"></textarea>
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