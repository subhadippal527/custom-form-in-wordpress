$(document).ready(function(){

    $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
          var re = new RegExp(regexp);
          return this.optional(element) || re.test(value);
        },
      );

    $('#ContactForm').validate({  

        rules: {
            first_name: { required: true, regex: "^[a-zA-Z]*$",minlength: 3, maxlength: 30, },
            last_name: { required: true, regex: "^[a-zA-Z]*$",minlength: 2, maxlength: 30 },
            contact_no: { required: true, regex: "^[0-9 +][0-9 ?/s?-]*$", minlength: 10, maxlength: 15,},
            email: { required: true, email: true},
            country: { required: true},
            state: { required: true},
            city: { required: true},
        },
        messages: {
            first_name: { required: "Please enter first name.",regex:'Please enter valid first name.' }, 
            last_name: { required: "Please enter last name.",regex:'Please enter valid last name.' },
            email: { required: "Please enter Email.",email:"Please enter valid Email."},
            contact_no: { required: "Please enter Phone no." ,regex:'Please enter valid contact no.'},
        },
        submitHandler: function (form) {
            $.ajax({

                type: "POST",
                url : ajaxurl,
                dataType : 'json',
                data: $(form).serialize(),
                success: function (data) { 
                    $("#ContactForm #submit").prop("disabled", false);

                    if(data.flag == 1)
                    {     
                        $('#ContactForm')[0].reset();
                        $('#ContactForm .alert-message').append(`<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong>${data.msg}</div>`)
                    }
                    else 
                    {    
                        $('#ContactForm .alert-message').append(`<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong>${data.msg}</div>`)
                    }
                },
            
            });
        }
    });

    // GET COUNTRY ID
    $('#country').on('change', function(){
        var getCountryId = $(this).val();
        $.ajax({
            url:ajaxurl,
            type:'GET',
            dataType:'json',
            data:{id:getCountryId, action:'get_state'},
            success:function(response){
                // console.log(response);
                $('#state').empty();
                $('#city').empty();
                $('#state').append(`<option value="" selected>Choose...</option>`);
                $.each(response,function(key,value){
                    $("#state").append(`<option value="${value.id}">${value.state}</option>`);
                });
            }
        });
    });

    $('#state').on('change', function(){
        var getStateId = $(this).val();
        // alert (getStateId);
        $.ajax({
            url:ajaxurl,
            type:'GET',
            dataType:'json',
            data:{id:getStateId, action:'get_city'},
            success:function(response){
                // console.log(response);
                $('#city').empty();
                $('#city').append(`<option value="" selected>Choose...</option>`);
                $.each(response,function(key,value){
                    $("#city").append(`<option value="${value.id}">${value.city}</option>`);
                });
            }
        });
    });

});


