<?php
require('db.connexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuvillier Rémy | Développeur web</title>
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

        <div class="presentation-container">
            <div class="presentation-text">
                <div class="text">
                    <h1>Cuvillier Rémy</h1>
                    <p>Bonjour, je me présente Rémy, j'ai 23 ans et je suis développeur web. Je suis passionné par le web depuis plusieurs années. </p>
                </div>
            </div>
            <div class="presentation-picture">
                <div class="picture">
                    <img src="./img/profile.png" alt="Ma photo de profile" title="Photo de profile">
                </div>
            </div>
        </div>

        <footer>
            <div class="link">

            </div>
        </footer>
    </div>

</body>

</html>