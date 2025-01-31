<?php

if(isset($_POST["boton"])){
    $mail = $_POST["mail"];

    $mailSanitizado = filter_var($mail,FILTER_SANITIZE_EMAIL);

    if(filter_var($mailSanitizado,FILTER_VALIDATE_EMAIL)){
        $destinatario = "axelprogramacion123@gmail.com";
        $asunto = "quiero recibir notificaciones";
        $mensaje = $mailSanitizado;
        $header = "From: pcmi7538@gmail.com" . "\r\n";
        $header .= "Reply-To: " . $mailSanitizado . "\r\n";
        $header .= "X-Mailer: PHP/ " . phpversion();

        mail($destinatario,$asunto,$mensaje,$header);
    };
};

?>