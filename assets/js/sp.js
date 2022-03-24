$(document).ready(function() {
    var includepet = 0;
    newrequest();
    upcoming();
    sprate();
    blockcard();
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


            }
        });
    }

    function upcoming() {
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=upcoming",

            success: function(response) {
                $(".upcoming").html(response);

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

});