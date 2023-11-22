<?php
session_start();
$_SESSION["administrador"]=0;
$_SESSION["celador"]=0;
$_SESSION["usuario"]=0;
header("Location:index.php");
?>