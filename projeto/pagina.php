<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    require_once('Postgres.php');
    $postgres = new Postgres('angelo', 'angelo');
    $conn = $postgres->criaConexao();
    $consulta = $conn->query("SELECT * FROM reserve");
    $consulta->execute();
    $result = $consulta->fetchAll();

    
    ?>
</head>
<body>
    <?php 
    
    if(!$result){
        echo "deu pau";
    }
    foreach($result as $row){
        echo $row['sid'] . "</br>";
    }
    echo "<h1>teste</h1>";
    
    ?>
</body>
</html>