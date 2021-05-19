<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <?php 
        // Clases
        include_once('./clases/class-usuario.php');
        
        $usuario = new Usuario('Gabriela', 'Martinez', '25/10/1997', 'Masculino');
        // $usuario -> setNombre('Mario');
        // $usuario -> setApellido('Manzanares');

        echo '<h4>' . $usuario -> getNombre() . ' ' . $usuario -> getApellido() . '</h4>';
        echo var_dump( $usuario );
    ?>
</body>
</html>