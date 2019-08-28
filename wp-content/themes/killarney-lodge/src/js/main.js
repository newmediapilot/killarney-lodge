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
 * end killarney-lodge js
 **/

console.log('init main.js');