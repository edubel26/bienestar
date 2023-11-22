<?php
    include ("conexionUno.php");
    $email =$_POST['email'];
    $codigo =$_POST['codigo'];
    $res = $conexion->query("select * from usuario 
        where email='$email' 
        and codigo='$codigo' 
        ")or die($conexion->error);
    if( mysqli_num_rows($res) > 0 ){
        
        $conexion->query("update usuario set verifico = 'si' where email = '$email' ");
       
        echo'
        <script>
            alert("Correo confirmado."); 
            window.location = "InicioDeSesion.php";                            
        </script> 
        ';
    }else{
        echo'
        <script>
            alert("codigo invalido"); 
            window.location = "http://localhost/bienestar/confirmaCuenta.php?email='.$email.'";                            
        </script>
        ';
        
    }
?>