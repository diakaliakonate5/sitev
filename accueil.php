<?php 

require_once 'databases/db_connect.php';
$personnages = $db->getPersonnage();


?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.min.js">

        <link rel="stylesheet" href="styles/accueil.css">
        <title>Site vitrine</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-light navbar-expand-md container fixed-top">
                <a href="#" class="navbar-brand" style="color: white;">Site vitrine</a>
                <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#toggleMobileMenu"
                    aria-controls="toggleMobileMenu"
                    aria-expanded="false"
                    aria-label="toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="toggleMobileMenu">
                    <ul class="navbar-nav text-center ms-auto">
                        <li class="nav-item"><a href="#home" class="nav-link">Accueil</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contactez-nous</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" id="home">
            <div class="text-white">
                <h2>Découvrez </h2>
                <a href="#inov"><button type="button" class="btn btn-danger">Découvrez</button></a>
            </div>
        </div>
       <?php foreach($personnages as $personnage): ?>
     <a href="detail.php?personnageId=<?php echo ( $personnage['personnageId'] )?>" >
        <div id="inov" style="background-color:aqua;">
            <div class="card-group">
                <div class=" " style="width: 18rem;">
            <img class="rounded-circle" src="images\s.jpg" alt="steves jobs" width="150px" height=150px>
                <div class="card-body">
                <h5 class="card-title">Donald Knuth</h5>
                <p class="card-text">Some quick example text to build on.</p>
                <!-- <a href="#" class="btn btn-primary">Plus</a> -->
            </div>
        </div>
        </a>
        <div class=" " style="width: 18rem;">
            <img class="rounded-circle" src="images\s.jpg" alt="steves jobs" width="150px" height=150px>
                <div class="card-body">
                <h5 class="card-title"><?= $personnage['nom_complet'] ?></h5>
                <p class="card-text">Some quick example text to build on the .</p>
                <a href="#" class="btn btn-primary">Plus</a>
            </div>
        </div>
       <?php endforeach ?>
   


            
        
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>