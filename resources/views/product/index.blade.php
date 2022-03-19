@extends('layouts.main')

@section('content')

  {{-- Menu Title --}}
  @include('layouts.partials.menutitle')
  {{-- Menu Title End --}}

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
                      <a href="{{ route('product.create') }}" class="btn btn-xs btn-primary d-flex justify-content-end"><i class="fa fa-plus me-2"></i>Tambah Produk</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-center">
                        <table id="example" class="display mb-3" style="min-width: 845px">
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
                            <tr>
                                <td><?= $i++; ?></th>
                                <td>Lorem</td>
                                <td>Lorem</td>
                                <td>Lorem</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="/product/{$id}/edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                        <form action="{{-- route('produk.destroy',$produk) --}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp me-1"><i class="fa fa-trash"></i></button>
                                        </form>    
                                        <a href="/product/show" class="btn btn-secondary shadow btn-xs sharp"><i class="fas fa-eye"></i></a>
                                    </div>
                                </td> 
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection