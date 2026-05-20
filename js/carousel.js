// Carrossel: Lógica de troca de imagens
let index3 = 0;

function mudarImagem3(direcao = 1) {
    const imagens3 = document.querySelectorAll('.carrossel-imagem3');
    const totalImagens3 = imagens3.length;

    index3 += direcao;

    // Ciclar entre as imagens
    if (index3 < 0) {
        index3 = totalImagens3 - 1;
    }
    if (index3 >= totalImagens3) {
        index3 = 0;
    }

    // Atualizar a posição do carrossel
    const carrosselImagens3 = document.querySelector('.carrossel-imagens3');
    carrosselImagens3.style.transform = `translateX(-${index3 * 100}%)`;
}

// Avançar automaticamente a cada 3 segundos
setInterval(() => mudarImagem3(1), 3000);

// Efeito de aparecer ao rolar a página
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

function revealOnScroll() {
    const carrossel3 = document.querySelector('.carrossel3');

    if (carrossel3 && isElementInViewport(carrossel3)) {
        carrossel3.classList.add('show');
        carrossel3.classList.remove('hidden');
    }
}

// Adicionar evento de rolagem e verificar na inicialização
window.addEventListener('scroll', revealOnScroll);
window.addEventListener('DOMContentLoaded', revealOnScroll);
 