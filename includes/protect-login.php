<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id_senha'])) {
    die("<div class=\"corpo\">
    <div class=\"conteudo-agradecimento\">
        <div class=\"titulo\">
            <h1>Você não pode acessar esta página porque está máquina ainda não foi liberada!</h1>
        </div>
        <div class=\"caixa-aguarde\">
            <a href=\"index.php\">Liberar Máquina</a>
        </div>
    </div>
</div>");
} ?>
