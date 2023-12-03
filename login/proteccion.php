<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];
if($varsesion == null || $varsesion=''){
    header("location: loginusuario.php");
    die();
}
?>