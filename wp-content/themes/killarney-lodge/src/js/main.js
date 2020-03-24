/**
 * killarney-lodge js
 **/

/**
 * cabins map
 */
(function ($) {
    document.setCabinImage = function (index) {
        var images = $('.kl-cabins--images img');
        $(images).removeClass('kl-cabins--image--show');
        $(images[index]).addClass('kl-cabins--image--show');
    }
})(jQuery);

/**
 * track google analytics events
 */
(function ($) {
    var analyticsTargets = [
        {
            title: 'Trip Advisor', call: function () {
                ga('send', 'pageview', '/social_click');
                ga('send', 'event', 'Click_Trip_Advisor', 'button-click');
                console.log('call Trip Advisor');
            }
        },
        {
            title: 'Facebook', call: function () {
                ga('send', 'pageview', '/social_click');
                ga('send', 'event', 'Click_Facebook', 'button-click');
                console.log('call Facebook');
            }
        },
        {
            title: 'Instagram', call: function () {
                ga('send', 'pageview', '/social_click');
                ga('send', 'event', 'Click_Instagram', 'button-click');
                console.log('call Instagram');
            }
        },
        {
            title: 'YouTube', call: function () {
                ga('send', 'pageview', '/social_click');
                ga('send', 'event', 'Click_YouTube', 'button-click');
                console.log('call YouTube');
            }
        },
        {
            title: 'Weather Forecast', call: function () {
                ga('send', 'pageview', '/social_click');
                ga('send', 'event', 'Click_Weather_Forecast', 'button-click');
                console.log('call Weather Forecast');
            }
        },
        {
            title: 'Call Us', call: function () {
                ga('send', 'pageview', '/call_us');
                ga('send', 'event', 'Click_Call_Us', 'button-click');
                console.log('call Call Us');
            }
        },
        {
            title: 'Reservations', call: function () {
                ga('send', 'pageview', '/make_reservation');
                ga('send', 'event', 'Make_Reservation', 'button-click');
                console.log('call Reservations');
            }
        },
        {
            title: 'Book Here', call: function () {
                ga('send', 'pageview', '/make_reservation');
                ga('send', 'event', 'Make_Reservation', 'button-click');
                console.log('call Book Here');
            }
        },
        {
            title: 'Test Tag', call: function () {
                // JUST A TEST
            }
        }
    ];
    $(document).ready(function () {
        /**
         * call out any missing array items
         */
        for (var j = 0; j < analyticsTargets.length; j++) {
            var title = analyticsTargets[j].title;
            var $title = $('a[title="' + title + '"]');
            var length = $title.length;
            if (0 === length) {
                console.log('warning! analytics tag missing =>', title);
            }
        }
        /**
         * capture click and track based on array
         */
        $('a').on('click', function (event) {
            var $this = $(this);
            var title = $this.attr('title');
            for (var i = 0; i < analyticsTargets.length; i++) {
                var analyticsTarget = analyticsTargets[i];
                if (analyticsTarget.title === title) {
                    analyticsTarget.call();
                    break;
                }
            }
        });
        console.log('document ready');
    });
})(jQuery);

/**
 * menu collapse mobile
 */
(function ($) {
    /**
     * don't run this on wide browsers
     */
    if ($(window).width() > 820) {
        console.log('scroll ready... not mobile - cancelling function');
        return;
    }
    /**
     * vars
     */
    var lastScrollTop = 0;
    var menuTrigger = $('#mobile-trigger');
    var scrollTarget = $('#kl-navbar-collapser');

    var scrollRespond = function (evt) {
        var st = $(this).scrollTop();
        var isDown = st > lastScrollTop;
        var isUppest = st <= scrollTarget.outerHeight();
        /**
         *
         */
        console.log('isDown', isDown, 'isUppest', isUppest);
        if (isDown || isUppest) {
            scrollTarget.css({top: 0 - scrollTarget.outerHeight()});
            /**
             * collapse menu
             */
            if (menuTrigger.prop("checked")) {
                menuTrigger.prop("checked", false);
            }
        } else {
            scrollTarget.css({top: 0});
        }
        lastScrollTop = st;
    };
    $(document).scroll(scrollRespond);
    $(document).on('touchend', scrollRespond);
    console.log('scroll ready');
})(jQuery);

/**
 * end killarney-lodge js
 **/

console.log('init main.js');