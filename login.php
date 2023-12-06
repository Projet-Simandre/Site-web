<?php
require("./header.php"); //appel de la page header.php

if ($_POST && $_POST["mail"] && $_POST["password"]) { //envoie des données vers la base de données
    $user = $userController->getByMail($_POST["mail"]);
    if (password_verify($_POST["password"], $user->getPassword())) {
        $_SESSION["nomUser"] = $user->getNomUser();
        $_SESSION["userId"] = $user->getId();
        echo "<script>window.location.href='./index.php'</script>";
    } else {
        echo "Il y a eu une erreur lors de la connection à votre compte";
    }
}
?>
<body>
<h2>Connectez-vous</h2>

<form class="mx-5" method="POST"> <!-- formulaire d'identification -->
    <label for="mail" class="form-label">Adresse mail</label>
    <input type="mail" name="mail" id="mail" placeholder="exemple@exemple.com" minlength="10" maxlength="120" class="form-control">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" name="password" id="password" placeholder="MotDePasse1234!" minlength="8" maxlength="70" class="form-control">
    <input type="submit" value="Me connecter" class="btn btn-primary mt-2">
</form>


<h2>Créer un compte</h2>
<a href="./creationCompte.php" class="btn btn-primary mt-2">Cliquer ici !</a>

<?php

// Inclure le fichier du pied de page
include 'footer.php';
?>