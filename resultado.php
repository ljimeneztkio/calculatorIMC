<?php require 'index.php'; ?>

<?php
    $mts = $_REQUEST['cms']/100;
    $kgs = $_REQUEST['kgs'];

    $IMC = $mts * $mts;
    $IMC = $kgs/$IMC;

    echo "<h1> Tu IMC es $IMC";
?>