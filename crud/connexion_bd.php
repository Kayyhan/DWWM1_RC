<?php

$conn = new PDO('mysql:host=localhost;dbname=crud', 'root', '');

if (!$conn) {
    die('Erreur de connexion');
}
