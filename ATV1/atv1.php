<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV1</title>
    <link rel="stylesheet" href="atv1.css">
</head>
<body>
    <main>
<?php    

$_age = $_GET["age"];

    if ($_age < 18) {
        echo "<p>Você não pode se cadastrar</p>";
    } else {
        echo "<p>Você pode se cadastrar.</p>";
    }
?>

</main>
</body>
</html>