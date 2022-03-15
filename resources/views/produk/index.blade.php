@extends('layouts.main')

@section('content')

  {{-- Title --}}
    @section('menutitle')
    {{ $title }}
    @endsection
  {{-- End Title --}}

  <div class="row">
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
            <strong>Sukses! </strong>{{ session('success') }}
        </div>
      @endif

      @if (session('failed'))
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
            <strong>Error! </strong>{{ session('failed') }}
        </div>
      @endif

        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                      <button type="button" class="btn btn-xs btn-primary d-flex justify-content-end" data-bs-toggle="modal" data-bs-target=".bd-example-modal"><i class="fa fa-plus me-2"></i>Tambah Produk</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Kategori Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach ($data as $produk)
                            <tr>
                                <td><?= $i++; ?></th>
                                <td>{{ $produk->nama_produk }}</td>
                                <td>{{ $produk->jenis_produk }}</td>
                                <td>Rp,{{ number_format($produk->harga) }},-</td>
                                <td>
                                    <div class="d-flex action-button">
                                        <a href="#" class="btn btn-xs btn-warning me-2">Edit</a>
                                        <form action="{{ route('produk.destroy', $produk) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-xs btn-danger btn-delete">Delete</button>
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

    <div class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah {{ $title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('produk.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_produk" class="text-primary">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="jenis_produk" class="text-primary">Kategori</label>
                            <select name="jenis_produk" id="jenis_produk" class="default-select form-control wide mb-3">
                                <option value="COFFE">COFFE</option>
                                <option value="SNACK">SNACK</option>
                                <option value="MILKSHAKE">MILKSHAKE</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="text-primary">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
@endsection
