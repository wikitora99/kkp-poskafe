$(function() {

  $('.logout-btn').on('click', function(e) {
    e.preventDefault();
    let form = $(this).parents('form');
    
    Swal.fire({
      title: 'Konfirmasi Aksi!',
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

});
