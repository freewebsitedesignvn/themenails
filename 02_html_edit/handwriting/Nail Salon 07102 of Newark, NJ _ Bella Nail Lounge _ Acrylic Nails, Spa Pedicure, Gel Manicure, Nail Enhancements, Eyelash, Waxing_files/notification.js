$(document).ready(function () {
    fLoadNotification();

    /*Load deal*/
    function fLoadNotification() {

        var sID = 0;
        $.ajax(
                {
                    type: "POST",
                    url: "dealprocess.aspx/loadnotification",
                    data: "{'sID':'" + sID + "'}",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    async: "true",
                    cache: "false",
                    success: function (msg) {
                        if (msg.d == "") {
                            $("#notification").css("display", "none");
                        }
                        else {
                            $("#notification").css("display", "block");
                            $("#notification").html(msg.d);
                            var top = $("#notification").outerHeight();
                            $("#Setmore_button_iframe").css('margin-top', '45px');
                            $("#blog_top").css('margin-top', '45px');
                            $(".main").css('margin-top', '45px');
                        }
                    },
                    Error: function (x, e) {
                        alert("Some error occured! Please try again.");
                    }
                });
    }

});

$(window).on('resize', function () {
    var top = $("#notification").outerHeight();
    $("#Setmore_button_iframe").css('margin-top', '45px');
    $("#blog_top").css('margin-top', '45px');
    $(".main").css('margin-top', '45px');
});