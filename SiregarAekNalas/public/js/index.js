$(function () {
    $(window).scroll(function () {
        var wintop = $(window).scrollTop();
        if (wintop >= 100) {
            $(".navbar").addClass("black navbar-fixed-top");
        }
        else if (wintop < 100) {
            $(".navbar").removeClass("black navbar-fixed-top", 300);
        }
    });
});