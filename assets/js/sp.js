$(document).ready(function() {
    var includepet = 0;
    newrequest();
    upcoming();
    sprate();
    blockcard();
    spdetails();
    var selectedaddressid = "";
    selectedavatar = [];
    // completerequest();
    sphistory();
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


    });
    $(".password").click(function() {
        $(".details").removeClass("active");
        $(".addresses").removeClass("active");
        $(".password").addClass("active");
        $(".details-body").hide();
        $(".address-body").hide();
        $(".password-body").show();
    });

    $("#pet").click(function() {
        if (this.checked == true) {

            includepet = 1;

        } else {

            includepet = 0;

        }
        newrequest();
    });

    function newrequest() {
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=newservice_req",
            data: { "pet": includepet },

            success: function(response) {
                $(".newrequest").html(response);
                // $(".accept-btn").click(function(e) {
                //     e.stopPropagation();

                // });

                $('.newo').DataTable({
                    paging: true,
                    "pagingType": "full_numbers",
                    // bFilter: false,
                    ordering: true,
                    searching: false,
                    info: false,
                    // "columnDefs": [
                    //     { "orderable": false, "targets": 1 },
                    //     { "orderable": false, "targets": 2 },
                    //     { "orderable": false, "targets": 4 },
                    //     { "orderable": false, "targets": 7 }
                    // ],
                    // "oLanguage": {
                    //     "sInfo": "Total Records: TOTAL"
                    // },
                    "dom": '<"top">rt<"bottom"lip><"clear">',
                    responsive: true,
                    "order": []
                });


            }
        });
    }

    function upcoming() {
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=upcoming",

            success: function(response) {
                $(".upcoming").html(response);
                $('#upo').DataTable({
                    paging: true,
                    "pagingType": "full_numbers",
                    // bFilter: false,
                    ordering: true,
                    searching: false,
                    info: false,
                    // "columnDefs": [
                    //     { "orderable": false, "targets": 1 },
                    //     { "orderable": false, "targets": 2 },
                    //     { "orderable": false, "targets": 4 },
                    //     { "orderable": false, "targets": 7 }
                    // ],
                    // "oLanguage": {
                    //     "sInfo": "Total Records: TOTAL"
                    // },
                    "dom": '<"top">rt<"bottom"lip><"clear">',
                    responsive: true,
                    "order": []
                });
                $(".complete-btn").click(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/TatvaSoft/?controller=Helperland&function=completerequest",
                        data: {
                            "reqId": this.id,
                        },

                        success: function(response) {
                            upcoming();
                            newrequest();
                            sphistory();
                            Swal.fire({
                                icon: 'success',
                                text: 'Marked as Completed',
                                showConfirmButton: false,
                                timer: 1000
                            })
                        }
                    });

                });
                $(".cancel-btn").click(function(e) {
                    e.preventDefault();
                    // alert("ji");
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/TatvaSoft/?controller=Helperland&function=cancelrequest",
                        data: {
                            "reqId": this.id,
                        },

                        success: function(response) {
                            // $(".complete-btn").click(function() {

                            //     alert("ji");
                            // });
                            upcoming();
                            newrequest();
                            if (response == 1) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: "Can not cancel"
                                })
                            } else {
                                Swal.fire({
                                    icon: 'success',
                                    title: "Cancelled",
                                    text: 'Request cancelled',
                                    showConfirmButton: 'true',
                                    // timer: 1000
                                })
                            }
                            // alert(reqId);
                        }
                    });

                });

            }
        });
    }


    function sphistory() {
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=sphistory",
            data: "",

            success: function(response) {
                $(".sphistory").html(response);
                $('#sphisto').DataTable({
                    paging: true,
                    "pagingType": "full_numbers",
                    // bFilter: false,
                    ordering: true,
                    searching: false,
                    info: false,
                    // "columnDefs": [
                    //     { "orderable": false, "targets": 1 },
                    //     { "orderable": false, "targets": 2 },
                    //     { "orderable": false, "targets": 4 },
                    //     { "orderable": false, "targets": 7 }
                    // ],
                    // "oLanguage": {
                    //     "sInfo": "Total Records: TOTAL"
                    // },
                    "dom": '<"top">rt<"bottom"lip><"clear">',
                    responsive: true,
                    "order": []
                });


            }
        });
    }

    $(document).on('click', '.accept-btn', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=acceptrequest",
            data: {
                "reqId": this.id
            },

            success: function(response) {
                upcoming();
                sphistory();
                newrequest();
                if (response == 1) {
                    Swal.fire({
                        icon: 'warning',
                        text: "You are already assigned another request At this time "
                    })
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: "Accepted",
                        text: 'The request Assigned to ',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }

            }
        });
        // alert("jiff");
    });

    function sprate() {
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=sprate",
            data: "data",

            success: function(response) {
                $(".sprate").html(response);
                $(".rateyo").rateYo({
                    starWidth: "16px",
                    ratedFill: "#FFD600",
                    readOnly: true,
                });
            }
        });
    }

    function blockcard() {
        /* fill block cards*/
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=blockcard",
            success: function(response) {
                $(".card-customer").html(response);
            }
        });
    }

    $(document).on('click', '.block-button', function() {
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=blockcustomer",
            data: { "userid": this.id, },
            success: function(response) {
                blockcard();

            }
        });

    });
    $(document).on('click', '.unblock-button', function() {
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=unblockcustomer",
            data: { "userid": this.id, },
            success: function(response) {
                blockcard();

            }
        });

    });

    function spdetails() {
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=spdetails",

            success: function(response) {
                $(".sp-details-body").html(response);

                let avatars = document.querySelectorAll(".avatar-image");

                for (let i = 1; i <= avatars.length; i++) {
                    $("#avatar" + i).click(function(e) {
                        for (let j = 1; j <= avatars.length; j++) {
                            if (i == j) {
                                activateAvatar("avatar" + j);
                                selectedavatar = [];
                                selectedavatar.push(j);
                            } else {
                                deactiveAvatar("avatar" + j);
                            }
                        }
                    });
                }

                function activateAvatar(avatarid) {
                    $("#" + avatarid).addClass("active");
                    $("#" + avatarid).css("border", "3px solid #1D7A8C");
                }

                function deactiveAvatar(avatarid) {
                    $("#" + avatarid).removeClass("active");
                    $("#" + avatarid).css("border", "none");
                }
            }
        });
    }

    $(document).on('click', '.sp-details-save', function() {
        // alert("hii");
        selectedaddressid = this.id;
        var spfname = $("input[name='spfname']").val();
        var splname = $("input[name='splname']").val();
        var spmobile = $("input[name='spmobile']").val();
        var spemail = $("input[name='spemail']").val();
        var spdob = $("input[name='spdob']").val();
        var spnationality = $("[name='spnationality'] option:selected").val();
        var splanguage = $("[name='splanguage'] option:selected").val();
        var spgender = document.querySelector('input[name="spgender"]:checked').value;
        var spstreetname = $("input[name='spstreetname']").val();
        var sphousenumber = $("input[name='sphousenumber']").val();
        var sppostalcode = $("input[name='sppostalcode']").val();
        var spcity = $("input[name='spcity']").val();

        // alert(selectedaddressid);

        if (selectedaddressid == "") {
            if (spfname == "" || splname == "" || spmobile == "" || spdob == "" || spnationality == "" || splanguage == "" || spgender == "" || selectedavatar == "" || spstreetname == "" || sphousenumber == "" || sppostalcode == "" || spcity == "") {
                $(".error-line").css("display", "flex");
                $(".sp-error-message").html("Please fill all the details...");
            } else {
                $(".sp-error-message").html("");

                $.ajax({
                    type: "POST",
                    url: "http://localhost/TatvaSoft/?controller=Helperland&function=savedetails",
                    data: {
                        "spfname": spfname,
                        "splname": splname,
                        "spmobile": spmobile,
                        "spemail": spemail,
                        "spdob": spdob,
                        "spnationality": spnationality,
                        "splanguage": splanguage,
                        "spgender": spgender,
                        "selectedavatar": selectedavatar,
                        "spstreetname": spstreetname,
                        "sphousenumber": sphousenumber,
                        "sppostalcode": sppostalcode,
                        "spcity": spcity,
                    },

                    success: function(response) {

                        // $(".temp").html(response);
                        $(".error-line").css("display", "flex");
                        spdetails();
                        Swal.fire({
                            icon: 'success',
                            text: 'Your details updated and address insereted successfully..',
                            showConfirmButton: false,
                            timer: 1000
                        })

                    }
                });
            }




        } else {
            if (spfname == "" || splname == "" || spmobile == "" || spdob == "" || spnationality == "" || splanguage == "" || spgender == "" || selectedavatar == "" || spstreetname == "" || sphousenumber == "" || sppostalcode == "" || spcity == "") {
                $(".error-line").css("display", "flex");
                $(".sp-error-message").html("Please fill all the details...");
            } else {
                $(".sp-error-message").html("");
                // alert("hiii");
                $.ajax({
                    type: "POST",
                    url: "http://localhost/TatvaSoft/?controller=Helperland&function=savedetails",
                    data: {
                        "selectedaddressid": selectedaddressid,
                        "spfname": spfname,
                        "splname": splname,
                        "spmobile": spmobile,
                        "spemail": spemail,
                        "spdob": spdob,
                        "spnationality": spnationality,
                        "splanguage": splanguage,
                        "spgender": spgender,
                        "selectedavatar": selectedavatar,
                        "spstreetname": spstreetname,
                        "sphousenumber": sphousenumber,
                        "sppostalcode": sppostalcode,
                        "spcity": spcity,
                    },

                    success: function(response) {
                        spdetails();
                        // $(".temp").html(response);

                        Swal.fire({
                            icon: 'success',
                            text: 'your details updated successfully.',
                            showConfirmButton: false,
                            timer: 1000
                        })
                    }
                });
            }
        }
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
});