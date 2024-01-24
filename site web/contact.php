<!-- utile ? -->

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simandré</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="./image/logo.png"><!-- favicon -->
</head>

<body class="bg-grey inter"> <!-- police + fond -->
    <header class="d-flex justify-content-center">
        <nav class="navbar navbar-expand-lg bg-whigre container-lg d-flex justify-content-center mt-5 rounded-pill">
            <!-- navbar -->
            <div class="d-flex justify-content-end">
                <button class="navbar-toggler d-lg-none d-flex justify-content-end" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <img class="navbar-toggler-icon" src="./image/burger-bar.png" alt="Menu Icon">
                </button>
            </div>
            <img class="w-15 rounded-pill none" src="./image/logo.png" alt="logo">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav w-100 d-flex justify-content-center">
                    <b class="w75 d-flex justify-content-between flexres">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.html">Accueil</a>
                            <!-- page d'acceuil -->
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="./capteur.html">Capteur</a>
                            <!-- page de l'ensemble des capteurs -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./map.html">Carte</a>
                            <!-- page de la carte de l'école -->
                        </li>

                        <li class="nav-item">
                            <?php if(isset($_SESSION['user'])) { ?>
                                <a class="nav-link active" aria-current="page" href="./index.php">Profil</a>
                                <!-- page profil -->
                            <?php } else { ?>
                                <a class="nav-link active" aria-current="page" href="./login.php">Connexion</a>
                                <!-- page connexion -->
                            <?php } ?>
                        </li>
                    </b>
                </ul>
            </div>
        </nav>
    </header>

    <div class="bg-white m-4 s-20"><!-- debut de la page -->

            <div class="row p-5">
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </form>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail2" class="form-label">Adresse email</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword2">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Confirmation du mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword2">
                        </div>
                        <button type="submit" class="btn btn-primary">Créer un compte</button>
                    </form>
                </div>
            </div>
        </div>
            <footer class="bg-white pb-1">

                <div class="container-fluid d-flex flex-wrap align-items-center justify-content-between footer-block">
                    <!-- réseaux de l'entreprise -->
                    <div>
                        <a href="">
                            <img src="./image/logo.png" alt="logo" class="pb-3" style="width: 240px">
                        </a>
                    </div>

                <div class="d-flex flex-wrap gap-3 align-items-center justify-content-center m0333">
                    <a href="https://www.instagram.com/" target="_blank">
                        <img src="./image/insta.png" alt="instagram" class="w60">
                    </a>

                    <a href="https://www.github.com/" target="_blank">
                        <img src="./image/github.png" alt="github" class="w60">
                    </a>

                    <a href="https://twitter.com/" target="_blank">
                        <img src="./image/twitter.png" alt="twitter" class="w60">
                    </a>

                    <a href="https://www.youtube.com/" target="_blank">
                        <img src="./image/youtube.png" alt="youtube" class="w60">
                    </a>
                </div>
                <!--  <div class="col vl d-flex justify-content-center none"></div>
            <div class="col-lg"></div> -->

                <div class="vr none mt-3"></div>

                <!-- sponsor de l'entreprise -->
                <div class="d-flex flex-wrap gap-3 align-items-center justify-content-center mx-5 m0333">
                    <a href="https://www.tesla.com/" target="_blank"><img src="./image/tesla.png" class="w60"
                            alt="sponsor Tesla"></a>

                    <a href="https://www.lachainemeteo.com/" target="_blank"><img src="./image/chaine_météo.png"
                            class="w60" alt="sponsor la chaine météo"></a>

                    <a href="https://www.github.com/" target="_blank"><img src="./image/github.png" class="w60"
                            alt="sponsor github"></a>

                    <a href="https://www.paris2024.org/" target="_blank"><img src="./image/JO.png" class="w60"
                            alt="sponsor JO 2024"></a>
                </div>

                <div>
                    <p><a href="./index.html" class="link-dark link-underline link-underline-opacity-0">Mentions
                            légales</a></p>
                    <p><a href="./index.html" class="link-dark link-underline link-underline-opacity-0">Termes de
                            Vente</a></p>
                </div>


            </div>
            <p class="mb-0 pt-3 text-center s-15">Copyright 2024 - Simandré</p>

        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>

</html>