<?php
namespace LOJA\API;
use LOJA\Model\Cliente;
use LOJA\Model\Pedido;
use LOJA\Model\Carrinho;
use LOJA\DAO\DAOPedido;


class PedidoCadastrar{

    public $msg;

            function __construct($url){
            
            try{

        // Criamos um objeto/produto
        $c = new Cliente();
        $c->setId($_SESSION['clienteid']);
        $c->setEmail($_SESSION['clienteemail']);

        $obj = new Pedido();
        $obj->setData('2019-12-25');
        $obj->setFrete(20.9);
        $obj->setDias(5);
        $obj->setCliente($c);

        $DAO = new DAOPedido();
        $this->msg = $DAO->cadastrar($obj, $_SESSION['carrinho']);

        header("location: ".$url."/painel/cliente");

    }catch(Exception $e){
        $this->$msg = $e->getMessage();
 
    }
}
  }

?>