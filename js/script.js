/* Selecionar voto, mostrar/esconder botao confirmar */
function Candidato() {
    var candidato = document.getElementById("btn-confirmar").style.display;
    document.getElementById("nulo-id").classList.remove("active");

    if ((document.getElementById("btn-confirmar-nulo").style.display = "block"))
        document.getElementById("btn-confirmar-nulo").style.display = "none";

    if (candidato == "none") {
        document.getElementById("btn-confirmar").style.display = "block";
        document.getElementById("candidato-id").classList.add("active");
    } else {
        document.getElementById("btn-confirmar").style.display = "none";
        document.getElementById("candidato-id").classList.remove("active");
    }
}

function Nulo() {
    var nulo = document.getElementById("btn-confirmar-nulo").style.display;
    document.getElementById("candidato-id").classList.remove("active");

    if ((document.getElementById("btn-confirmar").style.display = "block"))
        document.getElementById("btn-confirmar").style.display = "none";

    if (nulo == "none") {
        document.getElementById("btn-confirmar-nulo").style.display = "block";
        document.getElementById("nulo-id").classList.add("active");
    } else {
        document.getElementById("btn-confirmar-nulo").style.display = "none";
        document.getElementById("nulo-id").classList.remove("active");
    }
}
/* Função tocar audio */
var clickVoto = new Audio('audio/click-voto.wav');
var clickConfirmar = new Audio('audio/click-confirmar.wav');

/* Audio 1 */
document.getElementById('btn-candidato').onclick = () => {
    Candidato();
    clickVoto.play();
}

/* Audio 2 */
document.getElementById('btn-nulo').onclick = () => {
    Nulo();
    clickVoto.play();
}