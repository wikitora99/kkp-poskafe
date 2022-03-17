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
          <a class="nav-link" role="button">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="button" class="btn btn-xs light btn-rounded btn-danger logout-btn">
                Keluar<i class="fas fa-sign-out-alt ms-2"></i>
              </button>
            </form>
          </a>
        </li>
      </ul>

    </div>
  </nav>
</div>
