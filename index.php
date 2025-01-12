<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (!isset($_POST['pseudo']) || empty($_POST['pseudo'])) {
        echo "Le champ pseudo est obligatoire.<br>";
        echo '<a href="formulaire.php">Retourner au formulaire</a>';
        exit;
    }

    if (!isset($_POST['pswd']) || empty($_POST['pswd'])) {
        echo "Le champ mot de passe est obligatoire.<br>";
        echo '<a href="formulaire.php">Retourner au formulaire</a>';
        exit;
    }

   
    $pseudoAttendu = "admin";
    $mdpAttendu = "1234";

    if ($_POST['pseudo'] == $pseudoAttendu && $_POST['pswd'] == $mdpAttendu) {
        echo "Connexion réussie ! Bienvenue, " . htmlspecialchars($_POST['pseudo']) . ".";
    } else {
        echo "Pseudo ou mot de passe incorrect.<br>";
        echo '<a href="formulaire.php">Retourner au formulaire</a>';
    }
} else {
    
    echo "Veuillez soumettre le formulaire.<br>";
    echo '<a href="formulaire.php">Retourner au formulaire</a>';
}
