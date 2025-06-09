    <div class="grid justify-items-center pt-40 ">

    <div class="border border-stone-700 border-2 rounded-xl p-4">

        <div>
            <p class="font-bold p-10 text-4xl border border-stone-800 rounded-lg text-center">Interface do Usuario</p>
        </div>

        <?php if (empty($_SESSION["nome"])) {
        } else { ?>
            <div class="grid justify-items-center pt-15">
                <button class="w-130 border-stone-800 bg-stone-900 px-2 py-1 rounded-md border-2 hover:bg-stone-800 font-semibold hover:scale-105 delay-150 duration-200 transition"><a class="px-55 py-1" href="/tabela">Estoque</a></button>
            </div>
        <?php } ?>

        <div class="pt-6">
            <button class="w-130 border-stone-800 bg-stone-900 px-2 py-1 rounded-md border-2 hover:bg-stone-800 font-semibold hover:scale-105 delay-150 duration-200 transition"><a class="px-45 py-1" href="/login">Logar / Criar Conta</a></button>
        </div>

        <div class="pt-6">
        <?php if (empty($_SESSION['nome'])) {
        } else {
            echo '<button class="w-130 border-stone-800 bg-stone-900 px-2 py-1 rounded-md border-2 hover:bg-stone-800 font-semibold hover:scale-105 delay-150 duration-200 transition"><a class="px-50 py-1" href="/logout.php">Sair da conta</a></button>';
        ?>
        </div>

            <div class="pt-6">
                <button class="w-130 border-stone-800 bg-stone-900 px-2 py-1 rounded-md border-2 hover:bg-stone-800 font-semibold hover:scale-105 delay-150 duration-200 transition"><a class="px-45 py-1" href="/deletarusuario">Deletar seu usuario</a></button>
            </div>

        <?php } ?>
    
        </div>
    </div>