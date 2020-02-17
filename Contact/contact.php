<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="contact-style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="../logo-marin.ico">
    <title>Contact</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


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
                    <a class="nav-link" href="../Recommendations/recommendations.html">Recommendations</a>
                </li>
            </ul>
        </div>
    </div>
    <form id="mail">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" class="form-control" placeholder="Full name" name="name">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
        </div>
        <a id="envoyer" href="Remerciements/remerciements.html" class="text-white">
            Send
        </a>
    </form>

    <a href="https://github.com/Marinplt">
        <img id="logogit" src="../images/logo github.png" alt="Logo Github">
    </a>
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

    //connexion a la base de données
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=id12614685_contact;charset=utf8', 'id12614685_marin', '123456');
        /* $bdd = new PDO('mysql:host=localhost;dbname=contact;charset=utf8', 'root', ''); */
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    if ($_POST) {
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Message = $_POST['message'];

        //verification si une valeur n'est pas vide
        if (!empty($Name) and !empty($Email) and !empty($Message)) {
            //envoie des valeur dans la BDD
            $bdd->query('INSERT INTO Formulaire (Nom, Email, Message) VALUES("' . $Name . '", "' . $Email . '", "' . $Message . '")') or die('Erreur: ' . mysql_error());
            $pop = 'Votre formulaire a bien été envoyé';
            echo '<script type="text/javascript">window.alert("' . $pop . '");</script>';
        }
        //si un valeur est vide envoie d'une erreur
        else {
            $erreur = 'Erreur, il manque des valeurs';
            echo '<script type="text/javascript">window.alert("' . $erreur . '");</script>';
        };
    };
    ?>
</body>

</html>