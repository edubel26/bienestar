
let fecha1 = new date(f_ini);
let fecha2 = new date(f_fin);

let milisegundosDia = 24 * 60 * 60 * 1000
let milisegundosTrascurridos = math.abs(fecha1.getTime() - fecha2.getTime());

let diasTranscurridos = math.round(milisegundosTrascurridos/milisegundosDia);

function diasTranscurridoss() {

    let template = '<input type="text" readonly onmousedown  class="form-control" name="dias_total" id="dias_total">'

    diasTranscurridos.forEach(departamento => {
    template += `<input type="text" readonly onmousedown  class="form-control" name="dias_total" id="dias_total" value="${departamento}" >`;
            });
        } 

          


