// Carrossel - Metais
function direcao(e){
    var direcao = document.getElementById("content");
    let larguraJanela = window.innerWidth;

    // Tela com (min-width: 767px) and (max-width: 992px) de largura
    if( larguraJanela >= 767 && larguraJanela <= 992 ){
        // Mover para esquerda
        if(e == 1){
            direcao.scrollLeft = direcao.scrollLeft - 300;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcao.scrollLeft = direcao.scrollLeft + 300;  // O valor tem que ser maior que a largura do card
        }
    }
    // Tela com (min-width: 599px) and (max-width: 768px) de largura
    else if( larguraJanela >= 599 && larguraJanela <= 768 ){
        // Mover para esquerda
        if(e == 1){
            direcao.scrollLeft = direcao.scrollLeft - 300;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcao.scrollLeft = direcao.scrollLeft + 300;  // O valor tem que ser maior que a largura do card
        }
    }
    // Valor padrão
    else{
        // Mover para esquerda
        if(e == 1){
            direcao.scrollLeft = direcao.scrollLeft - 400;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcao.scrollLeft = direcao.scrollLeft + 400;  // O valor tem que ser maior que a largura do card
        }
    }
};


// Carrossel - Plástico
function carrosselPlastico(e){
    var direcaoPlastico = document.getElementById("carrosselPlastico");
    let larguraJanela = window.innerWidth;

    // Tela com (min-width: 767px) and (max-width: 992px) de largura
    if( larguraJanela >= 767 && larguraJanela <= 992 ){
        // Mover para esquerda
        if(e == 1){
            direcaoPlastico.scrollLeft = direcaoPlastico.scrollLeft - 300;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoPlastico.scrollLeft = direcaoPlastico.scrollLeft + 300;  // O valor tem que ser maior que a largura do card
        }
    }
    // Tela com (min-width: 599px) and (max-width: 768px) de largura
    else if( larguraJanela >= 599 && larguraJanela <= 768 ){
        // Mover para esquerda
        if(e == 1){
            direcaoPlastico.scrollLeft = direcaoPlastico.scrollLeft - 300;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoPlastico.scrollLeft = direcaoPlastico.scrollLeft + 300;  // O valor tem que ser maior que a largura do card
        }
    }
    // Valor padrão
    else{
        // Mover para esquerda
        if(e == 1){
            direcaoPlastico.scrollLeft = direcaoPlastico.scrollLeft - 400;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoPlastico.scrollLeft = direcaoPlastico.scrollLeft + 400;  // O valor tem que ser maior que a largura do card
        }
    }
};


// Carrossel - Papéis
function carrosselPapeis(e){
    var direcaoPapeis = document.getElementById("carrosselPapeis");
    let larguraJanela = window.innerWidth;

    // Tela com (min-width: 767px) and (max-width: 992px) de largura
    if( larguraJanela >= 767 && larguraJanela <= 992 ){
        // Mover para esquerda
        if(e == 1){
            direcaoPapeis.scrollLeft = direcaoPapeis.scrollLeft - 300;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoPapeis.scrollLeft = direcaoPapeis.scrollLeft + 300;  // O valor tem que ser maior que a largura do card
        }
    }
    // Tela com (min-width: 599px) and (max-width: 768px) de largura
    else if( larguraJanela >= 599 && larguraJanela <= 768 ){
        // Mover para esquerda
        if(e == 1){
            direcaoPapeis.scrollLeft = direcaoPapeis.scrollLeft - 300;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoPapeis.scrollLeft = direcaoPapeis.scrollLeft + 300;  // O valor tem que ser maior que a largura do card
        }
    }
    // Valor padrão
    else{
        // Mover para esquerda
        if(e == 1){
            direcaoPapeis.scrollLeft = direcaoPapeis.scrollLeft - 400;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoPapeis.scrollLeft = direcaoPapeis.scrollLeft + 400;  // O valor tem que ser maior que a largura do card
        }
    }
};


// Carrossel - Vidro
function carrosselVidro(e){
    var direcaoVidro = document.getElementById("carrosselVidro");
    let larguraJanela = window.innerWidth;

    // Tela com (min-width: 767px) and (max-width: 767px) de largura
    if( larguraJanela >= 767 && larguraJanela <= 992 ){
        // Mover para esquerda
        if(e == 1){
            direcaoVidro.scrollLeft = direcaoVidro.scrollLeft - 300;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoVidro.scrollLeft = direcaoVidro.scrollLeft + 300;  // O valor tem que ser maior que a largura do card
        }
    }
    // Tela com (min-width: 599px) and (max-width: 768px) de largura
    else if( larguraJanela >= 599 && larguraJanela <= 768 ){
        // Mover para esquerda
        if(e == 1){
            direcaoVidro.scrollLeft = direcaoVidro.scrollLeft - 300;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoVidro.scrollLeft = direcaoVidro.scrollLeft + 300;  // O valor tem que ser maior que a largura do card
        }
    }
    // Valor padrão
    else{
        // Mover para esquerda
        if(e == 1){
            direcaoVidro.scrollLeft = direcaoVidro.scrollLeft - 400;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoVidro.scrollLeft = direcaoVidro.scrollLeft + 400;  // O valor tem que ser maior que a largura do card
        }
    }
};