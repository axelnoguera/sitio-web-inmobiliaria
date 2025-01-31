<?php
if(isset($_POST["boton"])){
    session_unset();

    ?>
        <script>
            window.location.href = "../index.php";
        </script>
    <?php
};

?>