<?php 
    use LOJA\Includes\Config;
    
    require "Includes/autoload.php";
    session_start();
    
    @$router = $_GET['model'].$_GET['action'];
    
    $view = "";

    $config = new Config();
    $url = $config->url;

    switch($router){

        ///////////////// PAINEL DO ADMINISTRADOR /////////////////

        case 'departamentocadastrar':
            LOJA\Includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\DepartamentoCadastrar;
            $msg = $obj->msg;
            $view = "form-departamento.php";
            break;

        case 'departamentolistar':;
            LOJA\Includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\DepartamentoListar;
            $lista = $obj->lista;
            $view = "lista-departamento.php";
            break;

        case 'departamentovisualizar':
            LOJA\Includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\DepartamentoVisualizar;
            $departamento = $obj->dados;
            $view = "visualiza-departamento.php";
            break;
            


        case 'clientecadastrar':
            LOJA\Includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\ClienteCadastrar;
            $msg = $obj->msg;
            $view = "form-cliente.php";
            break;

        case 'clientelistar':
            LOJA\Includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\ClienteListar;
            $lista = $obj->lista;
            $view = "lista-cliente.php";
            break;

        case 'clientevisualizar':
            LOJA\Includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\ClienteVisualizar;
            $cliente = $obj->dados;
            $view = "visualiza-cliente.php";
            break;
            
        case 'usuariolistar':
            LOJA\Includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\UsuarioListar;
            $lista = $obj->lista;
            $view = "lista-usuario.php";
            break;

        case 'usuariocadastrar':
            LOJA\Includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\UsuarioCadastrar;
            $msg = $obj->msg;
            $view = "form-usuario.php";
            break;       

        case 'produtocadastrar':
            LOJA\Includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\ProdutoCadastrar;
            $msg = $obj->msg;

            $obj2 = new \LOJA\API\DepartamentoListar;                
            $lista = $obj2->lista;

            $view = "form-produto.php";
            break;

        case 'produtolistar':
            LOJA\Includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\ProdutoListar;
            $lista = $obj->lista;
            $view = "lista-produto.php";
            break;

        case 'produtobuscar':
            $obj = new \LOJA\API\ProdutoBuscaNome;
            $lista = $obj->lista;
            $view = "lista-produto.php";
            break;

        case 'loginadmin':
            $obj = new \LOJA\API\UsuarioLogar;
            $msg = $obj->msg;
            $view = "form-login-admin.php";
            break;

        case 'painellogoff':
            $obj = new \LOJA\API\UsuarioLogoff;
            $view = "form-login-admin.php";
            break;

        case 'paineladmin':
            LOJA\Includes\Seguranca::restritoAdm();
            $view = "painel-admin.php";
            break;
        
        case 'admin':
            $view = "admin.php";
            break; 

        ///////////////// PAINEL DO ADMINISTRADOR /////////////////

        case 'home':
            $view = "index.php";
            break;      

        case 'produtoitem':
            $obj = new \LOJA\API\ProdutoListarHome;
            $view = "item.php";
            break;

        case 'produtos':
            $obj = new \LOJA\API\ProdutoListarHome;
            $lista = $obj->lista;
            $view = "produtos.php";
            break;

        case 'painelcliente':
            \LOJA\Includes\Seguranca::restritoCliente();
            $view = "painel-cliente.php";
            break;

        case 'logincliente':
            $obj = new \LOJA\API\ClienteLogar;
            $msg = $obj->msg;
            $view = "form-login-cliente.php";
            break;

        case 'clientelogoff':
            $obj = new \LOJA\API\ClienteLogoff;
            $msg = $obj->msg;
            $view = "index.php";
            break;
        

        case 'carrinhoadicionar':
            $obj = new \LOJA\API\CarrinhoVisualizar;
            $view = "carrinho.php";
            break;

        case 'carrinhoremover':
            $obj = new \LOJA\API\CarrinhoRemover;
            
            $view = "carrinho.php";
            break;

        case 'carrinho':
            $view = "carrinho.php";
            break;

        

        case 'logincliente':
            $view = "form-login-cliente.php";
            break; 

        case 'cadastrar':
            $view = "form-cadastrar-usuario.php";
            break; 

        case 'fretecalcular':
            $obj = new \LOJA\API\CalcularFrete;
            $frete = $obj->frete;             
            $view = "carrinho.php";
            break;

        case 'pedidofinalizar':
            \LOJA\Includes\Seguranca::restritoCliente();
            $obj = new \LOJA\API\PedidoCadastrar($url); 
            $view = "form-cliente-login.php"; // pagina login cliente 
            break;

        case 'cadastrocliente':
            $obj = new \LOJA\API\ClienteCadastrar;
            $msg = $obj->msg;
            $view = "form-cadastrar-cliente.php";
            break;
        
        case 'resultadobusca':
            $obj = new \LOJA\API\BuscaProdutoNome;
            $msg = $obj->msg;
            $view = "resultado-busca.php";
            break;
            
        
        default:
        $obj = new \LOJA\API\DepartamentoListar;
        $lista = $obj->lista;
        $view = "lista-produto.php";
        break;
    }

    include "view/{$view}";

?>