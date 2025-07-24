<?php

class MySingleton
{
    private static $instance;
    private $counter;

    private function __construct()
    {
        echo 'Contruyendo objeto..'.PHP_EOL;
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function hazAlgo()
    {
        echo 'Hola este es una pagina informativa.'.PHP_EOL;
        ++$this->counter;
    }

    public function getCounter()
    {
        return $this->counter;
    }
}

MySingleton::getInstance()->hazAlgo();
MySingleton::getInstance()->hazAlgo();

echo 'Contador = '.mySingleton::getInstance()->getCounter().PHP_EOL;