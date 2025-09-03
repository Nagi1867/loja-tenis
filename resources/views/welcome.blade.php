<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>{{ config('app.name', 'Loja') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
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
                <li class="border-r-2 px-2 py-2 hover:bg-black hover:text-cyan-500"><a href="#">Tees pra elas</a></li>
                <li class="border-r-2 px-2 py-2 hover:bg-black hover:text-cyan-500"><a href="#">Tees pra eles</a></li>
            </ul>

            <ul class="flex gap-4">
                <li class="px-2 py-1 hover:text-blue-300"><a href="#"><i class="fas fa-user"></i> Login</a></li>
                <li class="px-2 py-1"><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </div>
    </nav>

    @yield("content")

    <footer class="fixed bottom-0 left-0 w-full border">
        <div class="w-full flex flex-row items-center">
            <ul class="bg-black text-white py-20 px-46">
                <li class="font-bold text-2xl">T SHOP</li>
                <li>tshop@gmail.com</li>
                <li>Tel: (11) 3456-7890</li>
            </ul>

            <div class="w-full flex items-center ml-auto mx-auto px-60 py-2 gap-25">
                <ul class="w-full">
                    <li class="mb-1">Comprar</li>
                    <li class="text-sm">Novo</li>
                    <li class="text-sm">Tees pra elas</li>
                    <li class="text-sm">Tees pra eles</li>
                </ul>

                <ul class="w-full">
                    <li class="mb-1">Nossa loja</li>
                    <li class="text-sm">Sobre nós</li>
                    <li class="text-sm">Assinar</li>
                    <li class="text-sm">FAQ</li>
                </ul>

                <ul class="w-full">
                    <li class="mb-1">Termos e Condições</li>
                    <li class="text-sm">Política da loja</li>
                    <li class="text-sm">Envio e devolução</li>
                    <li class="text-sm">Métodos de pagamento</li>
                    <li class="text-sm">Políticas de Cookies</li>
                </ul>
            </div>
        </div>

        <div class="w-full text-center py-4 bg-cyan-500 text-white">
            <h1>&copy; 2035 por T Shop. Todos os direitos reservados</h1>
        </div>
    </footer>
</body>

</html>
