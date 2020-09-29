<?php session_start(); ?>
<!DOCTYPE html>
<?php
    session_start();
        if(isset($_SESSION['visitas'])){
            $_SESSION['visitas']++;
        }
        else{
            $_SESSION['visitas'] =1;
        }
?>
<html lang="en">
<head>
    <meta charsets='UTF-8'>
    <meta name="viewport" content="width=devive-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
    <a>Visitas:<?= $_SESSION['visitas']; ?></a>
</body>
</html>

<!-- El contador de visitas va aumentando según
refrescando la página -->