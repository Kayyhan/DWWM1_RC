<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <div class="navbar">
                <ul>
                    <li>
                        <a href="/crud">Accueil</a>
                    </li>
                    <li>
                        <a href="/crud/connexion.php">Connexion</a>
                    </li>
                    <li>
                        <a href="/crud/inscription.php">Inscription</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <dvi class="container-form-connexion">
        <h1>Connexion :</h1>
        <form method="GET" action="" id="form-connexion" class="form-connexion">
            <div class="connexion-pseudo">
                <label for="pseudo">Pseudo</label>
                <input type="text" class="pseudo" id="pseudo" required />
            </div>
            <div class="connexion-mdp">
                <label for="mdp">Mot de passe</label>
                <input type="text" class="mdp" id="pseudo" required />
            </div>
        </form>
    </dvi>
</body>

</html>