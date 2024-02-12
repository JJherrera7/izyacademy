<?php

include_once "lib/config.php";

session_start();

$con = new PDO("mysql:host={$host};dbname={$db};port={$port}", $user, $password, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => true
]);