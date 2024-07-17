<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Calculadora de IMC</title>
</head>
<body>
    <form action="resultado.php" method="post">

        <label for="cms">Ingresa tu altura en Centimetros: </label><br>
        <input type="number" name="cms" id="cms"><br>
        
        <label for="kgs">Ingresa tu peso en Kilogramos: </label><br>
        <input type="number" name="kgs" id="kgs"><br>

        <input type="submit" value="Calcular">

    </form>
</body>
</html>