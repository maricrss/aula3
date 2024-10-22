<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Três Valores</title>
</head>
<body>
    <h2>Soma de Três Valores</h2>
    <form method="post" action="">
        <input type="number" name="valor1" placeholder="Digite o primeiro valor" required><br>
        <input type="number" name="valor2" placeholder="Digite o segundo valor" required><br>
        <input type="number" name="valor3" placeholder="Digite o terceiro valor" required><br>
        <input type="submit" value="Calcular">

         <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $valor1 = $_POST['valor1'];
     $valor22 = $_POST['valor2'];
     $valor3 = $_POST['valor3'];


     $media = ($valor1+$valor2+$valor3) /2;
    

     echo "O usuario esta" . ($media1>= 7?"acima do esperado": "abaixo do esperado") . "com media $media.";
    }
    ?>

</body>
</html>
