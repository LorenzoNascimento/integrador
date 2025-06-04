<form action="/updateproduto" method="POST" class="p-4 space-y-4">

<div>
    <h1 class="font-bold text-2xl">Editar produtos</h1>
</div>

<input type="hidden" name="id" value="<?= $_GET['id'] ?>">

<div>
<label for="" class="text-stone-400 mb-1">Marca</label>
<input type="text" required name="marca" placeholder=" Marca" class="border-stone-800 border-2  rounded-md bg-stone-900  text-sm focus:outline-none px-2 py-1 hover:scale-103 transition">

<label for="" class="text-stone-400 mb-1">Modelo</label>
<input type="text" required name="modelo" placeholder=" Modelo" class="border-stone-800 border-2  rounded-md bg-stone-900  text-sm focus:outline-none px-2 py-1 hover:scale-103 transition">
</div>

<div>
<label for="" class="text-stone-400 mb-1">Tipo</label>
<input type="text" required name="tipo" placeholder=" Tipo" class="border-stone-800 border-2  rounded-md bg-stone-900  text-sm focus:outline-none px-2 py-1 hover:scale-103 transition">

<label for="" class="text-stone-400 mb-1">Quantidade</label>
<input type="text" required name="quantidade" placeholder=" Quantidade" class="border-stone-800 border-2  rounded-md bg-stone-900  text-sm focus:outline-none px-2 py-1 hover:scale-103 transition">
</div>

<label for="" class="text-stone-400 mb-1">Preço</label>
<input type="text" required name="preco" placeholder=" Preço" class="border-stone-800 border-2  rounded-md bg-stone-900  text-sm focus:outline-none px-2 py-1 hover:scale-103 transition">

<div>
<button type="submit" class="border-stone-800 bg-stone-900 px-2 py-1 rounded-md border-2 hover:bg-cyan-800 hover:border-cyan-900 hover:opacity-90 font-semibold hover:scale-105 delay-150 duration-200 transition">Confirmar</button>
</div>

</form>