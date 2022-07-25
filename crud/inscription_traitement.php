<?php
require 'connexion_bd.php';

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

    $password_crypt = password_hash($password, PASSWORD_BCRYPT);
    $ip = $_SERVER['REMOTE_ADDR'];
    $query = "INSERT INTO utilisateurs (pseudo, email, password, ip) VALUES ('$pseudo', '$email', '$password', '$ip')";
    $conn->set($query);
    header('Location:inscription.php?reg_err=success');

    // $checkRow = $checkStatement->fetch();
    // $row = $checkStatement->rowCount();


    // if ($row == 0) {
    //     if (strlen($pseudo) <= 100) {
    //         if (strlen($email) <= 100) {

    //             if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    //                 if ($password == $password_confirm) {

    //                     $password_crypt = password_hash($password, PASSWORD_BCRYPT);
    //                     $ip = $_SERVER['REMOTE_ADDR'];
    //                     var_dump($ip);
    //                     $statement = $conn->prepare("INSERT INTO utilisateurs (pseudo, email, password, ip) VALUES ('$pseudo', '$email', '$password', '$ip')");
    //                     $statement->execute();
    //                     header('Location:inscription.php?reg_err=success');
    //                 } else header('Location:inscription.php?reg_err=password');
    //             } else header('Location:inscription.php?reg_err=email');
    //         } else header('Location:inscription.php?reg_err=email_length');
    //     } else header('Location:inscription.php?reg_err=pseudo_length');
    // } else header('Location:inscription.php?reg_err=already');
}
