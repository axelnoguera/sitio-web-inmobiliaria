<?php



if(isset($_SESSION["datos"])){
    ?>
        <script>
            let linkUsuario = document.querySelector("#link__usuario");

            linkUsuario.addEventListener("click", ()=>{
                window.location.href = "usuario/usuario.php";
            });
            
        </script>
    <?php
}else{
    ?>
    <script>
        let linkUsuario = document.querySelector("#link__usuario");

        linkUsuario.addEventListener("click", ()=>{
            window.location.href = "registrarse/registrarse.php";
        });
    </script>
<?php
};

?>