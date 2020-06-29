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

        console.log("scrollRespond Interval");

        if (menuTrigger.prop("checked")) {
            return;// do nothing if menu is open!
        }

        var scrollTop = $(this).scrollTop();
        var isScrollingDown = scrollTop > lastScrollTop;
        var isScrolledTopmost = scrollTop <= scrollTarget.outerHeight();
        var isNotScrolling = scrollTop === lastScrollTop;

        console.log('isScrolledTopmost', isScrolledTopmost, 'isNotScrolling', isNotScrolling, 'isScrollingDown', isScrollingDown);

        /**
         * scrolling down/up
         */
        if (!isNotScrolling) {
            if (isScrollingDown && !isScrolledTopmost) {
                scrollTarget.css({top: 0 - scrollTarget.outerHeight()});
            } else if (isScrolledTopmost) {
                scrollTarget.css({top: 0});
            } else {
                scrollTarget.css({top: 0});
            }
        } else {
            if (isScrolledTopmost) {
                scrollTarget.css({top: 0});
            }
        }

        /**
         * hide menu contents when scrolling
         */
        if (menuTrigger.prop("checked")) {
            menuTrigger.prop("checked", false);
        }

        lastScrollTop = scrollTop;
    };
    setInterval(scrollRespond, 250);
    console.log('scroll ready');
})(jQuery);

/**
 * gallery video functionality
 */
(function ($) {
    if (!document.$post.$post_name === 'gallery-video') {// @see header.php
        return;
    }
    // #modalFeaView
    // #modalFeaView
    // #modalFeaView
    $('#modalFeaView').on('show.bs.modal', function (evt) {
        var video = $(evt.relatedTarget).data('video');
        var player = $('#gallery-video-fea-id')[0];
        player.src = video;
        player.load();
        player.play();
        console.log('play #modalFeaView video...', video);
    }).on('hide.bs.modal', function (evt) {
        var player = $('#gallery-video-fea-id')[0];
        player.pause();
        player.src = '';
        player.load();
    });
    //
    // #modalTopView
    // #modalTopView
    // #modalTopView
    $('#modalTopView').on('show.bs.modal', function (evt) {
        var ratio = 560 / 315;
        var video = $(evt.relatedTarget).data('video');
        var source = "https://www.youtube.com/embed/" + video + '?&autoplay=1';
        $('#gallery-video-youtube-id').attr('src', source)
            .attr('src', source);
        console.log('play #modalTopView video...', source);
    }).on('hide.bs.modal', function (evt) {
        $('#gallery-video-youtube-id').attr('src', '');
    });
    // #modalBotView
    // #modalBotView
    // #modalBotView
    $('#modalBotView').on('show.bs.modal', function (evt) {
        var video = $(evt.relatedTarget).data('video');
        var player = $('#gallery-video-mp4-id')[0];
        player.src = video;
        player.load();
        player.play();
        console.log('play #modalBotView video...', video);
    }).on('hide.bs.modal', function (evt) {
        var player = $('#gallery-video-mp4-id')[0];
        player.pause();
        player.src = '';
        player.load();
    });
    // 1. Find the element matching the query param video=
    // 2. If found target this element
    // 3. Click the element
    // NOTE: This only works if the user clicked on the website from another page
    // Browsers do not allow auto-play without explicit user interaction
    if (document.$queryParams) {
        if (document.$queryParams.video) {
            setTimeout(function () {
                var video = document.$queryParams.video;
                var target = $(`[data-post-title="${document.$queryParams.video}"]`);
                target.click();
            }, 1000);
        }
    }
    console.log('gallery-video functionality ready...');
})(jQuery);

/**
 * end killarney-lodge js
 **/

console.log('init main.js');