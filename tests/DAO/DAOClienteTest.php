<?php
use PHPUnit\Framework\TestCase; /// important o php unit
use LOJA\Model\Cliente;
use LOJA\DAO\DAOCliente;


class DAOClienteTest extends TestCase
{
    public function testCadastro()
    {

        // DADOS
        $c = new Cliente();
        $c->setNome('Felippe');
        $c->setNascimento('29/10/1994');
        $c->setCpf('123.456.789-10');
        $c->setEmail('Felippe@email.com');
        $c->setSenha('12345678');
        $c->setTelefone('(21)1231-2132');
        $c->setEstado('Rio de Janeiro');
        $c->setCep('23040-160');
        $c->setEndereco('Rua A, 20');

        // EXECUÇÃO
        $DAO = new DAOCliente();
        $result = $DAO->cadastrar($c);

        // TESTA OS DADOS
        $this->assertEquals($result, "Cadastrado com sucesso");

        // REMOVE OS DADOS GERADOS
        $DAO->deletefromId($DAO->lastId);

    }} ?>
        