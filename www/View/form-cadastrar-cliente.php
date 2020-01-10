<?php include "view/header-login.php"?>

<div class="row">
<a class="nav-link link-voltar" href="<?php echo $url; ?>/home/"><i class="fas fa-chevron-left"></i> Voltar para o Inicio <i class="fas fa-home"></i></a>
</div>
            <div class="container">
                <div class="row">
                <div class="col-lg-6 col-xl-6 mx-auto">
                    <div class="card-cadastro card-signin flex-row my-5">
                    <div class="card-img-left d-none d-md-flex">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body corpo-cadastro">
                        <h5 class="card-title text-center text-light">Cadastre-se</h5>

                        <form class="form-signin" method="post" action="cadastrar">
                       

                        <div class="form-label-group">
                            <input type="text" id="usuario" name="nome" class="form-control" required autofocus>
                            <label for="inputUserame">Nome completo</label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" id="nascimento"  name="nascimento" class="form-control" required>
                            <label for="inputNascimento">Data de nascimento</label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" id="cpf" name="cpf" class="form-control" required>
                            <label for="inputCpf">CPF</label>
                        </div>

                        <div class="form-label-group">
                            <input type="email" id="email" name="email" class="form-control" required>
                            <label for="inputEmail">Email</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="senha" name="senha" class="form-control" required>
                            <label for="inputPassword">Senha</label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" id="telefone" name="telefone" class="form-control"  required>
                            <label for="inputTelefone">Telefone</label>
                        </div>
                        
                        <div class="form-label-group">
                            <input type="text" id="estado"  name="estado" class="form-control"  required>
                            <label for="inputEstado">Estado</label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" id="cep" name="cep" class="form-control" required>
                            <label for="inputCep">CEP</label>
                        </div>

                        <div class="form-label-group">
                            <input type="text" id="endereco"  name="endereco" class="form-control" required>
                            <label for="inputEndereco">Endereço</label>
                        </div>

                        <button class="btn btn-lg btn-warning btn-block text-uppercase texto-botao" type="submit" name="cadastrar" id="cadastrar">Cadastrar</button>
                        <p class="link-login-2  texto-login2">Já tem uma conta ?
                            <a class="link-login" href="<?php echo $url; ?>/login/cliente/">Entre Agora!</a>
                        </p> 
                        <hr class="my-4">
                        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Cadastrar com o Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Cadastrar com o Facebook</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            
    <?php include "view/footer-login.php"?>