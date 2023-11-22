<?php include 'template/header.php' ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    
<?php


?>
    
<div class="container mt-1">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">
                    BIENESTAR SOCIAL & SST | PROCESO RESERVA CABAÑAS
                </div>
                <form class="p-4" method="POST" action="SeleccionarHabitacion.php">
                    <div class="">
                        <!--o-->
                        <div class="">
                            <!--informacion sobre pautas para poder reservar-->
                            
                            <h4><CENTER>ANTES DE INICIAR SU RESERVA TENGA EN CUENTA:</CENTER></h4>
                            <br/>
                            La reserva podrá ser programada con mínimo (30) días de antelación o con un máximo de (90) días calendario.
                            <br/><br/>
                            El tiempo máximo de permanencia para obtener el beneficio otorgados para la reserva dependerá de su uso así:
                            <br/>
                                Por Comisión de Estudio y/o Servicio, el tiempo que corresponde a la comisión.
                            <br/> 
                                Por Recreación y Turismo, máximo Siete (7) noches, ocho (8) días. 
                            <br/>
                                Por Reubicación e Integración, el tiempo será de máximo un (1) mes calendario. 
                            <br/>
                                Por Eventos e Integración, el tiempo será de  un (1) día y podrá llevar  40 invitados como máximo..
                            <br/><br/>
                            <center><strong><em>Nota: No se podrá autorizar por un tiempo superior, esto con el ánimo de beneficiar del Servicio a más funcionarios y sus familias.</em></strong></center>

                            <hr />

                            <!-- consulta dase de datos  -->
                            <?php

                                $ddocumento=$_SESSION["documen"]; 

                                include("conexion.php");

                                $sql = "SELECT * FROM usuario WHERE documento='$ddocumento'";
                                if(!$result = $db->query($sql)){
                                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                }
                                while($row = $result->fetch_assoc())
                                {

                                $nombre=stripslashes($row["nombre"]); 
                                $apellido=stripslashes($row["apellido"]);
                                $ddocumento=stripslashes($row["documento"]);

                                
                                }

                            ?>
                            
                        
                            </br>
                            </pr>



                            <!-- PRIMER BLOQUE | FECHA RECIBIDO & MEDIO A TRAVÉS DEL CUAL SE RECIBIÓ -->

                            <div class="col-md-12 ">
                                <h1 class="display-6"><center>SOLICITUD ALOJAMIENTO</center></h1>
                                <form class="needs-validation">
                                    <hr />
                            </div>
                            <div class="row" >
                                
                                

                                <input type="hidden" class="form-control"  name="documento" value='<?php echo $_SESSION["documen"];?>'>
                                
                                
                                <input type="hidden" class="form-control"  name="nombre" value='<?php echo $nombre;?>'>
                                <input type="hidden" class="form-control"  name="apellido" value='<?php echo $apellido;?>'>

                                 
                                
                                <div  class="col-md-4 mb-3">
                                    <label for="m_rec"> Tipo de solicitud </label>
                                    <select required id="uso" class="form-select" placeholder="Seleccione"  name="uso">
                                    </select>
                                </div>


                                <div  class="col-md-2 mb-3">
                                    <label for="m_rec">Alojamiento destino</label>
                                    <select required class="form-select" placeholder="Seleccione" name="destino" id="destino">    
                                    </select>
                                </div>


                                <div required class="col-md-2 mb-3">
                                    <label required for="m_rec">Número de personas</label>
                                    <select required id="can" class="form-select" placeholder="Seleccione" name="cantidad_p">
                                    </select>
                                </div>



                                <!--  fecha  -->

                                <div class="row">

                                    <div class="row">

                                      <div  class="col-md-2 mb-3">
                                        <label  for="f_ini">Fecha de inicio</label>
                                        <input  required autocomplete="off" class="form-control"   name="f_ini" id="f_ini"  value="" >
                                      </div>



                                        <div  class="col-md-2 mb-3">
                                          <label  for="f_fin">Fecha de finalizacion</label>
                                          <input  required  autocomplete="off" class="form-control"  name="f_fin" id="f_fin"  value="" >

                                      
                                        

                                        </div>
                                    <hr />


                                    
                                        <center>
                                            <!-- Button trigger modal -->
                                            <button type='button' class="btn btn-primary  col-3" data-toggle='modal' data-target='#exampleModal'>
                                                Consultar disponibilidad
                                            </button>

                                            <!-- Modal -->
                                            <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                            <div class='modal-dialog' role='document'>
                                                <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='exampleModalLabel'>RECOMENDACION</h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                    <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                    La reserva podrá ser programada con mínimo (30) días de antelación o con un máximo de (90) 
                                                    días calendario, de ser lo contrario será denegada su solicitud.
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                                                    <input type="submit" value="Consultar disponibilidad" class="btn btn-primary" name="btn_consultar">
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                    
                                        
                                    </center>
                    
            </div>
        </div> 
    </div>
</div>
<script src="js/js/jquery.min.js"></script>
<script src="js/select.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script>



// Se realiza para hacer una suma para limitar las fechas para la solicitud.
let hoy = new Date();
let semanaEnMilisegundos = 1000 * 60 * 60 * 24 * 30;
let suma = hoy.getTime() + semanaEnMilisegundos; //getTime devuelve milisegundos de esa fecha
let fechaDentroDeUnmes = new Date(suma);


let hoy2 = new Date();
let semanaEnMilisegundos2 = 1000 * 60 * 60 * 24 * 90;
let suma2 = hoy2.getTime() + semanaEnMilisegundos2; //getTime devuelve milisegundos de esa fecha
let fechaDentroDeUnmes2 = new Date(suma2);

let hoy3 = new Date();
let semanaEnMilisegundos3 = 1000 * 60 * 60 * 24 * 120;
let suma3 = hoy3.getTime() + semanaEnMilisegundos3; //getTime devuelve milisegundos de esa fecha
let fechaDentroDeUnmes3 = new Date(suma3);

//Apartado de limitación y visualización de la fecha en el input de la fecha.  

                
   var ranges = [   { start: new Date("2000-1-01")},
                    
                    
                 ];

    var f_ini = $("#f_ini").datepicker({
        beforeShowDay: function(date) {
            for(var i=0; i<ranges.length; i++) {
                if(date >= ranges[i].start && date <= ranges[i].end) return [false, ''];
            }
            
            return [true, ''];
        }
    });
    

    var f_fin = $("#f_fin").datepicker({
        beforeShowDay: function(date) {
            for(var i=0; i<ranges.length; i++) {
                if(date >= ranges[i].start && date <= ranges[i].end) return [false, ''];
            }
            
            return [true, ''];
        }
    });
    

</script>
