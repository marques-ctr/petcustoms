<?php include "view/header.php"?>

<div class="container py-4 my-2 mt-5">
    <div class="row">
        <div class="col-md-3 mb-5 mb-md-0">

       
                <div class="py-2 px-3 card-categoria mt-5">
                <ul class="list-group" style=background-color: #6f42c1;>
			<a class="list-group-item text-center font-weight-bold  info-painel"> <i class="fa fa-align-justify" aria-hidden="true"></i> &nbsp; Categorias</a>
			<a class="list-group-item menu-cate text-decoration-none text-center" href="#"> <i class="fa fa-paw" aria-hidden="true"></i> &nbsp; Cachorro </a>
			<a class="list-group-item menu-cate text-decoration-none text-center" href="#"><i class="fa fa-cat" aria-hidden="true"></i>  &nbsp;   Gato </a>
			<a class="list-group-item menu-cate text-decoration-none text-center" href="#">  <i class="fa fa-child" aria-hidden="true"></i> &nbsp; Dono do Pet </a>
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

                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card mt-2">
                <img class="w-100 mt-2 mb-3 foto-produto" src="<?php echo $url;['imagem']?>/View/img/produtos/<?php echo $produto['imagem'] ?>" />
                    <div class="card-body">
                    <h4 class="card-title font-weight-bold nome-produto text-center"><a href="<?php echo $url; ?>/produto/item/<?php echo $produto['id'] ?>"><?php echo $produto['nome'] ?></h4>
                    <h6 class="card-subtitle mb-2 text-muted text-center"><a href="#"><?php echo $produto['departamento'] ?></h6>
                    <div class="buy d-flex justify-content-between align-items-center">
                        <div class="price text-dark preco-produto"><h5 class="mt-4">R$ <?php echo  number_format($produto['preco'],2, ",",","); ?></h5></div>
                        <div>
                        <a href="<?php echo $url ?>/carrinho/adicionar/<?php echo $produto['id'] ?>" class="btn btn-warning mt-3 ml-2 font-weight-bold botao-carrinho"> <i  href="<?php echo $url ?>/carrinho/adicionar/<?php echo $produto['id'] ?>" class="fas fa-shopping-cart"></i> +</a>
                    </div>
                    </div>
                    </div>
                </div>
    </div>
                  
                <?php } ?>


                
                </div>
                </div>
                </div>
                </div>

                
                
            
            
 
<?php include "view/footer.php"?>