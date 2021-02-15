/*==============================================================*/
// Raque Contact Form  JS
/*==============================================================*/
(function ($) {
    "use strict"; // Start of use strict
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "آیا فرم را به درستی پر کردید؟");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
        }
    });


    function submitForm() {
        // Initiate Variables With Form Content
        var name = $("#name").val();
        var email = $("#email").val();
        var msg_subject = $("#msg_subject").val();
        var phone_number = $("#phone_number").val();
        var message = $("#message").val();
        var token = $('input[name=_token]').val();


        $.ajax({
            type: "POST",
            url: "/contact/store",
            headers: {'X-CSRF-TOKEN': token},
            data: {
                "name": name,
                "email": email,
                "msg_subject": msg_subject,
                "phone_number": phone_number,
                "message": message
            },
            success: function (text) {
                if (text.msg == "success") {
                    formSuccess();
                }else if(text.msg == "fail"){
                    submitMSG(false, "مشکلی در ارسال پیام رخ داد، لطفا مجددا تلاش کنید."+text.data);
                } else {
                    formError();
                    submitMSG(false, text);
                }
            },
            error: function (data) {
                submitMSG(false, "مشکلی در ارسال پیام رخ داد، لطفا مجددا تلاش کنید."+ data.data);
            }
        });
    }

    function formSuccess() {
        $("#contactForm")[0].reset();
        submitMSG(true, "پیام ارسال شد!")
    }

    function formError() {
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg) {
        if (valid) {
            var msgClasses = "h4 tada animated text-success";
        } else {
            var msgClasses = "h4 text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict
