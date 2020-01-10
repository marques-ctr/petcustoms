<?php
use PHPUnit\Framework\TestCase; /// important o php unit
use LOJA\Model\Departamento;
use LOJA\DAO\DAODepartamento;

class DAODepartamentoTest extends TestCase
{
    public function testCadastro()
    {
        $c = new Departamento();
        $c->setNome('Felippe');
 
        // Execução
        $DAO = new DAODepartamento();
        $result = $DAO->cadastrar($c);

        // Testa resultados
        $this->assertEquals($result, "Cadastrado com sucesso");

        // Remove os dados gerados
        //$DAO->deleteFromId($DAO->lastId);

    }} ?>