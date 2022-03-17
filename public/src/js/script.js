$(function () {
    /**************************
    Toastr Area-start 
  **************************/
    let successMessage = $(".success-message").data("message");
    let errorMessage = $(".error-message").data("message");
    let infoMessage = $(".info-message").data("message");
    let warningMessage = $(".warning-message").data("message");

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
        tapToDismiss: false,
    };

    if (successMessage) {
        toastr.success(successMessage);
    }
    if (errorMessage) {
        toastr.error(errorMessage);
    }
    if (infoMessage) {
        toastr.info(infoMessage);
    }
    if (warningMessage) {
        toastr.warning(warningMessage);
    }
    /**************************
    Toastr Area-end 
  **************************/

    /**************************
    Sweetalert Area-start 
  **************************/
    $(".logout-btn").on("click", function (e) {
        e.preventDefault();
        let form = $(this).parents("form");

        Swal.fire({
            title: "Konfirmasi Keluar!",
            text: "Yakin ingin keluar dari aplikasi?",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, keluar!",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.value) {
                form.submit();
            }
        });
    });
    /**************************
    Sweetalert Area-end 
  **************************/
});
