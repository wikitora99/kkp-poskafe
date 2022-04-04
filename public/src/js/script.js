$(function() {

  /**************************
    Custom JQuery-sart 
  **************************/
  let stockingProduct = function(hasStock){
    let curStock = $('input[name=cur_stock]');
    let minStock = $('input[name=min_stock]');

    if (hasStock.is(':checked')){
      curStock.prop('disabled', false);
      curStock.attr('required', true);
      minStock.prop('disabled', false);
      minStock.attr('required', true);
    }else{        
      curStock.val('');
      curStock.prop('disabled', true);
      curStock.attr('required', false);
      minStock.val('');
      minStock.prop('disabled', true);
      minStock.attr('required', false);
    }
  }

  $('input[name=has_stock]').change(function() {
    stockingProduct($(this));
  });
  stockingProduct($('input[name=has_stock]'));

  $('input[name=picture]').change(function(){
    let img = $(this);
    let imgPreview = $('.img-preview');
    let getFile = new FileReader();

    getFile.readAsDataURL(img[0].files[0]);

    getFile.onload = function(e){
      imgPreview[0].src = e.target.result;
    }
  });

  $('.reset-btn').click(function() {
    let curl = $(location).attr('href');
    let target = curl.includes('?') ? curl.split('?')[0] : curl;
    
    window.location.href = target;
  });

  $('.edit-category').click(function() {
    let data = $(this).data('attr');

    $('#form-category').attr('action', 'https://kkp-poskafe.dev/category/'+data.slug);
    $('#name').val(data.name);
    $('#desc').val(data.desc);
  });
  /**************************
    Custom JQuery-end 
  **************************/

  /**************************
    Datatables Area-sart 
  **************************/
  if ($('.datatables').length > 0){
    $.fn.DataTable.ext.pager.numbers_length = 5;

    $('.datatables').DataTable({
      responsive: true,
      pageLength: 10,
      pagingType: 'simple_numbers',
      ordering: false,
      fixedColumns: {
        leftColumns: 1
      },
      language: {
        search: 'Filter',
        emptyTable: 'Tidak ada data yang tersedia',
        info: 'Baris _START_ - _END_ dari total _TOTAL_ baris',
        infoEmpty: 'Menampilkan 0 dari total 0 hasil',
        infoFiltered: '(disaring dari total _MAX_ baris)',
        lengthMenu: 'Lihat per _MENU_ baris',
        loadingRecords: 'Sedang memuat...',
        zeroRecords: 'Tidak ada data yang sesuai',
        infoThousands: ",",
        searchPlaceholder: 'ketik di sini...',
        paginate: {
          previous: '&laquo;',
          next: '&raquo;'
        }
      }
    });
  }
  /**************************
    Datatables Area-end
  **************************/

  /**************************
    Daterange Picker Area-start 
  **************************/
  if ($('.filter-range').length > 0){
    let start = moment().subtract(29, 'days');
    let end = moment();

    function cb(start, end) {
      $('.filter-range span').html(start.format('D MMM YYYY') + ' - ' + end.format('D MMM YYYY'));
    }

    $('.filter-range').daterangepicker({
      opens: 'left',
      locale: {
        applyLabel: 'Terapkan',
        cancelLabel: 'Batal'
      },
      startDate: moment().subtract(29, 'days'),
      minDate: moment().subtract(89, 'days'),
      endDate: moment(),
      maxDate: moment(),
      ranges: {
       'Hari ini': [moment(), moment()],
       'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
       '7 Hari lalu': [moment().subtract(6, 'days'), moment()],
       '30 Hari lalu': [moment().subtract(29, 'days'), moment()],
       'Bulan ini': [moment().startOf('month'), moment()],
       'Bulan lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      alwaysShowCalendars: true,
      showCustomRangeLabel: false,
      applyButtonClasses: 'btn btn-xs btn-primary',
      cancelButtonClasses: 'btn btn-xs btn-outline-danger'
    }, cb);

    cb(start, end);

    $('.filter-range').on('apply.daterangepicker', function() {
      let filterStart = $(this).data('daterangepicker').startDate.format('MM/DD/YYYY');
      let filterEnd = $(this).data('daterangepicker').endDate.format('MM/DD/YYYY');

      $('input[name=filter_start]').val(filterStart);
      $('input[name=filter_end]').val(filterEnd);
      $(this).parents('form').submit();
    });
  }
  /**************************
    Daterange Picker Area-end
  **************************/

  /**************************
    Toastr Area-start 
  **************************/
  let successMessage = $('.success-message').data('message');
  let errorMessage = $('.error-message').data('message');
  let infoMessage = $('.info-message').data('message');
  let warningMessage = $('.warning-message').data('message');

  toastr.options = {
    positionClass: "toast-top-right",
    timeOut: "5000",
    closeButton: true,
    debug: false,
    newestOnTop: true,
    progressBar: true,
    preventDuplicates: false,
    onclick: null,
    showDuration: "500",
    hideDuration: "1000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "show",
    hideMethod: "hide",
    tapToDismiss: false
  }

  if (successMessage){
    toastr.success(successMessage);
  }
  if (errorMessage){
    toastr.error(errorMessage);
  }
  if (infoMessage){
    toastr.info(infoMessage);
  }
  if (warningMessage){
    toastr.warning(warningMessage);
  }
  /**************************
    Toastr Area-end 
  **************************/

  /**************************
    Sweetalert Area-start 
  **************************/
  $('.logout-btn').on('click', function(e) {
    e.preventDefault();
    let form = $(this).parents('form');
    
    Swal.fire({
      title: 'Konfirmasi Keluar!',
      text: "Yakin ingin keluar dari aplikasi?",
      type: 'info',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, keluar!',
      cancelButtonText: 'Batal'
    })
    .then((result) => {
      if (result.value) {
        form.submit();
      }
    })
  });

  $('.delete-trigger').click(function() {
    let form = $('.delete-form');
    
    Swal.fire({
      title: 'Konfirmasi Hapus!',
      text: 'Yakin ingin menghapus data ini?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    })
    .then((result) => {
      if (result.value) {
        form.submit();
      }
    });
  });

  $('.delete-btn').click(function(e) {
    e.preventDefault();
    let form = $(this).parents('form');
    
    Swal.fire({
      title: 'Konfirmasi Hapus!',
      html: 'Yakin ingin menghapus data ini? Data yang sudah dihapus <b>tidak dapat dipulihkan!</b>',
      type: 'error',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    })
    .then((result) => {
      if (result.value) {
        form.submit();
      }
    });
  });
  /**************************
    Sweetalert Area-end 
  **************************/

  /**************************
    Apexcharts Area-start
  **************************/
  if ($('.chart').length > 0){
    let chartList = function() {

      let earningsChart = function(){
      let options = {
        series: [{
          name: 'Pendapatan',
          data: [500000, 300000, 400000, 200000, 500000, 200000, 400000, 300000, 500000, 200000]
        }, {
          name: 'Pengeluaran',
          data: [200000, 400000, 300000, 400000, 200000, 400000, 200000, 300000, 200000, 300000]
        }],
        chart: {
          height: 300,
          type: 'area',
          toolbar:{
            show:false
          }
        },
        colors:["#00ADA3", "#FFAB2D"],
          dataLabels: {
            enabled: false
          },
          stroke: {
            curve: 'smooth',
        width:3
          },
      legend:{
        show:true
      },
      grid:{
        show:false,
        strokeDashArray: 6,
        borderColor: '#dadada',
      },
      yaxis: {
        labels: {
        style: {
          colors: '#B5B5C3',
          fontSize: '12px',
          fontFamily: 'Poppins',
          fontWeight: 400
          
        },
        formatter: function (value) {
          let result = null;

          if (value < 1000) {
            result = value;
          }else if (value < 1000000) {
            result = (value/1000) + " rb";
          }else if (value < 1000000000) {
            result = (value/1000000) + " jt";
          }else if (value < 1000000000000) {
            result = (value/1000000000) + " M";
          }else {
            result = (value/1000000000000) + " T";
          }

          return result;
        }
        },
      },
      xaxis: {
        categories: ["Week 01","Week 02","Week 03","Week 04","Week 05","Week 06","Week 07","Week 08","Week 09","Week 10"],
        labels:{
          style: {
            colors: '#B5B5C3',
            fontSize: '12px',
            fontFamily: 'Poppins',
            fontWeight: 400
          },
        }
      },
      fill:{
        type:'solid',
        opacity:0.05
      },
      tooltip: {
        x: {
          format: 'dd/MM/yy HH:mm'
        },
      },
      };
      let chart = new ApexCharts(document.querySelector("#earnings-chart"), options);
      chart.render();
    }

      let productSalesChart = function() {
        let options = {
          series: [120, 92, 84, 69, 30, 50],
          chart: {
            width: 380,
            type: 'pie',
          },
          labels: ['Produk 1', 'Produk 2', 'Produk 3', 'Produk 4', 'Produk 5', 'Lainnya'],
          responsive: [{
            breakpoint: 480,
            options: {
              chart: {
                width: 200
              },
              legend: {
                psition: 'bottom'
              }
            }
          }]
        };
        let chart = new ApexCharts(document.querySelector('#product-sales-chart'), options);
        chart.render();
      }

      let categorySalesChart = function() {
        let options = {
          series: [120, 92, 84, 69, 30, 50],
          chart: {
            width: 380,
            type: 'pie',
          },
          labels: ['Kategori 1', 'Kategori 2', 'Kategori 3', 'Kategori 4', 'Kategori 5', 'Lainnya'],
          responsive: [{
            breakpoint: 480,
            options: {
              chart: {
                width: 200
              },
              legend: {
                psition: 'bottom'
              }
            }
          }]
        };
        let chart = new ApexCharts(document.querySelector('#category-sales-chart'), options);
        chart.render();
      }

      return {
        load:function(){
          earningsChart();
          productSalesChart();
          categorySalesChart();
        }
      }
    }();

    $(window).on('load',function(){
      setTimeout(function(){
        chartList.load();
      }, 1000);
    });
  }
  /**************************
    Apexcharts Area-end
  **************************/

});
