<?php
include("conexionMySql.php");

if(isset($_POST["boton"])){
    if(strlen($_POST["nombre"]) > 2 && strlen($_POST["mail"]) > 2 && strlen($_POST["contraseña"]) > 7){
        $nombre = $_POST["nombre"];
        $mail = $_POST["mail"];
        $contraseña = $_POST["contraseña"];     

        $consulta = "INSERT INTO usuarios(nombre,mail,contraseña) VALUES(?,?,?)";

        $prepare = $conexion->prepare($consulta);

        $resultado = $prepare->execute([$nombre,$mail,$contraseña]);


        if($resultado){
            session_start();
        
            $_SESSION["datos"] = [$nombre,$mail,$contraseña];

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