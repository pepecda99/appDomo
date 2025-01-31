<?php
$conf = array(
    'main_title' => 'CleverSuite',
    'favicon' => 'img/favicon.ico',
    'base_url' => 'https://erp.cleverbyte.es/api/index.php/',
    'dolaApi' => '!5V1TRYCfHuf',
    'base_url_app' => 'https://erp.cleverbyte.es/',
    //BASE URL SACADO CON PHP tambien si es por HTTP o HTTPS
    'base_panel_url' => 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}",
);
//convert conf array to object
$conf = (object) $conf;
