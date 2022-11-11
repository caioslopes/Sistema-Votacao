<?php

    if(isset($_POST['confirmar-voto'])){
        $i = $_POST['confirmar-voto'];

        $sqlUpdate = $conn->prepare("UPDATE votos SET candidato = candidato + $i WHERE id = 1");
        $sqlUpdate->execute();
    }

?>
<div>
    <h1>Confirmado!</h1>
</div>