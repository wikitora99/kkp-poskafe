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
          <a href="#">Daftar Kategori</a> {{-- route('category.index') --}}
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
              <a href="#">Daftar Stok Masuk</a> {{-- route('inventor.incoming.index') --}}
            </li>
            <li>
              <a href="#">Tambah Stok Masuk</a> {{-- route('inventor.incoming.create') --}}
            </li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="#" aria-expanded="false">Stok Keluar</a>
          <ul aria-expanded="false">
            <li>
              <a href="#">Daftar Stok Keluar</a> {{-- route('inventor.outgoing.index') --}}
            </li>
            <li>
              <a href="#">Tambah Stok Keluar</a> {{-- route('inventor.outgoing.create') --}}
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Daftar Supplier</a> {{-- route('supplier.index') --}}
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
          <a href="#">Daftar Transaksi</a> {{-- route('order.index') --}}
        </li>
        <li>
          <a href="#">Kelola Diskon</a> {{-- route('prmotion.index') --}}
        </li>
      </ul>
    </li>


    <li class="nav-label first">Pengaturan</li>
    <li>
      <a href="#" class="ai-icon" aria-expanded="false"> {{-- route('natification.index') --}}
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Notifikasi</span>
      </a>
    </li>
    <li>
      <a href="#" class="ai-icon" aria-expanded="false"> {{-- route('cashier.index') --}}
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Saldo Kasir</span>
      </a>
    </li>
    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Informasi Kafe</span>
      </a>
      <ul aria-expanded="false">
        <li>
          <a href="#">Umum</a> {{-- route('setting.index') --}}
        </li>
        <li>
          <a href="#">Struk Pembayaran</a> {{-- route('setting.label') --}}
        </li>
      </ul>
    </li>
    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Karyawan</span>
      </a>
      <ul aria-expanded="false">
        <li>
          <a href="#">Daftar Karyawan</a> {{-- route('employee.index') --}}
        </li>
        <li>
          <a href="#">Atur Jadwal</a> {{-- route('employee.schedule') --}}
        </li>
        <li>
          <a href="#">Atur Hak Akses</a> {{-- route('employee.privilege') --}}
        </li>
      </ul>
    </li>
    <li>
      <a href="#" class="ai-icon" aria-expanded="false"> {{-- route('trash.index') --}}
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Keranjang Sampah</span>
      </a>
    </li>

    <!-- <li>
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
          <a href="#">Kategori Produk</a> {{-- route('category.index') --}}
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
              <a href="#">Daftar Stok Masuk</a> {{-- route('inventor.incoming.index') --}}
            </li>
            <li>
              <a href="#">Tambah Stok Masuk</a> {{-- route('inventor.incoming.create') --}}
            </li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="#" aria-expanded="false">Stok Keluar</a>
          <ul aria-expanded="false">
            <li>
              <a href="#">Daftar Stok Keluar</a> {{-- route('inventor.outgoing.index') --}}
            </li>
            <li>
              <a href="#">Tambah Stok Keluar</a> {{-- route('inventor.outgoing.create') --}}
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
        <span class="nav-text">Kasir</span>
      </a>
      <ul aria-expanded="false">
        <li>
          <a href="#">Transaksi Baru</a> {{-- route('transaksi.create') --}}
        </li>
        <li>
          <a href="#">Daftar Transaksi</a> {{-- route('transaksi.index') --}}
        </li>
        <li>
          <a href="#">Saldo Kas Harian</a> {{-- route('saldo.index') --}}
        </li>
        <li>
          <a class="has-arrow" href="#" aria-expanded="false">Kelola Diskon</a>
          <ul aria-expanded="false">
            <li>
              <a href="#">Daftar Diskon</a> {{-- route('discount.index') --}}
            </li>
            <li>
              <a href="#">Tambah Diskon</a> {{-- route('discount.create') --}}
            </li>
          </ul>
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
          <a href="#">Kelola Pegawai</a> {{-- route('employee.index') --}}
        </li>
        <li>
          <a href="#">Kelola Jabatan</a> {{-- route('role.index') --}}
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
          <a href="#">Kelola User</a> {{-- route('user.index') --}}
        </li>
        <li>
          <a href="#">Akun Saya</a> {{-- route('user.detail') --}}
        </li>
        <li>
          <a href="#">Informasi Kafe</a> {{-- route('setting.index') --}}
        </li>
        <li>
          <a href="#">Keranjang Sampah</a> {{-- route('trash.index') --}}
        </li>
      </ul>
    </li> -->
  </ul>

  <div class="copyright">
    <p><strong>Rumah Kopi Sabit</strong> © {{date('Y')}}</p>
    <p class="fs-12">Made with <span class="ti ti-heart"></span> by DexignZone</p>
  </div>
  
</div>