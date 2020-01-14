<?php include "view/header.php"?>

    <div class="jumbotron">
        <div class="container mt-5">
            <h4 class="display-4">Carrinho de Compras</h4>
                <p class="lead"></p>
        </div>
    </div>

    <section class="section-content padding-y">
<div class="container">

<div class="row">
<main class="col-md-9">
	
<div class="card table-responsive">




<table class="table table-hover">
<thead class="thead titulo-tabela">

    <tr>
      <th>Produto</th>
	  <th>Qntd</th>
      <th>Preço</th>
	  <th class="mr-1"></th>
    </tr>
  </thead>

  <tbody>
  
  <?php
                        @$carrinho = $_SESSION['carrinho'];

                        if($carrinho === null || empty($carrinho->getItems())){
                            // Inicio HTML
                            ?><tr>
                                  <td><p>Seu Carrinho está vazio</p></td>
                                  </tr>
                            <?php
                            // Fim HTML
                        }else{

                            foreach ($carrinho->getItems() as $item){
                                
                                $produto = $item->getProduto();
                                
                                
                                $link = "http://localhost/petcustoms/carrinho/remover/".$produto->getId();
                            
                                // Inicio HTML
                            ?>
    <tr>
      <td><img width="50" src="<?php echo $url; ?>/View/img/produtos/<?php echo $produto->getImagem(); ?>" class="img-sm">
	  <a href="#" class="title text-right font-weight-bold" width="50"><?php echo $item->getProduto()->getNome(); ?></a></td>
      <td width="20">
	  <input type="number" value="1" aria-label="Search" class="form-control" style="width: 70px">
	  </td>
	  <td width="50"><var class="price">R$ <?php echo $item->getProduto()->getPreco(); ?></var></td>
      <td width="30" class="text-right mt-1"><a href="<?php echo $url; ?>/carrinho/remover/<?php echo $item->getProduto()->getId(); ?>" class="btn btn-warning botao-carrinho"> <i class="fa fa-trash" aria-hidden="true"></i></a></td>
    </tr>
	<?php   
                    // Fim HTML
                            }
                        }
                    ?>
  </tbody> 
</table>



<div class="card-body">
 <a href="#" class="btn btn-light float-left"> <i class="fa fa-chevron-left"></i> Voltar </a> 
	<a href="<?php echo $url; ?>/pedido/finalizar/" class="btn btn-warning botao-carrinho float-right"> Finalizar Compra <i class="fa fa-chevron-right"></i> </a>
</div>	
</div> <!-- card.// -->

<div class="alert alert-success mt-3">
	<p class="icontext"><i class="icon text-success fa fa-truck"></i> Entrega Grátis para a região sul e sudeste.</p>
</div>


	</main> <!-- col.// -->
	<aside class="col-md-3">
		<div class="card rounded mb-3">
			<div class="card-body">
			<form method="post" action="<?php echo $url; ?>/frete/calcular/">
				<div class="form-group">
					<label>Calcular Frete</label>
					<div class="input-group">
						<input type="text" class="form-control" name="cep" placeholder="Digite o CEP">
						<span class="input-group-append"> 
							<button class="btn btn-warning botao-carrinho" style="color: #6f42c1!important;">Calcular</button>
						</span>
					</div>
				</div>
				<?php
                            if(isset($_POST['cep'])){
                                echo "<p>Preço: R$ ".$frete->getValor()."</p>";
                                echo "<p>Entrega: " .$frete->getPrazoEntrega(). "  dias</p>";

                            }

                            ?>

			</form>
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
		<div class="card">
			<div class="card-body">


			

					<!-- COLOCAR CONTEUDO AQUI  -->




					<hr>
					<p class="text-center mb-3">
						<img src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/payments.png" height="26">
					</p>
					
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
	</aside> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
</div>



<?php include "view/footer.php"?>