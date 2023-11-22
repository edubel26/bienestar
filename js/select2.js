$(document).ready(function () {
    /* --variables para llamar a los select por el id */
    let $departamento = document.getElementById('dpto_nac')
    let $provincia = document.getElementById('mpio_nac')
    let $distrito = document.getElementById('')

    function cargarDepartamentos() {
        $.ajax({
            url: 'modelo/select2.php',
            type: 'GET',
            success: function(response) {
                const departamentos = JSON.parse(response);
                let template = '<option value="">Departamento de nacimiento</option>'
    
                departamentos.forEach(departamento => {
                    template += `<option required class="controls"  type="text" name="uso"value="${departamento.codDepartamento}">${departamento.nomDepartamento}</option>`;
                }) 

                $departamento.innerHTML = template;
            }
        })
    }
    cargarDepartamentos()

    function cargarProvincias(sendDatos) {
        $.ajax({
            url: 'modelo/select2.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const respuestas = JSON.parse(response);
                let template = '<option value=""> Municipio de nacimiento </option>'
    
                respuestas.forEach(respuesta => {
                    template += `<option required type="text" name="destino"  value="${respuesta.codProvincia}">${respuesta.nomProvincia}</option>`;
                })

                $provincia.innerHTML = template;
            }
        })
    }
    $departamento.addEventListener('change', () => {
        const codDepartamento = $departamento.value

        const sendDatos = {
            'codigoDepar': codDepartamento
        }
        
        cargarProvincias(sendDatos)

        $distrito.innerHTML = ''
    })
    function cargarDistritos(sendDatos) {
        $.ajax({
            url: 'modelo/select2.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const respuestas = JSON.parse(response);
                let template = '<option class="controls" type="text" name="cantidad_p">No. personas</option>'
    
                respuestas.forEach(respuesta => {
                    template += `<option required class="controls" type="text" name="cantidad_p" value="${respuesta.codDistrito}">${respuesta.nomDistrito}</option>`;
                })

                $distrito.innerHTML = template;
            }
        })
    }
    $provincia.addEventListener('change', () => {
        const codProvincia = $provincia.value

        const sendDatos = {
            'codigoProv': codProvincia
        }
        
        cargarDistritos(sendDatos)
    })
})