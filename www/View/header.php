<!doctype html>
<html lang="pt-br">
    <head>

    <title>Pet Customs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    
    <style>
    a{
        color: #6f42c1!important;
    }

    .info-painel{
        background-color: #6f42c1!important;
        border-color: #6f42c1!important;
        color: #ffc107!important;
    }

    .titulo-tabela{
        background-color: #6f42c1!important;
        color: #ffc107!important;
        border-color: #6f42c1!important;
    }
    
    .nome-produto{
        font-size: 15px;
    }
    
    .menu-cate:hover{
        background-color: #6f42c1!important;
        color: #ffc107!important;
        transition: 0.3s;
    }

    .botao-carrinho:hover{
        background-color: #6f42c1!important;
        color: #ffc107!important;
        transition: 0.3s;
        border-color: #6f42c1!important;
    }
    .foto-produto:hover{
        -webkit-transform: scale(1.08);
        transform: scale(1.02);
        transition: 0.3s;
    }

    @media (min-width: 768px){

    .card-categoria{
        margin-top: 100px!important;
    }
    }

    @media (max-width: 768px){
        .painel-aba{
            margin-top: 10px!important;
        }
    }

    .card-categoria{
        margin-top: 100px!important;
    }
        

    .card-categoria{
        margin-top: 100px!important;

        }
    }

    </style>
        
    </head>
            <body>
<!--  Menu/Navbar -->

            <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow fixed-top">
            <div class="container">
            <a class="navbar-brand"  href="#">
            <img src="../Img/logo-1teste.png" width="150" height="20" class=" mt-1 d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="<?php echo $url; ?>/produtos/">Produtos</a>
            </li>
            </ul>

<!--- Barra de Pesquisa -->    

            <div class="bg-light rounded rounded-pill shadow-sm col-sm-12 col-xs-12 col-md-12 col-lg-7 barra-pesquisa mx-auto">
            <div class="input-group">
            <input href="<?php echo $url; ?>/resultado/busca/" name="" type="search" placeholder="Procure em todo nosso site..." aria-describedby="button-addon1" class="form-control border-0 bg-light">
            <div class="input-group-append">
            <button id="button-addon1" type="submit" class="btn btn-link text-warning"><i class="fa fa-search"></i></button>
            </div>
            </div>
            </div>

<!--- Barra de Pesquisa -->

                <ul class="navbar-nav">
                    <li class="nav-item dropdown carrinho-menu">
                        <a class="nav-link dropdown" href="<?php echo $url; ?>/carrinho/">  <i class="fa fa-shopping-cart"></i> Carrinho</a> 
                    </li>
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown">
                    
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>

                        <!-- Nome do Usuario/Cliente Logado --->
                        <?php if(isset($_SESSION['clientenome'])) echo $_SESSION['clientenome']; ?>
                        <!-- Nome do Usuario/Cliente Logado --->
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item font-weight-bold" href="<?php echo $url; ?>/login/cliente/"> Fazer Login &nbsp; <i class="fa fa-user" aria-hidden="true"></i> </a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item font-weight-bold" href="<?php echo $url; ?>/cadastro/cliente/"> Cadastrar-se &nbsp; <i class="fa fa-pen" aria-hidden="true"></i> </a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item font-weight-bold" href="<?php echo $url; ?>/cliente/logoff"> Sair &nbsp; <i class="fa fa-sign-out-alt" aria-hidden="true"></i></a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item font-weight-bold" id="painel" href="<?php echo $url; ?>/painel/cliente/">Minha Conta &nbsp; <i class="fas fa-chalkboard-teacher    "></i></a>
                        
                        </div>
                    </li>
                </ul>
            </div>
            </div>
            </nav>     
<!--  Menu/Navbar -->
