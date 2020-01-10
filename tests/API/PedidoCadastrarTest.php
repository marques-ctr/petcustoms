<?php
use PHPUnit\Framework\TestCase; /// important o php unit
use LOJA\Model\Pedido;
use LOJA\Model\Produto;
use LOJA\Model\Departamento;
use LOJA\Model\Cliente;
use LOJA\Model\Carrinho;
use LOJA\Model\Item;
use LOJA\DAO\DAOPedido;
use LOJA\DAO\DAOProduto;
use LOJA\DAO\DAODepartamento;
use LOJA\DAO\DAOCliente;

    class PedidoCadastrarTest extends TestCase{
        public $departamento;
        public $cliente;
        public $carrinho;
        public $produto;
        /**
         * @before
         */
    public function setUpInit(){ // será executado primeiro
        
        // Cria um novo departamento
        
        $this->departamento=new Departamento();
        $this->departamento->setNome('Roupas');

        // cria um novo departamento para teste e atribui ao departamento

        $DAO = new DAODepartamento();
        $DAO->cadastrar($this->departamento);
        $this->departamento->setId($DAO->lastId);
        
        // cria um novo produto

        $this->produto = new Produto();
        $this->produto->setNome('Camiseta');
        $this->produto->setPreco('50');
        $this->produto->setDescricao('Camiseta Personalizada');
        $this->produto->setImagem('imagem.png');
        $this->produto->setDepartamento($this->departamento);
        $DAO2 = new DAOProduto();
        $result = $DAO2->cadastrar($this->produto);
        $this->produto->setId($DAO2->lastId);
            
        // Cria uma novo cliente

        $this->cliente = new Cliente();
        $this->cliente->setNome('Felippe');
        $this->cliente->setNascimento('10/10/1910');
        $this->cliente->setCpf('123.456.789-10');
        $this->cliente->setEmail('email@email.com.br');
        $this->cliente->setSenha('12345678');
        $this->cliente->setTelefone('21 23567889');
        $this->cliente->setEstado('RJ');
        $this->cliente->setCep('23050-560');
        $this->cliente->setEndereco('Rua A');

        $DAO3 = new DAOCliente();
        $result = $DAO3->cadastrar($this->cliente);
        $this->cliente->setId($DAO3->lastId);
        

        // Cria um carrinho

        $this->carrinho = new Carrinho();
        $this->carrinho->addItem($this->produto->getId());

    }

        public function testCadastro(){
            $_SESSION['clienteid'] = $this->cliente->getId();
            $_SESSION['clienteemail'] = $this->cliente->getEmail();
            $_SESSION['carrinho'] = $this->carrinho;

             $obj = new \LOJA\API\PedidoCadastrar;
             $this->assertEquals($obj->msg, "Pedido efetuado com sucesso");
    }   
    
        }
?>