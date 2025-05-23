<?php 

$tabla = "casaspequeñas";

$consulta = "select * from $tabla";

$prepare = $conexion->prepare($consulta");

$prepare = $prepare->execute();

$resultado = prepare->fetchALL(PDO::FETCH_ASSOC);



};

?>