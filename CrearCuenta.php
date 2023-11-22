    <?php  
          
          class resistro {

              public function registro ($nombre, $apellido, $tipo_doc, $documento, $email, $password, $password2){
				
				if($password==$password2){
                    
                        $password = hash('sha256', $password);
                        

                        include("conexion.php");
                        $existe="0";
                        $sql = "SELECT * FROM usuario WHERE email='$email'";
                        if(!$result = $db->query($sql)){
                            die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                        }
                        while($row = $result->fetch_assoc())
                        {
                            $email=stripslashes($row["emaily"]);
                            $existe=$existe+1;
                                
                        }
                        if ($existe=="0")

                        {
                            $codigo = rand(1000,9999);

                            include ("conexion.php");
                            mysqli_query($db,"INSERT INTO usuario (id_usuario, nombre, apellido, tipo_doc, documento, email, password, codigo, 	verifico) 
                            VALUES (NULL, '$nombre', '$apellido', '$tipo_doc', '$documento', '$email','$password', '$codigo', 'no')") or die(mysqli_error($db));
                                    
                            include ("conexion.php");  
                              
                            $fk_id_rol="1";

                            mysqli_query($db,"INSERT INTO permiso (id_permisos, documento, fk_id_rol) VALUES 
                            (NULL, '$documento', '$fk_id_rol')") or die(mysqli_error($db));

                                           
                            include("mail.php");
                               
                            if($enviado){ 
                                echo'
                                <script>
                                    alert("!REGISTRO EXITOSO¡. Hemos enviado un correo de verificacion"); 
                                        window.location = "InicioDeSesion.php";                            
                                </script>
                                            
                                ';  

                            }else{

                                echo'
                                <script>
                                    alert("!ERROR¡ INTENTARMAS TARDE"); 
                                        window.location = "InicioDeSesion.php";                            
                                </script>
                                            
                                ';

                            }
                        }else{ 

                            echo'
                                <script>
                                    alert("El usuario ya existe");
                                    window.location = "Registrarse.php";                         
                                </script>
                                        
                                '; 

                        }

        }else{
                echo'
                    <script>
                        alert("Contraseñas no coinciden");
                        window.location = "Registrarse.php";                         
                    </script>
                    exit;
                ';
            }
        }
    }   
    $final=new resistro ();
    $final->registro($_POST["nombre"],$_POST["apellido"], $_POST["tipo_doc"], $_POST["documento"],$_POST["email"], $_POST["password"], $_POST["password2"]);  
    
?>
</html>

