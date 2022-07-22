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
        <?php
        if (isset($_GET['login_err'])) {
            $err = htmlspecialchars($_GET['login_err']);

            switch ($err) {

                case 'password':
        ?>
                    <div class="alert">
                        <p><b>Erreur</b>, mot de passe incorrect</p>
                    </div>
                <?php
                    break;

                case 'email':
                ?>
                    <div class="alert">
                        <p><b>Erreur</b>, email incorrect</p>
                    </div>
                <?php
                    break;

                case 'already':
                ?>
                    <div class="alert">
                        <p><b>Erreur</b>, compte non existant</p>
                    </div>
        <?php
                    break;
            }
        }
        ?>

        <h1>Connexion :</h1>
        <form method="post" action="connexion_traitement.php" id="form-connexion" class="form-connexion">
            <div class="connexion-pseudo">
                <input type="email" class="email" id="email" placeholder="Email" required />
            </div>
            <div class="connexion-mdp">
                <input type="password" class="password_connexion" id="password_connexion" placeholder="Mot de passe" required />
            </div>
            <div class="button-connexion">
                <button type="submit" id="submit_connexion">Connexion</button>
            </div>
            <div class="information">
                <a href="#" class="mdp-oublie">Mot de passe oublié ?</a>
                <a href="/DWWM1_RC/crud/inscription.php" class="no-compte">Pas encore de compte ?</a>
            </div>
        </form>
    </dvi>
</body>

</html>