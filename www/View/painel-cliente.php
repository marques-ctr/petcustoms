<?php include "view/header.php"?>

<div class="jumbotron mt-5"> 

<div class="container">
<h4 class="display-4">Minha Conta</h4>
</div>
</div>

</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

<div class="row">
	<aside class="col-md-3">
		<ul class="list-group" style=background-color: #6f42c1;>
			<a class="list-group-item bg-warning info-painel font-weight-bold" href="#"> Painel do Cliente </a>
			<a class="list-group-item"> 
			<div class="">"<?php echo $_SESSION['clientenome']; ?>" está logado. <span class="badge badge-success">Online</span>  </div>
			<a class="list-group-item font-weight-bold" href="http://localhost/petcustoms/www/cliente/logoff">Sair  <i class="fa fa-sign-out-alt" aria-hidden="true"></i></a>  
		</ul>
	</aside> <!-- col.// -->
	<main class="col-md-9">

		<article class=" mb-3 card-resumo painel-aba">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active fonte-weight-bold" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pedidos</a>
	</li>
	<li class="nav-item">
		<a class="nav-link font-weight-bold" id="profile-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="profile" aria-selected="false">Editar Informações</a>
	</li>
	</ul>
	<div class="tab-content" id="myTabContent">

	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

	<!-- TABELA PEDIDOS-->

		<article class=" mb-3">
					<div class="card-body">
						<table class="table table-hover">

					<thead class="thead titulo-tabela">
						<tr>
						<th width="100">N° Pedido</th>
						<th>Pedido</th>
						<th width="155">Data do Pedido</th>
						</tr>
					</thead>

					<tbody>
						<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						</tr>
						<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						</tr>
					</tbody>

				</table>
				</div> <!-- card-body .// -->
			</article> <!-- card.// -->

	<!-- TABELA PEDIDOS-->

	</div>

	<div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">
	2
	</div>

	</div>
			</div> <!-- card-body .// -->
		</article> <!-- card.// -->

<!-- TABELA PEDIDOS-->

	</main> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
</div>
</div>
</div>


<?php  include "view/footer.php"?>