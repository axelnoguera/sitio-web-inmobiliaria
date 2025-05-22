<!DOCTYPE html>
<html lang="es">
    <link rel="shortcut icon" href="../img/casa.png" type="image/png">
    <meta charset="UTF-8">
    <title>casas pequeñas</title>
    <link rel="stylesheet" href="style.css">
<body>
 
<?php
  
if($resultado){

while($producto=$resultado->fetch_assoc()){


echo "
<article class="">
  <img src="$producto[imagen]" class="">
  <p class="">$producto[texto]</p>
  <b class="">$producto[precio]</b>
</article>
";

};

?>
    
    
<script src="script.js"></script>
<?php include("conexionMySql.php") ?>
<?php include("backend.php");
</body>
</html>
