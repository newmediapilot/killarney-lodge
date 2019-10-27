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
})($);

/**
 * track google analytics events
 */
(function ($) {
    var analyticsTargets = [
        {
            title: 'Trip Advisor', call: function () {
                ga('send', 'pageview', '/social_click');
                ga('send', 'event', 'Click_Trip_Advisor', 'button-click');
            }
        },
        {
            title: 'Facebook', call: function () {
                ga('send', 'pageview', '/social_click');
                ga('send', 'event', 'Click_Facebook', 'button-click');
            }
        },
        {
            title: 'Instagram', call: function () {
                ga('send', 'pageview', '/social_click');
                ga('send', 'event', 'Click_Instagram', 'button-click');
            }
        },
        {
            title: 'YouTube', call: function () {
                ga('send', 'pageview', '/social_click');
                ga('send', 'event', 'Click_YouTube', 'button-click');
            }
        },
        {
            title: 'Weather Forecast', call: function () {
                ga('send', 'pageview', '/social_click');
                ga('send', 'event', 'Click_Weather_Forecast', 'button-click');
            }
        },
        {
            title: 'Call Us', call: function () {
                ga('send', 'event', 'Click_Call_Us', 'button-click');
            }
        },
        {
            title: 'Reservations', call: function () {
                ga('send', 'event', 'Make_Reservation', 'button-click');
            }
        },
        {
            title: 'Book Here', call: function () {
                ga('send', 'event', 'Make_Reservation', 'button-click');
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
                    console.log('analyticsTarget', analyticsTarget);
                    analyticsTarget.call();
                    break;
                }
            }
            event.preventDefault();
        });
        console.log('document ready');
    });
})($);

/**
 * end killarney-lodge js
 **/

console.log('init main.js');