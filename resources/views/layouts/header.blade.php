<div class="header-content">
  <nav class="navbar navbar-expand">
    <div class="collapse navbar-collapse justify-content-between">

      {{-- Search Box --}}
      <div class="header-left">
        <div class="input-group search-area right d-lg-inline-flex d-none">
          <input type="text" name="form-search" class="form-control" placeholder="Cari di sini...">
          <span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
        </div>
      </div>

      {{-- Nav Menu --}}
      <ul class="navbar-nav header-right main-notification">
        <li class="nav-item dropdown notification_dropdown">
          <a class="nav-link bell dz-fullscreen" href="#">
            <i class="fa fa-expand"></i>
          </a>
        </li>

        <li class="nav-item dropdown notification_dropdown">
          <a class="nav-link bell bell-link" href="#">
            <i class="ti ti-bell"></i>
            {{-- NOTE: cek notif show/hidden pulse --}}
            <div class="pulse-css"></div>
          </a>
        </li>

        <li class="nav-item dropdown header-profile">
          <a class="nav-link" role="button" data-bs-toggle="dropdown">
            <img src="{{ asset('storage/'.auth()->user()->picture) }}" width="20" alt="Foto Profil">
            <div class="header-info">
              <span>{{ auth()->user()->name }}</span>
              <small>{{ auth()->user()->role->name }}</small>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end">
            <a href="#" class="dropdown-item ai-icon"> {{-- route('user.detail') --}}
              <i class="fa fa-user-alt text-primary"></i>
              <span class="ms-2 text-primary">Profil</span>
            </a>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="dropdown-item ai-icon logout-btn">
                <i class="fa fa-sign-out-alt text-danger"></i>
                <span class="ms-2 text-danger">Keluar</span>
              </button>
            </form>
          </div>
        </li>
      </ul>

    </div>
  </nav>
</div>
