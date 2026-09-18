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
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    </head>

    <body>
            <?php include 'nav/header.php'; ?>
        <main>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-6 bg-danger pantalla-completa">
                <ul class="mt-2">
                <li> <a class="text-white" href="">Home</a></li>
                <li> <a class="text-white" href="">Clientes</a></li>
                <li> <a class="text-white" href="">Productos</a></li>
                <li> <a class="text-white" href="">Ventas</a></li>
                </ul>
               
            </div>
            <div class="col-xl-10 col-6 mt-5">
                <div class="row">
                    <div class="col-12 col-xl-6">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">
                                <div class="bg-black text-white p-2">
                                  <i class="bi bi-person img-fluid fs-4"></i> Notificaciones
                                </div>
                                
                                   <div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-bold text-center">Nuevos mensajes</h5>
      <p class="card-text fw-bold text-center fs-3">0</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-bold text-center">Nuevos Productos</h5>
      <p class="card-text fw-bold text-center fs-3">0</p>
    </div>
  </div>
</div>
                                

                                    
                                <div class="bg-black text-white p-2 mt-5">
                                  <i class="bi bi-person img-fluid fs-4"></i> Clientes y Boletin
                                </div>
                                <div
                                    class="table-responsive"
                                >
                                    <table
                                        class="table table"
                                    >
                                        <thead>
                                            <tr>
                                                <th scope="col"><a href="#" class="text-black enlace">Nuevos clientes</a></th>
                                                <th scope="col">0</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                <th scope="row"><a href="#" class="text-black enlace">Nuevos suscriptores</a></th>
                                                <th scope="row">0</th>
                                            </tr>
                                            <tr class="">
                                                <th scope="row"><a href="#" class="text-black enlace">Total</a></th>
                                                 <th scope="row">0</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                 
                                <div class="bg-black text-white p-2 mt-5">
                                  <i class="bi bi-person img-fluid fs-4"></i> Visitas
                                </div>
                                <div
                                    class="table-responsive"
                                >
                                    <table
                                        class="table"
                                    >
                                        <thead>
                                            <tr>
                                                <th scope="col" class="fw-bold">Visitas</th>
                                                <th scope="col" class="fw-bold">0</th>
                                            </tr>
                                        </thead>
                                      
                                    </table>
                                </div>
                                



                            </div>
                            
                        </div>
                        
                    </div>
                   <div class="col-12 col-xl-6">
<div class="alert alert-warning" role="alert">
  A simple warning alert—check it out!
</div>
                     <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       Facturacion
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ul>

        <li><!-- Modal trigger button -->
        <button
            type="button"
            class="btn btn-primary btn-lg"
            data-bs-toggle="modal"
            data-bs-target="#modalId"
        >
            Crear factura
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
                    <div class="modal-body">Body</div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Save</button>
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
        </li>
        </ul>





      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Productos
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
                     
<div class="card mt-5">
    <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
    <div class="card-body">
        <h4 class="card-title">Title</h4>
        <p class="card-text">Text</p>
    </div>
</div>

                    </div>

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
