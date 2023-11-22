$(document).ready(function () {
    /* --variables para llamar a los select por el id */
    let $departamento = document.getElementById('uso')
    let $provincia = document.getElementById('destino')
    let $distrito = document.getElementById('can')

    function cargarDepartamentos() {
        $.ajax({
            url: 'modelo/select.php',
            type: 'GET',
            success: function(response) {
                const departamentos = JSON.parse(response);
                let template = '<option  value="">Tipo de Reserva</option>'
    
                departamentos.forEach(departamento => {
                    template += `<option  required class="controls"  type="text" name="uso"value="${departamento.codDepartamento}">${departamento.nomDepartamento}</option>`;
                }) 

                $departamento.innerHTML = template;
            }
        })
    }
    cargarDepartamentos()

    function cargarProvincias(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const respuestas = JSON.parse(response);
                let template = '<option value="" >Destino</option>'
    
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
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const respuestas = JSON.parse(response);
                let template = '<option value="">No. Personas</option>'
    
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