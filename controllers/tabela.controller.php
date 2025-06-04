<?php
//Pegar o texto em que foi escrito no txt de pesquisar
$pesquisar = $_REQUEST['pesquisar'] ?? '';

//passar todos os elementos da tabela e verificar se contem oque foi digitado no txt do pesquisar
$produtos = $database->query(
    query: "select * from produtos WHERE marca like 
    :pesquisar or modelo like :pesquisar 
    or tipo like :pesquisar",
    class: Produtos::class,
    params: ['pesquisar' => "%$pesquisar%"]
)->fetchAll();

//index: mandar para o index e a function view chama o app.php que contem a estilização e passar no campact com os elementos
view('tabela', compact('produtos'));