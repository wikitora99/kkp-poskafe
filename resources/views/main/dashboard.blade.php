@extends('layouts.main')

@section('title')
  Dashboard
@endsection

@section('content')
  
  @include('layouts.flasher')

  {{-- Card Page Header --}}
  <div class="row page-titles mx-0 d-flex flex-wrap align-items-center">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Dashboard</h4>
      </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end d-flex">
      <div class="breadcrumb">
        <form action="{{ route('dashboard.filter') }}" method="POST">
          @csrf
          <div class="btn btn-xs btn-primary filter-range">
            <i class="ti ti-calendar"></i>
            <span class="mx-2"></span>
            <i class="fa fa-caret-down"></i>
          </div>
          <div class="d-none">
            <input type="text" name="filter_start">
            <input type="text" name="filter_end">
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">
      <div class="widget-stat card">
        <div class="card-body p-4">
          <div class="media ai-icon">
            <span class="me-3 bgl-success text-success">
              <i class="ti ti-receipt"></i>
            </span>
            <div class="media-body">
              <p class="mb-1">Penjualan</p>
              <h4 class="mb-0">@number_id(7351)</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">
      <div class="widget-stat card">
        <div class="card-body p-4">
          <div class="media ai-icon">
            <span class="me-3 bgl-primary text-primary">
              <i class="ti ti-money"></i>
            </span>
            <div class="media-body">
              <p class="mb-1">Pendapatan</p>
              <h4 class="mb-0"><small>Rp </small>@short_idr(4252000)</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">
      <div class="widget-stat card">
        <div class="card-body  p-4">
          <div class="media ai-icon">
            <span class="me-3 bgl-warning text-warning">
              <i class="ti ti-stats-up"></i>
            </span>
            <div class="media-body">
              <p class="mb-1">Pengeluaran</p>
              <h4 class="mb-0"><small>Rp </small>@short_idr(927500)</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header border-0 flex-wrap pb-0">
          <div class="mb-3">
            <h4 class="fs-20 text-black">Grafik Pendapatan & Pengeluaran</h4>
            <p class="mb-0 fs-12 text-black">Pendapatan dihitung setelah pengeluaran</p>
          </div>
        </div>
        <div class="card-body pb-2 px-3">
          <div id="earnings-chart" class="chart"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Penjualan Produk</h4>
        </div>
        <div class="card-body">
          <div id="product-sales-chart" class="chart"></div>
        </div>
      </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Penjualan Kategori</h4>
        </div>
        <div class="card-body">
          <div id="category-sales-chart" class="chart"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Transaksi Terbaru</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive recentOrderTable">
            <table class="table verticle-middle table-responsive-md">
              <thead>
                <tr>
                  <th scope="col">Ward No.</th>
                  <th scope="col">Patient</th>
                  <th scope="col">Dr Name</th>
                  <th scope="col">Date</th>
                  <th scope="col">Status</th>
                  <th scope="col">Bills</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>12</td>
                  <td>Mr. Bobby</td>
                  <td>Dr. Jackson</td>
                  <td>01 August 2020</td>
                  <td><span class="badge badge-rounded badge-primary">Checkin</span></td>
                  <td>$120</td>
                  <td>
                    <div class="dropdown custom-dropdown mb-0">
                      <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript:void(0);">Details</a>
                        <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>10 </td>
                  <td>Mr. Dexter</td>
                  <td>Dr. Charles</td>
                  <td>31 July 2020</td>
                  <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                  <td>$540</td>
                  <td>
                    <div class="dropdown custom-dropdown mb-0">
                      <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript:void(0);">Details</a>
                        <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>03 </td>
                  <td>Mr. Nathan</td>
                  <td>Dr. Frederick</td>
                  <td>30 July 2020</td>
                  <td><span class="badge badge-rounded badge-danger">Canceled</span></td>
                  <td>$301</td>
                  <td>
                    <div class="dropdown custom-dropdown mb-0">
                      <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript:void(0);">Details</a>
                        <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Mr. Aurora</td>
                  <td>Dr. Roman</td>
                  <td>29 July 2020</td>
                  <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                  <td>$099</td>
                  <td>
                    <div class="dropdown custom-dropdown mb-0">
                      <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript:void(0);">Details</a>
                        <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>06</td>
                  <td>Mr. Matthew</td>
                  <td>Dr. Samantha</td>
                  <td>28 July 2020</td>
                  <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                  <td>$520</td>
                  <td>
                    <div class="dropdown custom-dropdown mb-0">
                      <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript:void(0);">Details</a>
                        <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
