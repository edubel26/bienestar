<?php 
session_start(); 
    include("conexionUno.php");
    $email=$_POST['email'];
    $codigo=$_POST['codigo'];
    $token=$_POST['token'];
    $p1 =$_POST['p1'];
    $p2 =$_POST['p2'];

    if($p1 == $p2){
        $password = hash("sha256", $p1);  
        $conexion->query("update usuario set password='$password' where email='$email'")or die($conexion->error);
        echo"
        <script>
            alert('Cambio de contraseña con exito'); 
            window.location = 'InicioDesesion.php';                            
        </script> 
        ";
        
    }else{
        echo"
            <script>
                alert('!error¡Contraseña no coincide'); 
                window.location='reintentarVarificacionToken.php?email=$email&token=$token&codigo=$codigo';                            
            </script>
        ";
    }
?>