<?php
use PHPUnit\Framework\TestCase; /// important o php unit
use LOJA\Model\Departamento;
use LOJA\Model\Produto;
use LOJA\DAO\DAODepartamento;
use LOJA\DAO\DAOProduto;


class DAOProdutoTest extends TestCase{

    public $departamento;
    /** 
     * @before
    */
    public function setUpInit(){
    
    $this->departamento = new Departamento();
    $this->departamento->setNome('Roupas');


    $DAO = new DAODepartamento();
    $DAO->cadastrar($this->departamento);
    $this->departamento->setId($DAO->lastId);

    }


    public function testCadastro(){

        // DADOS
        $produto = new Produto();
        $produto->setNome('Camiseta');
        $produto->setPreco('50');
        $produto->setDescricao('Camiseta');
        $produto->setImagem('imagem.jpg');
        $produto->setDepartamento($this->departamento);

        // EXECUÇÃO
        $DAO = new DAOProduto();
        $result = $DAO->cadastrar($produto);

        // TESTA OS DADOS
        $this->assertEquals($result, "Cadastrado com sucesso");

        // REMOVE OS DADOS GERADOS
        $DAO->deletefromId($DAO->lastId);

        }
     } 
    
    ?>
        