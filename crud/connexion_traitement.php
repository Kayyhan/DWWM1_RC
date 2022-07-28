<?php
session_start();
require_once 'connexion_bd.php';
$conn = new Connect();


if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);


    $query = "SELECT * FROM utilisateurs WHERE email = '$email'";
    $row = $conn->get($query);



    if (!empty($row)) {


        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('Location:connexion.php?login_err=email');
            return;
        }

        if (password_verify($password, $row['password'])) {
            var_dump($row['password']);

            $_SESSION['user'] = uniqid();
            $session = $_SESSION['user'];
            $query = "UPDATE utilisateurs SET SESSION = '$session' WHERE email = '$email'";
            $row = $conn->set($query);
            header('Location:membre.php');
            return;
        }

        header('Location:connexion.php?login_err=password');
    } else header('Location:connexion.php?login_err=already');
}
