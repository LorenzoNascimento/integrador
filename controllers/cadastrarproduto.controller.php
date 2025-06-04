<?php 

include('protect.php');

view('cadastrarproduto');

if($_POST){
$query = db()->prepare("INSERT INTO produtos (marca, modelo, tipo, quantidade, preco) VALUES (:marca, :modelo, :tipo, :quantidade, :preco)");
$produtos = $query->execute([

    'marca' => $_POST['marca'],
    'modelo' => $_POST['modelo'],
    'tipo' => $_POST ['tipo'],
    'quantidade' => $_POST ['quantidade'],
    'preco' => $_POST['preco']
]);

header('Location: /tabela');

}
