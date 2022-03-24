$(document).ready(function() {

    $(".logout").click(function(e) {
        e.preventDefault();
        // alert("hi");
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=logout",
            success: function(response) {
                if (response) {

                    Swal.fire({
                        icon: 'success',
                        title: 'Done',
                        text: 'Logout',
                        showConfirmButton: false,
                        timer: 1500,
                    }).then((result) => {

                        window.location.href = "http://localhost/TatvaSoft/Views/home.php";


                    });
                }
            }
        });

    });

    // $(".btn-login").click(function() {
    //     // e.preventDefault();
    //     $.ajax({
    //         type: "POST",
    //         url: "http://localhost/TatvaSoft/?controller=Helperland&function=login",
    //         success: function(response) {
    //             if (response == 1) {

    //                 Swal.fire({
    //                     icon: 'success',
    //                     title: 'Done',
    //                     text: 'Login',
    //                     showConfirmButton: false,
    //                     timer: 1500,
    //                 }).then((result) => {

    //                     window.location.href = "http://localhost/TatvaSoft/Views/cust.php";


    //                 });
    //             }
    //         }
    //     });
    //     alert("jii");
    // });

});