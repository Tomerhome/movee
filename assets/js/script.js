jQuery(document).ready(function () {

    // Маска для телефона
    $(".phone").mask("+7 (999) 999-99-99");

    //Обработка формы
    jQuery('.send-form').click(function () {
        var form = jQuery(this).closest('form');

        if (form.valid()) {
            //Для форма отправлена
            form.css('opacity', '.5');

            var actUrl = form.attr('action');

            jQuery.ajax({
                url: actUrl,
                type: 'post',
                dataType: 'html',
                data: form.serialize(),
                success: function (data) {

                    //Для форма отправлена 
                    form.html(data);
                    //Для форма отправлена 
                    form.css('opacity', '1');
                    //form.find('.status').html('форма отправлена успешно');
                    //$('#myModal').modal('show') // для бутстрапа
                },
                error: function () {
                    form.find('.status').html('серверная ошибка');
                }
            });
        }
    });


});



jQuery(document).ready(function () {
    // FORMS
    jQuery('form button').click(function () {
        var form = jQuery(this).closest('form');

        if (form.valid()) {
            form.css('opacity', '.5');
            var actUrl = form.attr('action');

            jQuery.ajax({
                url: actUrl,
                type: 'post',
                dataType: 'html',
                data: form.serialize(),
                success: function (data) {
                    form.html(data);
                    form.css('opacity', '1');
                },
                error: function () {}
            });
        }
    });


    // скрипт табов //
    $('ul.tabs__caption').on('click', 'li:not(.active)', function () {
        $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
    });
    // скрипт табов //



    jQuery(".m1").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".sec6").offset().top
        }, 400);
    });


    var swiper = new Swiper('.truck-slider', {
        observer: true,
        observeParents: true,

        navigation: {
            nextEl: '.truck-next',
            prevEl: '.truck-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    });



    $('#burger-menu').click(function () {
        $(this).toggleClass('active');
        $('header .container').toggleClass('active');
    })

});


$(document).ready(function() {

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});