<div class="deznav-scroll">

  <ul class="metismenu mt-5" id="menu">

    <li>
      <a href="{{ route('dashboard') }}" class="ai-icon" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Dashboard</span>
      </a>
    </li>

    <li>
      <a href="#" class="ai-icon" aria-expanded="false"> {{-- route('report.index') --}}
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Laporan</span>
      </a>
    </li>

    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Produk</span>
      </a>
      <ul aria-expanded="false">
        <li>
          <a class="has-arrow" href="#" aria-expanded="false">Kelola Produk</a>
          <ul aria-expanded="false">
            <li>
              <a href="#">Daftar Produk</a> {{-- route('product.index') --}}
            </li>
            <li>
              <a href="#">Tambah Produk</a> {{-- route('product.create') --}}
            </li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="#" aria-expanded="false">Tipe Spesial</a>
          <ul aria-expanded="false">
            <li>
              <a href="#">Terpopuler</a> {{-- route('product.special.popular') --}}
            </li>
            <li>
              <a href="#">Rilis Terbaru</a> {{-- route('product.special.newest') --}}
            </li>
            <li>
              <a href="#">Stok Kosong</a> {{-- route('product.special.stockout') --}}
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Kelola Kategori</a> {{-- route('category.index') --}}
        </li>
      </ul>
    </li>

    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Inventori</span>
      </a>
      <ul aria-expanded="false">
        <li>
          <a class="has-arrow" href="#" aria-expanded="false">Stok Masuk</a>
          <ul aria-expanded="false">
            <li>
              <a href="#">Daftar Stok Masuk</a> {{-- route('inventory.incoming.index') --}}
            </li>
            <li>
              <a href="#">Tambah Stok Masuk</a> {{-- route('inventory.incoming.create') --}}
            </li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="#" aria-expanded="false">Stok Keluar</a>
          <ul aria-expanded="false">
            <li>
              <a href="#">Daftar Stok Keluar</a> {{-- route('inventory.outgoing.index') --}}
            </li>
            <li>
              <a href="#">Tambah Stok Keluar</a> {{-- route('inventory.outgoing.create') --}}
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Kelola Supplier</a> {{-- route('supplier.index') --}}
        </li>
      </ul>
    </li>

    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Transaksi</span>
      </a>
      <ul aria-expanded="false">
        <li>
          <a class="has-arrow" href="#" aria-expanded="false">Kelola Penjualan</a>
          <ul aria-expanded="false">
            <li>
              <a href="#">Kasir</a>
            </li>
            <li>
              <a href="#">Kas Harian</a>
            </li>
            <li>
              <a href="#">Atur Diskon</a>
            </li>
            <li>
              <a href="#">Riwayat Penjualan</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Transaksi Keluar</a>
        </li>
      </ul>
    </li>

    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Pegawai</span>
      </a>
      <ul aria-expanded="false">
        <li>
          <a href="#">Daftar Pegawai</a>
        </li>
        <li>
          <a href="#">Daftar Jabatan</a>
        </li>
      </ul>
    </li>

    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Pengaturan</span>
      </a>
      <ul aria-expanded="false">
        <li>
          <a class="has-arrow" href="#" aria-expanded="false">Kelola User</a>
          <ul aria-expanded="false">
            <li>
              <a href="#">Daftar User</a>
            </li>
            <li>
              <a href="#">Tambah User</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Profil Saya</a>
        </li>
        <li>
          <a href="#">Informasi Kafe</a>
        </li>
        <li>
          <a href="#">Keranjang Sampah</a>
        </li>
      </ul>
    </li>
  </ul>

  <div class="copyright">
    <p><strong>Rumah Kopi Sabit</strong> © {{date('Y')}} All Rights Reserved</p>
    <p class="fs-12">Made with <span class="ti ti-heart"></span> by DexignZone</p>
  </div>
  
</div>