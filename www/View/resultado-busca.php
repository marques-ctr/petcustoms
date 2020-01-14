


<?php include "view/header.php"?>

<div class="jumbotron">
        <div class="container mt-5">
            <h4 class="display-4">Resultado de Pesquisa</h4>
            <img class="img-resp"  src="">
                <p class="lead"></p>
        </div>
    </div>



<div class="container py-4 my-2">
    <div class="row">
        <div class="col-md-3 mb-5 mb-md-0">

       
     <div class="py-2 px-3 card-categoria mt-5">
            <ul class="list-group" style=background-color: #6f42c1;>
                <a class="list-group-item text-center font-weight-bold  info-painel"> <i class="fa fa-align-justify" aria-hidden="true"></i> &nbsp; Categorias</a>
                <a class="list-group-item menu-cate text-decoration-none" href="#"> Cachorro &nbsp; <i class="fa fa-paw" aria-hidden="true"></i> </a>
                <a class="list-group-item" href="#"> Gatos  </a>
                <a class="list-group-item" href="#"> Roedores  </a>
                <a class="list-group-item" href="#"> Para o Dono do PET  </a>
            </ul>

        </div>
        </div>

        <div class="col-md-9">
        <ul class="nav justify-content-end mr-4">
        <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle font-weight-bold" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Filtrar Por</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Mais Vendidos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Maior Preço</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Menor Preço</a>
            </div>
        </ul>
        <hr>
            <div class="row px-3">
                
            <?php foreach($lista as $produto) { ?>
               
                  
                  
            <?php } ?>


                
                </div>
                </div>
                </div>
                </div>

                
                
            
            
 
<?php include "view/footer.php"?>