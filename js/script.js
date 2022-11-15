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

let time = 5;
let initialOffset = 149;
let i = 4;

$(".circle_animation").css("stroke-dashoffset", 1);

let interval = setInterval(function () {
    $("h2").text(i);

    if (i == 0) {
        clearInterval(interval);
        window.location.href = "index.php";
        return;
    }

    $(".circle_animation").css(
        "stroke-dashoffset",
        (time - i + 1) * (initialOffset / time)
    );
    i--;
}, 1000);
