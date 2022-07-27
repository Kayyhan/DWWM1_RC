<?php
session_start();
require_once 'connexion_bd.php';
$conn = new Connect();

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);


    $query = "SELECT email, pseudo password FROM utilisateurs WHERE email = '$email'";
    $row = $conn->get($query);
    // $check = $conn->prepare('SELECT email, pseudo password FROM utilisateurs WHERE email = ?');
    // $check->execute(array($email));
    // $conn = $check->fetch();
    // $row = $check->rowCount();

    if (count($row) == 1) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('Location:connexion.php?login_err=email');
            return;
        }

        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = uniqid();
            $session = $_SESSION['user'];
            $query = "UPDATE utilisateurs SET SESSION = '$session' WHERE email = '$email'";
            $row = $conn->set($query);
            header('Location:member.php');
        }
    } else header('Location:connexion.php?login_err=already');

    // $password_crypt = password_hash($password, PASSWORD_BCRYPT);
}



// header('Location:connexion.php');
