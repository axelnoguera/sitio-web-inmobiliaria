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


<div>
<img src="$producto[imagen]">
<p>$producto[texto]</p>
<span>$producto[precio]</span>
</div>

};

?>
    
    
<script src="script.js"></script>
<?php include("conexionMySql.php") ?>
<?php include("backend.php");
</body>
</html>
