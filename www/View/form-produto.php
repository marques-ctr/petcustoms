
<?php include "view/header-admin.php" ?>
        <form class="form-horizontal" method="post" action="cadastrar" style="padding: 20px" enctype="multipart/form-data">
                <fieldset>

                <!-- Form Name -->
                <legend>Cadastro de Produto</legend>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome:</label>  
                <div class="col-md-4">
                <input id="nome" name="nome" type="text" placeholder="Digite o nome do Produto" class="form-control input-md" required="">
                    
                </div>

                <div class="form-group" style="margin-top: 15px">
                <label class="col-md-4 control-label" for="preco">Preco:</label>  
                <div class="col-md-4">
                <input id="preco" name="preco" type="text" placeholder="Digite o preco do produto" class="form-control input-md" required="">
                    
                </div>

                <div class="form-group" style="margin-top: 15px">
                <label class="col-md-4 control-label" for="preco">Descrição:</label>  
                <div class="col-md-4">
                <input id="descricao" name="descricao" type="text-area" placeholder="Descrição do Produto" class="form-control input-md" required="">
                    
                </div>

                <div class="form-group" style="margin-top: 15px">
                <label class="col-md-4 control-label" for="imagem">Imagem:</label>
                <div class="col-md-4">
                <input id="imagem" name="imagem" type="file" placeholder="" class=" form-control input-md" required="">
                </div>
                </div>


                <div class="form-group" style="margin-top: 15px">
                <label class="col-md-4 control-label" for="departamento">Departamento:</label>  
                <div class="col-md-4">

                <select name="departamento" class="form-control input-md">

                <?php foreach($lista as $departamento) { ?>
                
                    <option value="<?php echo $departamento['pk_departamento'] ?>"> <?php echo $departamento['nome'] ?></option>
                    
                <?php } ?>

                </select>

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