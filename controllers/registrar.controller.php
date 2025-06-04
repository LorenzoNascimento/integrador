<?php

require 'Validacao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $validacao = Validacao::validar([
        'nome' => ['required'],
        'email' => ['required', 'email', 'confirmed'],
        'senha' => ['required',  'strong', 'min:8', 'max:64']
    ], $_POST);

    if($validacao->naoPassou()){
        
        $_SESSION['validacao'] = $validacao->validacoes;
        header('Location: /login');
        exit(); 
    }

        $senhaCriptografada = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $database->query(
        query: 'INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)',
        params: [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $senhaCriptografada
        ]
    );


    header('Location: /login?mensagem=Registrado com sucesso!');
    exit();
}
