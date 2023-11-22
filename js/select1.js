$(document).ready(function () {
    /* --variables para llamar a los select por el id */
    let $departamento = document.getElementById('dpto_exp')
    let $provincia = document.getElementById('mpio_exp')
    let $distrito = document.getElementById('')

    function cargarDepartamentos() {
        $.ajax({
            url: 'modelo/select1.php',
            type: 'GET',
            success: function(response) {
                const departamentos = JSON.parse(response);
                let template = '<option value="">Departamento de expedicion</option>'
    
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
            url: 'modelo/select1.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const respuestas = JSON.parse(response);
                let template = '<option value=""> Municipio de expedicion </option>'
    
                respuestas.forEach(respuesta => {
                    template += `<option required type="text" name="mpio_exp"  value="${respuesta.codProvincia}">${respuesta.nomProvincia}</option>`;
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
            url: 'modelo/select1.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const respuestas = JSON.parse(response);
                let template = '<option value="">No. personas</option>'
    
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