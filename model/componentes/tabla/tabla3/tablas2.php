<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand navbar-light bg-danger">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="" aria-current="page"
                        ><i class="bi bi-hammer img-fluid fs-5"></i></a
                    >
                    <a class="nav-item nav-link text-white" href="tabla3.html">Home</a>
                </div>
            </nav>
            
        </header>
        <main>
            <div class="container mt-5">
                <div class="row">

                    <div class="col-12">
                        <div
                    class="table-responsive"
                >
                    <table
                        class="table"
                    >
                        <thead class="table-danger">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Email</th>
                                <th scope="col">Dirección</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php 
                                $cont = 0;
                                $conexion = mysqli_connect("127.0.0.1:3307","root","","tabla3");
                                $consulta = mysqli_query($conexion,"SELECT nombre,apellido,telefono,correo,direccion FROM registros");
                               
                                while($ar = mysqli_fetch_assoc($consulta)){
                                     echo "<tr>";
                                    foreach($ar as $value){
                                        echo '<td>'.$value.'</td>' ;
                                    }
                                    echo "</tr>";
                                   $cont++;
                                }
                                mysqli_close($conexion);
                                ?>
                        </tbody>
                    </table>

                    <?php 
                    $conexion = mysqli_connect("127.0.0.1:3307","root","","tabla3");
                    $registros = mysqli_query($conexion,"SELECT COUNT(*) as contador FROM registros");

                    $ar = mysqli_fetch_assoc($registros);
                    echo '<h3>Total de registros: '.$ar['contador'].'</h3>';
                    
                    ?>
                    <!-- Modal trigger button -->
                    <button
                        type="button"
                        class="btn btn-danger btn-lg float-end"
                        data-bs-toggle="modal"
                        data-bs-target="#modalId"
                    >
                        <i class="bi bi-trash-fill img-fluid"></i> Eliminar registro
                    </button>
                    
                    <!-- Modal Body -->
                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                    <div
                        class="modal fade"
                        id="modalId"
                        tabindex="-1"
                        data-bs-backdrop="static"
                        data-bs-keyboard="false"
                        
                        role="dialog"
                        aria-labelledby="modalTitleId"
                        aria-hidden="true"
                    >
                        <div
                            class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                            role="document"
                        >
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId">
                                        Modal title
                                    </h5>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body">

                                  <form action="eliminar.php" method="post"> 
                                    <div class="mb-3">
                                        <label for="" class="form-label">Ingrese correo</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="email"
                                            id="email"
                                            aria-describedby="helpId"
                                            placeholder=""
                                        />
                                    </div>
                                  
                                </div>
                                <div class="modal-footer">
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal"
                                    >
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Optional: Place to the bottom of scripts -->
                    <script>
                        const myModal = new bootstrap.Modal(
                            document.getElementById("modalId"),
                            options,
                        );
                    </script>
                    
                </div>

                    </div>




                </div>


            </div>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

