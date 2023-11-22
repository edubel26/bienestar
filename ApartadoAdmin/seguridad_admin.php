<?php
session_start();
if ($_SESSION["administrador"]!="3")
{
header("Location: salir.php");
}
?>