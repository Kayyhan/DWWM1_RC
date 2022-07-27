<?php
session_start();
require 'connexion_bd.php';

if (!isset($_SESSION['user']))
    header('Location:index.php');



$session = $_SESSION["user"];
$query = "SELECT * FROM utilisateurs WHERE SESSION = '$session'";
$row = $conn->get($query);
if (empty($row)) {
    header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membre</title>
</head>

<body>
    <h1>Bonjour ! <?php echo $_SESSION['user']; ?></h1>
    <a href="deconnexion.php" class="deconnexion">Déconnexion</a>
</body>

</html>