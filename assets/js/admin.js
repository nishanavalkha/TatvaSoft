$(document).ready(function() {
    adminservicerequest();
    usermanagement();
    fill_option("username", 2, 1);
    fill_option("customers", 2);
    fill_option("sps", 1);

    function adminservicerequest() {
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=adminservicerequest",

            success: function(response) {
                $(".adminservicerequest").html(response);
                $('.admino').DataTable({
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

    function usermanagement() {
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=usermanagement",

            success: function(response) {
                $(".adminservicerequest1").html(response);
                $('.usero').DataTable({
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
                $(".letactive").click(function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: 'Are you sure?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Active'
                    }).then((result) => {
                        if (result.isConfirmed) {

                            $.ajax({
                                type: "POST",
                                url: "http://localhost/TatvaSoft/?controller=Helperland&function=activeuser",
                                data: { "userid": this.id },
                                success: function(response) {
                                    // $('.loading').addClass("d-none");
                                    usermanagement();
                                    adminservicerequest();
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Activated',
                                        text: 'Activated successfully.',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })

                                }
                            });
                        }
                    })
                });
            }
        });
    }

    $(document).on('click', '.letactive', function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Active'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    type: "POST",
                    url: "http://localhost/TatvaSoft/?controller=Helperland&function=activeuser",
                    data: { "userid": this.id },
                    success: function(response) {
                        // $('.loading').addClass("d-none");
                        usermanagement();
                        adminservicerequest();
                        Swal.fire({
                            icon: 'success',
                            title: 'Activated',
                            text: 'Activated successfully.',
                            showConfirmButton: false,
                            timer: 1500
                        })

                    }
                });
            }
        })


    });
    $(document).on('click', '.letdeactive', function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'DeActive'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    type: "POST",
                    url: "http://localhost/TatvaSoft/?controller=Helperland&function=deactiveuser",
                    data: { "userid": this.id },
                    success: function(response) {
                        // $('.loading').addClass("d-none");
                        usermanagement();
                        adminservicerequest();
                        Swal.fire({
                            icon: 'success',
                            title: 'DeActivated',
                            text: 'DeActivated successfully.',
                            showConfirmButton: false,
                            timer: 1500
                        })

                    }
                });
            }
        })
    });

    $(document).on('click', '.letapprove', function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Approve'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    type: "POST",
                    url: "http://localhost/TatvaSoft/?controller=Helperland&function=approveuser",
                    data: { "userid": this.id },
                    success: function(response) {
                        // $('.loading').addClass("d-none");
                        usermanagement();
                        adminservicerequest();
                        Swal.fire({
                            icon: 'success',
                            title: 'Approved',
                            text: 'Approved successfully.',
                            showConfirmButton: false,
                            timer: 1500
                        })

                    }
                });
            }
        })
    });
    $(document).on('click', '.cancelreq', function(e) {
        e.preventDefault();
        // $('.loading').removeClass("d-none");
        Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Cancel it'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    type: "POST",
                    url: "http://localhost/TatvaSoft/?controller=Helperland&function=cancelfromadmin",
                    data: { "reqid": this.id },
                    success: function(response) {
                        // $('.loading').addClass("d-none");
                        adminservicerequest();
                        Swal.fire({
                            icon: 'success',
                            text: 'Request Cancelled  successfully.',
                            showConfirmButton: false,
                            timer: 1500
                        })

                    }
                });
            }
        })
    });

    $(document).on('click', '.editreschedule', function(e) {
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=fill_reschedule_servicerequest_detail",

            success: function(response) {
                // $(".fill_selected_service_request_data").html(response);
                $(".edit1").html(response);
            }
        });
    });

    function fill_option(classname, typeid1, typeid2 = "") {
        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=fill_option",
            data: {
                'typeid1': typeid1,
                'typeid2': typeid2
            },
            success: function(response) {
                $("." + classname).append(response);
                $("." + classname).select2();
            }
        });
    }
    $(".usertypeuser").select2();
    $(".status").select2();
    $(".requestformreset").click(function(e) {
        e.preventDefault();
        $(".postalcodeservierequest").val("");
        $(".serviceidservicereuqest").val("");
        $(".customers").val("1").change();
        $(".sps").val("1").change();
        $(".status").val("0").change();
        $(".fromdateservicereuqest").val("");
        $(".todateservicerequest").val("");
        adminservicerequest();
    });
    $(".userformreset").click(function(e) {
        e.preventDefault();
        $(".username").val("0").change();
        $(".usertypeuser").val("0").change();
        $(".mobileuser").val("");
        $(".postalcodeuser").val("");
        $(".emailuser").val("");
        $(".fromdateuser").val("");
        $(".todateuser").val("");
        usermanagement();
    });

    $(".userformsearch").click(function(e) {
        e.preventDefault();
        var username = $(".username").val();
        var usertype = $(".usertypeuser").val();
        var mobile = $(".mobileuser").val();
        var postalcode = $(".postalcodeuser").val();
        var email = $(".emailuser").val();
        var fromdate = $(".fromdateuser").val();
        var todate = $(".todateuser").val();

        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=userfilter",
            data: {
                'username': username,
                'usertype': usertype,
                'mobile': mobile,
                'postalcode': postalcode,
                'fromdate': fromdate,
                'todate': todate
            },
            success: function(response) {
                $(".adminservicerequest1").html(response);
                $('.isro').DataTable({
                    paging: true,
                    "pagingType": "full_numbers",
                    // bFilter: false,
                    ordering: true,
                    searching: false,
                    info: false,
                    "columnDefs": [
                        { "orderable": false, "targets": 1 },
                        { "orderable": false, "targets": 2 },
                        { "orderable": false, "targets": 4 },
                        { "orderable": false, "targets": 7 }
                    ],
                    "oLanguage": {
                        "sInfo": "Total Records: TOTAL"
                    },
                    "dom": '<"top">rt<"bottom"lip><"clear">',
                    responsive: true,
                    "order": []
                });
            }
        });
    });
    $(".requestformsearch").click(function(e) {
        e.preventDefault();
        var serviceid = $(".serviceidservicereuqest").val();
        var postalcode = $(".postalcodeservierequest").val();
        var customer = $(".customers").val();
        var sp = $(".sps").val();
        var status = $(".status").val();
        var fromdate = $(".fromdateservicereuqest").val();
        var todate = $(".todateservicerequest").val();

        $.ajax({
            type: "POST",
            url: "http://localhost/TatvaSoft/?controller=Helperland&function=requestfilter",
            data: {
                'serviceid': serviceid,
                'postalcode': postalcode,
                'customer': customer,
                'sp': sp,
                'status': status,
                'fromdate': fromdate,
                'todate': todate
            },
            success: function(response) {
                $(".adminservicerequest").html(response);
                $('.admino').DataTable({
                    paging: true,
                    "pagingType": "full_numbers",
                    // bFilter: false,
                    ordering: true,
                    searching: false,
                    info: false,
                    "columnDefs": [
                        { "orderable": false, "targets": 1 },
                        { "orderable": false, "targets": 2 },
                        { "orderable": false, "targets": 4 },
                        { "orderable": false, "targets": 7 }
                    ],
                    "oLanguage": {
                        "sInfo": "Total Records: TOTAL"
                    },
                    "dom": '<"top">rt<"bottom"lip><"clear">',
                    responsive: true,
                    "order": []
                });
            }
        });
    });

});