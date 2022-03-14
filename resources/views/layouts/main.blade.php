<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.head')
</head>

<body>

  <!--*******************
    Preloader start
  ********************-->
  <div id="preloader">
    <div class="sk-three-bounce">
      <div class="sk-child sk-bounce1"></div>
      <div class="sk-child sk-bounce2"></div>
      <div class="sk-child sk-bounce3"></div>
    </div>
  </div>
  <!--*******************
    Preloader end
  ********************-->

  <!--**********************************
    Main wrapper start
  ***********************************-->
  <div id="main-wrapper">

    <!--**********************************
      Nav header start
    ***********************************-->
    <div class="nav-header">
      @include('layouts.navheader')
    </div>
    <!--**********************************
      Nav header end
    ***********************************-->

    <!--**********************************
      Chat box start
    ***********************************-->
    <div class="chatbox">
      <div class="chatbox-close"></div>
      @include('layouts.notifbar')
    </div>
    <!--**********************************
      Chat box End
    ***********************************-->

    <!--**********************************
      Header start
    ***********************************-->
    <div class="header">
      @include('layouts.header')
    </div>
    <!--**********************************
      Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
      Sidebar start
    ***********************************-->
    <div class="deznav">
      @include('layouts.sidebar')
    </div>
    <!--**********************************
      Sidebar end
    ***********************************-->

    <!--**********************************
      Content body start
    ***********************************-->
    <div class="content-body">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
    <!--**********************************
      Content body end
    ***********************************-->

    <!--**********************************
      Footer start
    ***********************************-->
    @include('layouts.footer')
    <!--**********************************
      Footer end
    ***********************************-->

  </div>
  <!--**********************************
    Main wrapper end
  ***********************************-->

  <!--**********************************
    Scripts
  ***********************************-->
  @include('layouts.scripts')

</body>
</html>
