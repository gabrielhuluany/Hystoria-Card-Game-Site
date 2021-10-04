<?php
    session_start();
    if(!isset($_SESSION['cod_usuario']))
    {
        header("location: Login.php");
        exit;
    }
?>