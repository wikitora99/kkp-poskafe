$(function() {

  // Dashboard periode change
  $('select[name=date_filter]').change(function(e) {
    $(this).parents('form').submit();
  });

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
  /**************************
    Sweetalert Area-end 
  **************************/

  /**************************
    Apexcharts Area-start
  **************************/
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
  /**************************
    Apexcharts Area-end
  **************************/

});
