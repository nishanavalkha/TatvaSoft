$(document).ready(function() {

    var reqIdforreschedule;
    var reqIdfordetailmodal;
    var selectedaddid = null;
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


    $(".mysettingbtn").click(function(e) {
        e.preventDefault();

        $(".leftsidebar .nav-link").removeClass("active");
        $(".tab-content .tab-pane").removeClass("show active");
        $("#v-pills-notification").addClass("show active");
        $(".address-body").hide();
        $(".password-body").hide();

    });
    $(".details").click(function() {
        $(".details").addClass("active");
        $(".addresses").removeClass("active");
        $(".password").removeClass("active");
        $(".details-body").show();
        $(".address-body").hide();
        $(".password-body").hide();

    });
    $(".addresses").click(function() {
        $(".details").removeClass("active");
        $(".addresses").addClass("active");
        $(".password").removeClass("active");
        $(".details-body").hide();
        $(".address-body").show();
        $(".password-body").hide();
        filluser_add();

    });
    $(".password").click(function() {
        $(".details").removeClass("active");
        $(".addresses").removeClass("active");
        $(".password").addClass("active");
        $(".details-body").hide();
        $(".address-body").hide();
        $(".password-body").show();
    });

    $(".password-save").click(function() {
        var oldpassword = $("input[name='oldpassword']").val();
        var newpassword = $("input[name='newpassword']").val();
        var confirmpassword = $("input[name='confirmpassword']").val();

        if (oldpassword == "" || newpassword == "" || confirmpassword == "") {
            $(".password_error").html("fill all details.");
        } else {
            $(".password_error").html("");
            $.ajax({
                type: "POST",
                url: "http://localhost/TatvaSoft/?controller=Helperland&function=update_pass",
                data: {
                    "oldpassword": oldpassword,
                    "newpassword": newpassword,
                    "confirmpassword": confirmpassword
                },

                success: function(response) {

                    if (response == 1) {
                        Swal.fire({
                            icon: "warning",
                            text: 'Password And Confirm Password Must be Same',

                        })
                    } else if (response == 2) {
                        Swal.fire({
                            icon: "warning",
                            text: 'You entered wrong Old Password',

                        })
                    } else {
                        Swal.fire({
                            icon: "success",
                            title: "Done",
                            text: 'Password Updated Successfully',

                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "http://localhost/TatvaSoft/?controller=Helperland&function=logout";
                            }

                        });
                    }

                }
            });
        }


    });

    $.ajax({
        type: "POST",
        url: "http://localhost/TatvaSoft/?controller=Helperland&function=mydetails",
        success: function(response) {
            $(".details-body").html(response);

            $(".details-save").click(function() {
                var fname = $("input[name='fname']").val();
                var lname = $("input[name='lname']").val();
                var mobile = $("input[name='mobile']").val();
                // var dob = $("input[name='dob']").val();

                if (fname == "" || lname == "" || mobile == "") {
                    $(".error-message").html("please fill all the details.");
                } else {
                    $(".error-message").html("");
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/TatvaSoft/?controller=Helperland&function=updatedetails",
                        data: {
                            "fname": fname,
                            "lname": lname,
                            "mobile": mobile
                        },
                        success: function(response) {
                            // alert(fname);

                        }

                    });

                }
                // alert("fname");

            });

        }
    });

    $(".addnewaddress").click(function() {
        selectedaddid = "";
        $("#addedit_address_modal").modal("toggle");
        selected_useraddress_edit();

    });


    function filluser_add() {
        $.ajax({
            type: "POST",
            data: "data",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=filluser_add",

            success: function(response) {
                $(".addressinsettings").html(response);
                $(".fa-edit").click(function() {
                    selectedaddid = this.id;
                    selected_useraddress_edit();
                    // alert(selectedaddid);
                });
                $(".fa-trash-o").click(function() {
                    selectedaddid = this.id;
                    // alert(selectedaddid);
                    selected_useraddress_delete();
                });

            }
        });
    }

    function selected_useraddress_edit() {
        if (selectedaddid != "") {
            $.ajax({
                type: "POST",
                url: "http://localhost/TatvaSoft/?controller=Helperland&function=fill_selected_useraddress",
                data: {
                    "selectedaddid": selectedaddid,
                },
                success: function(response) {
                    $(".addeditaddress").html(response);
                    $(".btn-addresssave").click(function() {
                        selectedaddid = this.id;
                        insertupdateadd();

                    });
                }
            });
        } else {
            $.ajax({
                type: "POST",
                url: "http://localhost/TatvaSoft/?controller=Helperland&function=fill_selected_useraddress",
                success: function(response) {
                    $(".addeditaddress").html(response);
                    $(".btn-addresssave").click(function() {
                        insertupdateadd();
                    });
                }
            });
        }
    }

    function insertupdateadd() {
        // for edit
        if (selectedaddid != "") {
            var streetname = $("input[name='streetname']").val();
            var housenumber = $("input[name='housenumber']").val();
            var postal_code = $("input[name='postal_code']").val();
            var city = $("input[name='city']").val();
            var phonenumber = $("input[name='phonenumber']").val();

            if (streetname == "" || housenumber == "" || postal_code == "" || city == "" || phonenumber == "") {
                $(".err").html("please fill all the details.");
            } else {
                $.ajax({
                    type: "POST",
                    url: "http://localhost/TatvaSoft/?controller=Helperland&function=insertupdateadd",
                    data: {
                        'streetname': streetname,
                        'housenumber': housenumber,
                        'postal_code': postal_code,
                        'city': city,
                        'phonenumber': phonenumber,
                        'selectedaddid': selectedaddid
                    },
                    success: function(response) {
                        $("#addedit_address_modal").modal("hide");

                        filluser_add();
                    }
                });
            }
        }
        // for insert data
        else

        {
            var streetname = $("input[name='streetname']").val();
            var housenumber = $("input[name='housenumber']").val();
            var postal_code = $("input[name='postal_code']").val();
            var city = $("input[name='city']").val();
            var phonenumber = $("input[name='phonenumber']").val();

            if (streetname == "" || housenumber == "" || postal_code == "" || city == "" || phonenumber == "") {
                $(".err").html("please fill all the details.");
            } else {
                $.ajax({
                    type: "POST",
                    url: "http://localhost/TatvaSoft/?controller=Helperland&function=insertupdateadd",
                    data: {
                        'streetname': streetname,
                        'housenumber': housenumber,
                        'postal_code': postal_code,
                        'city': city,
                        'phonenumber': phonenumber

                    },
                    success: function(response) {
                        $("#addedit_address_modal").modal("hide");

                        filluser_add();
                    }
                });
            }
        }
    }

    function selected_useraddress_delete() {
        swal({
                title: "Are you sure?",
                text: "Once deleted, You won't be able to revert this!!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/TatvaSoft/?controller=Helperland&function=delete_selected_useraddress",
                        data: {
                            "selectedaddid": selectedaddid,
                        },
                        success: function(response) {
                            swal({
                                position: 'center',
                                icon: 'success',
                                text: 'address deleted successfully.',
                                buttons: false,
                                timer: 2000,
                            })
                            filluser_add();
                        }
                    });
                } else {
                    swal({
                        position: 'center',
                        icon: 'error',
                        text: 'address deletion has been cancelled.',
                        buttons: false,
                        timer: 2000,
                    })
                    filluser_add();
                }
            });
    }

});