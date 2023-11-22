<?php

include("conexion.php");
$documento=$_POST["documento"];
$email=$_POST["email"];
$bytes=random_bytes(5);
$token=bin2hex($bytes);

$existe="0";

$sql = "SELECT * FROM usuario WHERE documento='$documento' and email='$email'";
if(!$result = $db->query($sql)){
die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc())
{

    $documento=stripslashes($row["documento"]);
    $existe=$existe+1;
}
    if($existe=="1"){

    include("mailCambioContrasenia.php");
    if($enviado){
        mysqli_query($db,"INSERT INTO passwords (email, token, codigo) VALUES 
        ('$email', '$token', '$codigo')") or die(mysqli_error($db));

        echo'
            <script>
                alert("Codigo enviado a: '.$email.'"); 
                window.location = "InicioDeSesion.php";                            
            </script>
            
        ';   

    }

}else{

        echo'
            <script>
                alert("Datos no coinciden."); 
                window.location = "CambioContrasenia.php";                            
            </script>
            
        ';  

}

    

?>