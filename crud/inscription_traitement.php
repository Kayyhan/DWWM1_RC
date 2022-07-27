<?php
require 'connexion_bd.php';
session_start();
$conn = new Connect();


if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm'])) {

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_confirm = htmlspecialchars($_POST['password_confirm']);

    $query = "SELECT id FROM utilisateurs WHERE email = '$email' OR pseudo = '$pseudo'";
    $row = $conn->get($query);

    var_dump(empty($row));


    if (!empty($row)) {
        // si utilisateur existe deja erreur
        header('Location:inscription.php?reg_err=already');
        return;
    }

    if (strlen($pseudo) >= 100) {
        header('Location:inscription.php?reg_err=pseudo_length');
        return;
    }

    if (strlen($email) >= 100) {
        header('Location:inscription.php?reg_err=email_length');
        return;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location:inscription.php?reg_err=email');
        return;
    }


    if ($password != $password_confirm) {
        header('Location:inscription.php?reg_err=password');
        return;
    }





    // $password_crypt = password_hash($password, PASSWORD_BCRYPT);
    $password = hash('sha256', $password);
    $ip = $_SERVER['REMOTE_ADDR'];
    $_SESSION['user'] = uniqid();
    $session = $_SESSION["user"];
    $query = "INSERT INTO utilisateurs (pseudo, email, password, ip, SESSION) VALUES ('$pseudo', '$email', '$password', '$ip', '$session')";
    $conn->set($query);
    header('Location:membre.php');
}
