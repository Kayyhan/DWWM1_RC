<?php
// require 'connexion_bd.php';
$conn = new PDO('mysql:host=localhost;dbname=crud', 'root', '');

if (!$conn) {
    die('Erreur de connexion');
}

var_dump($_POST);


if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm'])) {

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_confirm = htmlspecialchars($_POST['password_confirm']);

    $check = $conn->prepare('SELECT email, pseudo password FROM utilisateurs WHERE email = ?');
    $check->execute(array($email));
    $conn = $check->fetch();
    $row = $check->rowCount();


    if ($row == 0) {
        if (strlen($pseudo) <= 100) {
            if (strlen($email) <= 100) {

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                    if ($password == $password_confirm) {

                        $password_crypt = password_hash($password, PASSWORD_BCRYPT);
                        $ip = $_SERVER['REMOTE_ADDR'];
                        var_dump($ip);
                        $statement = $conn->prepare("INSERT INTO utilisateurs (pseudo, email, password, ip) VALUES ('$pseudo', '$email', '$password', '$ip')");
                        $statement->execute();
                        header('Location:inscription.php?reg_err=success');
                    } else header('Location:inscription.php?reg_err=password');
                } else header('Location:inscription.php?reg_err=email');
            } else header('Location:inscription.php?reg_err=email_length');
        } else header('Location:inscription.php?reg_err=pseudo_length');
    } else header('Location:inscription.php?reg_err=already');
}
