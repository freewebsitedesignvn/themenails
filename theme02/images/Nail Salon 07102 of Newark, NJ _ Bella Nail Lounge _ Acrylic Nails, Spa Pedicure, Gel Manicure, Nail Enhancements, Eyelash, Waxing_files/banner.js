$(document).ready(function () {
    var Interval;
    Bannerauto();
    function Bannerauto() {
        Interval = setInterval(function () {
            if ($(".bannergroup").is(":hover") == false) {
                BannerNext(23);
            }
        }, 5000);
    }

    //    $("#bnext").click(function () {
    //        BannerNext(6);
    //        clearTimeout(Interval);
    //        Bannerauto();
    //    });

    //    $("#bback").click(function (e) {
    //        BannerBack(6);
    //        clearTimeout(Interval);
    //        Bannerauto();
    //    });


    

    function BannerNext(count) {
        var iNext;
        iNext = $("#flag").html();
        $("#banner" + iNext.toString()).stop(true, true).fadeOut(800);
        if (iNext == count) {
            iNext = "1";
        }
        else {
            iNext = (parseInt(iNext) + 1).toString();
        }
        $("#banner" + iNext.toString()).stop(true, true).fadeIn(600);
        $("#flag").html(iNext.toString());
    }

//    function BannerBack(count) {
//        var iBack;
//        iBack = $("#flag").html();
//        $("#banner" + iBack.toString()).stop(true, true).fadeOut(800);
//        if (iBack == "1") {
//            iBack = count;
//        }
//        else {
//            iBack = (parseInt(iBack) - 1).toString();
//        }
//        $("#banner" + iBack.toString()).stop(true, true).fadeIn(600);
//        $("#flag").html(iBack.toString());
//    }
    
});
