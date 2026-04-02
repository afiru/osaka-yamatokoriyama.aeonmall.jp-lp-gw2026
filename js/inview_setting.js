(window.onload = function () {
    $('.liGwEvent').addClass('opacity_0_fade_in');
    $('.liGwEvent').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('active');
        } else {}
    });

    $('.txtGwEvent').addClass('opacity_0_fade_in');
    $('.txtGwEvent').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('active');
        } else {}
    });

    $('.btnGwEvent').addClass('opacity_0_fade_in');
    $('.btnGwEvent').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('active');
        } else {}
    });
})();