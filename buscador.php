<?php include("conexion.php");



$buscardor=mysql_query("SELECT * FROM solicitud WHERE documento LIKE LOWER('%".$_POST["buscar"]."%') OR radicado LIKE LOWER ('%".$_POST["buscar"]."%') "); 
$numero=mysql_num_row($buscardor); ?>


<h5 class="card-tittle">Resultados encontrados (<?php echo $numero; ?>):</h5>

<?php while($resultado=mysql_fetch_assoc($buscardor)){ ?>


<p class="card-text"><?php echo $resultado["documento"]; ?> - <?php echo $resultado["radicado"] ?></p>


<?php } ?>