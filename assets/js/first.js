// //get password value 
var value = $("#password_reg").val();

$.validator.addMethod("checklower", function(value) {
    return /[a-z]/.test(value);
});
$.validator.addMethod("checkupper", function(value) {
    return /[A-Z]/.test(value);
});
$.validator.addMethod("checkdigit", function(value) {
    return /[0-9]/.test(value);
});
$.validator.addMethod("pwcheck", function(value) {
    return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) && /[a-z]/.test(value) && /\d/.test(value) && /[A-Z]/.test(value);
});

$('#signup-form').validate({
    rules: {
        password: {
            minlength: 6,
            maxlength: 30,
            required: true,
            //   pwcheck: true,
            checklower: true,
            checkupper: true,
            checkdigit: true
        },
        confirmPassword: {
            equalTo: "#password_reg",
        },
    },
    messages: {
        password: {
            pwcheck: "Password is not strong enough",
            checklower: "Need atleast 1 lowercase alphabet",
            checkupper: "Need atleast 1 uppercase alphabet",
            checkdigit: "Need atleast 1 digit"
        }
    },
    highlight: function(element) {
        var id_attr = "#" + $(element).attr("id") + "1";
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        $(id_attr).removeClass('glyphicon-ok').addClass('glyphicon-remove');
        $('.form-group').css('margin-bottom', '5px');
        $('.form').css('padding', '30px 40px');
        $('.tab-group').css('margin', '0 0 25px 0');
        $('.help-block').css('display', '');
    },
    unhighlight: function(element) {
        var id_attr = "#" + $(element).attr("id") + "1";
        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        $(id_attr).removeClass('glyphicon-remove').addClass('glyphicon-ok');
        $('#confirmPassword').attr('disabled', false);
    },
    errorElement: 'span',
    errorClass: 'validate_cus',
    errorPlacement: function(error, element) {
        x = element.length;
        if (element.length) {
            error.insertAfter(element);
        } else {
            error.insertAfter(element);
        }
    }

});