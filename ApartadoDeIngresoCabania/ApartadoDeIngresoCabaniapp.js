let dataTable;
let dataTableIsInitialized = false;

const dataTableOptions = {
    //scrollX: "2000px",
    

    lengthMenu: [3, 10, 15, 20, 40],
    columnDefs: [
        { className: "centered", colspanName: "2",  targets: [0, 1, 2, 3, 4, 5, 6]},
        { orderable: false, targets: [5, 6] },
        { searchable: false, targets: [1],  },
        { colspanName: "2",  targets: [0, 1, 2, 3, 4, 5, 6] }
        //{ width: "50%", targets: [0] }
    ],
    pageLength: 3,
    destroy: true,
    language: {
        
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún usuario encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Ningún usuario encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar por numero de documento:",
        loadingRecords: "Cargando...",
        paginate: {
            first: "Primero",
            last: "Último",
            next: "Siguiente",
            previous: "Anterior"
        }
        
    }
};

const initDataTable = async () => {
    if (dataTableIsInitialized) {
        dataTable.destroy();
    }

    await listUsers();

    dataTable = $("#datatable_users").DataTable(dataTableOptions);

    dataTableIsInitialized = true;
};

const listUsers = async () => {
    try {
        const response = await fetch('ApartadoDeIngresolistar.php');
        const users = await response.json();
        
        let content = ``;
        users.forEach((item, index) => {
            content += `
                <tr>
                        
                    <td>${index + 1}</td>
                    <td colspan="2">${item.tipo_doc}</td>
                    <td colspan="2">${item.no_documento}</td>
                    <td colspan="2">${item.nombre}</td>
                    <td colspan="2">${item.apellido}</td>
                    
                    <td colspan="2"><i class="fa-solid fa-check" style="color: green;"></i></td>
                    <td colspan="2">
                    </td>
                </tr>
                `;
        });
        tableBody_users.innerHTML = content;
    } catch (ex) {
        alert(ex);
    }
};

window.addEventListener("load", async () => {
    await initDataTable();
});