<div class="w-full bg-black text-white text-center py-2">
    <h1>Promoção! 25% de desconto em todo site usando o cupom TEES25 </h1>
</div>

<nav class="w-full flex items-center justify-between px-4 py-2 bg-gray-100">
    <div>
        <h1 class="text-xl font-bold">T SHOP</h1>
    </div>
    <div class="flex flex-row gap-5">
        <ul class="flex gap-4">
            <li class="border-r-2 px-2 py-2 hover:bg-black hover:text-cyan-500"><a href="#">Nova tees</a></li>
            <li class="border-r-2 px-2 py-2 hover:bg-black hover:text-cyan-500"><a href="#">Tees pra elas</a>
            </li>
            <li class="border-r-2 px-2 py-2 hover:bg-black hover:text-cyan-500"><a href="#">Tees pra eles</a>
            </li>
        </ul>

        <ul class="flex gap-4">
            <li class="px-2 py-1 hover:text-blue-300"><a href="#"><i class="fas fa-user"></i> Login</a></li>
            <li class="px-2 py-1 hover:text-blue-300" onmouseover="carrinho()" onmouseout="fecharCarrinho()"><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>

        <div id="carrinho" class="hidden fixed right-5 top-16 w-69 bg-white shadow-lg border rounded-lg z-[9999]" onmouseover="carrinho()" onmouseout="fecharCarrinho()">
            <div class="border-b-2 py-3 bg-cyan-500 text-white px-4">
                <h1>Carrinho (1 item)</h1>
            </div>
            <div class="p-4 flex flex-row items-center">
                <img src="{{ Vite::asset('resources/img/camiseta.jpg') }}" alt="Produto" class="w-30 mr-5">
                <div>
                    <p>Camiseta</p>
                    <p>R$ 15,00</p>
                    <input type="number" class="border border-b border-cyan-500 p-1 w-10 text-black" min="0"
                        value="1">
                    <button
                        class="bg-cyan-500 text-white px-3 py-1 rounded-2xl mt-3 hover:bg-cyan-950">Carrinho</button>
                </div>
            </div>
        </div>

    </div>
</nav>
