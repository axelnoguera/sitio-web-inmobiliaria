<?php 

$tabla = "casaspequeñas";

$consulta = "select * from ?";

$prepare = $conexion->prepare($consulta");

$prepare = $prepare->execute([$tabla]);

$resultado = prepare->fetchALL(PDO::FETCH_ASSOC);



};

?>