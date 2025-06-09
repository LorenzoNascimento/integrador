<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-stone-950 text-stone-200">

    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
            <div class="font-bold text-xl tracking-wide text-cyan-400">Loja de Informatica</div>
            <ul class="flex space-x-4 font-bold">
                <li class="text-cyan-400 hover:text-cyan-600 hover:scale-103 transition"><a href="/" class="">Explorar</a></li>
            </ul>
            <ul>
                <li class="font-semibold"><?php if (empty($_SESSION['nome'])) {
                    echo '<li class="font-bold hover:text-stone-400 hover:scale-103 transition"><a href="/login">Fazer Login</a></li>';
            } else {
                    echo '<li class="font-bold hover:text-stone-400 hover:scale-103 transition"><a href="/deletarusuario">' . $_SESSION['nome'] . '</a></li>';
           }?> </li>
            </ul>
            <ul>
                <li class="font-bold hover:text-stone-400 hover:scale-103 transition"><a href="/login">Criar conta</a></li>
            </ul>

            <?php if (empty($_SESSION['nome'])) {
            } else {
                echo '<li class="list-none font-bold hover:text-stone-400 hover:scale-103 transition"><a href="/logout.php">Sair</a></li>';
            } ?>

        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">

        <?php
        //guiar entre as paginas da url com .view
        require "views/{$view}.view.php"; ?>

    </main>

</body>

</html>