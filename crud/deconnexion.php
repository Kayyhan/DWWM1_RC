<?php
session_start();
session_destroy();
require_once 'connexion_bd.php';
$conn = new Connect();
$query = "UPDATE utilisateurs SET SESSION = 'NULL' WHERE email = '$email'";
$row = $conn->set($query);

header('Location: index.php');
