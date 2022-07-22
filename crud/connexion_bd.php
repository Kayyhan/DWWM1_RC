<?php

$conn = mysqli_connect('localhost', 'root', '', 'crud');

if (!$conn) {
    die('Erreur de connexion');
}
