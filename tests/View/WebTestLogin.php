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

        $driver->get('http://localhost/loja-petcustoms/www/login/admin/');
        $driver->findElement(WebDriverBy::id('nome'))->sendKeys("admin");
        $driver->findElement(WebDriverBy::id('senha'))->sendKeys("admin");

        $submitElement = $driver->findElement(WebDriverBy::id('login'));
        $submitElement->click();

        $driver->get('http://localhost/loja-petcustoms/www/departamento/cadastrar/');
        $driver->findElement(WebDriverBy::id('nome'))->sendKeys("I want to send this");

        $submitElement = $driver->findElement(WebDriverBy::id('cadastrar'));
        $submitElement->click();

        $msg = $driver->findElement(WebDriverBy::id('msg'))->getText();
        
        $this->assertEquals($msg, "Cadastrado com sucesso");

         }
    }
?>