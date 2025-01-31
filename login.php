<?php
require_once('main.inc.php');
session_start();
if (isset($_SESSION['user'])) {
    header('Location: ./dashboard.php');
    exit;
}
$title = 'Login';
if (isset($_COOKIE['login_error'])) {
    $error_message = $_COOKIE['login_error'];
    setcookie('login_error', '', time() - 3600, '/'); // Eliminar la cookie
}
echo $TWIG->render('login.twig', [
    'conf' => $conf,
    'title' => $title,
    'error_message' => $error_message ?? null
]);
