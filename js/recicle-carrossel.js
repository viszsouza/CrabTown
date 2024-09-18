// Carrossel - Metais
function direcao(e){
    var direcao = document.getElementById("content");

    // Mover para esquerda
    if(e == 1){
        direcao.scrollLeft = direcao.scrollLeft - 400;  // O valor tem que ser maior que a largura do card
    } 
    // Mover para direita
    else if(e == 2){
        direcao.scrollLeft = direcao.scrollLeft + 400;  // O valor tem que ser maior que a largura do card
    }
};


// Carrossel - Plástico
function carrosselPlastico(e){
    var direcaoPlastico = document.getElementById("carrosselPlastico");

    // Mover para esquerda
    if(e == 1){
        direcaoPlastico.scrollLeft = direcaoPlastico.scrollLeft - 400;  // O valor tem que ser maior que a largura do card
    } 
    // Mover para direita
    else if(e == 2){
        direcaoPlastico.scrollLeft = direcaoPlastico.scrollLeft + 400;  // O valor tem que ser maior que a largura do card
    }
};


// Carrossel - Papéis
function carrosselPapeis(e){
    var direcaoPapeis = document.getElementById("carrosselPapeis");

    // Mover para esquerda
    if(e == 1){
        direcaoPapeis.scrollLeft = direcaoPapeis.scrollLeft - 400;  // O valor tem que ser maior que a largura do card
    } 
    // Mover para direita
    else if(e == 2){
        direcaoPapeis.scrollLeft = direcaoPapeis.scrollLeft + 400;  // O valor tem que ser maior que a largura do card
    }
};


// Carrossel - Vidro
function carrosselVidro(e){
    var direcaoVidro = document.getElementById("carrosselVidro");

    // Mover para esquerda
    if(e == 1){
        direcaoVidro.scrollLeft = direcaoVidro.scrollLeft - 400;  // O valor tem que ser maior que a largura do card
    } 
    // Mover para direita
    else if(e == 2){
        direcaoVidro.scrollLeft = direcaoVidro.scrollLeft + 400;  // O valor tem que ser maior que a largura do card
    }
};