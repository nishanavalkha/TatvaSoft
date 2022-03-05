function show1() {
    document.getElementById("body1").style.display = "block";
    document.getElementById("body2").style.display = "none";
    document.getElementById("body3").style.display = "none";
    document.getElementById("body4").style.display = "none";
    document.getElementById("bt2").style.backgroundColor = "";
    document.getElementById("btntxt2").style.color = "#4f4f4f";
    document.getElementById("btni2").src = "../assets/image/schedule.png";
    document.getElementById("bt3").style.backgroundColor = "";
    document.getElementById("btntxt3").style.color = "#4f4f4f";
    document.getElementById("btni3").src = "../assets/image/details.png";

    document.getElementById("bt4").style.backgroundColor = "";
    document.getElementById("btntxt4").style.color = "#4f4f4f";
    document.getElementById("btni4").src = "../assets/image/payment.png";
}



function show2() {
    document.getElementById("body1").style.display = "none";
    document.getElementById("body2").style.display = "block";
    document.getElementById("body3").style.display = "none";
    document.getElementById("body4").style.display = "none";
    document.getElementById("bt2").style.backgroundColor = "#1D7A8C";
    document.getElementById("btntxt2").style.color = "white";
    document.getElementById("btni2").src = "../assets/image/schedule-white.png";
    document.getElementById("bt3").style.backgroundColor = "";
    document.getElementById("btntxt3").style.color = "#4f4f4f";
    document.getElementById("btni3").src = "../assets/image/details.png";

    document.getElementById("bt4").style.backgroundColor = "";
    document.getElementById("btntxt4").style.color = "#4f4f4f";
    document.getElementById("btni4").src = "../assets/image/payment.png";
}

function show3() {
    document.getElementById("body1").style.display = "none";
    document.getElementById("body2").style.display = "none";
    document.getElementById("body3").style.display = "block";
    document.getElementById("body4").style.display = "none";
    document.getElementById("bt3").style.backgroundColor = "#1D7A8C";
    document.getElementById("btntxt3").style.color = "white";
    document.getElementById("btni3").src = "../assets/image/details-white.png";
    document.getElementById("bt4").style.backgroundColor = "";
    document.getElementById("btntxt4").style.color = "#4f4f4f";
    document.getElementById("btni4").src = "../assets/image/payment.png";
}

function show4() {
    document.getElementById("body1").style.display = "none";
    document.getElementById("body2").style.display = "none";
    document.getElementById("body3").style.display = "none";
    document.getElementById("body4").style.display = "block";
    document.getElementById("bt4").style.backgroundColor = "#1D7A8C";
    document.getElementById("btntxt4").style.color = "white";
    document.getElementById("btni4").src = "../assets/image/payment-white.png";
}
var date = 0;
var time = 0;
var tdate = 0;
var ttime;
var totaltime;
var servicehours = 0;
var extraservicehours = 0;
var postalcode;
var haspet = 0;
var totalcleaning = 0;
var totalpayment = 0;
var comments;
var UserId = 0;
var saddid = 0;
var servicedt;
$(document).ready(function() {
    $(".ava").click(function() {

        postalcode = $(".postalcode").val();
        if (postalcode == "") {
            document.querySelector(".avail-msg").innerHTML = "Please enter the postalcode";

        } else {
            $.ajax({
                type: "POST",
                url: "http://localhost/TatvaSoft/?controller=Helperland&function=availibility",
                data: { "zipcode": postalcode },
                success: function(response) {
                    if (response == 0) {
                        document.querySelector(".avail-msg").innerHTML = "We are not providing service in this area. We'll notify you if any helper would start working near your area.";

                    } else {
                        show2();
                    }
                }
            });

            enlistaddress();
        }
    });
    $(".date").change(function() {
        date = $(".date").val();

        document.querySelector(".datetime").innerHTML = date;
    });
    $(".take-time").change(function() {
        tdate = $(".take-time").val();

        document.querySelector(".dt").innerHTML = tdate;
    });
    $(".time").change(function() {
        ttime = $(".time").val();
        document.querySelector(".basic").innerHTML = ttime + "Hrs";

        paymentsummary();
    });

    $(".conbut").click(function() {
        comments = $(".comm").val();

    });
    $(".extra-service1").click(function() {

        if (!(document.querySelector(".extra-service1").classList.contains("active"))) {
            $(".extra-service1").addClass("active");
            $(".extra-service1").css("border", "2px solid #1D7A8C");
            document.querySelector(".extra-service1 img").src = document.querySelector(".extra-service1 img").src.replace(".png", "-green.png");
            $(".cabinates").show();
        } else {
            $(".extra-service1").removeClass("active");
            $(".extra-service1").css("border", "1px solid");
            document.querySelector(".extra-service1 img").src = document.querySelector(".extra-service1 img").src.replace("-green.png", ".png");
            $(".cabinates").hide();

        }
        paymentsummary();
    });

    $(".extra-service2").click(function() {

        if (!(document.querySelector(".extra-service2").classList.contains("active"))) {
            $(".extra-service2").addClass("active");
            $(".extra-service2").css("border", "2px solid #1D7A8C");
            document.querySelector(".extra-service2 img").src = document.querySelector(".extra-service2 img").src.replace(".png", "-green.png");
            $(".fridge").show();
        } else {
            $(".extra-service2").removeClass("active");
            $(".extra-service2").css("border", "1px solid");
            document.querySelector(".extra-service2 img").src = document.querySelector(".extra-service2 img").src.replace("-green.png", ".png");
            $(".fridge").hide();

        }
        paymentsummary();
    });

    $(".extra-service3").click(function() {

        if (!(document.querySelector(".extra-service3").classList.contains("active"))) {
            $(".extra-service3").addClass("active");
            $(".extra-service3").css("border", "2px solid #1D7A8C");
            document.querySelector(".extra-service3 img").src = document.querySelector(".extra-service3 img").src.replace(".png", "-green.png");
            $(".oven").show();
        } else {
            $(".extra-service3").removeClass("active");
            $(".extra-service3").css("border", "1px solid");
            document.querySelector(".extra-service3 img").src = document.querySelector(".extra-service3 img").src.replace("-green.png", ".png");
            $(".oven").hide();

        }
        paymentsummary();
    });

    $(".extra-service4").click(function() {

        if (!(document.querySelector(".extra-service4").classList.contains("active"))) {
            $(".extra-service4").addClass("active");
            $(".extra-service4").css("border", "2px solid #1D7A8C");
            document.querySelector(".extra-service4 img").src = document.querySelector(".extra-service4 img").src.replace(".png", "-green.png");
            $(".laundry").show();
        } else {
            $(".extra-service4").removeClass("active");
            $(".extra-service4").css("border", "1px solid");
            document.querySelector(".extra-service4 img").src = document.querySelector(".extra-service4 img").src.replace("-green.png", ".png");
            $(".laundry").hide();

        }
        paymentsummary();
    });

    $(".extra-service5").click(function() {

        if (!(document.querySelector(".extra-service5").classList.contains("active"))) {
            $(".extra-service5").addClass("active");
            $(".extra-service5").css("border", "2px solid #1D7A8C");
            document.querySelector(".extra-service5 img").src = document.querySelector(".extra-service5 img").src.replace(".png", "-green.png");
            $(".window").show();
        } else {
            $(".extra-service5").removeClass("active");
            $(".extra-service5").css("border", "1px solid");
            document.querySelector(".extra-service5 img").src = document.querySelector(".extra-service5 img").src.replace("-green.png", ".png");
            $(".window").hide();

        }
        paymentsummary();
    });
    $(".haspett").click(function() {
        if (this.checked == true) {

            haspet = 1;

        } else {

            haspet = 0;

        }


    });

    function paymentsummary() {
        servicehours = parseFloat($(".time").val());
        if (document.querySelector(".extra-service1").classList.contains("active")) {
            var ex1 = 0.5;
        } else {
            var ex1 = 0;
        }
        if (document.querySelector(".extra-service2").classList.contains("active")) {
            var ex2 = 0.5;
        } else {
            var ex2 = 0;
        }
        if (document.querySelector(".extra-service3").classList.contains("active")) {
            var ex3 = 0.5;
        } else {
            var ex3 = 0;
        }
        if (document.querySelector(".extra-service4").classList.contains("active")) {
            var ex4 = 0.5;
        } else {
            var ex4 = 0;
        }
        if (document.querySelector(".extra-service5").classList.contains("active")) {
            var ex5 = 0.5;
        } else {
            var ex5 = 0;
        }
        servicehours = servicehours + ex1 + ex2 + ex3 + ex4 + ex5;
        extraservicehours = ex1 + ex2 + ex3 + ex4 + ex5;
        document.querySelector(".total-service").innerHTML = servicehours + "hrs";
        totalcleaning = servicehours * 25;
        totalpayment = totalcleaning;
        document.querySelector(".cleaning").innerHTML = "$" + totalcleaning;
        document.querySelector(".total-payment").innerHTML = "$" + totalpayment;
    }

    function enlistaddress() {
        postalcode = $(".postalcode").val();
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=addresseslist",
            data: { "zipcode": postalcode },
            success: function(response) {
                document.querySelector(".add").innerHTML = response;
            }
        });
    }
    $(".saveaddress").click(function() {

        var streetname = $(".Streetname").val();
        var housenumber = $(".Housenumber").val();
        var postal_code = $(".Postalcode").val();
        var city = $(".City").val();
        var phonenumber = $(".Mobile").val();

        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=insertdata",
            data: {
                "streetname": streetname,
                "housenumber": housenumber,
                "postalcode": postal_code,
                "city": city,
                "phonenumber": phonenumber
            },
            success: function(response) { enlistaddress(); }
        });

    });

    $(".completebook").click(function() {
        //alert(extraservicehours);
        ServiceStartDate = date + tdate;
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=servicerequest",
            data: {

                "date": date,
                "tdate": tdate,
                "postalcode": postalcode,
                "servicehours": servicehours,
                "extraservicehours": extraservicehours,
                "totalcleaning": totalcleaning,
                "totalpayment": totalpayment,
                "comments": comments,
                "haspet": haspet,
                "saddid": saddid

            },

            success: function(response) {
                document.querySelector(".ggg").innerHTML = response;
                // alert("mail succes");
                if (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Done',
                        text: 'Booking'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "http://localhost/TatvaSoft/Views/home.php";
                        }

                    });
                }
            }
        });

    });

    $(".add").click(function(e) {
        saddid = e.target.value;
    });


    // $(".gy").click(function() {
    //     $("#servicedetailmodal").modal("show");

    // });

    function dashboard() {
        alert("abc");

        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=",

            success: function(response) {
                document.querySelector(".addnew").innerHTML = response;
            }
        });
    }
});