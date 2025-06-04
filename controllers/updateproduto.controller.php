<?php 

include('protect.php');

view('updateproduto');

if ($_POST) {

    $query = db()->prepare('UPDATE produtos SET marca = :marca, modelo = :modelo, tipo = :tipo, quantidade = :quantidade, preco = :preco WHERE id = :id');
    $update = $query->execute([
        'id' => $_POST['id'],
        'marca' => $_POST['marca'],
        'modelo' => $_POST['modelo'],
        'tipo' => $_POST['tipo'],
        'quantidade' => $_POST['quantidade'],
        'preco' => $_POST['preco']
    ]);

    header('Location: /tabela');
}

?>