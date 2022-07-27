<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <title>Inscription</title>
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
    <div class="container-inscription">
        <?php
        if (isset($_GET['reg_err'])) {
            $err = htmlspecialchars($_GET['reg_err']);

            switch ($err) {

                case 'success':
        ?>
                    <div class="alert">
                        <p><b>Succès</b>, inscription réussie !</p>
                    </div>
                <?php
                    break;

                case 'email':
                ?>
                    <div class="alert">
                        <p><b>Erreur</b>, email non valide</p>
                    </div>
                <?php
                    break;

                case 'email_length':
                ?>
                    <div class="alert">
                        <p><b>Erreur</b>, email trop long</p>
                    </div>
                <?php
                    break;

                case 'pseudo_length':
                ?>
                    <div class="alert">
                        <p><b>Erreur</b>, pseudo trop long</p>
                    </div>
                <?php
                    break;

                case 'password':
                ?>
                    <div class="alert">
                        <p><b>Erreur</b>, mot de passe différent</p>
                    </div>
                <?php
                    break;

                case 'already':
                ?>
                    <div class="alert">
                        <p><b>Erreur</b>, compte déjà existant</p>
                    </div>
        <?php
                    break;
            }
        }
        ?>


        <h1>Inscription :</h1>
        <div class="container-form-inscription">
            <form action="inscription_traitement.php" method="post" class="form-inscription">
                <div class="inscription-input">
                    <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required />
                </div>
                <div class="inscription-input">
                    <input type="email" id="email" name="email" placeholder="E-mail" required />
                </div>
                <div class="inscription-input">
                    <input type="password" id="password" name="password" placeholder="Mot de passe" required />
                </div>
                <div class="inscription-input">
                    <input type="password" id="password_confirm" name="password_confirm" onchange="confirm()" placeholder="Confirmaton de mot de passe" required />
                </div>
                <div class="inscription-button">
                    <button type="submit" id="btn_inscription">Inscription</button>
                </div>
            </form>
        </div>

        <div id="container-condition">
            <h3>Le mot de passe doit contenir les éléments suivants :</h3>
            <p id="lettre" class="invalid">Une lettre <b>minuscule</b></p>
            <p id="majuscule" class="invalid">Une lettre <b>majuscule</b></p>
            <p id="nombre" class="invalid">Un <b>numéro</b></p>
            <p id="caratere" class="invalid"><b>Un caractère</b> spécial</p>
            <p id="taille" class="invalid"><b>8 caractères</b> minimum</p>
        </div>
    </div>
    <script>
        var myInput = document.getElementById("password");
        var letter = document.getElementById("lettre");
        var capital = document.getElementById("majuscule");
        var number = document.getElementById("nombre");
        var length = document.getElementById("taille");
        var caractere = document.getElementById("caratere");

        //Quand je focus l'input, le block s'affiche
        myInput.onfocus = function() {
            document.getElementById("container-condition").style.display = "block";
        }

        // Quand je sors de l'input, le block ne s'affiche plus
        myInput.onblur = function() {
            document.getElementById("container-condition").style.display = "none";
        }

        // Quand l'utilisateur tape dans l'input
        myInput.onkeyup = function() {

            // Validation de lettre minuscule
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validation de lettre majuscule
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validation d'un chiffre
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validation de 8 caractères minimum
            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }

            // Validation d'un caractère spécial
            var caractereSpecial = /[$&+,:;=?@#|'<>.^*()%!-]$/g;
            if (myInput.value.match(caractereSpecial)) {
                caractere.classList.remove("invalid");
                caractere.classList.add("valid");
            } else {
                caractere.classList.remove("valid");
                caractere.classList.add("invalid");
            }

        }

        // Fonction pur voir si l'input password_confirm est identique au password
        function confirm() {
            var mdp = document.getElementById("password").value;
            var mdpConfirm = document.getElementById("password_confirm").value;

            if (mdp != mdpConfirm) {
                console.log("Les mots de passe ne corresponde pas");
                return false;
            } else {
                console.log("Les mots de passe corresponde");
                return false;
            }
        }
    </script>
</body>

</html>