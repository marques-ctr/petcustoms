<?php include "view/header-login.php"?>

<div class="row">
<a class="nav-link link-voltar ml-2 mt-2" href="http://localhost/petcustoms/www/home/"><i class="fas fa-chevron-left"></i> Voltar para o Inicio <i class="fas fa-home"></i></a>
</div>

            <div class="container">
                <div class="row">
                <div class="col-lg-5 col-md-7 col-xs-7 col-sm-5 col-xl-5 mx-auto form-login">
                    <div class="card card-signin flex-row my-5">
                    <div class="card-img-left-2 d-none d-md-flex">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center text-light">Faça o Login</h5>
                        <form class="form-signin" method="post" action="cliente">
                        <div class="form-label-group">
                            <input type="text" name="email" class="form-control"required autofocus>
                            <label for="inputUserame">Endereço de Email</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" name="senha" class="form-control"  required>
                            <label for="inputPassword">Senha</label>
                        </div>
                        
                        <button class="btn btn-lg btn-warning btn-block text-uppercase texto-botao" type="submit">Entrar</button>
                        <p class="link-login-2  texto-login2">Não tem uma conta ?
                            <a class="link-login" href="">Cadastre-se!</a>
                        </p> 
                        <hr class="my-4">
                        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Entrar com o Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Entrar com o Facebook</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
    
    <?php include "view/footer-login.php"?>