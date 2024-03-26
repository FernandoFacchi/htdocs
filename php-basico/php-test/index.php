<?php

// $nome = 'Felipe';

$nome[0] = 'Fernando';
$nome[1] = 'Felipe';
$nome[2] = 'Matheus';

$indices = count($nome);
echo $indices;
// echo 'teste';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        // echo '
        //     <h2>
        //     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum delectus deleniti voluptatum reprehenderit quo quaerat illum numquam blanditiis labore ducimus ut, molestias fugit amet quos beatae distinctio unde, error sapiente. '.$nome.'
        //     </h2>
        // ';
        for($i = 0; $i < $indices; $i++){
            echo $nome[$i] . '<br>';
        }
    ?>
</body>
</html>