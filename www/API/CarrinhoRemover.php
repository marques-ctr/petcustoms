<?php 

namespace LOJA\API; // local desta classe
use LOJA\DAO\DAOProduto;
use LOJA\Model\Carrinho;
use LOJA\Model\Item;
use LOJA\Model\Produto;
    
    class CarrinhoRemover{
            public function __construct(){

            $carrinho = new Carrinho; // inicia o carrinho
            $id = $_GET['id']; // pega a id do carrinho a remover


            if(isset($_SESSION['carrinho'])){ // verifica se existe o carrinho
             $carrinho = $_SESSION['carrinho']; // pega o carrinho

                foreach($carrinho->getItems() as $item){ // verifica os items do carrinho
                    if($item->getProduto()->getId()===$id){ // se o produto existir no carrinho
                    
                        $carrinho->removeItem($id); // excluir o carrinho da sessão
                        $_SESSION['carrinho'] = $carrinho; // atualiza o carrinho da sessão
                
            };
            
            }
        }else{
            // se não existir um carrinho criado, retorna a pagina inicial
            header("location: http://localhost/loja-petcustoms/home");
        }
    }
}
?>