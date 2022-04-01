@extends('layouts.main')

@section('title')
    Ubah Produk
@endsection

@section('content')

    @include('layouts.flasher')

    <div class="row page-titles mx-0 d-flex flex-wrap align-items-center">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
            <h4>Ubah Produk</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end d-flex">
            <div class="breadcrumb">
            <a href="{{ route('product.index') }}" class="btn btn-xs btn-primary light me-2"><i class="fa fa-arrow-left me-2"></i>Kembali</a>
            </div>
        </div>
    </div>

        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        @method('PUT')
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">SKU</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="sku" id="sku" value="{{ old('sku', $product->sku) }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Kategori Produk</label>
                            <div class="col-sm-9"> 
                                <select name="category_id" id="category_id" class="default-select form-control wide">
                                    @foreach ($category as $kat)
                                        @if (old('category_id', $product->category_id))
                                            <option value="{{ $kat->id }}" selected> {{ $kat->name }} </option>
                                        @else
                                            <option value="{{ $kat->id }}">{{ $kat->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Produk</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $product->name) }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="picture" class="col-sm-3 col-form-label">Picture</label>
                            <input type="hidden" name="oldPicture" value="{{ $product->picture }}">
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="form-file w-100">
                                        <input type="file" class="form-file-input form-control" name="picture" id="picture" onchange="previewPicture()">  
                                    </div>

                                    <div class="card mt-2" style="max-width:20%">
                                        @if ($product->picture)
                                          <img src="{{ asset('storage/' . $product->picture) }}" class="pic-preview">
                                        @else
                                            <img class="pic-preview">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="price" id="price" value="{{ old('price', $product->price) }}">
                            </div>
                        </div>
                        
                        <div class="mt-4 row">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-edit me-1"></i> Ubah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function previewPicture() {
            const picture = document.querySelector('#picture');
            const picPreview = document.querySelector('.pic-preview');
            picPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(picture.files[0]);
            oFReader.onload = function(oFREvent) {
                picPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection