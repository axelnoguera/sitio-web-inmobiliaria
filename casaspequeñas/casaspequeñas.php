<?php include("conexionMySql.php") ?>
<?php include("backend.php"); ?>

<!DOCTYPE html>
<html lang="es">
    <link rel="shortcut icon" href="../img/casa.png" type="image/png">
    <meta charset="UTF-8">
    <title>casas pequeñas</title>
    <link rel="stylesheet" href="style.css">
<body>
 
<?php
  
if($resultado){

  foreach($resultado as $producto){
    echo "

      <article>
        <img src="$producto['imagen']">
        <p>$producto['texto']</p>
        <b>$producto['precio']</b>
      </article>

    ";
  };

?>
    
    
<script src="script.js"></script>
</body>
</html>
