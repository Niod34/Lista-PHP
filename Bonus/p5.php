<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV1</title>
    <link rel="stylesheet" href="b5.css">
</head>

<body>
    <main>


        <?php

        if (isset($_POST["user"]) && isset($_POST["senha"])) {
            $user = $_POST["user"];
            $senha = $_POST["senha"];
        }


        if ($user == "admin" && $senha == "1234") {
            header("Location: a6.html");
                } else {
            echo "Login ou senha incorretos";
        }
        ?>

    </main>
</body>

</html>