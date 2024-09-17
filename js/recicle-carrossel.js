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
