<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_agenda = array("nome" => "andre", 
                          "telefone" => "999-888-777",
                          "salario" => 1000.50);
        
        foreach ($_agenda as $_contatos => $_valor) {
            echo $_contatos . ": " . $_valor . "<br>";  
        }
    ?>
</body>
</html>