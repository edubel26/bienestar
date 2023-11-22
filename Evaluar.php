<?php
session_start(); 
?>
<?php
        
    class login {
            
        public function entrada ($email, $password, $recordar_contrasenia)
        {   
            
            if($recordar_contrasenia==1){
            
                setcookie("password", $password);

            }
                   
                $password = hash("sha256", $password);  
            
                $cont="0";

                include("conexion.php");  

                $sql="SELECT * FROM usuario WHERE email='$email' AND password='$password' AND verifico='si' ";
                if(!$result = $db->query($sql)){
                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                }
                while($row = $result->fetch_assoc())
                {
                    $email=stripslashes($row["email"]);
                
                    $cont=$cont+1;			
                }

                    //}//*d
                    if ($cont=="1" )
                    {



                        $sql = "SELECT * FROM usuario WHERE email='$email'";
                        if(!$result = $db->query($sql)) {
                        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');   }
                        while($row = $result->fetch_assoc())
                        {//*c
                            $documento=stripslashes($row["documento"]);

                        }

                        $documento;

                        $sql3 = "SELECT * FROM permiso WHERE documento='$documento'";
                        if(!$result3 = $db->query($sql3)) {
                        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');   }
                        while($row3 = $result3->fetch_assoc())
                        {//*c
                            $ffk_id_rol=stripslashes($row3["fk_id_rol"]);
            
                            if ($ffk_id_rol=="1")
                            {
                                $_SESSION["documen"]=$documento;   
                                $_SESSION["administrador"]="0";
                                $_SESSION["celador"]="0";
                                $_SESSION["usuario"]="1";
                                header('Location:ApartadoInicioUsuario.php');
                    
                            }elseif ($ffk_id_rol=="2"){


                                $_SESSION["documen"]=$documento;
                                $_SESSION["administrador"]="0";
                                $_SESSION["celador"]="2";
                                $_SESSION["usuario"]="0";
                                header("Location:ApartadoDeIngresoCabania/");

                            }elseif($ffk_id_rol=="3"){

                                $_SESSION["documen"]=$documento;    
                                $_SESSION["administrador"]="3";
                                $_SESSION["celador"]="0";
                                $_SESSION["usuario"]="0";
                                header("Location:ApartadoAdmin/");
                                    
                            }

                        }
                                
                    }else{

                        echo'
                        <script>
                            alert("Usuario no existe o no se ha confirmado cuenta");
                            window.location = "InicioDeSesion.php";                         
                        </script>
                        exit;
                    ';
                
                    }
         
        }//*metodo
    }//Clase
    $final=new login();
    $final->entrada($_POST["email"], $_POST["password"], $_POST["recordar_contrasenia"] );
?>
