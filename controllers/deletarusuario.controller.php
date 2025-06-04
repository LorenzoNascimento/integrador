<?php
include('protect.php');

view('deletarusuario');

if ($_POST) {
        
        $query = db()->prepare("DELETE FROM usuarios WHERE id = :id");
        $usuario = $query->execute([
            'id' => $_SESSION['id']
        ]);

                if(isset($_SESSION)){
                session_destroy();
            }else{
    echo'<h1 class="font-semibold text-2xl text-stone-400">Conta não encontrada</h1>';
}
    header('Location: /index');
}