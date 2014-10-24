$('[data-action="dropdown-bubble"]').click(function (e) {
    e.preventDefault();
    e.stopPropagation();


    var isShown, dataTarget;
    dataTarget = $(this).attr("data-target");
    isShown = $(dataTarget).hasClass("dropdown-open");

    var posleft = $(this)[0].getClientRect().left;
    var posbottom = $(this)[0].getClientRect().bottom;
    var clientWidth = $(this)[0].clientWidth;

    

    if (isShown) {
        $(document).find('.dropdown-open').removeClass("dropdown-open");
        $(document).find('.bg-white').removeClass("bg-white");
    } else {
        $(document).find('.dropdown-open').removeClass("dropdown-open");
        $(document).find('.bg-white').removeClass("bg-white");
        $(dataTarget).addClass("dropdown-open");
        $(dataTarget).css({
            "left": (posleft - diff) + "px",
            "top": (posbottom + 8) + "px"
        });
    }


});

$('[data-action="dropdown"]').click(function (e) {
    e.preventDefault();
    e.stopPropagation();



    var isShown, dataTarget;
    dataTarget = $(this).attr("data-target");
    isShown = $(dataTarget).hasClass("dropdown-open");

    var posleft = $(this)[0].getBoundingClientRect().left;
    var posbottom = $(this)[0].getBoundingClientRect().bottom;
    var wrapper = $('.wrapper');

    var diff = ($(window).width() - wrapper.outerWidth() + 40) / 2;

    if (isShown) {
        $(this).removeClass("bg-white");
        $(dataTarget).removeClass('dropdown-open');
    } else {
        $(document).find('.dropdown-open').removeClass("dropdown-open");
        $(document).find('.bg-white').removeClass('bg-white');
        $(this).addClass("bg-white");
        $(dataTarget).addClass("dropdown-open");
        $(dataTarget).css({
            "left": (posleft - diff) + "px",
            "top": (posbottom) + "px"
        });
    }




});

$(document).click(function () {
    $(this).find('.dropdown-open').removeClass('dropdown-open');
    $(this).find('.bg-white').removeClass('bg-white');

    
});