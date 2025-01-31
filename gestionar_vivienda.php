<?php
require_once('main.inc.php');
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ./login.php');
    exit;
}
$token = $_REQUEST['token'];


$response = callDolibarrApi('domocleverapi/domocleverviviendas?sqlfilters=uni_token=\'' . $token . '\'');

if (isset($response['error']) && $response['error']) {
    echo $TWIG->render('error.twig', [
        'conf' => $conf
    ]);
    exit;
} else {
    $vivienda = reset($response);
    //Fecha en formado  value="2014-04-30 10:00" del dia de hoy y de mañana
    $fecha_hoy = date('Y-m-d H:i');
    $fecha_manana = date('Y-m-d H:i', strtotime('+1 day'));
    echo $TWIG->render('gestionar_vivienda.twig', [
        'conf' => $conf,
        'title' => 'Mis viviendas',
        'vivienda' => $vivienda,
        'fecha_hoy' => $fecha_hoy,
        'fecha_manana' => $fecha_manana
    ]);
}




/* echo $TWIG->render('gestionar_vivienda.twig', [
    'conf' => $conf,
    'title' => $title
]); */
