<form action="/cadastrarproduto" method="POST" class="grid justify-items-center pt-40">

<div class="border border-stone-700 border-2 rounded-xl p-4">

<div>
    <p class="font-bold p-10 text-4xl border border-stone-800 rounded-lg text-center">Cadastro de produtos</p>
</div>

<div class="grid justify-items-center">

<div class="pr-11 pt-5">
<label for="" class="text-stone-400">Marca</label>
<input type="text" name="marca" placeholder=" Marca" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 hover:scale-103 transition" required>
</div>

<div class="pl-2 pt-2 pr-16">
<label for="" class="text-stone-400">Modelo</label>
<input type="text" name="modelo" placeholder=" Modelo" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 hover:scale-103 transition" required>
</div>

<div class="pl-2 pt-2 pr-10">
<label for="" class="text-stone-400">Tipo</label>
<input type="text" name="tipo" placeholder=" Tipo" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 hover:scale-103 transition" required>
</div>

<div class="pl-2 pt-2 pr-23">
<label for="" class="text-stone-400">Quantidade</label>
<input type="text" name="quantidade" placeholder=" Quantidade" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 hover:scale-103 transition" required>
</div>

<div class="pl-2 pt-2 pr-12">
<label for="" class="text-stone-400">Preço</label>
<input type="text" name="preco" placeholder=" Preço" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 hover:scale-103 transition" required>
</div>

<div class="pl-2 pt-2 pr-19">
<label for="" class="text-stone-400">Descrição</label>
<input type="text" name="descricao" placeholder=" Descrição" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 hover:scale-103 transition" required>
</div>

<div class="p-2 pt-5">
<button type="submit" class="border-stone-800 bg-stone-900 px-19 py-1 rounded-md border-2 hover:bg-stone-800 font-semibold hover:scale-105 delay-150 duration-200 transition">Adicionar</button>
</div>
<div>
<button class="border-stone-800 bg-stone-900 py-1 rounded-md border-2 hover:bg-stone-800 font-semibold hover:scale-105 delay-150 duration-200 transition"><a class="px-20 py-2" href="/tabela">Cancelar</a></button>
</div>
</div>
</div>

</form>