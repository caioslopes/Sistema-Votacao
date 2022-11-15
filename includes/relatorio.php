<?php

$PuxandoDados = $conn->prepare("SELECT * FROM votos");
$PuxandoDados->execute();
$dados = $PuxandoDados->get_result();

$headers = ['Id', 'Alunos', 'Candidato', 'Nulo'];

$arquivo = fopen('relátorio.csv', 'w');

// Criar o cabeçalho
fputcsv($arquivo , $headers);

// Popular os dados
foreach ($dados as $linha) {
    fputcsv($arquivo, $linha);
}

// Fechar o arquivo
fclose($arquivo);
?>

<div class="corpo">
    <div class="alert-relatorio">
        <div class="titulo">
            <h1>Relátorio gerado com sucesso!</h1>
        </div>

        <div class="baixar-relatorio">
            <a href="relátorio.csv">Baixar Relátorio</a>
        </div>

        <div class="baixar-relatorio">
            <a href="index.php">Inicio</a>
        </div>
    </div>
</div>