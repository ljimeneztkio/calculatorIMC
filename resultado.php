<?php require 'index.php'; ?>
<?php error_reporting(0); ?>
<?php
    $mts = $_REQUEST['cms']/100;
    $kgs = $_REQUEST['kgs'];

    $IMC = $mts * $mts;
    $IMC = $kgs/$IMC;

    echo "<h1> Tu IMC es $IMC";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Resultado de IMC</title>
</head>
<body>
    <?php if($IMC>30.00) :?>
        <div> Tienes sobrepeso </div>
    <?php elseif($IMC<25) :?>
        <div> Estás bajo de peso </div>
    <?php elseif($IMC>25 && $IMC<30) :?>
        <div> Estás en tu peso ideal </div>
    <?php endif; ?>

</body>
</html>