function Candidato() {
    var candidato = document.getElementById('btn-confirmar').style.display;
    document.getElementById('nulo-id').classList.remove("active");

    
    if(document.getElementById('btn-confirmar-nulo').style.display = 'block')
        document.getElementById('btn-confirmar-nulo').style.display = 'none';

    if(candidato == "none"){
        document.getElementById('btn-confirmar').style.display = 'block';
        document.getElementById('candidato-id').classList.add("active");
    }else{
        document.getElementById('btn-confirmar').style.display = 'none';
        document.getElementById('candidato-id').classList.remove("active");

    }
}

function Nulo() {
    var nulo = document.getElementById('btn-confirmar-nulo').style.display;
    document.getElementById('candidato-id').classList.remove("active");

    
    if(document.getElementById('btn-confirmar').style.display = 'block')
        document.getElementById('btn-confirmar').style.display = 'none';
    
    if(nulo == "none"){
        document.getElementById('btn-confirmar-nulo').style.display = 'block';
        document.getElementById('nulo-id').classList.add("active");
    }else{
        document.getElementById('btn-confirmar-nulo').style.display = 'none';
        document.getElementById('nulo-id').classList.remove("active");

    }
}