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


// Redirecionamento - Plástico
// Card 1
const btnPlastico1 = document.getElementById("btnPlastico1");
btnPlastico1.addEventListener("click", function(){
    window.open("https://youtu.be/xvB3dCkDwM0?si=X9zQCoPlY2cmWJje&t=9");
});

// Card 2
const btnPlastico2 = document.getElementById("btnPlastico2");
btnPlastico2.addEventListener("click", function(){
    window.open("https://youtu.be/X3_9LZmm4uk?si=rBWtLTik6gab_ApC&t=338");
});

// Card 3
const btnPlastico3 = document.getElementById("btnPlastico3");
btnPlastico3.addEventListener("click", function(){
    window.open("https://youtu.be/X3_9LZmm4uk?si=b5CUahi_Rqa5_YmN&t=78");
});

// Card 4
const btnPlastico4 = document.getElementById("btnPlastico4");
btnPlastico4.addEventListener("click", function(){
    window.open("https://youtu.be/X3_9LZmm4uk?si=pvUAlnB6UfRY2tck&t=6");
});

// Card 5
const btnPlastico5 = document.getElementById("btnPlastico5");
btnPlastico5.addEventListener("click", function(){
    window.open("https://youtu.be/X3_9LZmm4uk?si=wqxVLkc8PxaK8YmV&t=194");
});

// Card 6
const btnPlastico6 = document.getElementById("btnPlastico6");
btnPlastico6.addEventListener("click", function(){
    window.open("https://youtu.be/X3_9LZmm4uk?si=CanFtdtlbncFASRE&t=131");
});

// Card 7
const btnPlastico7 = document.getElementById("btnPlastico7");
btnPlastico7.addEventListener("click", function(){
    window.open("https://youtu.be/X3_9LZmm4uk?si=4Njf_qhkJoj-CyhR&t=412");
});


// Redirecionamento - Papéis
// Card 1
const btnPapeis1 = document.getElementById("btnPapeis1")
btnPapeis1.addEventListener("click", function(){
    window.open("https://youtu.be/K4AQOmsa4n4?si=EdF97W19K5AgFAG3&t=6");
});

// Card 2
const btnPapeis2 = document.getElementById("btnPapeis2")
btnPapeis2.addEventListener("click", function(){
    window.open("https://youtu.be/K4AQOmsa4n4?si=ghamvB2bIxeS0Oax&t=209");
});

// Card 3
const btnPapeis3 = document.getElementById("btnPapeis3")
btnPapeis3.addEventListener("click", function(){
    window.open("https://youtu.be/KOlkR7UtUto?si=juukSFzkfiL1uNFe&t=228");
});

// Card 4
const btnPapeis4 = document.getElementById("btnPapeis4")
btnPapeis4.addEventListener("click", function(){
    window.open("https://youtu.be/9DgW92LIApU?si=BYM8Rx7KHlQED2fD&t=27");
});

// Card 5
const btnPapeis5 = document.getElementById("btnPapeis5")
btnPapeis5.addEventListener("click", function(){
    window.open("https://youtu.be/K4AQOmsa4n4?si=iPOuyeM3iB3i0e_S&t=518");
});

// Card 6
const btnPapeis6 = document.getElementById("btnPapeis6")
btnPapeis6.addEventListener("click", function(){
    window.open("https://youtu.be/K4AQOmsa4n4?si=piLuzfyLn__60l-j&t=119");
});