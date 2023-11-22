<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>DataTables.js</title>
        <!-- Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
        <!-- DataTable -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <!-- Custom CSS -->
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <div class="container-sm my-4 ">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <table id="" class="table table-striped">
                        <thead>
                            <tr> 
                                <th class="centered" colspan="12"><center>Invitados</center></th>
                            </tr>
                        </thead>
                    </table>
                    <thead>
                    <table id="datatable_users" class="table table-striped">
                        <thead>
                            <tr>
                                <th class="centered">#</th>
                                <th class="centered" colspan="2">Tipo de documento</th>
                                <th class="centered" colspan="2">Documento</th>
                                <th class="centered" colspan="2">Nombres</th>
                                <th class="centered" colspan="2">Apellidos</th>
                                <th class="centered" colspan="2">Registrado</th>
                                <th class="centered" colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody id="tableBody_users" class="text-dark"></tbody>
                        <td class="centered" colspan="2"> 
                        </td>
                </div>
            </div>
        </div>
        <!-- Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- DataTable -->
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <!-- Custom JS -->
        <script src="Adminapp.js"></script>
        
    </body>
</html>