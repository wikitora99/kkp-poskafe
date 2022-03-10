
// Custom jquery-start
$(function(){

  $('input[name=subsidi]').change(function() {
    if ($(this).is(':checked')){
      $('#input-subsidi').removeClass('d-none');
      $('input[name=subsidi_value]').attr('required', true);
    }else{        
      $('#input-subsidi, #input-instalasi').addClass('d-none');
      $('input[name=subsidi_value]').val('');
      $('input[name=subsidi_value]').attr('required', false);
    }
  });


  // delete confirmation alert
  $('.btn-delete').click(function(e) {
    e.preventDefault();
    let form = $(this).parents('form');    
    
    Swal.fire({
      title: 'Konfirmasi Hapus!',
      text: 'Yakin ingin menghapus data?',
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


  // auto fill member information on select option
  $('select[name=member]').change(function() {
    if ($(this).find(':selected').val() != 0){
      let data = $(this).find(':selected').data('attr');
      let ddate = $(this).find(':selected').data('dd');
      // console.log(data);

      if (data['is_active'] == 1){
        $('#m-status').text('Aktif');
      }else{
        $('#m-status').text('Tidak Aktif');
      }

      $('#m-kode').text(data['kode_members']);
      $('#m-name').text(data['name']);
      $('#m-alamat').text(data['alamat']);
      $('#m-created').text(ddate);            
      
      $('#m-info').removeClass('d-none');
      $('#m-noinfo').addClass('d-none');
    }else{
      $('#m-noinfo').removeClass('d-none');
      $('#m-info').addClass('d-none');
    }       
  });


  // edit confirmation for status tagihan
  $('input[name=status_pembayaran]').click(function() {    
    let form = $(this).parents('form');  
    
    Swal.fire({
      title: 'Konfirmasi Perubahan!',
      html: 'Yakin ingin mengubah status pembayaran tagihan ini menjadi <b>LUNAS</b>?',
      type: 'info',
      showCancelButton: true,
      confirmButtonColor: '#68CF29',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, ubah!',
      cancelButtonText: 'Batal'
    })
    .then((result) => {
      if (result.value) {
        form.submit();
      }else{
        $(this).prop('checked', false);
      }
    });
  });


  $('.search-reset').click(function() {
    let curl = $(location).attr('href');
    
    let target = curl.includes('?') ? curl.split('?')[0] : curl;
    
    window.location.href = target;
  });


  $('select[name=setting_key]').change(function() {
    let key = $(this).find(':selected').val();
    let val = $('.setting-value-1');

    if (key == 'UPLOAD_BUKTI_METER'){
      $('#form-setting-1').addClass('d-none');
      $('.setting-value-1').attr('disabled', true);
      $('#form-setting-2').removeClass('d-none');
      $('.setting-value-2').attr('disabled', false);
    }else{
      $('#form-setting-2').addClass('d-none');
      $('.setting-value-2').attr('disabled', true);
      $('#form-setting-1').removeClass('d-none');
      $('.setting-value-1').attr('disabled', false);
      if (key == 'BUMDES_PREFIX'){
        val.attr('type', 'text');
        val.attr('placeholder', 'Nilai variabel...');
      }else{
        val.attr('type', 'number');
        val.attr('placeholder', '10000...');
      }
    }
  });

});
// Custom jquery-end
