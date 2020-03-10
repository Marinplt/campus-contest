<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="recommandations.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../logo-marin.ico"/>
    <title>Recommandations</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="../Recommandations/recommandations.php">Recommendations</a>
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
                <img src="../images/space1.jpg" class="d-block w-100" alt="espace bleuté">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php name1(); ?></h5>
                    <p><?php message1(); ?></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/space2.jpg" class="d-block w-100" alt="fond abstrait gris & jaune">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php name2(); ?></h5>
                    <p><?php message2(); ?></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/space3.jpg" class="d-block w-100" alt="fond abstrait jaune">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php name3(); ?></h5>
                    <p><?php message3(); ?></p>
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
        function name1(){ 
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=id12614685_contact;charset=utf8', 'id12614685_marin', '123456');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            $reponse = $bdd->query('SELECT name FROM formulaire');
            
            $donnees = $reponse->fetch();

            echo$donnees['name'];
            
            $reponse->closeCursor();
        }
        function name2(){ 
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=id12614685_contact;charset=utf8', 'id12614685_marin', '123456');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            $reponse = $bdd->query('SELECT name, id FROM formulaire WHERE id = 2');
            
            $donnees = $reponse->fetch();

            echo$donnees['name'];
        
            $reponse->closeCursor();
        }
        function name3(){ 
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=id12614685_contact;charset=utf8', 'id12614685_marin', '123456');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            $reponse = $bdd->query('SELECT name, id FROM formulaire WHERE id = 3');
            
            $donnees = $reponse->fetch();

            echo$donnees['name'];

            $reponse->closeCursor();
        }
        function message1(){
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=id12614685_contact;charset=utf8', 'id12614685_marin', '123456');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            $reponse = $bdd->query('SELECT message FROM formulaire');

            $donnees = $reponse->fetch();

            echo$donnees['message'];

            $reponse->closeCursor();
        }
        function message2(){
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=id12614685_contact;charset=utf8', 'id12614685_marin', '123456');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            $reponse = $bdd->query('SELECT message, id FROM formulaire WHERE id = 2');

            $donnees = $reponse->fetch();

            echo$donnees['message'];

            $reponse->closeCursor();
        }
        function message3(){
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=id12614685_contact;charset=utf8', 'id12614685_marin', '123456');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            $reponse = $bdd->query('SELECT message, id FROM formulaire WHERE id = 3');

            $donnees = $reponse->fetch();

            echo$donnees['message'];

            $reponse->closeCursor();
        }
    ?>
</body>

</html>