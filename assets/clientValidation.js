$(document).ready(function(){
    $("#registerView").validate({
        rules:
        {
            full_name:
            {   
                required: true,
                rangelength: [2,50],
            },
            email:
            {
                required: true,
                email: true,
                rangelength: [12,100]
            },
            // password:
            // {
            //     required: true,
            //     rangelength: [6,12]
            // },
            confirmPassword:
            {
                required: true,
                rangelength: [6,12],
                equalTo : "#password"
            },
        },

        messages:
        {
            full_name:
            {
                required: "Please Enter Your Full Name.",
                rangelength: "Full Name Must Required minimum 2 and maximum 50 Characters.",
            },

            email:
            {
                required: "Please Enter Your Email Address.",
                email: "Please Enter Valid Email Address.", 
                rangelength: "Valid Length for Email is between 12 to 50.",
            },

            // password:
            // {
            //     required: "Please Enter Password.",
            //     rangelength: "Password Must be Required minimum 6.",

            // }
        },
        
        errorPlacement: function(label, element) {
            label.addClass('arrow');
            label.insertAfter(element);
        },
        wrapper: 'span'
    });

    //Login page validation
    $("#loginPage").validate({
        rules:
        {
            email:
            {
                required: true,
                email: true,
                rangelength: [12,100]
            },
            password:
            {
                required: true,
                rangelength: [8,12]
            },
        },
        errorPlacement: function(label, element) {
            label.addClass('arrow');
            label.insertAfter(element);
        },
        wrapper: 'span'
    });

});