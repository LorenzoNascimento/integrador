<?php

if (!isset($_SESSION)) {
    session_start();
}

$mensagem = $_REQUEST['mensagem'] ?? '';

if ($_POST) {
    // Primeiro buscamos o usuário pelo email
    $query = db()->prepare('SELECT * FROM usuarios WHERE email = :email');
    $query->execute([
        'email' => $_POST['email']
    ]);

    if ($resultado = $query->fetch()) {
        $senhaDigitada = $_POST['senha'];
        $senhaHash = $resultado['senha'];

        if (password_verify($senhaDigitada, $senhaHash)) {
            $_SESSION['id'] = $resultado['id'];
            $_SESSION['nome'] = $resultado['nome'];
            $_SESSION['email'] = $resultado['email'];
            header('Location: /login?mensagem=Seja bem-vindo! ' . ($_SESSION['nome']));
            exit();
        } else {
            header('Location: /login?mensagem=Senha incorreta!');
            exit();
        }
    } else {
        header('Location: /login?mensagem=Email não encontrado!');
        exit();
    }
}

// Só renderiza a view se não houve POST ou depois das redireções
view('login', compact('mensagem'));