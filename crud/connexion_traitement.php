<?php
session_start();
require_once 'connexion_bd.php';


if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $check = $conn->prepare('SELECT email, pseudo password FROM utilisateurs WHERE email = ?');
    $check->execute(array($email));
    $conn = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // $password = hash('sha256', $password);
            $password_crypt = password_hash($password, PASSWORD_BCRYPT);
            if ($conn['password'] === $password) {

                $_SESSION['user'] = $conn['pseudo'];
                header('Location:membre.php');
            } else header('Location:connexion.php?login_err=password');
        } else header('Location:connexion.php?login_err=email');
    } else header('Location:connexion.php?login_err=already');
} else header('Location:connexion.php');
