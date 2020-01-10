<?php include "view/header-admin.php" ?>

        <form class="form-horizontal" method="post" action="cadastrar" style="padding: 15px">
                <fieldset>

                <!-- Form Name -->
                <legend>Cadastro de Departamento</legend>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome do Departamento</label>  
                <div class="col-md-4">
                <input id="nome" name="nome" type="text" placeholder="Digite o nome do departamento" class="form-control input-md" required="">
                    
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