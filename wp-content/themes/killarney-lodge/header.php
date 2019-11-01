<!-- begin header.php -->

<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
    <?php
        global $post;
        $master = $post;
        $seo_title_source = get_metadata('post', $master->ID, 'title', true);
        $seo_description_source = get_metadata('post', $master->ID, 'description', true);
    ?>
    <title><?php if($seo_title_source){ echo $seo_title_source; } ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
    <?php if($seo_description_source){ echo '<meta name="description" content="'.$seo_description_source.'" />'; } ?>
    <?PHP wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GTM-KM8M8QH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GTM-KM8M8QH');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <!-- Facebook pixel tag -->
    <script>!function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '236172690476053');
        fbq('track', 'PageView');</script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=236172690476053&amp;ev=PageView&amp;noscript=1"/>
    </noscript>
    <!-- Facebook pixel tag -->
    <!-- etc -->
    <meta name="y_key" content="69ac917b71c55f44">
    <meta name="google-site-verification" content="so449KYFdOh_OZf8ozeAh8EzRjMk_7TytnqJSflfdSo">
    <meta name="msvalidate.01" content="EAFD37E14DE2FB4983342380ACF67CFA">
    <link href="https://plus.google.com/102884272161556376079" rel="publisher">
    <!-- etc -->
</head>
<body
<?php body_class(); ?>>

<?php include 'top-nav-menu.php'; ?>

<!-- end header.php -->