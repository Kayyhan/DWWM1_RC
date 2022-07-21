<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <title>Connexion</title>
</head>

<body>
    <header>
        <nav>
            <div class="navbar">
                <ul>
                    <li>
                        <a href="/DWWM1_RC/crud/">Accueil</a>
                    </li>
                    <li>
                        <a href="/DWWM1_RC/crud/connexion.php">Connexion</a>
                    </li>
                    <li>
                        <a href="/DWWM1_RC/crud/inscription.php">Inscription</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <dvi class="container-form-connexion">
        <h1>Connexion :</h1>
        <form method="GET" action="" id="form-connexion" class="form-connexion">
            <div class="connexion-pseudo">
                <input type="text" class="pseudo" id="pseudo" placeholder="Pseudo" required />
            </div>
            <div class="connexion-mdp">
                <input type="text" class="mdp" id="pseudo" placeholder="Mot de passe" required />
            </div>
            <div class="button-connexion">
                <button>Connexion</button>
            </div>
            <div class="information">
                <a href="#" class="mdp-oublie">Mot de passe oublié ?</a>
                <a href="/DWWM1_RC/crud/inscription.php" class="no-compte">Pas encore de compte ?</a>
            </div>
        </form>
    </dvi>
</body>

</html>