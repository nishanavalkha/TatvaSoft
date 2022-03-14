$(document).ready(function() {

    var reqIdforreschedule;
    var reqIdfordetailmodal;
    dashboard();
    history();
    // alert("hi");
    function dashboard() {
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=dbboard",
            success: function(response) {
                $(".dboard").html(response);

                $(".reschedule").click(function(e) {
                    e.stopPropagation();
                    reqIdforreschedule = this.id;

                });
                $(".cancel").click(function(e) {
                    reqIdforreschedule = this.id;
                    e.stopPropagation();

                });

                $(".ft").click(function(e) {
                    reqIdforreschedule = this.id;
                    // alert(reqIdforreschedule);

                });
                $(".rateyo").rateYo({
                    starWidth: "16px",
                    ratedFill: "#FFD600",
                    readOnly: true,
                });


                $(".dboard tr .td").click(function() {

                    reqIdfordetailmodal = this.id;

                    $.ajax({
                        type: "POST",
                        url: "http://localhost/TatvaSoft/?controller=Helperland&function=SDmodal",
                        data: {
                            "requId": reqIdfordetailmodal
                        },
                        success: function(response) {
                            $(".SD").html(response);

                            $(".ft").click(function(e) {
                                reqIdforreschedule = this.id;
                                // alert(reqIdforreschedule);

                            });

                            $(".reschedule").click(function(e) {
                                e.stopPropagation();
                                reqIdforreschedule = this.id;

                            });
                            $(".cancel").click(function(e) {
                                reqIdforreschedule = this.id;
                                e.stopPropagation();

                            });


                        }
                    });

                });
            }
        });
    }



    $(".btn-update").click(function(e) {

        var rescheduledate = $(".rescheduledate").val();
        var rescheduletime = $(".rescheduletime").val();
        // alert(reqIdforreschedule);

        // alert(reqIdforreschedule);
        $.ajax({

            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=reschedule",
            data: {
                "reqId": reqIdforreschedule,
                "rescheduledate": rescheduledate,
                "rescheduletime": rescheduletime
            },

            success: function(response) {
                dashboard();

                Swal.fire({
                    icon: 'success',
                    title: 'Done',
                    text: 'Service rescheduled successfully',

                })
            }
        });


    });
    //  cancel model
    $(".btn-cancelnow").click(function(e) {
        var comment = $(".why-cancel").val();
        // alert(reqIdforreschedule);

        Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, cancel it!'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    // alert(reqIdforreschedule);
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/TatvaSoft/?controller=Helperland&function=cancel",
                        data: {
                            "reqId": reqIdforreschedule,
                            "comment": comment
                        },
                        success: function(response) {
                            // document.querySelector(".btn-cancelnow").innerHTML = response;
                            history();
                            dashboard();
                            // $("#bookingrequest_modal").modal("hide");
                            Swal.fire({
                                icon: 'success',
                                title: 'Cancelled',
                                text: 'Service cancelled successfully',

                            })
                        }

                    });
                }
            })
    });







    // service history content
    function history() {
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=service_history",
            success: function(response) {

                $(".history").html(response);
                // $(".history tr .td").click(function(e) {


                // });

                $(".rateyo").rateYo({
                    starWidth: "16px",
                    ratedFill: "#FFD600",
                    readOnly: true,
                });

                $(".rate-sp").click(function(e) {
                    reqIdforreschedule = this.id;
                    // alert(reqIdforreschedule);
                    $.ajax({

                        type: "POST",
                        url: "http://localhost/TatvaSoft/?controller=Helperland&function=fill_rating",
                        data: {
                            "reqIdforreschedule": reqIdforreschedule
                        },
                        success: function(response) {

                            $(".ratesp").html(response);
                            var ontimearrival = 0;
                            var friendly = 0;
                            var quality = 0;
                            $(".rateyo").rateYo({
                                starWidth: "16px",
                                ratedFill: "#FFD600",
                                readOnly: false,
                            });

                            $(".ontime-arrival").rateYo({ starWidth: "18px", ratedFill: "#FFD600" }).on("rateyo.change", function(e, data) {
                                ontimearrival = data.rating;
                            });
                            $(".friendly").rateYo({ starWidth: "18px", ratedFill: "#FFD600" }).on("rateyo.change", function(e, data) {
                                friendly = data.rating;
                            });
                            $(".quality").rateYo({ starWidth: "18px", ratedFill: "#FFD600", }).on("rateyo.change", function(e, data) {
                                quality = data.rating;
                            });
                            $(".btn-ratesp-submit").click(function(e) {
                                var feedback = $(".rate-feedback").val();
                                reqIdforreschedule = this.id;
                                // alert(reqIdforreschedule);
                                $.ajax({
                                    type: "POST",
                                    url: "http://localhost/TatvaSoft/?controller=Helperland&function=rate_button",

                                    data: {
                                        "OnTimeArrival": ontimearrival,
                                        "Friendly": friendly,
                                        "quality": quality,
                                        "rateidforsub": reqIdforreschedule,
                                        "feedback": feedback
                                    },

                                    success: function(response) {
                                        $(".rate-service-text").html(response);
                                        $("#ratemodal").modal("hide");
                                        Swal.fire({
                                                icon: 'success',
                                                title: 'Ratings',
                                                text: 'new rating give successfully',

                                            })
                                            // alert("jj");
                                    }
                                });
                            });


                        }
                    });

                });


            }
        });
    }






});