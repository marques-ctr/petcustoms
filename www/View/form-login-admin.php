<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <style>
    form{
        padding: 100px;
    }
    </style>

  
    <title> Pet Customs - Painel do Administrador</title>

</head>

<body class="text-center">

    <div class="container">
    
    <form class="form-signin col-5 mx-auto" method="post" action="login">

      <img class="mb-4" src="http://cdn.onlinewebfonts.com/svg/img_246925.png" alt="" width="72" height="72">
      
      <h1 class="h3 mb-3 font-weight-normal">Pet Customs - Administrador</h1>

      <label for="inputEmail" class="sr-only">Digite seu Login</label>
      <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu Login" required autofocus>

    <div class="mt-2">

    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
 
    <button class="btn btn-lg btn-warning btn-block mt-3" type="submit" id="login" name="login">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
    </div>
    </div>
<?php include "view/footer-admin.php" ?>