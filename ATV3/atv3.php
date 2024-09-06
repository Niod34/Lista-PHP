<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV3</title>
    <link rel="stylesheet" href="atv3.css">
</head>

<body>
    <main>


        <?php

        $n1 = $_POST["n1"];

        if ($n1 % 2 == 0) {
            echo "O número $n1 é: PAR. ";
        } else {
            echo "O número $n1 é: ÍMPAR";
        }



        ?>

    </main>

</body>

</html>