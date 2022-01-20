<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="canonical" href="<?php echo URL_ROOT . $_SERVER['REQUEST_URI']; ?>">

    <!-- Meta Tags -->
    <meta name="keywords" content="<?php echo $data['meta_keywords']; ?>">
    <meta name="description" content="<?php echo $data['meta_description']; ?>">
    <meta name="author" content="Burntoo">
    <!-- Meta Tags -->

    <!-- Google Console -->
    <meta name="google-site-verification" content="twzg0GEIxu3_w42Au_ADjJDuHPPeWuQiBnJDvK3ICWo" />
    <!-- Google Console -->

    <!-- Social Media Presence -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo URL_ROOT . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title" content="<?php echo $data['title']; ?>">
    <meta property="og:description" content="<?php echo $data['meta_description']; ?>">
    <meta property="og:image" content="">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo URL_ROOT . $_SERVER['REQUEST_URI']; ?>">
    <meta property="twitter:title" content="<?php echo $data['title']; ?>">
    <meta property="twitter:description" content="<?php echo $data['meta_description']; ?>">
    <meta property="twitter:image" content="">
    <!-- Social Media Presence -->

    <!-- Prefetching, preloading, prebrowsing -->
    <link rel="dns-prefetch" href="<?php echo URL_ROOT . $_SERVER['REQUEST_URI']; ?>">
    <link rel="preconnect" href="<?php echo URL_ROOT . $_SERVER['REQUEST_URI']; ?>">
</head>

<body>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Tabala Digital Solutions",
        "url": "https://tabaladigital.co.ke",
        "sameAs": [
            "https://www.facebook.com/",
            "https://www.instagram.com/",
            "https://twitter.com/",
            "https://www.template.com/",
            "https://www.linkedin.com/"
        ],
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "4th Floor Le Mac Towers Nairobi Kenya",
            "addressRegion": "NBO",
            "postalCode": "",
            "addressCountry": "KE"
        }
    }
</script>