try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

require('./greensock');
let lightbox = require('lightbox2');

$(document).ready(function () {
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .not('[data-toggle="pill"]')
        .not('[data-slide="next"]')
        .not('[data-slide="prev"]')
        .click(function(event) {
            // On-page links
            if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    var offset = target.offset().top - 50;
                    $("html, body").animate(
                        {
                            scrollTop: offset
                        },
                        1000,
                        function() {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) {
                                // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            }
                        }
                    );
                }
            }
        });

    if(document.getElementById("promo")) {
        $('#promo').on('hide.bs.modal', function () {
            $("#promo iframe").attr("src", $("#promo iframe").attr("src"));
        });
    }
});

var tl = new TimelineLite();

tl.set(".letters", {
    visibility: "visible",
    stroke: "#ffe700",
    strokeWidth: 1
})
    .from(".voltage", .5, { drawSVG: 0, ease: Expo.easeInOut })
    .from(".modular", .5, { drawSVG: 0, ease: Expo.easeInOut }, "-=1")
    .to("#background", 1, { visibility: "visible" })
    .to(".letters", 0.5, { stroke: "none" }, "-=1");

$('.lightning').click(function() {
    if($(this).prev('.rectangle').is(":hidden")) {
        $(this).popover('show');
        $(this).addClass('active');
        $(this).prev('.rectangle').show();
        $('.lightning').not(this).popover('hide');
        $('.lightning').not(this).removeClass('active');
        $('.rectangle').not($(this).prev('.rectangle')).hide();
    }
    else {
        $(this).popover('hide');
        $(this).removeClass('active');
        $(this).prev('.rectangle').hide();
    }
});