<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/37dedd31fc.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../images/logo M blanc.png"/>
    <title>Contact</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <div class="header">
        <img class="logo" src="../images/logo marin.png" alt="Logo Marin Pollet">
        <div class="menu">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item ubuntu">
                    <a class="nav-link" href="../index.html">Accueil</a>
                </li>
                <li class="nav-item ubuntu">
                    <a class="nav-link" href="../Experience/experience.html">Expérience</a>
                </li>
                <li class="nav-item ubuntu">
                    <a class="nav-link" href="../Parcours/parcours.html">Parcours</a>
                </li>
                <li class="nav-item ubuntu">
                    <a class="nav-link" href="../Compétences/competences.html">Compétences</a>
                </li>
                <li class="nav-item ubuntu">
                    <a class="nav-link" href="../Contact/contact.php">Contact</a>
                </li>
                <li class="nav-item ubuntu">
                    <a class="nav-link" href="../Recommandations/recommandations.php">Recommandations</a>
                </li>
            </ul>
        </div>
    </div>
    <form method="post" class="mail">
        <p>
            <!-- nom et prénom -->
            <label for="prenom"></label>
            <input class="formulaire nom" type="text" name="Name" placeholder="Nom et Prénom" autofocus required />
        </p>
        <p>
            <!-- email -->
            <label for="email"></label>
            <input class="formulaire email" type="email" name="Email" placeholder="Adresse email" autofocus required />
            <!-- mentions légales -->
            <p>Nous n'utiliserons jamais votre adresse email sans votre accord. <a href="../mentions_legales.html">Mentions légales.</a></p>
        </p>
        <p>
            <!-- type de message -->
            <label for="type">Précisez Recommandation ou Message.</label>
            <input class="formulaire type" type="text" name="Type" placeholder="Recommandation / Message" autofocus required />
        </p>
        <p>
            <!-- message -->
            <textarea class="formulaire message" name="Message" placeholder="Message" rows="5" cols="70" autofocus required></textarea>
        </p>
        <input type="submit" value="Envoyer" class="envoyer">
        <p class="ubuntu mt-3">Téléchargez mon cv ici : </p>
        <a class="cv_download" href="../Documents/CV_POLLET.pdf" download="CV Pollet Marin">
            <img class="cv_image" src="../images/download-logo.png" alt="logo download">
        </a>
    </form>

    <div class="footer fixed-bottom">
        <a href="../index.html">
            <img class="logofooter" src="../images/logo M blanc.png" alt="Logo M Marin Pollet">
        </a>
        <a href="https://www.linkedin.com/in/marin-pollet-30b89b196">
            <img class="linkedin" src="../images/linkedin.png" alt="Logo Linkedin">
        </a>
        <a href="https://www.campus.academy/">
            <img class="campusacademy" src="../images/LOGO_CAMPUS_ACADEMY.png" alt="Logo Campus Academy">
        </a>
        <a href="https://github.com/Marinplt">
            <img class="logogit" src="../images/logo github.png" alt="Logo Github">
        </a>
    </div>

    <?php
    //connexion a la base de données

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=id12614685_contact;charset=utf8', 'id12614685_marin', '123456');
        // $bdd = new PDO('mysql:host=localhost;dbname=contact;charset=utf8', 'root', ''); UTILISE POUR LE LOCAL
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    if ($_POST) {
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Type = $_POST['Type'];
        $Message = $_POST['Message'];

        //verification si une valeur n'est pas vide
        if (!empty($Name) and !empty($Email) and !empty($Message) and !empty($Type)) {
            //envoie des valeur dans la BDD
            $bdd->query('INSERT INTO formulaire (name, email, message, type) VALUES("' . $Name . '", "' . $Email . '", "' . $Message . '", "' . $Type . '")') or die('Erreur:');
            $pop = "Merci pour votre message ! \n
            Si vous avez coché la case Recommandation, votre message risque d'être affiché dans la page Recommandation. \n
            Si vous ne voulez pas être affiché contactez moi via mon mail : marinplt@gmail.com";
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