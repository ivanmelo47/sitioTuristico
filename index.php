<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Tiro+Devanagari+Hindi&display=swap"
        rel="stylesheet">

    <title>Registro</title>
</head>

<body>
    <?php
         include('calcular.php');
    ?>
    <form method="post" class="formulario">
        <h2 class="titulo">Área de un triangulo</h2>

        <input type="text" name=articulo placeholder="articulo" class="entradas" value=0>
        <input type="text" name=origen placeholder="origen" class="entradas" value=0>
        <input type="text" name=presentacion placeholder="presentacion" class="entradas" value=0>
        <input type="text" name=cantidad placeholder="cantidad" class="entradas" value=0>
        <input type="text" name=precio placeholder="precio" class="entradas" value=0>
        <input type="text" name=subtotal placeholder="subtotal" class="entradas" value=0>
        




        <input type="text" name=precio placeholder="altura" class="entradas" value=<label>Nombre:</label> <input
            id="nombre" type="text" name="nombre" value="<?php echo $resultado;?>" readonly class="entradas2">
        <input type="submit" name="calcular" class="registro">

    </form>





</body>

</html>