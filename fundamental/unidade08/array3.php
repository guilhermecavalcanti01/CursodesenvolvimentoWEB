<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            eCHO "EXISTE O ELEMENTO? " . array_search("Laranja", $_salada);
        ?>
    </body>
</html>