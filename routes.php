<?php

//Separa o código em partes para que acesse cada pagina sem informações adicionais como o id na url
$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

//caso nao tenha nada na url, apenas o / ele mandará para o index
if(!$controller) $controller = 'index';

//Caso o endereço encontrado na url nao exista, exiba a pagina com o erro 404
if(!file_exists("controllers/{$controller}.controller.php")){
    abort(404);
}

//mande para o index ou para a pagina de algum livro/carro quando digitado na url
require "controllers/{$controller}.controller.php";
