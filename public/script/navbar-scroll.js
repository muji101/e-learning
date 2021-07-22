$(function () {
    $(document).scroll(function (){
        var $nav = $(".navbar-scroll");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    });
});