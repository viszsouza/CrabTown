// CARROSSEL
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
    // Tela com (min-width: 459px) and (max-width: 598px) de largura
    else if( larguraJanela >= 459 && larguraJanela <= 598 ){
        // Mover para esquerda
        if(e == 1){
            direcao.scrollLeft = direcao.scrollLeft - 280;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcao.scrollLeft = direcao.scrollLeft + 280;  // O valor tem que ser maior que a largura do card
        }
    }
    // Tela com (min-width: 390px) and (max-width: 458px) de largura
    else if( larguraJanela >= 390 && larguraJanela <= 458 ){
        // Mover para esquerda
        if(e == 1){
            direcao.scrollLeft = direcao.scrollLeft - 270;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcao.scrollLeft = direcao.scrollLeft + 270;  // O valor tem que ser maior que a largura do card
        }
    }
    // Tela com (max-width: 389px) de largura
    else if( larguraJanela <= 390 ){
        // Mover para esquerda
        if(e == 1){
            direcao.scrollLeft = direcao.scrollLeft - 250;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcao.scrollLeft = direcao.scrollLeft + 250;  // O valor tem que ser maior que a largura do card
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
    // Tela com (min-width: 459px) and (max-width: 598px) de largura
    else if( larguraJanela >= 459 && larguraJanela <= 598 ){
        // Mover para esquerda
        if(e == 1){
            direcaoPlastico.scrollLeft = direcaoPlastico.scrollLeft - 280;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoPlastico.scrollLeft = direcaoPlastico.scrollLeft + 280;  // O valor tem que ser maior que a largura do card
        }
    }
    // Tela com (min-width: 390px) and (max-width: 458px) de largura
    else if( larguraJanela >= 390 && larguraJanela <= 458 ){
        // Mover para esquerda
        if(e == 1){
            direcaoPlastico.scrollLeft = direcaoPlastico.scrollLeft - 270;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoPlastico.scrollLeft = direcaoPlastico.scrollLeft + 270;  // O valor tem que ser maior que a largura do card
        }
    }
    // Tela com (max-width: 389px) de largura
    else if( larguraJanela <= 390 ){
        // Mover para esquerda
        if(e == 1){
            direcaoPlastico.scrollLeft = direcaoPlastico.scrollLeft - 250;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoPlastico.scrollLeft = direcaoPlastico.scrollLeft + 250;  // O valor tem que ser maior que a largura do card
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
    // Tela com (min-width: 459px) and (max-width: 598px) de largura
    else if( larguraJanela >= 459 && larguraJanela <= 598 ){
        // Mover para esquerda
        if(e == 1){
            direcaoPapeis.scrollLeft = direcaoPapeis.scrollLeft - 280;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoPapeis.scrollLeft = direcaoPapeis.scrollLeft + 280;  // O valor tem que ser maior que a largura do card
        }
    }
    // Tela com (min-width: 390px) and (max-width: 458px) de largura
    else if( larguraJanela >= 390 && larguraJanela <= 458 ){
        // Mover para esquerda
        if(e == 1){
            direcaoPapeis.scrollLeft = direcaoPapeis.scrollLeft - 270;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoPapeis.scrollLeft = direcaoPapeis.scrollLeft + 270;  // O valor tem que ser maior que a largura do card
        }
    }
    // Tela com (max-width: 389px) de largura
    else if( larguraJanela <= 390 ){
        // Mover para esquerda
        if(e == 1){
            direcaoPapeis.scrollLeft = direcaoPapeis.scrollLeft - 250;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoPapeis.scrollLeft = direcaoPapeis.scrollLeft + 250;  // O valor tem que ser maior que a largura do card
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
    // Tela com (min-width: 459px) and (max-width: 598px) de largura
    else if( larguraJanela >= 459 && larguraJanela <= 598 ){
        // Mover para esquerda
        if(e == 1){
            direcaoVidro.scrollLeft = direcaoVidro.scrollLeft - 280;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoVidro.scrollLeft = direcaoVidro.scrollLeft + 280;  // O valor tem que ser maior que a largura do card
        }
    }
    // Tela com (min-width: 390px) and (max-width: 458px) de largura
    else if( larguraJanela >= 390 && larguraJanela <= 458 ){
        // Mover para esquerda
        if(e == 1){
            direcaoVidro.scrollLeft = direcaoVidro.scrollLeft - 270;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoVidro.scrollLeft = direcaoVidro.scrollLeft + 270;  // O valor tem que ser maior que a largura do card
        }
    }
    // Tela com (max-width: 389px) de largura
    else if( larguraJanela <= 390 ){
        // Mover para esquerda
        if(e == 1){
            direcaoVidro.scrollLeft = direcaoVidro.scrollLeft - 250;  // O valor tem que ser maior que a largura do card
        } 
        // Mover para direita
        else if(e == 2){
            direcaoVidro.scrollLeft = direcaoVidro.scrollLeft + 250;  // O valor tem que ser maior que a largura do card
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



// REDIRECIONAMENTO
// Redirecionamento - Metais
// Card 1
const btnMetais1 = document.getElementById("btnMetais1");
btnMetais1.addEventListener("click", function(){
    //window.alert("dsdsds")
    window.open("https://youtu.be/_kd62JFOYk8?si=dblIWfCfCGYGaqNz&t=169");
});

// Card 2
const btnMetais2 = document.getElementById("btnMetais2");
btnMetais2.addEventListener("click", function(){
    window.open("https://youtu.be/gT8QDibpAEs?si=AZR5K3Asmu7u9fzj&t=398");
});

// Card 3
const btnMetais3 = document.getElementById("btnMetais3");
btnMetais3.addEventListener("click", function(){
    window.open("https://youtu.be/qIbHCuNtBT8?si=-rTh5GZx-1QD-3JS&t=8");
});

// Card 4
const btnMetais4 = document.getElementById("btnMetais4");
btnMetais4.addEventListener("click", function(){
    window.open("https://youtu.be/qIbHCuNtBT8?si=RaawdItvkXvdOxEz&t=655");
});

// Card 5
const btnMetais5 = document.getElementById("btnMetais5");
btnMetais5.addEventListener("click", function(){
    window.open("https://youtu.be/gT8QDibpAEs?si=b4zCzDydOVgID0gU&t=7");
});