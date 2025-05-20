<?php 

$consulta = "select * from ?";

$prepare = $conexion->prepare($consulta");

$resultado = $prepare->execute([casaspequeñas]);

if($resultado){

while($producto=$resultado->fetch_assoc()){

<div>
<img src="$producto[imagen]">
<p>$producto[texto]</p>
<span>$producto[precio]</span>
</div>

};

};

?>