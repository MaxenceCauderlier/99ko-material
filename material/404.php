<?php
defined('ROOT') OR exit('No direct script access allowed');
include_once(THEMES . $this->getConfigVal('theme') . '/functions.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>404</title>
        <base href="<?php show::siteUrl(); ?>/" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
        <link rel="icon" href="<?php show::themeIcon(); ?>" />
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo THEMES . $this->getConfigVal('theme') ?>/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo THEMES . $this->getConfigVal('theme') ?>/styles.css"  media="screen,projection"/>
    </head>
    <body>
        <script type="text/javascript" src="<?php echo THEMES . $this->getConfigVal('theme') ?>/js/materialize.min.js"></script>
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
        <div id="body" class='card container error404'>
            <img src="<?php echo THEMES . $this->getConfigVal('theme') ?>/404.png" alt="Erreur 404"/>
            <h1>Page introuvable</h1>
            <p>La page que vous recherchez est introuvable. Elle pourrait avoir été supprimée, déplacée
                ou même ne jamais avoir existé.</p>
            <a href="<?php echo $this->getConfigVal('siteUrl'); ?>" class="button">Retour au site</a>
        </div>
        <footer id="footer" class="page-footer">
            <div id="footer_content" class="container">
                <?php $this->callHook('footer'); ?>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <p>
                        <a target='_blank' href='https://github.com/99kocms/'>Just using 99ko</a> - Thème <?php show::theme(); ?> - <a rel="nofollow" href="<?php echo ADMIN_PATH ?>">Administration</a>
                    </p>
                    <?php $this->callHook('endFooter'); ?>
                </div>
            </div>
        </footer>

        <?php $this->callHook('endFrontBody'); ?>
    </body>
</html>