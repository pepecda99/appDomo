<?php
require_once('main.inc.php');


$token = $_REQUEST['token'] ?? '';
if (empty($token)) {
    echo $TWIG->render('error.twig', [
        'conf' => $conf
    ]);
    exit;
} else {
    $response = callDolibarrApi('domocleverapi/domocleverviviendas/validateToken', 'POST', ['token' => $token]);

    if ($response === true) {
        echo $TWIG->render('apertura_puerta.twig', [
            'conf' => $conf,
            'title' => 'Apertura de puerta',
            'token' => $_GET['token']
        ]);
    } else {
        echo $TWIG->render('error.twig', [
            'conf' => $conf,
            'token' => $token,
            'error_code' => 'No se encuentra dentro de la fecha de su estancia',
            'error_title' => 'Enlace no válido',
        ]);
    }
}
