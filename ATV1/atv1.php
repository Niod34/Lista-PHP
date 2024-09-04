<?php    

$_age = $_GET["age"];

    if ($_age < 18) {
        echo "<p>Você não pode se cadastrar</p>";
    } else {
        echo "<p>Você pode se cadastrar.</p>";
    }
?>