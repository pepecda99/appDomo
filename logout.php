<?php
session_start();
session_destroy();
unset($_SESSION['user']);
header('Location: ../index.php');
exit;
