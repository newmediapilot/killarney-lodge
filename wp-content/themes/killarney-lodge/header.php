<!-- begin header.php -->

<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <?php include_once(ABSPATH . 'wp-admin/includes/plugin.php'); ?>
    <?PHP wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GTM-KM8M8QH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'GTM-KM8M8QH');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <!-- Facebook pixel tag -->
    <script>!function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '236172690476053');
        fbq('track', 'PageView');</script>
    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=236172690476053&amp;ev=PageView&amp;noscript=1"/>
    </noscript>
    <!-- Facebook pixel tag -->
    <!-- etc -->
    <meta name="y_key" content="69ac917b71c55f44">
    <meta name="google-site-verification" content="so449KYFdOh_OZf8ozeAh8EzRjMk_7TytnqJSflfdSo">
    <meta name="msvalidate.01" content="EAFD37E14DE2FB4983342380ACF67CFA">
    <link href="https://plus.google.com/102884272161556376079" rel="publisher">
    <!-- etc -->
    <script type="text/javascript">
        (function () {
            document.$post = {
                $post_name: '<?php echo $post->post_name ?>'
            };
        })();
    </script>
</head>
<body
    <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KM8M8QH"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include 'top-nav-menu.php'; ?>

<!-- end header.php -->