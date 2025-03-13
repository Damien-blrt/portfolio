<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link type="text/css" rel="stylesheet" href="../css/style.css">
</head>
<?php

$errors = [];
$successMessage = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  

 
    if (empty($_POST['name'])) {
        $errors[] = 'Le champ "Nom du visiteur" est obligatoire.';
    } else {
        $name = $_POST['name'];
    }


    if (empty($_POST['email'])) {
        $errors[] = 'Le champ "Votre email" est obligatoire.';
    } else {
        $email = $_POST['email'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'L\'adresse e-mail n\'est pas valide.';
        }
    }


    if (!empty($_POST['n_Tel'])) {
        $tel = $_POST['n_Tel'];
        if (!preg_match("/^\+33\s[1-9]\s\d{2}\s\d{2}\s\d{2}\s\d{2}$/", $tel)) {
            $errors[] = 'Le numéro de téléphone n\'est pas au bon format.';
        }
    }


    if (empty($_POST['motif'])) {
        $errors[] = 'Veuillez sélectionner un "Motif du contact".';
    } else {
        $motif = $_POST['motif'];
    }


    if (!empty($_POST['horaire'])) {
        $horaire = $_POST['horaire'];
    } else {
        $horaire = "Non précisé";
    }
    


    if (!isset($_POST['radio_btn'])) {
        $errors[] = 'Veuillez indiquer si c\'est votre première demande.';
    } else {
        $radio = $_POST['radio_btn'];
    }


    if (empty($_POST['message'])) {
        $errors[] = 'Le champ "Message du contact" est obligatoire.';
    } else {
        $message = $_POST['message'];
    }


    if (empty($errors)) {
        $successMessage .= "<div class='success-message'>";
        $successMessage .= "Merci pour votre demande. Voici un récapitulatif de vos informations :<br>";
        $successMessage .= "Nom : $name<br>";
        $successMessage .= "Email : $email<br>";
        if (isset($tel)) {
            $successMessage .= "Téléphone : " . $tel . "<br>";
        } else {
            $successMessage .= "Téléphone : Non précisé<br>";
        }        
        $successMessage .= "Motif : $motif<br>";
        $successMessage .= "Horaire : $horaire<br>";
        if (isset($radio)) {
            if ($radio == "premiere_demande") {
                $successMessage .= "Première demande : Oui<br>";
            } else {
                $successMessage .= "Première demande : Non<br>";
            }
        } else {
            $successMessage .= "Première demande : Non spécifié<br>";
        }        
        $successMessage .= "</div>";
        $successMessage .= "Message : $message<br>";


        echo $successMessage;
    } else {
        echo "<div class='error-message'>";
        echo "Des erreurs sont survenues :\n";
        foreach ($errors as $error) {
            echo "- $error\n";
        }
        echo "Veuillez revenir en arrière et corriger les erreurs.\n</div>";
    }
}
?>

</html>


















