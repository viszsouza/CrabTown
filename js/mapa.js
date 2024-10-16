document.getElementById("selectLixo").addEventListener("change", function() {
    const mapDiv = document.getElementById("mapContent");
    const option = this.value;

    let content = "";

    switch (option) {
        case "lixoAmarelo":
            content = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31599.155754020274!2d-34.912462!3d-8.112227!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1e569ddbe713%3A0x712d0cbe4db32b9b!2sR.%20Jos%C3%A9%20da%20Silva%20Lucena%2C%200%20-%20Imbiribeira%2C%20Recife%20-%20PE%2C%2051150-430%2C%20Brazil!5e0!3m2!1sen!2sus!4v1728315348850!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
            break;
        case "lixoAzul":
            content = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31599.155754020274!2d-34.912462!3d-8.112227!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1e569ddbe713%3A0x712d0cbe4db32b9b!2sR.%20Jos%C3%A9%20da%20Silva%20Lucena%2C%200%20-%20Imbiribeira%2C%20Recife%20-%20PE%2C%2051150-430%2C%20Brazil!5e0!3m2!1sen!2sus!4v1728315348850!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
            break;
        case "lixoBranco":
            content = "<p>Consultar uma unidade de saúde para mais informações.</p>";
            break;
        case "lixoCinza":
            content = "<p>Não encontramos um posto de coleta para seu item.</p>";
            break;
        case "lixoLaranja":
            content = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31603.272090101575!2d-34.885509!3d-8.059695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18c0965702ff%3A0x19a4ba066e11ba97!2sAv.%20Conde%20da%20Boa%20Vista%2C%20484%20-%20Boa%20Vista%2C%20Recife%20-%20PE%2C%2050060-004%2C%20Brazil!5e0!3m2!1sen!2sus!4v1728316113916!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
            break;
        case "lixoMarrom":
            content = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31600.291155776427!2d-34.919608!3d-8.097771!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1eefba7423e3%3A0xcce44df3a1f48b68!2sR.%20Ant%C3%B4nio%20Cardoso%20da%20Fonte%2C%20483%20-%20Imbiribeira%2C%20Recife%20-%20PE%2C%2051170-620%2C%20Brazil!5e0!3m2!1sen!2sus!4v1728316251694!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
            break;
        case "lixoPreto":
            content = "<p>Consultar uma unidade de saúde para mais informações.</p>";
            break;
        case "lixoRoxo":
            content = "<p>Não encontramos um posto de coleta para seu item.</p>";
            break;
        case "lixoVerde":
            content = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31600.291155776427!2d-34.919608!3d-8.097771!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1eefba7423e3%3A0xcce44df3a1f48b68!2sR.%20Ant%C3%B4nio%20Cardoso%20da%20Fonte%2C%20483%20-%20Imbiribeira%2C%20Recife%20-%20PE%2C%2051170-620%2C%20Brazil!5e0!3m2!1sen!2sus!4v1728316364678!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
            break;
        case "lixoVermelho":
            content = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31599.155754020274!2d-34.912462!3d-8.112227!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1e569ddbe713%3A0x712d0cbe4db32b9b!2sR.%20Jos%C3%A9%20da%20Silva%20Lucena%2C%200%20-%20Imbiribeira%2C%20Recife%20-%20PE%2C%2051150-430%2C%20Brazil!5e0!3m2!1sen!2sus!4v1728315348850!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
            break;
        default:
            content = "<p><i class='fa-solid fa-location-dot'></i> Selecione um tipo de lixo.</p>";
    }

    mapDiv.innerHTML = content;
});