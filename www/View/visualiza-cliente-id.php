<?php include "view/header-admin.php" ?>


<form class="form-horizontal" method="post" action="" style="padding: 20px">
                <fieldset>

                <!-- Form Name -->
                <legend>Visualizar Departamento</legend>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome:</label>  
                <div class="col-md-4">
                <input id="nome" name="nome" value="<?php echo $departamento["nome"]; ?>">
                    
                </div>



                <!-- Button -->
                <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Atualizar</button>
                </div>
                </div>

                </fieldset>
        </form>


<?php include "view/footer-admin.php" ?>