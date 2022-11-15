<?php

//Login Aluno
    //Função que valida os dados enviados pelo usuario
    if(isset($_POST['login'])){
        if (strlen($_POST['senha']) == 0) {
        header('location: index.php?status=error');
    } else {
        //Pega os valores inseridos pelo usuario e passa um filtro para retonar apenas string (segurança)
        $senha = $conn->real_escape_string($_POST['senha']);

        //Monta a query que verifica se há um login digitado
        $VerificaSenha = $conn->prepare("SELECT * FROM senha WHERE senha = ?");
        //Separa os valores inseridos da query (segurança)
        $VerificaSenha->bind_param("s", $senha);
        //Executa a query
        $VerificaSenha->execute();
        //Pegar o valor retonado da query
        $resultVerificaSenha = $VerificaSenha->get_result();

        //Verifica o numero de linhas retonardo pega varaivel $resultQuerySelectAluno
        $Confere_Senha = $resultVerificaSenha->num_rows;

        //Se o numero for igual a 1, vai ser criado uma sessão caso contrario sera redirecionado para a pagina index.php
        if($Confere_Senha == 1){

            $senha = $resultVerificaSenha->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id_senha'] = $senha['id_senha'];
            
            header('location: pagina-votacao.php');
            exit;

        }
    }
}

?>

<div class="corpo">
    <div class="caixa-formulario">
        <div class="titulo-formulario">
            <span>Liberar Máquina</span>
        </div>
        <form class="formulario-senha" method="POST">
            <div>
                <label>Código</label>
                <input type="password" name="senha">
            </div>
            <div>
                <input type="submit" name="login" value="Liberar">
            </div>
        </form>
    </div>
</div>

<div class="gerar-relatorio">
    <a href="relatorio.php">Gerar Relátorio</a>
</div>