<div class="deznav-scroll">

  <div class="main-profile">
    <div class="image-bx">
      <img src="{{ asset('src/images/profile/small/pic1.jpg') }}" alt="Profile Picture">
    </div>
    <h5 class="name"><span class="font-w400">Halo, </span>{{ auth()->user()->username }}</h5>
    <p class="email">{{ auth()->user()->email }}</p>
  </div>

  <ul class="metismenu" id="menu">

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
        <li><a href="#">Submenu Laporan 1</a></li>
        <li><a href="#">Submenu Laporan 2</a></li>
        <li><a href="#">Submenu Laporan 3</a></li>
      </ul>
    </li>

    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Transaksi</span>
      </a>
      <ul aria-expanded="false">
        <li><a href="#">Submenu Transaksi 1</a></li>
        <li><a href="#">Submenu Transaksi 2</a></li>
        <li><a href="#">Submenu Transaksi 3</a></li>
      </ul>
    </li>

    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Produk</span>
      </a>
      <ul aria-expanded="false">
        <li><a href="#">Submenu Produk 1</a></li>
        <li><a href="#">Submenu Produk 2</a></li>
        <li><a href="#">Submenu Produk 3</a></li>
      </ul>
    </li>

    <li>
      <a class="has-arrow ai-icon" href="#" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">Inventori</span>
      </a>
      <ul aria-expanded="false">
        <li><a href="#">Submenu Inventori 1</a></li>
        <li><a href="#">Submenu Inventori 2</a></li>
        <li><a href="#">Submenu Inventori 3</a></li>
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