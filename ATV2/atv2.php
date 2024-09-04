<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultafo</title>
  <link rel="stylesheet" href="atv2.css">
</head>
<body>
<main>
    
<?php    
$_nota = $_GET["nota"];

switch ($_nota) {
    case "10":
        echo "Sua nota é: A";
        break;

    case "9":
        echo "Sua nota é: B";
        break;

    case "8":
    case "7":
        echo "Sua nota é: C";
        break;

    case "6":
    case "5":
        echo "Sua nota é: D";
        break;

    case "0":
    case "1":
    case "2":
    case "3":
    case "4":
        echo "Sua nota é: E";
        break;

    default:
        echo "Nota inválida";
        break;
}
    
?>
</main>
    
</body>
</html>


