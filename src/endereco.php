<?php
//Defenindo namespace da classe
namespace Source;
//criando a classe
class Endereco{
    //url para fazer o request
    private $url = "https://viacep.com.br/ws/";
    //metodo responsável pela busca do endereço
    public function getEndereco($cep): array{
        //tratando o parametro
        $param = str_replace("/[^0-9]/im","", $cep);
        //obtendo o endereco
        $endereco = file_get_contents($this->url . $param ."/json");
        //retornando o resultado em formato json
        return (array) json_decode($endereco);
    }
}


