<?php
include("conexionMySql.php");

if(isset($_POST["boton"])){
    if(strlen($_POST["nombre"]) > 2 && strlen($_POST["mail"]) > 2 &&  strlen($_POST["contraseña"]) > 7){
        $nombre = $_POST["nombre"];
        $mail = $_POST["mail"];
        $contraseña = $_POST["contraseña"];

        $consulta = "SELECT * FROM usuarios WHERE nombre = ? AND mail = ? AND contraseña = ?";

        $prepare = $conexion->prepare($consulta);

        $prepare->execute([$nombre,$mail,$contraseña]);

        $resultado = $prepare->fetch(PDO::FETCH_ASSOC);

        if($resultado){
            session_start();

            $_SESSION["datos"] = [$resultado['nombre'],$resultado['mail'],$resultado['contraseña']];

            if($_SESSION["datos"]){
                ?>
                <script>
                    window.location.href = "../index.php";
                </script>
                <?php
            };
        };

    }else{
        ?>
            <script>
                document.querySelector(".alerta-error").style.display = "inline";

                setTimeout(()=>{
                    document.querySelector(".alerta-error").style.display = "none";
                },4000);
            </script>
        <?php
    }
};

?>