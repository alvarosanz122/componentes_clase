<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
 <link rel="stylesheet" href="http://localhost/componentes/views/style.css">
        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/estilos.css">
        
    </head>

    <body>
        <header>

        </header>
        <main>
            <h1 class="text-center mt-5"> <i class="bi bi-table fs-1"></i><br> Tablas dinamicas</h1>
            <div class="container mt-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/tabla-dinamica-01.jpg" class="card-img-top h-100 img-fluid" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center"><span style="font-family: Arial, Helvetica, sans-serif;" class="text-primary fw-bold">Planificación de Actividades </span><br>
    <!-- Modal trigger button -->
    <button
        type="button"
        class="btn btn-primary btn-lg mt-2 botonTabla"
        data-id="1"
    >
        Descripción
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
            class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl"
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

                    <div class="container">
                      <div class="row">
                        <div class="col-xl-6 col-12">
                            <div class="card border-dark">
                                <h6 class="text-center" id="tituloModal"></h6>
                                <img class="card-img-top" id="imagenModal" src="" alt="Title" />
                                <div class="card-body">
                                    <h6 class="card-title">Tecnologías Utilizadas</h6>
                                    <p class="card-text">
                                    

                                        <table class="table table-borderless d-flex justify-content-center">
  

  <tbody>

  <tbody id="tecnologiasModal">

    <tr>
      <th class="text-end"><i class="bi bi-filetype-html"></i></th>
      <td class="text-start">Html</td>
    </tr>
    <tr>
      <th class="text-end"><i class="bi bi-javascript"></i></th>
      <td class="text-start">JavaScript</td>
    </tr>
    <tr>
      <th class="text-end"><i class="bi bi-filetype-php"></i></th>
      <td class="text-start">Php</td>
    </tr>
    <tr>
      <th class="text-end"><i class="bi bi-bootstrap"></i></th>
      <td class="text-start">Bootstrap</td>
    </tr>
    <tr>
      <th class="text-end"><a href="https://github.com/alvarosanz122/tabla_planificacion_actividades"><i class="bi bi-github text-primary"></i></a></th>
      <td class="text-start">GitHub</td>
      <th class="text-end"><a href="" id="demoModal"><i class="bi bi-file-earmark text-primary"></i></a></th>
      <td class="text-start">Ver demo</td>
    </tr>
  </tbody> 
</table>

                                    </p>
                                </div>
                            </div>
                            

                        </div>
                        
                        <div class="col-xl-6 col-12 ">

                            <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Descripcion
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body" id="descripcionModal">
       
      </div>
    </div>

  </div>
   <a  target="_blank" class="btn mt-5"><img src="img/descargar.png" class="img-fluid w-50" alt=""></a>
</div>



                        </div>
                      </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Cerrar
                    </button>
                    <a href="" id="descargaModal" class="btn btn-primary">Descargar</a>
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
    
    
    
    </h5>
       
      </div>
  
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/tabla-dinamica-02.jpg" class="card-img-top h-100" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center"><span style="font-family: Arial, Helvetica, sans-serif;" class="text-primary fw-bold">Calculo de Bebida </span><br>
       <button
        type="button"
        class="btn btn-primary btn-lg mt-2 botonTabla"
        data-id="2"
    >
        Descripción
    </button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/tabla-dinamica-03.jpg" class="card-img-top h-100" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center"><span style="font-family: Arial, Helvetica, sans-serif;" class="text-primary fw-bold">Insertar registro </span><br>
       <button
        type="button"
        class="btn btn-primary btn-lg mt-2 botonTabla"
        data-id="3"
    >
        Descripción
    </button>
      </div>
    </div>
  </div>
  
            
</div>

              





            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script src="js/modal.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
