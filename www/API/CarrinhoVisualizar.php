<?php 
namespace LOJA\API; // local desta classe
use LOJA\DAO\DAOProduto;
use LOJA\Model\Carrinho;
use LOJA\Model\Item;
use LOJA\Model\Produto;
    
    class CarrinhoVisualizar{

            public $dados;
    
            public function __construct(){

            //$_SESSION['carrinho'] = null;

            $id = $_GET['id'];
            $add = true;

            if(isset($_SESSION['carrinho'])){
             
                $carrinho = $_SESSION['carrinho'];

                foreach($carrinho->getItems() as $item){
                    if($item->getProduto()->getId()===$id){
                        $add = false;
                    };

                } 

            }else{
                $carrinho = new Carrinho();
                
            }

                if($add===true){
                    $carrinho->addItem($id);
                    $_SESSION['carrinho'] = $carrinho;
                }
            }
        }
        
?>