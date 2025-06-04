<form action="deletarusuario" method="POST">

    <label for="" class="text-stone-400 mb-1" hidden>Email</label>
    <input type="text" name="email" placeholder=" Email" class="border-stone-800 border-2  rounded-md bg-stone-900  text-sm focus:outline-none px-2 py-1 hover:scale-103 transition" hidden require>

    <label for="" class="text-stone-400 mb-1" hidden>Senha</label>
    <input type="password" name="senha" placeholder=" Senha" class="border-stone-800 border-2  rounded-md bg-stone-900  text-sm focus:outline-none px-2 py-1 hover:scale-103 transition" hidden require>


    <div class="grid justify-items-center">
        <h1 class="text-stone-300 font-semibold text-3xl">Deseja deletar seu usuario?</h1>
        <div class="p-2">
            <button type="submit" class="border-stone-800 bg-stone-900 px-2 py-1 rounded-md border-2 hover:bg-stone-800 font-semibold hover:scale-105 delay-150 duration-200 transition">Confirmar</button>
        </div>

        <div class="p-2">
            <button class="border-stone-800 bg-stone-900 px-2 py-1 rounded-md border-2 hover:bg-stone-800 font-semibold hover:scale-105 delay-150 duration-200 transition"><a href="/index">Cancelar</a></button>
        </div>
    </div>
</form>