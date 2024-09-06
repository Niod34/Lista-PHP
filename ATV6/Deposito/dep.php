<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dep</title>
    <link rel="stylesheet" href="dep.css">
</head>

<body>
<a href="dep.html"> <button type="submit" value="sair">Sair </button></a>
    <main>


        <?php

        $saldo = 0;
        if (isset($_POST["depo"])) {
            $depo = $_POST["depo"];
            $depo = intval($depo);
            $saldo += $depo;
        }


        if ($depo > "0") {
            echo "Valor depositado<br>";
            echo "Seu saldo é: " . $saldo;
            return;
        }


        ?>
    </main>

</body>

</html>