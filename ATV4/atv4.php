<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV4</title>
    <link rel="stylesheet" href="atv4.css">
</head>

<body>
    <main>

        <?php

        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $operation = $_POST["operation"];


        switch ($operation) {
            case "1":

                echo "O Resultado é: " . $n1 + $n2;
                break;

            case "2":

                echo "O Resultado é: " . $n1 - $n2;
                break;

            case "3":

                echo "O Resultado é: " . $n1 * $n2;
                break;

            case "4":

                if ($_n2 != 0) {
                    echo "O resultado da divisão é: " . $n1 / $n2;;
                } else {
                    echo "Erro: Divisão por zero não é permitida.";
                }
                break;

            default:
                echo "Operação inválida.";
                break;
        }

        ?>

    </main>

</body>

</html>