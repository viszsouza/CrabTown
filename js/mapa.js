document.getElementById("selectLixo").addEventListener("change", function() {
    const mapDiv = document.getElementById("mapContent");
    const option = this.value;

    let content = "";

    switch (option) {
        case "lixoAmarelo":
            content = "<p>Lixo amarelo</p>";
            break;
        case "lixoAzul":
            content = "<p>Lixo azul</p>";
            break;
        case "lixoBranco":
            content = "<p>Lixo branco</p>";
            break;
        case "lixoCinza":
            content = "<p>Lixo cinza</p>";
            break;
        case "lixoLaranja":
            content = "<p>Lixo laranja/p>";
            break;
        case "lixoMarrom":
            content = "<p>Lixo marrom</p>";
            break;
        case "lixoPreto":
            content = "<p>Lixo preto</p>";
            break;
        case "lixoRoxo":
            content = "<p>Lixo roxo</p>";
            break;
        case "lixoVerde":
            content = "<p>Lixo verde</p>";
            break;
        case "lixoVermelho":
            content = "<p>Lixo vermelho</p>";
            break;
        default:
            content = "<p><i class='fa-solid fa-location-dot'></i> Selecione um tipo de lixo.</p>";
    }

    mapDiv.innerHTML = content;
});