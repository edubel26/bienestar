<?php
    function obtenerDepartamentos() {
        include '../conexion.php';

        $query = "SELECT * FROM departamentos";
        $result = mysqli_query($db, $query);

        $json = array();
        
        while($row = mysqli_fetch_array($result)) {
            $json[] = array(
                'codDepartamento' => $row['id_depa'],
                'nomDepartamento' => $row['departamentos'],
            );
        }  

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

    function obtenerProvincias($codDepartamento) {
        include '../conexion.php';

        $query = "SELECT * FROM municipio WHERE id_depa = $codDepartamento";
        $result = mysqli_query($db, $query);

        $json = array();
        
        while($row = mysqli_fetch_array($result)) {
            $json[] = array(
                'codProvincia' => $row['id_municipio'],
                'nomProvincia' => $row['municipio'],
            );
        }

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

    function obtenerDistritos($codProvincia) {
        include '../conexion.php';;

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