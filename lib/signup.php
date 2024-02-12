<?php

if (isset($_POST["signup"])) {
    try {
        $message = "";
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $stmt = $con->prepare("SELECT * FROM users WHERE users = ?");
        $stmt->execute([$email]);

        if ($stmt->fetchColumn() > 0) {
            $message = "El correo electrónico ya está registrado";
        } else {
            $stmt = $con->prepare("INSERT INTO users (name, lastname, email, password) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $lastname, $email, password_hash($password, PASSWORD_DEFAULT)]);

            if ($stmt->rowCount() > 0) {
                $message = "Usuario registrado correctamente";
            } else {
                $message = "Error al registrar el usuario";
            }
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
            
            alert("Error al registrar el usuario");
        </script>
        <?php
    }
}