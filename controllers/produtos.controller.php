<?php 

$produtos = $database->query('SELECT * FROM produtos WHERE id = :id', Produtos::class, ['id' => $_REQUEST['id']])->fetch();

view('produtos', ['produtos' => $produtos]);

?>