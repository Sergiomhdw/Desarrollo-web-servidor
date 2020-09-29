<?= session_start(); ?>
<html>
<head>
<title>Torre o Caballo</title>
</head>
<body>
<?
if(isset($_SESSION["test"])){
    print("Torre");
}
else{
    print("Caballo");
}

?>
</body>
</html>

<!-- <sale 1Caballo -->