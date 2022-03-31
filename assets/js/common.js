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

    // $(".loggin").click(function(e) {
    //     e.preventDefault();
    //     $.ajax({
    //         type: "POST",
    //         url: "http://localhost/TatvaSoft/?controller=Helperland&function=Login",
    //         success: function(response) {
    //             if (response == 1) {

    //                 Swal.fire({
    //                     icon: 'success',
    //                     title: 'Done',
    //                     text: 'Login',
    //                     showConfirmButton: false,
    //                     timer: 1500,
    //                 }).then((result) => {

    //                     window.location.href = "http://localhost/TatvaSoft/Views/sp.php";


    //                 });
    //             }
    //         }
    //     });
    //     // alert("jii");
    // });

});