<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link type="text/css" rel="stylesheet" href="./css/style.css">
</head>
<body class="bodyflex">

    <header>
        <nav class="navbar">
            <div class="dropdown">
                Projets
                <div class="dropdown-content">
                    <a href="./projet1.html">Gestion de stage</a>
                    <a href="./projet2.html">Base de données Jet-ski</a>
                    <a href="./projet3.html">Pierre feuille ciseaux</a>
                    <a href="./projet4.html">ArtistBot</a>
                </div>
            </div>
            <a href="./site.html" class="nav-link">Page principale</a>
            <a href="./parcours.html" class="nav-link">Cursus Scolaire</a>
            <!--<a href="./formulaire.php" class="nav-link">Contact</a> -->
            <a href="./images/cv_damien_ballerat.pdf" download="CV_Damien_Ballerat.pdf" class="nav-link">Télécharger mon CV</a>
        </nav>
    </header>

    <main>
    <section class="warning">
            <article>
                <p>
                    /!\ ATTENTION /!\ <br>
                    Ce formulaire est un formulaire de test, je n'ais pas accès aux réponses <br>
                    Veuillez me contacter via mail : damien.ballerat@etu.uca.fr
                </p>
            </article>
    </section>
        <section class="form">
            <form action="./php/formulaire.php" method="POST">
                <div>
                    <label for="name">Nom du visiteur</label>
                    <input type="text" id="name" name="name" placeholder="Nom" required/>
                </div>
                <div>
                    <label for="email">Votre email</label>
                    <input name="email" id="email" type="email" placeholder="email@example.com" required/>
                </div>
                <div>
                    <label for="n_Tel">Votre numéro (facultatif)</label>
                    <input name="n_Tel" id="n_Tel" placeholder="+33 X XX XX XX XX" type="tel"/>
                </div>
                <div>
                    <label for="motif">Raison du contact</label>
                    <select name="motif" id="motif">
                        <option value="" hidden selected disabled>Motif du contact</option>
                        <option value="pro">Professionnel</option>
                        <option value="perso">Personnel</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div>
                    <label for="message">Message du contact</label> 
                    <textarea name="message" id="message" placeholder="Ecrivez ici" required></textarea>
                </div>
                <div>
                    <label for="envoyer">Envoyer le formulaire</label>
                    <input name="envoyer" type="submit" id="envoyer" value="Envoyer">
                </div>
                <div>
                    <label for="reset">Reset</label>
                    <input name="reset" type="reset" id="reset">
                </div>
            </form>

            <div>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    include './php/formulaire.php';
                }
                ?>
            </div>
        </section>
    </main>

</body>
</html>
