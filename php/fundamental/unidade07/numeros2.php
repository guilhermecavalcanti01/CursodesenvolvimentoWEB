<?php
    $_salario = 1095;
    $_gasolina = 4.55;
    $_telefone = "3456-0987";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "O $_salario é um numero ? " . is_numeric($_salario) . "</br>";
            echo "O $_gasolina é um numero ? " . is_numeric($_gasolina) . "</br>";
            echo "O $_telefone é um numero ? " . is_numeric($_telefone) . "</br></br>";

            // testar se é inteiro
            echo "O $_salario é um inteiro ? " . is_int($_salario) . "</br>";
            echo "O $_gasolina é um inteiro ? " . is_int($_gasolina) . "</br>";
            echo "O $_telefone é um inteiro ? " . is_int($_telefone) . "</br></br>";


            // testar se é float
            echo "O $_salario é um float ? " . is_float($_salario) . "</br>";
            echo "O $_gasolina é um float ? " . is_float($_gasolina) . "</br>";
            echo "O $_telefone é um float ? " . is_float($_telefone) . "</br></br>";
        ?>
        
        
    </body>
</html>