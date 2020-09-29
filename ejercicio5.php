<?php
    session_start();
    $inactividad = 60;
    if(isset($_SESSION["timeot"])){
        $sessionTTL = time() - $_SESSION["timeout"];
        if($sessionTTL > $inactividad){
            session_destroy();
            header("Location: /29de09/logout.php");
        }
    }

    $_SESSION["timeot"] = time();

    if(!isset($_SESSION['visitas'])){
        $_SESSION['usuario'] = "Sergio";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $_SESSION['usuario']?>
</body>
</hmtl>