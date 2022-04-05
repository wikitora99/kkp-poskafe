<div class="deznav-scroll">

  <ul class="metismenu" id="menu">

    <li class="nav-label first">Utama</li>
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
      <a href="#" class="ai-icon" aria-expanded="false"> {{-- route('order.create') --}}
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Kasir</span>
      </a>
    </li>

    <li class="nav-label first">Penjualan</li>
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
              <a href="{{ route('product.index') }}">Daftar Produk</a>
            </li>
            <li>
              <a href="{{ route('product.create') }}">Tambah Produk</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="{{ route('category.index') }}">Kategori Produk</a>
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
              <a href="{{ route('incoming-stock.index') }}">Daftar Stok Masuk</a>
            </li>
            <li>
              <a href="{{ route('incoming-stock.create') }}">Tambah Stok Masuk</a>
            </li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="#" aria-expanded="false">Stok Keluar</a>
          <ul aria-expanded="false">
            <li>
              <a href="{{ route('outgoing-stock.index') }}">Daftar Stok Keluar</a>
            </li>
            <li>
              <a href="{{ route('outgoing-stock.create') }}">Tambah Stok Keluar</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="{{ route('supplier.index') }}">Daftar Supplier</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#" class="ai-icon" aria-expanded="false"> {{-- route('transaction.index') --}}
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Transaksi</span>
      </a>
    </li>


    <li class="nav-label first">Pengaturan</li>
    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Kelola Kafe</span>
      </a>
      <ul aria-expanded="false">
        <li>
          <a href="#">Informasi Kafe</a> {{-- route('setting.index') --}}
        </li>
        <li>
          <a href="#">Informasi Pembayaran</a> {{-- route('payment.index') --}}
        </li>
        <li>
          <a href="#">Saldo Kasir</a> {{-- route('balance.index') --}}
        </li>
      </ul>
    </li>
    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Kelola Akun</span>
      </a>
      <ul aria-expanded="false">
        <li>
          <a href="#">Akun Saya</a> {{-- route('user.detail') --}}
        </li>
        <li>
          <a href="#">Daftar Akun</a> {{-- route('user.index') --}}
        </li>
      </ul>
    </li>
    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Promosi</span>
      </a>
      <ul aria-expanded="false">
        <li>
          <a href="#">Daftar Diskon</a> {{-- route('discount.create') --}}
        </li>
        <li>
          <a href="#">Tambah Diskon</a> {{-- route('discount.index') --}}
        </li>
      </ul>
    </li>
    <!-- <li>
      <a href="#" class="ai-icon" aria-expanded="false"> {{-- route('notification.index') --}}
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Notifikasi</span>
      </a>
    </li>
    <li>
      <a href="#" class="ai-icon" aria-expanded="false"> {{-- route('trash.index') --}}
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Keranjang Sampah</span>
      </a>
    </li> -->
  </ul>

  <div class="copyright">
    <p><strong>Rumah Kopi Sabit</strong> © {{date('Y')}}</p>
    <p class="fs-12">Made with <span class="ti ti-heart"></span> by DexignZone</p>
  </div>
  
</div>