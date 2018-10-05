$(document).ready(function () {

    // Scroll Top
    $('#linktop').click(function () {
        $("body").animate({ scrollTop: 0 }, '500');
    });

    //top an va hien
    $(window).scroll(showDiv);
    function showDiv() {
        if ($(window).scrollTop() > 300) {
            $('#linktop').fadeIn('slow');
        }
        else {
            $('#linktop').fadeOut('slow');
        }
    }
    //top an va hien


    //nut blog
    $("#blog_top").mouseenter(function () {
        $("#blog_top").animate(
            { top: '0px' },
            300,
            function () {
                $("#blog_top").animate(
                    { top: '-5px' },
                    200
                );
            });
    });


    $("#blog_top").mouseleave(function () {
        $("#blog_top").animate({
            top: '-5px'
        }, 200);
    });
    //end nut blog
    //nut bookonline
    $("#Setmore_button_iframe").mouseenter(function () {
        $("#Setmore_button_iframe").animate(
            { top: '0px' },
            300,
            function () {
                $("#Setmore_button_iframe").animate(
                    { top: '-5px' },
                    200
                );
            });
    });


    $("#Setmore_button_iframe").mouseleave(function () {
        $("#Setmore_button_iframe").animate({
            top: '-5px'
        }, 200);
    });
    //end nut bookonline


    //chay menutrong mobile   
    var playmenu = "1";
    $(".menuimg").click(function () {
        if (playmenu == "1") {
            Menu_mlick1();
        }
        else {
            Menu_mlick2();
        }
    });
    function Menu_mlick1() {
        $(".menu_m").stop(true, true).animate({ height: "650px" }, 400);
        playmenu = "0";
    }
    function Menu_mlick2() {
        $(".menu_m").stop(true, true).animate({ height: "40px" }, 400);
        playmenu = "1";
    }



    //Animation for menu
    $(".menubutton").hover(function () {
        var sID;
        sID = $(this).attr("id").replace("menubutton", "");
        $("#icon" + sID).toggleClass("hvr-buzz-out-run");
    });
    //Animation for menu


    //Animation for menu
    $("#bottle_nails").hover(function () {
        $("#bottle_nails1").toggleClass("hvr-wobble-bottom-run");
        $("#bottle_nails2").toggleClass("hvr-wobble-bottom-run2");
    });
    //Animation for menu

    var iRightHover = 0;
    //Click on home animation
    $(".homeservices_l").click(function () {
        document.location.href = "services";
    });
    $(".homeservices_r").click(function () {
        document.location.href = "services#sides";
    });
    $(".homeservices_r").mouseover(function () {
        $("#homebeautybar1").fadeOut(300);
        $("#homebeautybar2").fadeIn(500);
    });
    $(".homeservices_r").mouseleave(function () {
        $("#homebeautybar2").fadeOut(300);
        $("#homebeautybar1").fadeIn(500);
    });
    //Click on home animation

    //Contact Form
    $("#bSend").click(function () {
        $("#bSend").fadeOut(50);
        $("#formwait").fadeIn(20);

        //Check form
        var sNotify = "";

        //Name
        if ($("#txtName").val() == "") {
            sNotify += "* Please input the first name<br/>";
        }

        //Email
        if ($("#txtEmail").val() == "") {
            sNotify += "* Please input the Email<br/>";
        }
        else {
            if (!checkEmail($("#txtEmail").val())) {
                sNotify += "*Invalid Email<br/>";
            }
        }

        //Phone
        if ($("#txtPhone").val() == "") {
            sNotify += "* Please input your phone number<br/>";
        }
        else {
            if (!checkPhone($("#txtPhone").val())) {
                sNotify += "*Invalid Phone Number<br/>";
            }
        }

        //Content
        //Name
        if ($("#txtContent").val() == "") {
            sNotify += "* Please input the message<br/>";
        }

        if (sNotify != "") {
            $("#formnotifycontent").html(sNotify);
            $("#formnotify").fadeIn(50);
            $("#bSend").fadeIn(50);
            $("#formwait").fadeOut(20);
        }
        else {
            var sName = $("#txtName").val();
            var sEmail = $("#txtEmail").val();
            var sPhone = $("#txtPhone").val();
            var sContent = $("#txtContent").val();

            $.ajax(
            {
                type: "POST",
                url: "process.aspx/contactus",
                data: "{'sName':'" + sName + "','sEmail':'" + sEmail + "','sPhone':'" + sPhone + "','sContent':'" + sContent + "'}",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                async: "true",
                cache: "false",

                success: function (msg) {
                    if (msg.d == "0") {
                        $("#formnotifycontent").html("Your message has been sent. Thank you!");
                        $("#formnotify").fadeIn(50);
                        $("#txtName").val("");
                        $("#txtEmail").val("");
                        $("#txtPhone").val("");
                        $("#txtContent").val("");
                    }
                    $("#formwait").fadeOut(20);
                    $("#formsubmit").fadeIn(50);
                },

                Error: function (x, e) {
                    $("#formnotifycontent").html("Some Error! Please try again later");
                    $("#formnotify").fadeIn(50);
                }
            });
        }
    });

    $("#formnotifyok").click(function () {
        $("#formnotifycontent").html("");
        $("#formnotify").fadeOut(50);
    });

    function checkEmail(email) {
        var filter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email)) {
            return false;
        }
        else {
            return true;
        }
    }

    function checkPhone(email) {
        var filter = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
        if (!filter.test(email)) {
            return false;
        }
        else {
            return true;
        }
    }
    //Contact Form

});
function myNavFunc() {
    // If it's an iPhone..
    var p = navigator.platform;
    if (p === 'iPad' || p === 'iPhone' || p === 'iPod') {
        window.open("http://maps.apple.com/?address=41,Maiden+Lane,Newark,NJ,07102");
    }
    else {
        window.open("http://maps.google.com/?q=41,Maiden+Lane,Newark,NJ,07102");
    }
}  