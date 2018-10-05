$(document).ready(function () {
    $("#txtPhone").mask("999-999-9999");
    $("#datepicker").mask("99-99", { placeholder: "MM-DD" });

    $("#bSubmit").click(function () {
        fSignIn();
    });

    $("#formnotifyoksignup").click(function () {
        $("#formnotifycontentsignup").html("");
        $("#formnotifysignup").fadeOut(50);
    });

    function fSignIn() {
        fShow_img_loader();
        $("#bSubmit").fadeOut(10);
        $("#waitdiv").fadeIn(10);
        var sErr = "";
        var sID = $("#divSerial").html();
        var sContent = $("#restrictions").html();
        var sExDay = $("#divExpiredDate").html();
        var sBackGround = $("#divBackGround").html();
        var sTitle = $("#title_signup").html();

        var sFirstName = $("#txtFirstName").val();
        var sLastName = $("#txtLastName").val();
        var sEmail = $("#txtEmail").val();
        var sPhone = $("#txtPhone").val();
        var sBirthDate = $("#datepicker").val();

        if (sFirstName == "") {
            sErr += "+ Please enter your First Name";
        }

        if (sLastName == "") {
            if (sErr != "") {
                sErr += "<br>";
            }
            sErr += "+ Please enter your Last Name";
        }

        if (sPhone == "") {
            if (sErr != "") {
                sErr += "<br>";
            }
            sErr += "+ Please enter your Phone";
        }

        if (sEmail == "") {
            if (sErr != "") {
                sErr += "<br>";
            }
            sErr += "+ Please enter your Email";
        } else {
            if (!validateEmail(sEmail)) {
                if (sErr != "") {
                    sErr += "<br>";
                }
                sErr += "+ Invalid Email";
            }
        }

        if (sBirthDate == "") {
            sErr += "<br>";
            sErr += "+ Please enter your BirthDate";
        } else {
            if (validateDate(sBirthDate) == 1) {
                if (sErr != "") {
                    sErr += "<br>";
                }
                sErr += "+ Invalid Birthdate";
            }
        }

        if (sErr != "") {
            fHide_img_loader();
            $("#bSubmit").fadeIn(10);
            $("#formnotifycontentsignup").html(sErr);
            $("#formnotifysignup").fadeIn(10);
        } else {
            if (sID != "") {
                $.ajax({
                    type: "POST",
                    url: "dealprocess.aspx/sSignUp",
                    data: "{'sID':'" + sID + "','sTitle':'" + sTitle + "','sContent':'" + sContent + "','sExDay':'" + sExDay + "','sBackGround':'" + sBackGround + "','sFirstName':'" + sFirstName + "','sLastName':'" + sLastName + "','sEmail':'" + sEmail + "','sPhone':'" + sPhone + "','sBirthDate':'" + sBirthDate + "'}",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    async: "true",
                    cache: "false",

                    success: function success(msg) {
                        var sCoSignDeal = msg.d["sCoSignDeal"];

                        if (sCoSignDeal == "0") {
                            fHide_img_loader();
                            $("#formnotifycontentsignup").html("Your information has been submitted. You will receive this deal soon. Thank You!");
                            $("#formnotifysignup").fadeIn(50);
                            $("#bSubmit").fadeIn(10);
                            fClear();
                        } else {
                            fHide_img_loader();
                            $("#formnotifycontentsignup").html("This email or phone number has already been used. Please try again.");
                            $("#formnotifysignup").fadeIn(50);
                            $("#bSubmit").fadeIn(10);
                        }
                    },

                    Error: function Error(x, e) {
                        $("#formnotifycontentsignup").html("Some Error! Please try again later");
                        $("#formnotifysignup").fadeIn(50);
                    }
                });
            } else {
                $.ajax({
                    type: "POST",
                    url: "dealprocess.aspx/sSign",
                    data: "{'sFirstName':'" + sFirstName + "','sLastName':'" + sLastName + "','sEmail':'" + sEmail + "','sPhone':'" + sPhone + "','sBirthDate':'" + sBirthDate + "'}",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    async: "true",
                    cache: "false",

                    success: function success(msg) {
                        if (msg.d == "0") {
                            fHide_img_loader();
                            $("#formnotifycontentsignup").html("Your information has been submitted. You will receive this deal soon. Thank You!");
                            $("#formnotifysignup").fadeIn(50);
                            $("#bSubmit").fadeIn(10);
                            fClear();
                        } else {
                            fHide_img_loader();
                            $("#formnotifycontentsignup").html("This email or phone number has already been used. Please try again.");
                            $("#formnotifysignup").fadeIn(50);
                            $("#bSubmit").fadeIn(10);
                        }
                    },

                    Error: function Error(x, e) {
                        $("#formnotifycontentsignup").html("Some Error! Please try again later");
                        $("#formnotifysignup").fadeIn(50);
                    }
                });
            }
        }
    }

    //Ham check Email
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    //Ham check Date
    function validateDate(date) {
        var iErr = 0;
        var cDate = date.split("-");
        if (parseInt(cDate[0]) > 12 || parseInt(cDate[1]) > 31) {
            iErr = 1;
        }
        return iErr;
    }

    function fClear() {
        $("#txtFirstName").val("");
        $("#txtLastName").val("");
        $("#txtEmail").val("");
        $("#txtPhone").val("");
        $("#txtFirstName").val("");
        $("#datepicker").val("");
    }

    //Hàm loader img
    function fShow_img_loader() {
        $("#loadspinner").fadeIn("slow");
    }

    function fHide_img_loader() {
        $("#loadspinner").fadeOut("slow");
    }
});