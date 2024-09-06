<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV1</title>
    <link rel="stylesheet" href="b6.css">
</head>

<body>
    <main>

<?php
$action = $_POST['action'] ;

switch($action) {
    case 'saldo':
        echo "Você ta duro!";
        break;
    case 'dep':
        echo "Depósito realizado!";
        break;
    case 'sacar':
        echo "Saque realizado!";
        break;
    case 'sair':
        echo "Você saiu!";
        break;
}
?>

</body>

</html>