<?php include 'template/header.php' ?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <!-- Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
        <!-- DataTable -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />


<?php
               
    echo'<div class="container-xxl p-4 table-responsive">';
    echo'<div class="badge text-wrap" >';
    echo'<div class="col-md-20">';
    echo'<div class="card">';
    echo'<div class="card-header">';
    echo'<table class="table table-responsive">';
    echo'<thead>';
    echo'    <tr>';
    echo'    <th scope="col"></th>';
    echo'    <th scope="col"></th>';
    echo'    <th scope="col"></th>';   
    echo'    <th scope="col" colspan="5">Datos de los huéspedes o invitados</th>';      
    echo'    <th scope="col"></th>';
    echo'    <th scope="col"></th>';
    echo'    <th scope="col"></th>';
    echo'    <th scope="col"></th>';
    
    
    echo'   </tr>';
    echo'</thead>';

    include("conexion.php");
    $documento=$_SESSION["documen"]; 
    $radicado=$_SESSION["radicado"]; 
    ///////////////////////////////////////////////
    $sql = "SELECT * FROM acompaniante WHERE radicado='$radicado' ORDER BY id_acompaniante ASC;";  
    if(!$result = $db->query($sql)){
    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
    }

    while($row = $result->fetch_assoc())
    { 
    
        $documento=stripslashes($row["documento"]);
        $tipo_doc=stripslashes($row["tipo_doc"]);
        $no_documento=stripslashes($row["no_documento"]);
        $fecha_exp=stripslashes($row["fecha_exp"]);
        $dpto_exp=stripslashes($row["dpto_exp"]);
        $mpio_exp=stripslashes($row["mpio_exp"]);
        $pdf_doc=stripslashes($row["pdf_doc"]);
        $nombre=stripslashes($row["nombre"]);
        $apellido=stripslashes($row["apellido"]);
        $fecha_nacimiento=stripslashes($row["fecha_nacimiento"]);
        $dpto_nac=stripslashes($row["dpto_nac"]);
        $mpio_nac=stripslashes($row["mpio_nac"]);
        $eps_afiliado=stripslashes($row["eps_afiliado"]);
        $psco_func=stripslashes($row["psco_func"]);
        $radicado=stripslashes($row["radicado"]);



    echo'<thead>';
    echo'   <tr>';
    echo'   <th scope="col" colspan="2">Nombres completo</th>';;
    echo'   <th scope="col">Documento</th>';
    echo'   <th scope="col">Fecha de nacimiento</th>';
    echo'   <th scope="col">Departamento de nacimiento</th>';
    echo'   <th scope="col">Municipio de nacimiento</th>';
    echo'   <th scope="col">Fecha de expedicion</th>';
    echo'   <th scope="col">Departamento de expedicion</th>';
    echo'   <th scope="col">Municipio de expedicion </th>';
    echo'   <th scope="col">EPS de afiliacion</th>';
    echo'   <th scope="col">Parentesco</th>'; 
    echo'   <th scope="col">opcion</th>';   
    echo'   </tr>';
    echo'</thead>';
    echo'<tbody>';
    echo'    <tr>';
    echo"    <td colspan='2'> $nombre $apellido </td>";
    echo"    <td > $no_documento </td>";
    echo"    <td> $fecha_nacimiento </td>";
    echo"    <td> $dpto_nac </td>";
    echo"    <td> $mpio_nac </td>";
    echo"    <td> $fecha_exp </td>";
    echo"    <td> $dpto_exp </td>";
    echo"    <td> $mpio_exp </td>";
    echo"    <td> $eps_afiliado </td>";
    echo"    <td> $psco_func </td>";
    echo"   <td>  
                <form  method='POST' action='EliminarDatosAcompaniante.php' required>
                    <input name='no_documento' type='hidden' value='$no_documento'>
                    <input name='radicado' type='hidden' value='$radicado'>
                    <input name='psco_func' type='hidden' value='$psco_func'>
                    <button class='btn btn-sm btn-danger'><i class='fa-solid fa-trash-can'></i></button>
               </form>
            </td>    ";
                $correcto=false;
                                        
                        if($psco_func=="funcionario"){

                        $correcto=true;

                        }else{
                            $correcto=false;
                        }


                    if($correcto){

                    }else{
                        echo" <td>    
                            <form   method='POST' action='DatosActualizarAcompaniante.php' required>
                                <input name='no_documento' type='hidden' value='$no_documento'>
                                <button class='btn btn-sm btn-primary'><i class='fa-solid fa-pencil'></i></button>
                            </form>
                        </td> ";}
    echo'    </tr>';
    echo'</tbody>';
    echo'<tbody>';
    echo'   <tr>';
    echo'   <td>  </td>';
    echo'   <td>  </td>';
    echo'   <td>  </td>';
    echo'   <td>  </td>';
    echo'   <td>  </td>';
    echo'   <td>  </td>';
   
    echo"       </td>";
    echo"   <td>  </td>";
    echo"    <td>";
    echo'    <td>  </td>';
    echo'    <td>  </td>';
    echo'    <td>  </td>';
    echo'    <td>  </td>';
    echo'    </tr>';
    }
    include("conexion.php");
    
    $radicado=$_SESSION["radicado"]; 
    ///////////////////////////////////////////////
    $sql = "SELECT * FROM invitados WHERE radicado='$radicado'";  
    if(!$result = $db->query($sql)){
    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
    }
    $existe="0";
    while($row = $result->fetch_assoc())

    { 
        $radicado=stripslashes($row["radicado"]);
        $existe=$existe+1;
    }
        $correcto=false;
                                        
        if($existe!=="0"){

            $correcto=true;

        }else{
            $correcto=false;
        }


        if($correcto){

           include ("ListaInvitado.php");
        }
    
    echo'   <td>  </td>';
    echo'   <td>  </td>';
    echo'   <td>  </td>';
    echo'   <td>  </td>'; 
    echo'   <td>  </td>';
    echo'   <td>  </td>';

    echo'   <td>  </td>';
    echo'   <td>  </td>';
    echo'   <td>  </td>';

    
    include("conexion.php");
    $sql2 = "SELECT * FROM solicitud WHERE  radicado='$radicado'";  
    if(!$result = $db->query($sql2)){
    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
    }

    while($row = $result->fetch_assoc())
    {
        $documento=stripslashes($row["documento"]);
        $nombre=stripslashes($row["nombre"]);
        $radicado=stripslashes($row["radicado"]);
    }
    
   
    $documento;
    $nombre;
    $radicado;
    $emaill="beltran502@hotmail.com";
   
    echo"  <td>
        <form  method='POST' action='EnvioSolicitud.php'>
            <input name='documento' type='hidden' value='$documento'>
            <input name='radicado' type='hidden' value='$radicado'>
            <input name='emaill' type='hidden' value='$emaill'>
            <input class='btn btn-primary' type='submit' value='enviar solicitud'>
        </form>
    </td>";
    echo'   <td>  </td>';
    echo'</tbody>';
    echo'</table>';
    echo'</div>';
    echo'</div>';
    echo'</div>';
    echo'</div>';
    echo'</div> ';
    
    ?>
    </body>
</html>