<?php
//autoload do projeto
require __DIR__.'/../vendor/autoload.php';
//incluindo a classe Endreco com "use"
use Source\Endereco;
//instanciando a classe
$endereco = new Endereco();
//recebendo o response da requisição
$result = $endereco->getEndereco("76875886");
//mostrando o endereço
print_r($result);