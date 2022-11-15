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
</body>
</html>