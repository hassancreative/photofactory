$(document).ready(function() {
    $('#contactForm').validate({
        
        rules: {
            name: {
                minlength: 6,
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true
            },
            subject: {
                required: true
            }
        },
        highlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function(form) {
            
            $("#result").html('');
            $("#contactForm input[type='submit']").val("Processing...");
            $("#contactForm input[type='submit']").prop('disabled', true);
            var values = $(form).serializeArray();
            $.ajax({
                url: "./includes/inc/contact.php",
                type: "POST",
                data: values,
                success: function(data) {
                    $('#form-hide').hide();
                    $("#result").html('<h1 style="color:black;text-align:center;">Thank you.</h1><h2 style="color:black;text-align:center;">You should hear from us within the next 24 hours.</h2>');
                },
                error: function() {
                    $("#result").html('<h2 class="text-danger">There is error while submit</h2>');
                }
            });
        }
    });
    $('#popupForm').validate({
        rules: {
            name: {
                minlength: 6,
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true
            }
        },
        highlight: function(element, errorClass, validClass) {
            console.log(element)
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function(form) {
            $("#popup-result-header").html('');
            $("#popupForm button[type='submit']").val("Processing...");
            $("#popupForm button[type='submit']").prop('disabled', true);
            var values = $(form).serializeArray();
            $.ajax({
                url: "./includes/inc/discount.php",
                type: "POST",
                data: values,
                success: function(data) {
                    $('#popup-form-hide-header').hide();
                    $("#popup-result-header").html('<h1 style="color:black;text-align:center;">Thank you.</h1><h2 style="color:black;text-align:center;">You should hear from us within the next 5 minutes.</h2>');
                },
                error: function() {
                    $("#popup-result-header").html('<h2 class="text-danger">There is error while submit</h2>');
                }
            });
        }
    });
});
$('#signupform').validate({
    rules: {
        name: {
            minlength: 6,
            required: true
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true
        }
    },
    highlight: function(element, errorClass, validClass) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorPlacement: function(error, element) {
        if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    },
    submitHandler: function(form) {
      
        $("#signup-result-header").html('');
        $("#signupform button").val("Processing...");
        $("#signupform button").html("Processing...");
        $("#signupform button").prop('disabled', true);
        var values = $(form).serializeArray();
        $.ajax({
            url: "./includes/inc/discount.php",
            type: "POST",
            data: values,
            success: function(data) {
                $('#signupform-hide-header').hide(); 
                $("#signup-result-header").html('<h4 style="color:#fff;text-align:center;">Thank you.</h4><h6 style="color:#fff;text-align:center;">You should hear from us within the next 5 minutes.</h6>');
            },
            error: function() {
                $("#signup-result-header").html('<h2 class="text-danger">There is error while submit</h2>');
            }
        });
    }
}); 

// Reservation Form

$('#reservation').validate({
    rules: {
        name: {
            minlength: 6,
            required: true
        },
        vanue: {
            required: true,
        },
        events: {
            required: true,
        },
        steadycam: {
            required: true,
        },
        prepost: {
            required: true,
        },
        date: {
            required: true,
        },
        photographer: {
            required: true,
        },
        videographer: {
            required: true,
        },
        album: {
            required: true,
        },
        drone: {
            required: true,
        },
        errorLabelContainer: '#error',
    },
    highlight: function(element, errorClass, validClass) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorPlacement: function(error, element) {
        if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    },
    submitHandler: function(form) {
      
        $("#signup-result-header").html('');
        $("#signupform button").val("Processing...");
        $("#signupform button").html("Processing...");
        $("#signupform button").prop('disabled', true);
        var values = $(form).serializeArray();
        $.ajax({
            url: "./includes/inc/reservation.php",
            type: "POST",
            data: values,
            success: function(data) {
                $('#signupform-hide-header').hide(); 
                $("#signup-result-header").html('<h4 style="color:#fff;text-align:center;">Thank you.</h4><h6 style="color:#fff;text-align:center;">You should hear from us within the next 5 minutes.</h6>');
            },
            error: function() {
                $("#signup-result-header").html('<h2 class="text-danger">There is error while submit</h2>');
            }
        });
    }
}); 
  
// $('.single-item').slick();