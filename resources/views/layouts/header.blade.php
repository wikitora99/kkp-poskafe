<div class="header-content">

  <nav class="navbar navbar-expand">
    <div class="collapse navbar-collapse justify-content-between">

      {{-- Search Box --}}
      <div class="header-left">
        <div class="input-group search-area right d-lg-inline-flex d-none">
          <input type="text" class="form-control" placeholder="Search here...">
          <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
        </div>
      </div>

      {{-- Navbar --}}
      <ul class="navbar-nav header-right main-notification">
        <li class="nav-item dropdown notification_dropdown">
          <a class="nav-link bell dz-fullscreen" href="#">
            <i class="fa fa-expand"></i>
          </a>
        </li>
        <li class="nav-item dropdown notification_dropdown">
          <a class="nav-link bell bell-link" href="javascript:void(0)">
            <i class="ti ti-bell"></i>
            {{-- Cek notif: show/hidden --}}
            <div class="pulse-css"></div>
          </a>
        </li>
        <li class="nav-item dropdown header-profile">
          <a class="nav-link" role="button" data-bs-toggle="dropdown">
            <i class="fa fa-caret-down text-primary me-2"></i>
            <div class="header-info">
              <span>{{ auth()->user()->name }}</span>
              <small>Owner</small> <!-- Get user role -->
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end">
            <a href="./app-profile.html" class="dropdown-item ai-icon">
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

  <div class="sub-header">
    <div class="d-flex align-items-center flex-wrap me-auto">
      <h5 class="dashboard_bar">@yield('menutitle')</h5>
    </div>
    <div class="d-flex align-items-center">
      <a href="javascript:void(0);" class="btn btn-xs btn-primary light me-1">Today</a>
      <a href="javascript:void(0);" class="btn btn-xs btn-primary light me-1">Month</a>
      <a href="javascript:void(0);" class="btn btn-xs btn-primary light">Year</a>
    </div>
  </div>

</div>
