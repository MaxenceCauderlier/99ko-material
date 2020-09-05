<?php
defined('ROOT') OR exit('No direct script access allowed');
include_once(THEMES . $core->getConfigVal('theme') . '/functions.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php eval($core->callHook('frontHead')); ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php show::titleTag(); ?></title>
        <base href="<?php show::siteUrl(); ?>/" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
        <meta name="description" content="<?php show::metaDescriptionTag(); ?>" />
        <link rel="icon" href="<?php show::themeIcon(); ?>" />
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo THEMES . $core->getConfigVal('theme') ?>/css/materialize.min.css"  media="screen,projection"/>
        <?php show::linkTags(); ?>
        <?php show::scriptTags(); ?>
        <?php eval($core->callHook('endFrontHead')); ?>
    </head>
    <body>
        <script type="text/javascript" src="<?php echo THEMES . $core->getConfigVal('theme') ?>/js/materialize.min.js"></script>
        <div id="container">
            <nav id="header">
                <div id="header_content">
                    <div class='nav-wrapper'>
                        <a href="<?php show::siteUrl(); ?>" class="brand-logo"><?php show::siteName(); ?></a>
                        <a href="#" data-target="mobile-menu" class="sidenav-trigger"><span class="iconify" data-icon="mdi:menu" data-inline="false"></span></a>
                        <ul class="right hide-on-med-and-down" id="navigation">
                            <?php
                            show::mainNavigation();
                            echo materialNavbarDisplaySocial();
                            ?>
                        </ul>
                    </div>
                    <ul class="sidenav" id="mobile-menu">
                        <?php show::mainNavigation(); ?>
                        <li><div class="divider"></div></li>
                        <?php echo materialSidenavDisplaySocial(); ?>
                    </ul>
                </div>
            </nav>
        </div>
        <div id="banner"></div>
        <div id="body" class='card container'>
            <div id="content" class="<?php show::pluginId(); ?>">
<?php show::mainTitle(); ?>