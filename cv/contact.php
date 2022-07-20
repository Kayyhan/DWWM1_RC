<?php
require('db.connexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuvillier Rémy | Contact</title>
    <link rel="stylesheet" href="./css/styles.css" type="text/css" />

</head>

<body>
    <div class="main">
        <header>
            <nav>
                <div class="logo">
                    <a href="/cv"><img src="./img/logo.png" alt="" /></a>
                </div>
                <div class="navbar">
                    <ul>
                        <li>
                            <a href="/cv">Hello</a>
                        </li>
                        <li>
                            <a href="/cv/parcours.php">Parcours</a>
                        </li>
                        <li>
                            <a href="/cv/competences.php">Compétences</a>
                        </li>
                        <li>
                            <a href="/cv/projects.php">Projects</a>
                        </li>
                        <li>
                            <a href="/cv/contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="form-container">
            <form action="" method="get" class="contact-form">
                <div class="form-name">
                    <label for="name">Nom, Prénom</label>
                    <input type="text" class="name" id="name" required>
                </div>
                <div class="form-mail">
                    <label for="email">E-mail</label>
                    <input type="email" class="email" id="email" required>
                </div>
                <div class="form-message">
                    <label for="message">Message</label>
                    <textarea class="message" id="message" required></textarea>
                </div>
                <div class="form-submit">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
        <footer>
            <div class="link">

            </div>
        </footer>
    </div>
</body>

</html>