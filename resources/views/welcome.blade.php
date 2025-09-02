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

    <footer>
        <div>
            <ul>
                <li>T SHOP</li>
                <li>tshop@gmail.com</li>
                <li>Tel: (11) 3456-7890</li>
            </ul>

            <div>
                <ul>
                    <li>Comprar</li>
                    <li>Novo</li>
                    <li>Tees pra elas</li>
                    <li>Tees pra eles</li>
                </ul>

                <ul>
                    <li>Nossa loja</li>
                    <li>Sobre nós</li>
                    <li>Assinar</li>
                    <li>FAQ</li>
                </ul>

                <ul>
                    <li>Termos e Condições</li>
                    <li>Política da loja</li>
                    <li>Envio e devolução</li>
                    <li>Métodos de pagamento</li>
                    <li>Políticas de Cookies</li>
                </ul>
            </div>
        </div>

        <div>
            <h1>&copy; 2035 por T Shop. Todos os direitos reservados</h1>
        </div>
    </footer>

</body>

</html>
