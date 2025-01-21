<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link type="text/css" rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <nav>
            <span class="navh3a2">
                Media
                <span class="videophoto">
                    <a href="./galerie.html"> 
                    Galerie photo
                    </a>  
                    <a href="./video.html">
                    Galerie vidéo
                    </a>
                </span>
            </span>
            <a href="./site.html" class="navh3a"> 
                Page principale
            </a>  
            <a href="./planning.html" class="navh3a">
                Planning
            </a>
            <a href="./parcours.html" class="navh3a">
                Parcours Scolaire 
            </a>
            <a href="./formulaire.php" class="navh3a">
                Contact
            </a>
        </nav>
    </header>
    <main>
        <section class="form">
            <form action="../php/formulaire.php" method="POST">
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
                    <label for="horaire">Créneau horaire</label>
                    <input name="horaire" id="horaire" placeholder="jour + horaire" type="datetime-local"/>
                </div>
                <div>
                    <label for="radio">Est-ce la première demande ?</label>
                    <span>Oui</span>
                    <input type="radio" name="radio_btn" id="radio" value="premiere_demande" checked>
                    <span>Non</span>
                    <input type="radio" name="radio_btn" id="radio" value="demande_ulterieur">
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
                    include '../php/formulaire.php';
                }
                ?>
            </div>
        </section>
    </main>
</body>
</html>
