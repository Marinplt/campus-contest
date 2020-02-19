<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="contact-style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/37dedd31fc.js" crossorigin="anonymous"></script>
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
                    <a class="nav-link" href="../Recommandations/recommandations.php">Recommandations</a>
                </li>
            </ul>
        </div>
    </div>
    <form method="post" id="mail">
        <p>
            <label for="prenom"></label>
            <input class="formulaire" type="text" name="Name" id="nom" placeholder="Nom et Prénom" autofocus required />
        </p>
        <p>
            <label for="email"></label>
            <input class="formulaire" type="email" name="Email" id="email" placeholder="Adresse email" autofocus required />
            <p>Nous n'utiliserons jamais votre adresse email sans votre accord. <a href="../mentions_legales.html">Mentions légales.</a></p>
        </p>
        <p>
            <textarea class="formulaire" id="message" name="Message" placeholder="Message" rows="5" cols="70" autofocus required></textarea>
        </p>
        <input type="submit" value="Envoyer" id="envoyer">
        <p class="ubuntu mt-3">Téléchargez mon cv ici : </p>
        <a id="cv_download" href="../Documents/CV_POLLET.pdf" download="CV Pollet Marin">
            <img id="cv_image" src="../images/download-logo.png" alt="logo download">
        </a>
    </form>

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
        <a href="https://github.com/Marinplt">
            <img id="logogit" src="../images/logo github.png" alt="Logo Github">
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
        $Message = $_POST['Message'];

        //verification si une valeur n'est pas vide
        if (!empty($Name) and !empty($Email) and !empty($Message)) {
            //envoie des valeur dans la BDD
            $bdd->query('INSERT INTO formulaire (name, email, message) VALUES("' . $Name . '", "' . $Email . '", "' . $Message . '")') or die('Erreur:');
            $pop = "Merci pour votre avis ! \n
            Votre message risque d'être affiché dans la page Recommandation. \n
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