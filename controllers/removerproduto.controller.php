<?php 

include('protect.php');

$produtos = $database->query('DELETE FROM produtos WHERE id = :id', Produtos::class, ['id' => $_GET['id']])->fetch();


header('Location: /tabela');
?>