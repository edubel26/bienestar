<?php
include("SessionRadicado.php");

try {

    $conexion = new PDO("mysql:host=localhost;dbname=bienestar", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $radicado=$_SESSION["radicado"];
    $res = $conexion->query("SELECT * FROM invitados WHERE radicado='$radicado'") or die(print($conexion->errorInfo()));

    $data = [];

    while($item = $res->fetch(PDO::FETCH_OBJ)) {

        $data[] = [

            'tipo_doc' => $item->tipo_doc,
            'no_documento' => $item->no_documento,
            'nombre' => $item->nombre,
            'apellido' => $item->apellido,
            'radicado' => $item->radicado,
            
        ];

    }

    echo json_encode($data);

} catch(PDOException $error) {

    echo $error->getMessage();
    die();

}