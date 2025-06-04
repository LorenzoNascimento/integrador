<?php

//Chamando a variavel view que contem a area do site que deve ser acessada, O index e o array de livros/carro que foi passado como $data ja estanciando um array
function view($view, $data = [])
{

    //passar os livros/carro para o array 
    //O array data passa um array dentro do array, dai o $key pega o array de dentro do array e passa para o values os elementos
    foreach ($data as $key => $value) {

        //O $$key pega o elemento de dentro do $values no caso o livro e faz ele se tornar o array principal transformando o elemento de dentro em uma variavel
        $$key = $value;
    }
    //Chama o tampleta do site
    require "views/template/app.php";
}

//Funçao para facilitar para o uso do var_dump
function dd(...$dump)
{
    dump($dump);
    die();
}

function dump(...$dump)
{
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
}

//Funçao para caso não encontrar a pagina dar o erro 404 (pagina não encontrada) ao usuario
function abort($code)
{
    http_response_code(404);
    view($code);
    die();
}

function db()
{
    return $db = new PDO('sqlite:database.sqlite');
}