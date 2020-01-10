<?php include "view/header-admin.php" ?>

<form class="form-horizontal" method="post" action="cadastrar" style="padding: 15px">
<fieldset>

<!-- Form Name -->
<legend>Cadastro</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="Digite seu nome" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nascimento">Data de Nasc.</label>  
  <div class="col-md-4">
  <input id="nascimento" name="nascimento" type="text" placeholder="xx/xx/xxxx" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpf">CPF</label>  
  <div class="col-md-4">
  <input id="cpf" name="cpf" type="text" placeholder="Digite seu CPF" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-Mail</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="exemplo@email.com" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senha">Senha</label>  
  <div class="col-md-4">
  <input id="senha" name="senha" type="password" placeholder="Digite uma Senha" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone">Telefone</label>  
  <div class="col-md-4">
  <input id="telefone" name="telefone" type="text" placeholder="(xx) xxxx-xxxx" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="estado">Estado</label>  
  <div class="col-md-4">
  <input id="estado" name="estado" type="text" placeholder="Digite seu Estado" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cep">CEP</label>  
  <div class="col-md-4">
  <input id="cep" name="cep" type="text" placeholder="Digite o CEP do seu Endereço" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="endereco">Endereço</label>  
  <div class="col-md-4">
  <input id="endereco" name="endereco" type="text" placeholder="Digite seu Endereço" class="form-control input-md" required="">
    
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