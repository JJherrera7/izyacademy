<?php

if (isset($_POST["signin"])) {
    try {
        $message = "";
        $email = $_POST["email"];
        $password = $_POST["password"];

        $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch();

            if (password_verify($password, $user["password"])) {
                $_SESSION["user"] = $user["email"];
                $message = "Iniciaste sesión correctamente";
            } else {
                $message = "Contraseña incorrecta";
            }
        } else {
            $message = "El correo electrónico no está registrado";
        }

        ?>
        <script id="message">
            alert("<?= $message ?>");

        </script>
        <?php
    } catch (Exception $e) {
        ?>
        <script id="message">
            console.log("<?= $e->getMessage() ?>");

            alert("Error al iniciar sesión");
        </script>
        <?php
    }
}