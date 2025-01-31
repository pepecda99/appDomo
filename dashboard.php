<?php
require_once('main.inc.php');
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ./login.php');
    exit;
}
$title = 'Mis Viviendas';
echo $TWIG->render('dashboard.twig', [
    'conf' => $conf,
    'title' => $title
]);
