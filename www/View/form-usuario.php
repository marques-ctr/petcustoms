<?php include "view/header-admin.php" ?>

        <form class="form-horizontal" method="post" action="cadastrar" style="padding: 20px">
                <fieldset>

                <!-- Form Name -->
                <legend>Cadastro de Usuario</legend>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome:</label>  
                <div class="col-md-4">
                <input id="nome" name="nome" type="text" placeholder="Digite o seu nome" class="form-control input-md" required="">
                    
                </div>

                <div class="form-group" style="margin-top: 15px">
                <label class="col-md-4 control-label" for="senha">Senha:</label>  
                <div class="col-md-4">
                <input id="senha" name="senha" type="password" placeholder="Digite a sua Senha" class="form-control input-md" required="">
                    
                </div>

                <!-- Button -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="cadastrar"></label>
                <div class="col-md-4">
                    <button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                </div>
                </div>

                </fieldset>
        </form>

<?php include "view/footer-admin.php" ?>