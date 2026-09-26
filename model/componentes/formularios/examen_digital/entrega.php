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
            <nav
                class="navbar navbar-expand-sm navbar-light bg-danger"
            >
                <div class="container">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="panel.html" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="dropdownId"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    >Examen</a
                                >
                                <div
                                    class="dropdown-menu"
                                    aria-labelledby="dropdownId"
                                >
                                    <a class="dropdown-item" href="crear.html"
                                        >Crear examen</a
                                    >
                                </div>
                            </li>
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                            <input
                                class="form-control me-sm-2"
                                type="text"
                                placeholder="Search"
                            />
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                Search
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            
        </header>
        <main>
            <?php
            $conexion = mysqli_connect("127.0.0.1:3307","root","","examen") or die ("Error en la conexión");
            $consulta = mysqli_query($conexion,'SELECT * FROM respuestas WHERE corregido ="N"') OR die("error de consulta".mysqli_error($conexion));
            $res  = '';
            $cont = 1;
            $respuestas = '<h4 class="card-title text-center"><i class="bi bi-file-earmark-ruled fs-2"></i> No hay examenes por corregir</h4>';

            if(mysqli_num_rows($consulta) > 0){
                 $respuestas = '';
              while($ar = mysqli_fetch_array($consulta)){
        foreach($ar as $indice => $value){
           if(!is_numeric($indice) && $indice !='id_examen' && $indice !='corregido'){ 
            $res .= '<h5 class="card-title">'.ucfirst(str_replace("_"," ",$indice)).': '.$value.'</h5>
                         <hr>';     
           }

        }
         $respuestas.='<div class="card border-dark mt-5" id="contenedor'.$ar['id_examen'].'">
                         <div class="card-body p-5">
                         <h4 class="card-title"><i class="bi bi-file-earmark-ruled fs-2"></i> Examen enviado</h4>
                         '.$res.'
                         <button
                type="button"
                class="btn btn-primary btn-lg botonFormulario"
                 data-id="'.$ar['id_examen'].'" data-name="'.$ar['nombre_estudiante'].'"
            >
                Corregir
            </button>
                         </div>
                         
                         
                         </div>';
                 $res = '';
                 $cont++;          

        }

}

            
            ?>
            <div class="container mt-5 p-5">
                <div class="row">
                    <div class="col-12 mt-5">
                        <?php echo $respuestas;?> 
                        
                    </div>
                </div>
            </div>
            
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
                    class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
                    role="document"
                >
                    <div class="modal-content">
                        <div class="modal-header">
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                              <form method="post" name="examen">
                                    <div class="mb-3">
                                        <input
                                            type="hidden"
                                            class="form-control"
                                            name="idOculto"
                                            id="idOculto"
                                            value =""
                                        />
                                        <div class="mb-3">
                                            <label for="" class="form-label">Introduce la nota del alumno <strong id="nombreAlum"> </strong></label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                name = "nota1"
                                                id = "nota1"
                                                aria-describedby="helpId"
                                                min="0"
                                                max="10"
                                                placeholder=""
                                                required
                                            />
                                            
                                        </div>

                                    </div>
                                    


                              </form>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Close
                            </button>
                            <button type="button" class="btn btn-primary" onclick="validar()">Enviar</button>
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
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->

        <script src="js/examen.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
