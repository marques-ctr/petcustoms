<?php
namespace Facebook\WebDriver\Remote;
use Facebook\WebDriver\Interactions\WebDriverActions;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverNavigation;
use Facebook\WebDriver\WebDriverOptions;
use Facebook\WebDriver\WebDriverWait;
use Facebook\WebDriver\WebDriverBy;
use PHPUnit\Framework\TestCase;


class WebTest extends TestCase
{
    protected $webDriver;
    protected $url = 'https://www.google.com';
    protected $googlesearchpage;
    protected $searchresultspage;

    public function testOpen()
    { 
        $host = 'http://localhost:4444/wd/hub';
        $driver = RemoteWebDriver::create($host, DesiredCapabilities::firefox());
        $driver->get('http://localhost/loja-petcustoms/www/cliente/cadastrar/');

        $driver->findElement(WebDriverBy::id('nome'))->sendKeys("I want to send this");
        $driver->findElement(WebDriverBy::id('nascimento'))->sendKeys("29/10/1991");
        $driver->findElement(WebDriverBy::id('cpf'))->sendKeys("123.456.789-9");
        $driver->findElement(WebDriverBy::id('email'))->sendKeys("email@email.com");
        $driver->findElement(WebDriverBy::id('senha'))->sendKeys("I want to send this");
        $driver->findElement(WebDriverBy::id('telefone'))->sendKeys("I want to send this");
        $driver->findElement(WebDriverBy::id('estado'))->sendKeys("I want to send this");
        $driver->findElement(WebDriverBy::id('cep'))->sendKeys("I want to send this");
        $driver->findElement(WebDriverBy::id('endereco'))->sendKeys("I want to send this");

        $submitElement = $driver->findElement(WebDriverBy::id('cadastrar'));
        $submitElement->click();
        $msg = $driver->findElement(WebDriverBy::id('msg'))->getText();
        $this->assertEquals($msg, "Cadastrado com sucesso");
    }
}


?>