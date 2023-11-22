<?php
    function obtenerDepartamentos() {
        include '../conexion.php';

        $query = "SELECT * FROM uso";
        $result = mysqli_query($db, $query);

        $json = array();
        
        while($row = mysqli_fetch_array($result)) {
            $json[] = array(
                'codDepartamento' => $row['id_uso'],
                'nomDepartamento' => $row['uso'],
            );
        }  

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

    function obtenerProvincias($codDepartamento) {
        include '../conexion.php';

        $query = "SELECT * FROM destino WHERE id_uso = $codDepartamento";
        $result = mysqli_query($db, $query);

        $json = array();
        
        while($row = mysqli_fetch_array($result)) {
            $json[] = array(
                'codProvincia' => $row['id_destino'],
                'nomProvincia' => $row['destino'],
            );
        }

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

    function obtenerDistritos($codProvincia) {
        include '../conexion.php';

        $query = "SELECT * FROM can_acomp WHERE id_destino = $codProvincia";
        $result = mysqli_query($db, $query);

        $json = array();
        
        while($row = mysqli_fetch_array($result)) {
            $json[] = array(
                'codDistrito' => $row['id_can'],
                'nomDistrito' => $row['can_acomp'],
            );
        }  

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

    if( isset($_POST['codigoDepar']) ) {
        $codDepartamento = $_POST['codigoDepar'];
        obtenerProvincias($codDepartamento);
    } else if( isset($_POST['codigoProv']) ) {
        $codProvincia = $_POST['codigoProv'];
        obtenerDistritos($codProvincia);
    } else {
        obtenerDepartamentos();
    }
?>