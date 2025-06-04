<form action="" class="w-full flex space-x-2 mt-6">
    <input type="text" name="pesquisar"
        class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
        placeholder="Pesquisar..." />
    <button type="submit" class="font-semibold">Pesquisar</button>
</form>

<div>
    <button class="border-stone-800 bg-stone-900 px-2 py-1 rounded-md border-2 hover:bg-stone-800 font-semibold hover:scale-105 delay-150 duration-200 transition"><a href="cadastrarproduto" class="p-2 ">Adicionar produto</a></button>
</div>

<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-5">

    <?php foreach ($produtos as $produto): ?>

        <div class="p-2 roudend border-stone-800 border-2 bg-stone-900 m-1">
            <div class="flex">
                <div>
                    <a href="/produtos?id=<?= $produto->id; ?>" class="font-semibold hover:underline"><?= $produto->modelo; ?></a>
                    <div class="text-xs italic"><?= $produto->marca; ?></div>
                    <div>⭐⭐⭐⭐⭐</div>
                </div>
            </div>
            <br>
            <div>
                <?= $produto->quantidade; if($produto->quantidade >= 1){
                echo " Unidades disponiveis";
                }else{
                    echo " Indisponivel";
                } ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<hr>

<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-5">