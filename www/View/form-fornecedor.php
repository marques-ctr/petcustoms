
<?php include "view/header-admin.php" ?>
        <form class="form-horizontal" method="post" action="cadastrar" style="padding: 20px">
                <fieldset>

                <!-- Form Name -->
                <legend>Cadastro de Fornecedores</legend>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome:</label>  
                <div class="col-md-4">
                <input id="nome" name="nome" type="text" placeholder="Digite o nome do Produto" class="form-control input-md" required="">
                    
                </div>

                <div class="form-group" style="margin-top: 15px">
                <label class="col-md-4 control-label" for="cidade">Cidade:</label>  
                <div class="col-md-4">
                <input id="cidade" name="cidade" type="text" placeholder="Digite a cidade" class="form-control input-md" required="">
                    
                </div>

                <div class="form-group" style="margin-top: 15px">
                <label class="col-md-4 control-label" for="estado">Estado:</label>  
                <div class="col-md-4">
                <input id="estado" name="estado" type="text" placeholder="Digite o estado" class="form-control input-md" required="">
                    
                </div>

                <div class="form-group" style="margin-top: 15px">
                <label class="col-md-4 control-label" for="cnpj">CNPJ:</label>  
                <div class="col-md-4">
                <input id="cnpj" name="cnpj" type="text" placeholder="Digite o CNPJ" class="form-control input-md" required="">
                    
                </div>

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