<?php

$db = new mysqli('localhost', 'root', '', 'bienestar');
$acentos = $db->query("SET NAMES 'utf8'");
if($db->connect_error > 0)
{
    die('No se puede conectar [' . $db->connect_error . ']');
	
}
?>