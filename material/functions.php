<?php

function materialNavbarDisplaySocial() {
    $manager = pluginsManager::getInstance();
    if (!$manager->isActivePlugin('seo'))
        return;

    $plugin = pluginsManager::getInstance()->getPlugin('seo');
    $social = materialgetSocialVars();

    foreach ($social as $k => $v) {
        $tConfig = $plugin->getConfigVal($v);
        if ($tConfig !== '') {
            echo '<li><a target="_blank" title="Suivez-nous sur ' . $k . '" href="' . $tConfig . '"><span class="iconify" data-icon="mdi:' . $v . '" data-inline="false"></span></a></li>';
        }
    }
}

function materialSidenavDisplaySocial() {
    $manager = pluginsManager::getInstance();
    if (!$manager->isActivePlugin('seo'))
        return;

    $plugin = pluginsManager::getInstance()->getPlugin('seo');
    $social = materialgetSocialVars();

    foreach ($social as $k => $v) {
        $tConfig = $plugin->getConfigVal($v);
        if ($tConfig !== '') {
            echo '<li><a target="_blank" title="Suivez-nous sur ' . $k . '" href="' . $tConfig . '"><span class="iconify" data-icon="mdi:' . $v . '" data-inline="false"></span> '. $k . '</a></li>';
            
        }
    }
}

function materialgetSocialVars() {
    return [
        'Facebook' => 'facebook',
        'Twitter' => 'twitter',
        'YouTube' => 'youtube',
        'Instagram' => 'instagram',
        'Pinterest' => 'pinterest',
        'Linkedin' => 'linkedin',
        'Viadeo' => 'viadeo'
    ];
}

?>