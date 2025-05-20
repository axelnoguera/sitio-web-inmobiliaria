<?php 

$consulta = "select * from ?";

$prepare = conexion->prepare($consulta");

$resultado = $prepare->execute([casaspequeñas]);

if($resultado ){
};

?>