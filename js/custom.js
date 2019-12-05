$("#menu-button").click(function () {
    var $menu = $(this);
    $menu.toggleClass("is-active");
    $menu.toggleClass("white", $menu.hasClass("is-active"));
    $('nav').toggleClass('opened', $menu.hasClass("is-active"));
    $('nav').toggleClass('closed', !$menu.hasClass("is-active"));
    $(document.body).toggleClass('opened');
    if ($menu.hasClass("is-active")) {
        document.ontouchmove = function (e) {
            e.preventDefault();
        }
    } else {
        document.ontouchmove = function (e) {
            return true;
        }
    }
});

$(function () {
    $(document).scroll(function () {
        var $artists = $("#artists");
        var $billeterie = $("#billeterie");
        var $contact = $("#contact");

        $("#menu-button").toggleClass('white', ($(this).scrollTop() > $artists.offset().top &&
                $(this).scrollTop() < $billeterie.offset().top + $artists.height()) ||
            ($(this).scrollTop() > $contact.offset().top &&
                $(this).scrollTop() < $contact.offset().top + $artists.height()));
    });
});

$.fn.toggleInputValue = function () {
    return $(this).each(function () {
        var $input = $(this);
        var $defaultValue = $input.val();

        $input.focus(function () {
            if ($input.val() == $defaultValue) $input.val("");
        }).blur(function () {
            if ($input.val().length == 0) $input.val($defaultValue);
        });
    });
};

$.fn.displayFaqPage = function ($back) {
    return $(this).each(function () {
        var $button = $(this);
        $button.click(function () {
            var pageId = '#' + $button.attr('id').replace('button-', '').replace('back-', '');
            var duration = 180;
            if ($back) {
                $(pageId).hide(duration, function () {
                    $('#page-0').show(duration);
                });
            } else {
                $('#page-0').hide(duration, function () {
                    $(pageId).show(duration).css('display', 'flex');
                });

            }
        });
    });
}

$.fn.slideAnimation = function () {
    return $(this).each(function () {
        var $button = $(this);
        $button.click(function () {
            var $currentAnimation = $('.animation-element.visible');
            $currentAnimation.addClass('hidden');
            $currentAnimation.removeClass('visible');

            if ($button.attr('id') == 'right') {
                var $nextAnimation = $currentAnimation.next();
                if (!$nextAnimation.length) {
                    $nextAnimation = $('.animation-element:first-child')
                }
            } else {
                var $nextAnimation = $currentAnimation.prev();
                if ($nextAnimation.length) {} else {
                    $nextAnimation = $('.animation-element:last-child');
                }
            }

            $nextAnimation.removeClass('hidden');
            $nextAnimation.addClass('visible');
            $('#animations').removeClass($currentAnimation.attr('id'));
            $('#animations').addClass($nextAnimation.attr('id'));


        });
    });
}

$.fn.goTo = function () {
    return $(this).each(function () {
        var $this = $(this);
        $this.click(function () {
            var $sectionId = "#" + $this.attr('id').replace('-link', '');
            $("#menu-button").trigger('click');
            $('html, body').animate({
                scrollTop: $($sectionId).offset().top
            }, 500);
        });
    });
}

$(document).ready(function () {
    $('.animation-nav').slideAnimation();
    $('.faq-link').displayFaqPage(false);
    $('.faq-back').displayFaqPage(true);
    $('input[type=text], textarea').toggleInputValue();
    $('.menu-link').goTo();
})