<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="recommendations.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="../logo-marin.ico">
    <title>Recommendations</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>


    <div id="header">
        <img id="logo" src="../images/logo marin.png" alt="Logo Marin Pollet">
        <div id="menu">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link" href="../index.html">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Experience/experience.html">Expérience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Parcours/parcours.html">Parcours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Compétences/competences.html">Compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Contact/contact.php">Contact</a>
                </li>
                <li id="avis" class="nav-item">
                    <a class="nav-link" href="../Recommendations/recommendations.php">Recommendations</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/abstract_grey.jpg" class="d-block w-100" alt="fond abstrait gris">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $reponse['name']; ?></h5>
                    <p><?php echo $reponse['message']; ?></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/abstract.jpg" class="d-block w-100" alt="fond abstrait gris & jaune">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $reponse['name']; ?></h5>
                    <p><?php echo $reponse['message']; ?></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/abstract_yellow.jpg" class="d-block w-100" alt="fond abstrait jaune">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $reponse['name']; ?></h5>
                    <p><?php echo $reponse['message']; ?></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="footer" class="fixed-bottom">
        <a href="../index.html">
            <img id="logofooter" src="../images/logo M blanc.png" alt="Logo M Marin Pollet">
        </a>
        <a href="https://www.linkedin.com/in/marin-pollet-30b89b196">
            <img id="linkedin" src="../images/linkedin.png" alt="Logo Linkedin">
        </a>
        <a href="https://www.campus.academy/">
            <img id="campusacademy" src="../images/LOGO_CAMPUS_ACADEMY.png" alt="Logo Campus Academy">
        </a>
    </div>
    <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=id12614685_contact;charset=utf8', 'id12614685_marin', '123456');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
        $reponse = $bdd->query('SELECT name, message FROM formulaire LIMIT 0, 3');

        $reponse->closeCursor();
    ?>
</body>

</html>