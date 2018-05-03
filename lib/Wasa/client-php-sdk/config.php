<?php
function wasa_config($key = '')
{
    $wasa_configuration = [
        'base_url' => 'https://b2b.services.wasakredit.se',
        'access_token_url' => 'https://b2b.services.wasakredit.se/auth/connect/token',
        'version' => 'php-2.2',
        'plugin' => 'magento-1.5'
    ];

    return isset($wasa_configuration[$key]) ? $wasa_configuration[$key] : null;
}
?>
