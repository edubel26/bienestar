<?php
include ("seguridad_usuario.php");
$_SESSION["documen"];


$documento=$_POST["documento"];
$radicado=$_POST["radicado"];

include("conexion.php");

$existe="0";

$sql = "SELECT radicado FROM acompaniante where documento='$documento' and radicado='$radicado'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc())
{

    $radicado=stripslashes($row["radicado"]);
    $existe=$existe+1;

}
if($existe=="0"){


        echo"
            <script>
                alert('La solicitud no fue completada.'); 
                window.location = 'EliminarSolicitudIncompleta.php?documento=$documento&radicado=$radicado';                     
            </script>  
        "; 
 
}else{

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=divice-width">
        <title>SIBIS</title>
        <link rel="website icon" type="png" href="img/logo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,700;1,300&display=swap" rel="stylesheet">
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css"
        />
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Estilos Internos -->
        <link rel="stylesheet" href="css/landing.css">
        
    </head>  
<?php
$cont="0";

include("conexion.php");  

$sql="SELECT * FROM solicitud WHERE documento='$documento' AND radicado='$radicado'";
if(!$result = $db->query($sql)){
die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc())
{
$documento=stripslashes($row["documento"]);

$cont=$cont+1;			
}

if($cont > 0){

$documento=$_SESSION["documen"];
$radicado=$_POST["radicado"];

echo"<center>";

include ("conexion.php");


$sql = "SELECT * FROM solicitud where documento='$documento' and radicado='$radicado'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}

while($row = $result->fetch_assoc())
{
    $uso=stripslashes($row["uso"]);
    $destino=stripslashes($row["destino"]);
    $cantidad_p=stripslashes($row["cantidad_p"]);
    $f_ini=stripslashes($row["f_ini"]);
    $f_fin=stripslashes($row["f_fin"]);
    $dias_total=stripslashes($row["dias_total"]);
    $fecha_de_solicitud=stripslashes($row["fecha_de_solicitud"]);
    $radicado=stripslashes($row["radicado"]);

echo" <div class='container pt-5'>";
echo "  <table  class='table align-middle table-bordered table-responsive'>";
echo"   <thead>";
echo "  <tr>";
echo"   <th colspan='5'>
            <center><img class='logo-migra m-0 p-0'
                height='50'
                width='200'
                src='img/migra.png'
                alt='migracion colombia'
            /></center>
        </th>";

echo "  <th colspan='4' class='text-right'>";
echo "      Radicado: $radicado     
        </th>";
echo "  </tr>";
echo"   </thead>";
echo"   <thead>";
echo "  <tr>";
echo "  <tr>";
echo "  <th colspan='6'>";
echo "  <center> SOLICITUD </center>";
echo "  </th>";
echo "  </tr>";
echo"   </thead>";
echo"   <thead>";
echo "  <th>";
echo "     Uso del alojamiento";
echo "  </th>";

echo "  <th>";
echo "     Destino";
echo "  </th>";

echo "  <th>";
echo "     Cantidad de acompañantes";
echo "  </th>";

echo "   <th>";
echo "      Fecha de inicio ";
echo "   </th>";

echo "<th>";
echo "Fecha de finalizacion ";
echo "</th>";

echo "<th>";
echo "Dias totales de estadia ";
echo "</th>";

echo "<tr>";
echo "<td>";
echo "$uso";
echo "</td>";

echo "<td>";
echo $destino; 
echo "</td>";


echo "<td>";
echo $cantidad_p; 
echo "</td>";

echo "<td>";
echo $f_ini ; 
echo "</td>";

echo "<td>";
echo $f_fin ; 
echo "</td>";

echo "<td>";
echo $dias_total; 
echo "</td>";
echo" </tr>";
echo"   </thead>";
}
include ("conexion.php");

$sql4 = "SELECT * FROM medio_trasporte where documento='$documento' and radicado='$radicado'";
if(!$result4 = $db->query($sql4)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}



include ("conexion.php");

$existe="0";
$sql3 = "SELECT * FROM medio_trasporte where documento='$documento' and radicado='$radicado'";
if(!$result3 = $db->query($sql3)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}while($row = $result4->fetch_assoc())
{
    $radicado=stripslashes($row["radicado"]);
    $existe=$existe+1;
}

$correcto=false;
                    
if($existe > "0"){

    $correcto=true;

}else{
    $correcto=false;
}

if($correcto){


echo" <thead>";
echo "<tr>";
echo "<th colspan='6'>";
echo "<center>Automovil</center>";
echo "</th>";
echo "</tr>";
echo"   </thead>";
echo"   <thead>";


echo"  <thead>";
echo "<tr>";
echo " <th colspan='2'>";
echo "Tipo de vehículo";
echo "</th>";

echo "<th colspan='2'>";
echo "Modelo";
echo "</th>";

echo "<th>";
echo "Placa";
echo "</th>";

echo "<th>";
echo "Color";
echo "</th>";


echo "</tr>";
echo"   </thead>";

include ("conexion.php");


while($row = $result3->fetch_assoc())
{
    $medio_tras=stripslashes($row["medio_tras"]);
    $modelo=stripslashes($row["modelo"]);
    $placa=stripslashes($row["placa"]);
    $color=stripslashes($row["color"]);
    

    echo"   <thead>";
    echo "<tr>";    
    echo "<td colspan='2'>";
    echo "$medio_tras";
    echo "</td>";
    echo "<td colspan='2'>";
    echo $modelo; 
    echo "</td>";
    echo "<td>";
    echo $placa; 
    echo "</td>";
    echo "<td>";
    echo $color; 
    echo "</td>";
    echo "</tr>"; 
    echo"   </thead>";


}

}else{
    
}
$sql2 = "SELECT * FROM acompaniante where documento='$documento' and radicado='$radicado'";
if(!$result2 = $db->query($sql2)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
echo" <thead>";
echo "<tr>";
echo "<th colspan='6'>";
echo "<center>Acompañantes</center>";
echo "</th>";
echo "</tr>";
echo"   </thead>";
echo"   <thead>";
echo "<tr>";
echo "  <th>";
echo "Nombres";
echo "</th>";

echo "<th>";
echo "Tipo de documento";
echo "</th>";

echo "<th>";
echo "Documento";
echo "</th>";

echo "<th>";
echo "Eps del acompañante";
echo "</th>";

echo "<th>";
echo "Parentesco";
echo "</th>";

echo "<th>";
echo "PDF Documento ";
echo "</th>";

echo "</tr>";
echo"   </thead>";

while($row = $result2->fetch_assoc())
{
    $tipo_doc=stripslashes($row["tipo_doc"]);
	$no_documento=stripslashes($row["no_documento"]);
    $fecha_exp=stripslashes($row["fecha_exp"]);
    $dpto_exp=stripslashes($row["dpto_exp"]);
    $mpio_exp=stripslashes($row["mpio_exp"]);
    $nombre=stripslashes($row["nombre"]);
    $apellido=stripslashes($row["apellido"]);
    $fecha_nacimiento=stripslashes($row["fecha_nacimiento"]);
    $dpto_nac=stripslashes($row["dpto_nac"]);
    $mpio_nac=stripslashes($row["mpio_nac"]);
    $eps_afiliado=stripslashes($row["eps_afiliado"]);
    $psco_func=stripslashes($row["psco_func"]);
    $pdf_doc=stripslashes($row["pdf_doc"]);

    include("VisualizacionPdf.php");
    
    $imagen=$folder.$pdf_doc; 
    
    echo"   <thead>";
    echo "<tr>";    
    echo "<td>";
    echo "$nombre ";
    echo "</td>";
    echo "<td>";
    echo $tipo_doc; 
    echo "</td>";
    echo "<td>";
    echo $no_documento; 
    echo "</td>";
    echo "<td>";
    echo $psco_func; 
    echo "</td>";
    echo "<td>";
    echo $eps_afiliado; 
    echo "</td>";
    echo "<td>";
    echo"<address>
            <a href='$imagen'  target='_blank' >$pdf_doc</a>    
        </address>"; 
    echo "</td>"; 
   echo "</tr>"; 
   echo"   </thead>";
}
echo "</table>";
echo"</div>";



$sql = "SELECT * FROM invitados where radicado='$radicado'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}while($row = $result->fetch_assoc())
{
    $tipo_doc=stripslashes($row["tipo_doc"]);
	$no_documento=stripslashes($row["no_documento"]);
    $nombre=stripslashes($row["nombre"]);
    $apellido=stripslashes($row["apellido"]);
    

    echo"   <div class='container table-responsive'>
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                        <th scope='col' colspan='4'><center>Invitados</center></th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                        <th scope='col'>Tipo de documento</th>
                        <th scope='col'>N° Documento</th>
                        <th scope='col'>Nombres</th>
                        <th scope='col'>Apellidos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>$tipo_doc</th>
                        <td>$no_documento</td>
                        <td>$nombre</td>
                        <td>$apellido</td>
                        </tr>
                    </tbody>
                </table> 
            </div>
        ";
}
                        

echo "<br/><a href='javascript:window.print(); void 0;' style='color:#006666'>Imprimir o Generar PDF</a>";

echo "<br/><br/><a href='MiPerfil.php'>volver</a>";echo"</center>";
}else{
    echo'
        <script>
            alert("!ERROR¡ Radicado no existe.");
            window.location="MiPerfil.php";                         
        </script>
        exit;
    ';
} 

}


?>
    </body>
</html>