import './bootstrap';

const car = document.getElementById('carrinho');

window.carrinho = function() {
    car.classList.remove('hidden')
}

window.fecharCarrinho = function () {
    car.classList.add('hidden')
}
