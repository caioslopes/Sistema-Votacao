<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    session_destroy();
    
    //Puxa os dados da tabela votos
    $conferir = $conn->prepare("SELECT * FROM votos");
    $conferir->execute();
    $dadosconferir = $conferir->get_result();

    //Joga os dados em variaveis para poder ser utilizado mais a frente
    foreach ($dadosconferir as $dados) {
        $alunos = $dados['alunos']; 
        $candidato = $dados['candidato'];
        $nulo = $dados['nulo'];
    }

    //Verifica a quantidade de votos que teve, não podendo passar da quantidade de alunos
    if ($candidato + $nulo >= $alunos) {
        header('location: error.php');
        exit;
    }else{

    if(isset($_POST['confirmar-voto'])){
        $i = $_POST['voto'];

        $sqlUpdate = $conn->prepare("UPDATE votos SET candidato = candidato + $i WHERE id_voto = 1");
        $sqlUpdate->execute();

    }elseif (isset($_POST['confirmar-nulo'])){
        $i = $_POST['nulo'];

        $sqlUpdate = $conn->prepare("UPDATE votos SET nulo = nulo + $i WHERE id_voto = 1");
        $sqlUpdate->execute();
        
    }
 }

?>

<div class="corpo">
    <div class="conteudo-agradecimento">
        <div class="titulo">
            <h1>Seu voto foi computado!</h1>
        </div>
        <div class="caixa-aguarde">
            <span>Aguarde o temporizador para a proxima votação</span>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <div class="item">
            <h2>5</h2>
            <svg width="80" height="80" xmlns="http://www.w3.org/2000/svg">
                <circle id="circle" class="circle_animation" r="23.85699" cy="40" cx="40" stroke-width="4" stroke="white" fill="none"/>
            </svg>
            </div>
        </div>
    </div>
</div>