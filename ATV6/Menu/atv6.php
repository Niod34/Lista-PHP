<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV1</title>
    <link rel="stylesheet" href="atv6.css">
</head>

<body>
    <main>

<?php
$action = $_POST['action'] ;

switch($action) {
    case 'saldo':
        header("Location: ../Saldo/sal.php ");

        break;
    case 'dep':
        header("Location: ../Deposito/dep.html ");
        break;
    case 'sacar':
        echo "Quanto deseja sacar?";

        break;
    case 'sair':
        echo "Você saiu!";
        break;
}
?>


</body>

</html>