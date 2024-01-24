<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simandré</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="./image/logo-sans-nom.png"><!-- favicon -->
</head>

<body class="bg-grey inter"> <!-- police + fond -->
    <?php
    session_start(); //démarre la session
    $current_page = basename($_SERVER['REQUEST_URI']); //récupère le nom de la page actuelle
    function loadClass(string $class): void //appel toutes les pages avec le mot "controller" ou "entity"
    {
        if (str_contains($class, "Controller")) {
            require "./Controller/$class.php";
        } else {
            require "./Entity/$class.php";
        }
    }
    spl_autoload_register("loadClass");

    $userController = new UserController();

    ?>
    <header class="d-flex justify-content-center">
        <nav class="navbar navbar-expand-lg bg-whigre container-lg d-flex justify-content-center mt-5 rounded-pill">
            <!-- navbar -->
            <div class="d-flex justify-content-end">
                <button class="navbar-toggler d-lg-none d-flex justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <img class="navbar-toggler-icon" src="./image/burger-bar.png" alt="Menu Icon">
                </button>
            </div>
            <img class="w-15 rounded-pill none" src="./image/logo.png" alt="logo">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav w-100 d-flex justify-content-center">
                    <b class="w75 d-flex justify-content-between flexres">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" <?php echo ($current_page == 'index.php') ? 'aria-current="page"' : ''; ?> href="./index.php">Accueil</a>
                            <!-- page d'acceuil -->
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == 'capteur.php') ? 'active' : ''; ?>" <?php echo ($current_page == 'capteur.php') ? 'aria-current="page"' : ''; ?> href="./capteur.php">Capteur</a>
                            <!-- page de l'ensemble des capteurs -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == 'map.php') ? 'active' : ''; ?>" <?php echo ($current_page == 'map.php') ? 'aria-current="page"' : ''; ?> href="./map.php">Carte</a>
                            <!-- page de la carte de l'école -->
                        </li>
                        <?php
                        if ($_SESSION && $_SESSION["nomUser"] && $_SESSION["userId"]) : //vérifie sur l'utilisateur est connecté pour adapter le header
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="./disconnect.php">Se déconnecter</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="./creationCompte.php">Créer un compte</a>
                            </li>
                        <?php endif ?>
                    </b>
                </ul>
            </div>
        </nav>
    </header>