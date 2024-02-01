 $(document).ready(function(){
        $("#contact_slider").validate({
            rules: {
                name_s: {
                    required: true
                },
                email_s: {
                    required: true,
                    email: true
                },
                phone_s: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number: true
                },
                select_s:{
                    required:true
                },
                message_s:{
                    required:true
                }
                
            },
            messages: {
                name_s: {
                    required: "Please enter Your Name"
                },
                email_s: {
                    required: "Please enter a Valid Email",
                    email: "Please enter a Valid Email"
                },
                phone_s: {
                    required: "Please enter a Valid Mobile Number",
                    minlength: "Mobile Number Must be 10 Digit Only",
                    maxlength: "Mobile Number Must be 10 Digit Only",
                    number: "Kindly Enter Numbers Only."
                },
                select_s:{
                    required:"please Select Course"
                },
                message_s:{
                    required:"Please text message"
                },
                
            },
            errorPlacement: function(label, element) {
                label.addClass('mt-2 text-danger');
                if (element.parent().hasClass('input-group')) {
                    label.insertAfter(element.parent());
                } 
                else if (element.is('select')) {
           label.insertAfter(element);
                    }  else {
           label.insertAfter(element);
                    }
            },
            highlight: function(element, errorClass) {
                $(element).parent().addClass('has-danger')
                $(element).addClass('form-control-danger')
            },
            unhighlight: function(element) {
                $(element).parent().removeClass('has-danger')
                $(element).addClass('form-control-danger')
            },
            success: function(label, element) {
                $(element).removeClass('text-danger');
            },
            submitHandler: function() {
        
                $.ajax({
           url: 'gmail.php', 
           type: 'POST',
           dataType: 'json', 
           data: $("#contact_slider").serialize()
                    }) // serialize form data
        
                    .done(function(data) {
           if(data.success==true){
               alert('message sent');
               return false;
           }
           else{
               alert('message no success');
               return false;
           }
           
                    })
                    .fail(function(data){
           return false;
                    
                    })
        
            }
        });
        $("#contact_index").validate({
            rules: {
                name_i: {
                    required: true
                },
                email_i: {
                    required: true,
                    email: true
                },
                phone_i: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number: true
                },
                course_i:{
                    required:true
                },
                state_i:{
                    required:true
                },
                 country_i:{
                    required:true
                },
                 message_i:{
                    required:true
                }
        
                
            },
            messages: {
                name_i: {
                    required: "Please enter Your Name"
                },
                email_i: {
                    required: "Please enter a Valid Email",
                    email: "Please enter a Valid Email"
                },
                phone_i: {
                    required: "Please enter a Valid Mobile Number",
                    minlength: "Mobile Number Must be 10 Digit Only",
                    maxlength: "Mobile Number Must be 10 Digit Only",
                    number: "Kindly Enter Numbers Only."
                },
                course_i:{
                    required:"please text Course"
                },
                state_i:{
                    required:"Please text state"
                },
                country_i:{
                    required:"Please text Country"
                },
                message_i:{
                    required:"Please text message"
                }
                
            },
            errorPlacement: function(label, element) {
                label.addClass('mt-2 text-danger');
                if (element.parent().hasClass('input-group')) {
                    label.insertAfter(element.parent());
                } 
                else if (element.is('select')) {
           label.insertAfter(element);
                    }  else {
           label.insertAfter(element);
                    }
            },
            highlight: function(element, errorClass) {
                $(element).parent().addClass('has-danger')
                $(element).addClass('form-control-danger')
            },
            unhighlight: function(element) {
                $(element).parent().removeClass('has-danger')
                $(element).addClass('form-control-danger')
            },
            success: function(label, element) {
                $(element).removeClass('text-danger');
            },
            submitHandler: function() {
        
                $.ajax({
           url: 'gmail.php', 
           type: 'POST',
           dataType: 'json', 
           data: $("#contact_index").serialize()
                    }) // serialize form data
        
                    .done(function(data) {
           if(data.success==true){
               alert('message sent');
               return false;
           }
           else{
               alert('message no success');
               return false;
           }
           
                    })
                    .fail(function(data){
           return false;
                    
                    })
        
            }
        });
        $("#contact_mobile").validate({
            rules: {
                name_m: {
                    required: true
                },
                email_m: {
                    required: true,
                    email: true
                },
                number_m: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number: true
                },
                course_m:{
                    required:true
                },
                state_m:{
                    required:true
                },
                 country_m:{
                    required:true
                },
                 message_m:{
                    required:true
                }
        
                
            },
            messages: {
                name_m: {
                    required: "Please enter Your Name"
                },
                email_m: {
                    required: "Please enter a Valid Email",
                    email: "Please enter a Valid Email"
                },
                number_m: {
                    required: "Please enter a Valid Mobile Number",
                    minlength: "Mobile Number Must be 10 Digit Only",
                    maxlength: "Mobile Number Must be 10 Digit Only",
                    number: "Kindly Enter Numbers Only."
                },
                course_m:{
                    required:"please text Course"
                },
                state_m:{
                    required:"Please text state"
                },
                country_m:{
                    required:"Please text Country"
                },
                message_m:{
                    required:"Please text message"
                }
                
            },
            errorPlacement: function(label, element) {
                label.addClass('mt-2 text-danger');
                if (element.parent().hasClass('input-group')) {
                    label.insertAfter(element.parent());
                } 
                else if (element.is('select')) {
           label.insertAfter(element);
                    }  else {
           label.insertAfter(element);
                    }
            },
            highlight: function(element, errorClass) {
                $(element).parent().addClass('has-danger')
                $(element).addClass('form-control-danger')
            },
            unhighlight: function(element) {
                $(element).parent().removeClass('has-danger')
                $(element).addClass('form-control-danger')
            },
            success: function(label, element) {
                $(element).removeClass('text-danger');
            },
            submitHandler: function() {
        
                $.ajax({
           url: 'gmail.php', 
           type: 'POST',
           dataType: 'json', 
           data: $("#contact_mobile").serialize()
                    }) // serialize form data
        
                    .done(function(data) {
           if(data.success==true){
               alert('message sent');
               return false;
           }
           else{
               alert('message no success');
               return false;
           }
           
                    })
                    .fail(function(data){
           return false;
                    
                    })
        
            }
        });
        $("#contact_c").validate({
            rules: {
                name_c: {
                    required: true
                },
                email_c: {
                    required: true,
                    email: true
                },
                phone_c: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number: true
                },
                select_c:{
                    required:true
                },
                message_c:{
                    required:true
                },
                
            },
            messages: {
                name_c: {
                    required: "Please enter Your Name"
                },
                email_c: {
                    required: "Please enter a Valid Email",
                    email: "Please enter a Valid Email"
                },
                phone_c: {
                    required: "Please enter a Valid Mobile Number",
                    minlength: "Mobile Number Must be 10 Digit Only",
                    maxlength: "Mobile Number Must be 10 Digit Only",
                    number: "Kindly Enter Numbers Only."
                },
                select_c:{
                    required:"please Select Course"
                },
                message_c:{
                    required:"Please text message"
                }
                
            },
            errorPlacement: function(label, element) {
                label.addClass('mt-2 text-danger');
                if (element.parent().hasClass('input-group')) {
                    label.insertAfter(element.parent());
                } 
                else if (element.is('select')) {
           label.insertAfter(element);
                    }  else {
           label.insertAfter(element);
                    }
            },
            highlight: function(element, errorClass) {
                $(element).parent().addClass('has-danger')
                $(element).addClass('form-control-danger')
            },
            unhighlight: function(element) {
                $(element).parent().removeClass('has-danger')
                $(element).addClass('form-control-danger')
            },
            success: function(label, element) {
                $(element).removeClass('text-danger');
            },
            submitHandler: function() {
        
                $.ajax({
           url: 'gmail.php', 
           type: 'POST',
           dataType: 'json', 
           data: $("#contact_c").serialize()
                    }) // serialize form data
        
                    .done(function(data) {
           if(data.success==true){
               alert('message sent');
               return false;
           }
           else{
               alert('message no success');
               return false;
           }
           
                    })
                    .fail(function(data){
           return false;
                    
                    })
        
            }
        });
 $('.toggle-menu').click(function(){
    $('.exo-menu').toggleClass('display');
    
 });
 if (statename!="") {
    $('.tab-pane').removeClass('active');
    $('#'+statename+'').addClass('active');
}
$("#contact_modal").validate({
    rules: {
        name_m: {
            required: true
        },
        email_m: {
            required: true,
            email: true
        },
        number_m: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
        },
        select_m:{
            required:true
        },
        message_m:{
            required:true
        },
        
    },
    messages: {
        name_m: {
            required: "Please enter Your Name"
        },
        email_m: {
            required: "Please enter a Valid Email",
            email: "Please enter a Valid Email"
        },
        number_m: {
            required: "Please enter a Valid Mobile Number",
            minlength: "Mobile Number Must be 10 Digit Only",
            maxlength: "Mobile Number Must be 10 Digit Only",
            number: "Kindly Enter Numbers Only."
        },
        select_m:{
            required:"please Select Course"
        },
        message_m:{
            required:"Please text message"
        }
        
    },
    errorPlacement: function(label, element) {
        label.addClass('mt-2 text-danger');
        if (element.parent().hasClass('input-group')) {
            label.insertAfter(element.parent());
        } 
        else if (element.is('select')) {
                label.insertAfter(element);
            }  else {
                label.insertAfter(element);
            }
    },
    highlight: function(element, errorClass) {
        $(element).parent().addClass('has-danger')
        $(element).addClass('form-control-danger')
    },
    unhighlight: function(element) {
        $(element).parent().removeClass('has-danger')
        $(element).addClass('form-control-danger')
    },
    success: function(label, element) {
        $(element).removeClass('text-danger');
    },
    submitHandler: function() {

        $.ajax({
                url: 'gmail.php', 
                type: 'POST',
                dataType: 'json', 
                data: $("#contact_modal").serialize()
            }) // serialize form data

            .done(function(data) {
                if(data.success==true){
                    var message="Mr./Mrs./Dear jajba,you have received a new enquiry from contact page of jajba traing college-Name-"+name+",mobile-"+mobile+",Email-"+email+",subject-"+subject+",message-"+msg+" ";

            var url="http://sms.smsall.in/http-api.php?username=jajba&password=jajba_ewm&senderid=JAJBAA&route=1&number=9155034572&message="+message+"";
           var usermsg="Dear "+name+" Thankyou For Contacting Us.";

           var userurl="http://sms.smsall.in/http-api.php?username=jajba&password=jajba_ewm&senderid=JAJBAA&route=1&number="+mobile+"&message="+usermsg+"";
            alert(userurl);
            window.open(userurl,"theframes");
            alert(url);
             window.open(url,"theframe");
             $('#contact-form').trigger('reset');
                    return false;
                }
                else{
                    alert('message no success');
                    return false;
                }
                
            })
            .fail(function(data){
                return false;
            
            })

    }
});
$("#contact_slider").validate({
    rules: {
        name_s: {
            required: true
        },
        email_s: {
            required: true,
            email: true
        },
        phone_s: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
        },
        select_s:{
            required:true
        },
        message_s:{
            required:true
        }
        
    },
    messages: {
        name_s: {
            required: "Please enter Your Name"
        },
        email_s: {
            required: "Please enter a Valid Email",
            email: "Please enter a Valid Email"
        },
        phone_s: {
            required: "Please enter a Valid Mobile Number",
            minlength: "Mobile Number Must be 10 Digit Only",
            maxlength: "Mobile Number Must be 10 Digit Only",
            number: "Kindly Enter Numbers Only."
        },
        select_s:{
            required:"please Select Course"
        },
        message_s:{
            required:"Please text message"
        },
        
    },
    errorPlacement: function(label, element) {
        label.addClass('mt-2 text-danger');
        if (element.parent().hasClass('input-group')) {
            label.insertAfter(element.parent());
        } 
        else if (element.is('select')) {
                label.insertAfter(element);
            }  else {
                label.insertAfter(element);
            }
    },
    highlight: function(element, errorClass) {
        $(element).parent().addClass('has-danger')
        $(element).addClass('form-control-danger')
    },
    unhighlight: function(element) {
        $(element).parent().removeClass('has-danger')
        $(element).addClass('form-control-danger')
    },
    success: function(label, element) {
        $(element).removeClass('text-danger');
    },
    submitHandler: function() {

        $.ajax({
                url: 'gmail.php', 
                type: 'POST',
                dataType: 'json', 
                data: $("#contact_slider").serialize()
            }) // serialize form data

            .done(function(data) {
                if(data.success==true){
                    alert('message sent');
                    return false;
                }
                else{
                    alert('message no success');
                    return false;
                }
                
            })
            .fail(function(data){
                return false;
            
            })

    }
});
$("#contact_index").validate({
    rules: {
        name_i: {
            required: true
        },
        email_i: {
            required: true,
            email: true
        },
        phone_i: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
        },
        course_i:{
            required:true
        },
        state_i:{
            required:true
        },
         country_i:{
            required:true
        },
         message_i:{
            required:true
        }

        
    },
    messages: {
        name_i: {
            required: "Please enter Your Name"
        },
        email_i: {
            required: "Please enter a Valid Email",
            email: "Please enter a Valid Email"
        },
        phone_i: {
            required: "Please enter a Valid Mobile Number",
            minlength: "Mobile Number Must be 10 Digit Only",
            maxlength: "Mobile Number Must be 10 Digit Only",
            number: "Kindly Enter Numbers Only."
        },
        course_i:{
            required:"please text Course"
        },
        state_i:{
            required:"Please text state"
        },
        country_i:{
            required:"Please text Country"
        },
        message_i:{
            required:"Please text message"
        }
        
    },
    errorPlacement: function(label, element) {
        label.addClass('mt-2 text-danger');
        if (element.parent().hasClass('input-group')) {
            label.insertAfter(element.parent());
        } 
        else if (element.is('select')) {
                label.insertAfter(element);
            }  else {
                label.insertAfter(element);
            }
    },
    highlight: function(element, errorClass) {
        $(element).parent().addClass('has-danger')
        $(element).addClass('form-control-danger')
    },
    unhighlight: function(element) {
        $(element).parent().removeClass('has-danger')
        $(element).addClass('form-control-danger')
    },
    success: function(label, element) {
        $(element).removeClass('text-danger');
    },
    submitHandler: function() {

        $.ajax({
                url: 'gmail.php', 
                type: 'POST',
                dataType: 'json', 
                data: $("#contact_index").serialize()
            }) // serialize form data

            .done(function(data) {
                if(data.success==true){
                    alert('message sent');
                    return false;
                }
                else{
                    alert('message no success');
                    return false;
                }
                
            })
            .fail(function(data){
                return false;
            
            })

    }
});
/*$("#contact_mobile").validate({
    rules: {
        name_m: {
            required: true
        },
        email_m: {
            required: true,
            email: true
        },
        number_m: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
        },
        course_m:{
            required:true
        },
        state_m:{
            required:true
        },
         country_m:{
            required:true
        },
         message_m:{
            required:true
        }

        
    },
    messages: {
        name_m: {
            required: "Please enter Your Name"
        },
        email_m: {
            required: "Please enter a Valid Email",
            email: "Please enter a Valid Email"
        },
        number_m: {
            required: "Please enter a Valid Mobile Number",
            minlength: "Mobile Number Must be 10 Digit Only",
            maxlength: "Mobile Number Must be 10 Digit Only",
            number: "Kindly Enter Numbers Only."
        },
        course_m:{
            required:"please text Course"
        },
        state_m:{
            required:"Please text state"
        },
        country_m:{
            required:"Please text Country"
        },
        message_m:{
            required:"Please text message"
        }
        
    },
    errorPlacement: function(label, element) {
        label.addClass('mt-2 text-danger');
        if (element.parent().hasClass('input-group')) {
            label.insertAfter(element.parent());
        } 
        else if (element.is('select')) {
                label.insertAfter(element);
            }  else {
                label.insertAfter(element);
            }
    },
    highlight: function(element, errorClass) {
        $(element).parent().addClass('has-danger')
        $(element).addClass('form-control-danger')
    },
    unhighlight: function(element) {
        $(element).parent().removeClass('has-danger')
        $(element).addClass('form-control-danger')
    },
    success: function(label, element) {
        $(element).removeClass('text-danger');
    },
    submitHandler: function() {

        $.ajax({
                url: 'gmail.php', 
                type: 'POST',
                dataType: 'json', 
                data: $("#contact_mobile").serialize()
            }) // serialize form data

            .done(function(data) {
                if(data.success==true){
                    alert('message sent');
                    return false;
                }
                else{
                    alert('message no success');
                    return false;
                }
                
            })
            .fail(function(data){
                return false;
            
            })

    }
});*/
$("#contact_c").validate({
    rules: {
        name_c: {
            required: true
        },
        email_c: {
            required: true,
            email: true
        },
        phone_c: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
        },
        select_c:{
            required:true
        },
        message_c:{
            required:true
        },
        
    },
    messages: {
        name_c: {
            required: "Please enter Your Name"
        },
        email_c: {
            required: "Please enter a Valid Email",
            email: "Please enter a Valid Email"
        },
        phone_c: {
            required: "Please enter a Valid Mobile Number",
            minlength: "Mobile Number Must be 10 Digit Only",
            maxlength: "Mobile Number Must be 10 Digit Only",
            number: "Kindly Enter Numbers Only."
        },
        select_c:{
            required:"please Select Course"
        },
        message_c:{
            required:"Please text message"
        }
        
    },
    errorPlacement: function(label, element) {
        label.addClass('mt-2 text-danger');
        if (element.parent().hasClass('input-group')) {
            label.insertAfter(element.parent());
        } 
        else if (element.is('select')) {
                label.insertAfter(element);
            }  else {
                label.insertAfter(element);
            }
    },
    highlight: function(element, errorClass) {
        $(element).parent().addClass('has-danger')
        $(element).addClass('form-control-danger')
    },
    unhighlight: function(element) {
        $(element).parent().removeClass('has-danger')
        $(element).addClass('form-control-danger')
    },
    success: function(label, element) {
        $(element).removeClass('text-danger');
    },
    submitHandler: function() {

        $.ajax({
                url: 'gmail.php', 
                type: 'POST',
                dataType: 'json', 
                data: $("#contact_c").serialize()
            }) // serialize form data

            .done(function(data) {
                if(data.success==true){
                    alert('message sent');
                    return false;
                }
                else{
                    alert('message no success');
                    return false;
                }
                
            })
            .fail(function(data){
                return false;
            
            })

    }
});
});
});