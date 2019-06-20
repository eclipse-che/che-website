<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" <?php echo $pageDescription; ?>">

    <!-- Favicons etc. -->
    <link rel="icon" href="<?php echo $rootPath; ?>/images/ico/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="<?php echo $rootPath; ?>/images/ico/16x16.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $rootPath; ?>/images/ico/57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $rootPath; ?>/images/ico/60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $rootPath; ?>/images/ico/72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $rootPath; ?>/images/ico/76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $rootPath; ?>/images/ico/114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $rootPath; ?>/images/ico/120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $rootPath; ?>/images/ico/144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $rootPath; ?>/images/ico/152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $rootPath; ?>/images/ico/180x180.png">
    <link rel="icon" type="image/png" href="<?php echo $rootPath; ?>/images/ico/196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="<?php echo $rootPath; ?>/images/ico/192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php echo $rootPath; ?>/images/ico/144x144.png" sizes="144x144">
    <link rel="icon" type="image/png" href="<?php echo $rootPath; ?>/images/ico/96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo $rootPath; ?>/images/ico/72x72.png" sizes="72x72">
    <link rel="icon" type="image/png" href="<?php echo $rootPath; ?>/images/ico/48x48.png" sizes="48x48">
    <link rel="icon" type="image/png" href="<?php echo $rootPath; ?>/images/ico/36x36.png" sizes="36x36">
    <link rel="icon" type="image/png" href="<?php echo $rootPath; ?>/images/ico/32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo $rootPath; ?>/images/ico/16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo $rootPath; ?>/images/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $rootPath; ?>/images/ico/144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

    <title><?php echo $pageTitle; ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css' crossorigin="anonymous">
    <link href="<?php echo $rootPath; ?>/stylesheets/all.css" rel="stylesheet" />
    <?php
    if ($customCss) {
      echo '<link href="' . $customCss . '" rel="stylesheet" />' . "\n";
    }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo $rootPath; ?>/javascripts/all.js"></script>
    <script src="<?php echo $rootPath; ?>/javascripts/bootstrap.min.js"></script>


    <!-- Eclipse Foundation cookie consent: -->
    <link rel="stylesheet" type="text/css" href="//www.eclipse.org/eclipse.org-common/themes/solstice/public/stylesheets/vendor/cookieconsent/cookieconsent.min.css" />
    <script src="//www.eclipse.org/eclipse.org-common/themes/solstice/public/javascript/vendor/cookieconsent/default.min.js"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37306001-2"></script>
    <script>
        window.hasCookieConsent = function() {
            var match = document.cookie.match(new RegExp('eclipse_cookieconsent_status=([^;]+)'));
            return match && (match[1] === 'allow');
        }

        if (window.hasCookieConsent) {
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-37306001-2');
        }
    </script>

    <!-- GITHUB BUTTON -->
    <script async defer src="https://buttons.github.io/buttons.js" crossorigin="anonymous"></script>


  </head>
