<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Agradecimento</title>
    <style>
        /* Contador animado */
        .item {
            position: relative;
            float: left;
        }

        .item h2 {
            text-align: center;
            position: absolute;
            line-height: 40px;
            width: 100%;
        }

        svg {
            transform: rotate(-90deg);
        }

        .circle_animation {
            stroke-dasharray: 149;
            stroke-dashoffset: 149;
            transition: all 1s linear;
        }
    </style>
</head>
<body>
<?php
    include_once('database.php');
    include_once('includes/agradecimento.php');
?>
<script src="js/script.js"></script>
<script>
    /* Contador regressivo animado circular */
    let time = 5;
    let initialOffset = 149;
    let i = 4;

    $(".circle_animation").css("stroke-dashoffset", 1);
    clickConfirmar.play();    
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
</script>
</body>
</html>