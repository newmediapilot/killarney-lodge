/**
 * killarney-lodge js
 **/

/**
 * cabins map
 */
(function ($) {
    /**
     * sources
     */
    var root = "/wp-content/themes/killarney-lodge/res/cabin-map/";
    var images = [
        {panel: "1-Shoreline", button: "image1-shoreline"},
        {panel: "2-MainLake", button: "image2-mainlake"},
        {panel: "3-PrimeLake", button: "image3-prime-lake"},
        {panel: "4-Duplex", button: "image4-duplex"},
        {panel: "5-TwoBedroom", button: "image5-two-bedroom"},
        {panel: "6-Crowe", button: "image6-crowe-cottage"}
    ];
    /**
     * setup master image
     */
    var holder = $('.kl-cabins--image');
    var map = $('<img>');

    /**
     * click action
     */
    function setImage(index) {
        var image = images[index];
        map.attr(
            'src',
            [
                root,
                image.panel,
                '.jpg'
            ].join('')
        );
    }

    /**
     * create selectors
     */
    for (var i = 0; i < images.length; i++) {
        var container = $('.kl-cabins--selectors');
        var source = [
            root,
            images[i].button,
            '.jpg'
        ].join('');
        var image = $('<img>');
        image.attr('src', source);
        (function (index) {
            image.bind('click mouseover', (function () {
                setImage(index)
            }));
        })(i);
        var preload = new Image();
        preload.src = source;
        container.append(image);
    }
    /**
     * setup holder
     */
    setImage(0);
    holder.append(map);

})(jQuery);

/**
 * end killarney-lodge js
 **/

console.log('init main.js');