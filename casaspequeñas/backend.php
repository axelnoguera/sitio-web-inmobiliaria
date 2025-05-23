<?php 

$tabla = "casaspequeñas";

$consulta = "select * from ?";

$prepare = $conexion->prepare($consulta");

$resultado = $prepare->execute([$tabla]);

};

?>