<link rel="stylesheet" href="style.css">
<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-5">

    <div class="p-2 roudend border-stone-800 border-2 bg-stone-900 m-1">
        <div class="flex">
            <div>

                <div class="text-xl font-semibold italic"><?= $produtos->modelo; ?></div>
                <div class="text-xs font-bold italic"><?= $produtos->marca; ?></div>
                <div>⭐⭐⭐⭐⭐</div>
            </div>
        </div>
        <br>
        <div>
            <p class="font-semibold">R$ <?= $produtos->preco; ?></p>
            <?= $produtos->quantidade;
            if ($produtos->quantidade >= 1) {
                echo " Unidades Disponiveis";
            } else {
                echo " Produto indisponivel";
            } ?>
        </div>

        <div class="place-content-center grid">
            <div class="p-1 pt-3 ">
                <button class="text-center border-stone-800 bg-stone-900 px-2 py-1 rounded-md border-2 hover:bg-cyan-800 hover:border-cyan-900 w-30 hover:opacity-90 font-semibold hover:scale-105 duration-200 transition"><a href="updateproduto?id=<?= $produtos->id; ?>">Editar</a></button>
                <button class="text-center border-stone-800 bg-stone-900 px-2 py-1 rounded-md border-2 hover:bg-red-800 hover:border-red-900 font-semibold w-30 hover:opacity-90 hover:scale-105 duration-200 transition"><a href="removerproduto?id=<?= $produtos->id; ?>">Remover</a></button>
            </div>

            <div class="p-1">
                <div onclick="abrirModal()" class="btn text-center border-stone-800 bg-stone-900 px-2 py-1 rounded-md border-2 hover:bg-red-800 hover:border-red-900 font-semibold w-61 hover:opacity-90 hover:scale-105 duration-200 transition">Descrição</div>
            </div>
        </div>
    </div>

</section>
<div class="janela-modal" id="janela-modal">
    <div class="modal">
        <button class="fechar" id="fechar">X</button>
        <p class="pModal"><?= $produtos->descricao ?></p>
    </div>
</div>

<script src="script.js"></script>
</div>