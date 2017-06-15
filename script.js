$('document').ready(function()
{
    /* Validarea informatiilor */
    $("#register-form").validate({
        rules:
        {
            firstName: {
                required: true,
                minlength: 3
            },
			phone: {
				required: true,
				minlength: 10
			},
            password: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            cpassword: {
                required: true,
                equalTo: '#password'
            },
            email: {
                required: true,
                email: true
            },
        },
        messages:
        {
            first_name: "Enter a valid name",
			phone: "Phone should be numeric",
            password:{
                required: "Provide a Password",
                minlength: "Password Needs To Be Minimum of 8 Characters"
            },
            email: "Enter a Valid Email",
            cpassword:{
                required: "Retype Your Password",
                equalTo: "Password Mismatch! Retype"
            }
        },
        submitHandler: submitForm
    });
    /* Sfarsitul validarii */

    /* form submit */
    function submitForm()
    {
        var data = $("#register-form").serialize();

        $.ajax({

            type : 'POST',
            url  : 'register.php',
            data : data,
            beforeSend: function()
            {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success :  function(data)
            {
                if(data==1){

                    $("#error").fadeIn(1000, function(){


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp;Register');

                    });

                }
                else if(data=="registered")
                {

                    $("#btn-submit").html('Signing Up');
                    setTimeout('$(".form-signin").fadeOut(500, function(){ $(".form-signin").load("success.php"); }); ',5000);

                }
                else{

                    $("#error").fadeIn(1000, function(){

                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp;Register');

                    });

                }
            }
        });
        return false;
    }
    /* Sfarsit form submit */

});