<div class="deznav-scroll">

  <!-- <div class="main-profile">
    <div class="image-bx">
      <img src="{{ asset('src/images/profile/small/pic1.jpg') }}" alt="Profile Picture">
    </div>
    <h5 class="name"><span class="font-w400">Halo, </span>{{ auth()->user()->username }}</h5>
    <p class="email">{{ auth()->user()->email }}</p>
  </div> -->

  <ul class="metismenu mt-5" id="menu">

    <li>
      <a href="{{ route('dashboard') }}" class="ai-icon" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Dashboard</span>
      </a>
    </li>
    
    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Laporan</span>
      </a>
      <ul aria-expanded="false">
        <li>
          <a href="#">Laporan Keuangan</a>
        </li>
        <li>
          <a href="#">Laporan Penjualan</a>
        </li>
        <li>
          <a href="#">Laporan Inventoris</a>
        </li>
        <li>
          <a href="#">Laporan Absensi</a>
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
          <a class="has-arrow" href="#" aria-expanded="false">Kelola Transaksi</a>
          <ul aria-expanded="false">
            <li>
              <a href="#">Kasir</a>
            </li>
            <li>
              <a href="#">Atur Kas Kasir</a>
            </li>
            <li>
              <a href="#">Atur Diskon</a>
            </li>
            <li>
              <a href="#">Riwayat Penjualan</a>
            </li>
          </ul>
        </li>
        <li><a href="#">Transaksi Keluar</a></li>
      </ul>
    </li>

    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Produk</span>
      </a>
      <ul aria-expanded="false">
        <li>
          <a href="{{ route('produk.index') }}">Daftar Produk</a>
        </li>
        <li>
          <a href="#">Daftar Kategori</a>
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
          <a href="#"></a>
        </li>
        <li>
          <a href="#">Submenu Inventori 2</a>
        </li>
        <li>
          <a href="#">Submenu Inventori 3</a>
        </li>
      </ul>
    </li>

    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Pegawai</span>
      </a>
      <ul aria-expanded="false">
        <li><a href="#">Submenu Pegawai 1</a></li>
        <li><a href="#">Submenu Pegawai 2</a></li>
        <li><a href="#">Submenu Pegawai 3</a></li>
      </ul>
    </li>

    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Pengaturan</span>
      </a>
      <ul aria-expanded="false">
        <li><a href="#">Submenu Pengaturan 1</a></li>
        <li><a href="#">Submenu Pengaturan 2</a></li>
        <li><a href="#">Submenu Pengaturan 3</a></li>
      </ul>
    </li>
  </ul>

  <div class="copyright">
    <p><strong>Zenix Crypto Admin Dashboard</strong> © 2021 All Rights Reserved</p>
    <p class="fs-12">Made with <span class="heart"></span> by DexignZone</p>
  </div>
  
</div>