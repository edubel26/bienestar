<?php
session_start();
if ($_SESSION["celador"]!="2")
{
header("Location: salir.php");
}
?>