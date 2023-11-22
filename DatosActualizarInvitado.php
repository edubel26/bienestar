
<?php include 'template/header.php' ?>


<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'>


<?php 
        $no_documento=$_POST["no_documento"];  

        include ("conexion.php");
        $sql = "SELECT * FROM invitados WHERE no_documento='$no_documento'";
        if(!$result = $db->query($sql)){
         die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                }
            while($row = $result->fetch_assoc())
            {
                $id_invitados=stripslashes($row["id_invitados"]);
                $documento=stripslashes($row["documento"]);
                $tipo_doc=stripslashes($row["tipo_doc"]);
                $no_documento=stripslashes($row["no_documento"]);                
                $nombre=stripslashes($row["nombre"]);
                $apellido=stripslashes($row["apellido"]);
                $radicado=stripslashes($row["radicado"]);
                
            } 
        
            
            echo"<div class='container mt-1'>
            <div class='row justify-content-center'>
                <div class='col-md-16'>
                    <div class='card'>
                        <div class='card-header'>
                            BIENESTAR SOCIAL & SST | PROCESO RESERVA CABAÑAS | DATOS DE LOS ACOMPAÑANTES | ACTUALIZACIÓN DE DATOS
                         </div>

             <form class='p-4' method='POST' action='ActualizarDatosInvitado.php' enctype='multipart/form-data'>



            <div class=''>
                <!--o-->
                <div class=''>
                    <!--informacion sobre pautas para poder reservar-->
                    <p>
                    <h4>Actualizacion del acompañante</h4>Tenga en cuenta que se actualizarán los datos que se necesitan para el ingreso a los alojamientos, si desea cambiar toda la información elimine y vuelva a registrar a su acompañante  
                    <hr />
                    </br>
                    </pr>
            
            
                    <!-- PRIMER BLOQUE | FECHA RECIBIDO & MEDIO A TRAVÉS DEL CUAL SE RECIBIÓ -->
            
                    <div class='col-md-8 order-md-1'>
                        <!--<h1 class='display-6'>Ingreso conceptos médicos | ICM |</h1> -->
                        <form class='needs-validation' novalidate=''>
            
            </div>
                    
                    <input class='controls' type='hidden' name='documento' value='$documento'>
                    <input class='controls' type='hidden' name='id_invitados' value='$id_invitados'>
            
            
            <div class='row'>

                <div class='col-md-4 mb-3'> 
                    <label>Tipo documento</label>
                    <select required class='form-select' placeholder='Seleccione' id='m_rec' name='tipo_doc'>
                        <option value='$tipo_doc'>$tipo_doc</option>
                        <option required class='controls' type='text' name='tipo_doc'>Cédula de ciudadanía</option>
                        <option required class='controls' type='text' name='tipo_doc'>Cédula de extranjería</option>
                        <option required class='controls' type='text' name='tipo_doc'>NIUP - Registro Civil de nacimiento</option>
                        <option required class='controls' type='text' name='tipo_doc'>Pasaporte</option>
                        <option required class='controls' type='text' name='tipo_doc'>Tarjeta de identidad</option>
                    </select>
                </div>
            
            
            
            
                <div class='col-md-3 mb-3'>
                    <label>No. documento</label>
                    <input required type='text' class='form-control'   value='$no_documento' maxlength='10' name='no_documento' onkeypress='return validaNumericos(event)' >
                        <!---  indicador de que solo digite numeros--->
                    <script>
                        function validaNumericos(event) {
                            if(event.charCode >= 48 && event.charCode <= 57){
                            return true;
                            }
                            return false;        
                        }
                    </script>

                    
                </div>
                    <div class='col-md-4 mb-3'>
                        <label>Nombre</label>
                        <input required type='text' class='form-control'  name='nombre' value='$nombre'>
                    </div>

            </div>
                <div class='row'>
            
            
                    
            
                    <div class='row'>
            
                        <div  class='col-md-4 mb-3'>
                            <label>Apellido</label>
                            <input required type='text' class='form-control'  name='apellido' value='$apellido'>
                        </div>
            
                            <br />
    

            
            
            
                            <input required class='controls' type='hidden' name='radicado' value='$radicado'>
                        
                        
                        
                        </div>
                        </form>
                            
                          <center> <input type='submit' class='btn btn-primary' value='ACTUALIZAR INVITADO'></center> 
                        </br>
                        </br>
                                 <hr  />
                        </br>
                
                        <form class='p-4' method='POST' action='ConfirmacionDatosEnvioSolicitud.php' enctype='multipart/form-data'>
                            <center> <input type='submit' class='btn btn-primary' value='Ir atras'></center>
                        </form>
                        </br>";
 ?>




